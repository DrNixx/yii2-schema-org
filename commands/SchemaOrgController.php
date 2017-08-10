<?php
/**
 * Created by PhpStorm.
 * User: karlen
 * Date: 10.08.2017
 * Time: 10:15
 */

namespace simialbi\yii2\schemaorg\commands;


use yii\base\Exception;
use yii\console\Controller;

/**
 * Class SchemaOrgController
 *
 * @package simialbi\yii2\schemaorg\commands
 *
 * @property \simialbi\yii2\schemaorg\Module $module
 */
class SchemaOrgController extends Controller {
	public $defaultAction = 'generate';

	/**
	 *
	 */
	public function actionGenerate() {
		$tree = $this->loadTree();

		$this->stdout("Generating Models...\n");
		$this->generateModelsFromTree($tree);
	}

	protected function loadTree() {
		$source = $this->module->source;
		$this->stdout("Loading Thing tree from '{$source}'...\n");

		$dom = new \DOMDocument();
		if (!@$dom->loadHTMLFile($source)) {
			throw new Exception("Failed to load source: $source");
		}
		$xquery = new \DOMXPath($dom);
		$html   = $dom->saveHTML($xquery->query('//*[@id="thing_tree"]/ul')->item(0));

		return $this->parseTree($html);
	}

	protected function generateModelsFromTree(array $tree, $parent = null) {
		$matches   = [];
		$className = null;
		foreach ($tree as $item) {
			if (is_array($item)) {
				$this->generateModelsFromTree($item, $className);
			} elseif (is_string($item)) {
				if (preg_match('#<a href="([^"]+)">((?:[A-Z][a-z]+)+)</a>#', $item, $matches)) {
					$url       = $matches[1];
					$className = $matches[2];

					$this->stdout("Generate model '{$className}'\n");
					$this->generateModel($url, $className, $parent);
				}
			}
		}
	}

	protected function generateModel($url, $className, $parent = 'Model') {
		$sourceUrl = parse_url($this->module->source);
		$url       = $sourceUrl['scheme'].'://'.$sourceUrl['host'].$url;

		$this->stdout("Load properties from '{$url}'\n");

		$dom = new \DOMDocument();
		if (!@$dom->loadHTMLFile($url)) {
			$this->stderr("Failed to load source for '{$className}': $url\n");

			return false;
		}
		$xquery     = new \DOMXPath($dom);
		$list       = $xquery->query('//*[@id="mainContent"]/table[1]/tbody[2]/tr');
		$properties = [];

		foreach ($list as $item) {
			/* @var $item \DOMElement */
			if ((string) $item->attributes->getNamedItem('typeof')->nodeValue !== 'rdfs:Property') {
				continue;
			}

			$tdIndex  = 0;
			$property = [];
			foreach ($item->childNodes as $node) {
				/* @var $node \DOMElement */
				if ($node->nodeType === XML_TEXT_NODE) {
					continue;
				}

				if (strcasecmp($node->nodeName, 'th') === 0) {
					$property['name'] = trim($node->textContent);
				} elseif (strcasecmp($node->nodeName, 'td') === 0) {
					if ($tdIndex++ === 0) {
						$property['type'] = trim(implode('|', explode(' or ', trim($node->textContent))));
					} else {
						$property['description'] = trim($node->textContent);
					}
				}
			}

			$properties[] = $property;
		}

		$phpcode = $this->renderPartial('model-template', [
			'parent'     => $parent,
			'className'  => $className,
			'url'        => $url,
			'properties' => $properties
		]);

		echo $phpcode;
		exit;
	}

	/**
	 * Parse unordered list tree structure and returns as array
	 *
	 * @param string|\SimpleXMLElement $ul
	 *
	 * @return array|bool array tree or false
	 * @throws Exception
	 */
	private function parseTree($ul) {
		if (is_string($ul)) {
			if (!$ul = simplexml_load_string($ul)) {
				throw new Exception("Syntax error in UL/LI structure");
			}

			return $this->parseTree($ul);
		} elseif (is_object($ul)) {
			$output = [];
			foreach ($ul->li as $li) {
				foreach ($li->children() as $tag => $child) {
					/* @var $child \SimpleXMLElement */
					if (strcasecmp($tag, 'ul') === 0) {
						$output[] = $this->parseTree($child);
					} else {
						$output[] = $child->asXML();
					}
				}
			}

			return $output;
		}

		return false;
	}
}