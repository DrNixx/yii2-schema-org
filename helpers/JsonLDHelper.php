<?php
/**
 * @link https://github.com/nirvana-msu/yii2-jsonld-helper
 * @link https://github.com/simialbi/yii2-schema-org
 * @link https://github.com/drnixx/yii2-schema-org
 * @copyright Copyright (c) 2018 Nick Panteleeff
 * @copyright Copyright (c) 2016 Alexander Stepanov
 * @copyright Copyright (c) 2017 Simon Karlen
 * @license MIT
 */

namespace onix\schemaorg\helpers;

use onix\schemaorg\models\BreadcrumbList;
use onix\schemaorg\models\ListItem;
use onix\schemaorg\models\Model;
use yii\base\InvalidArgumentException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\Url;
use Yii;

/**
 * Helper class for registering structured data markup in JSON-LD format
 *
 * @author Alexander Stepanov <student_vmk@mail.ru>
 * @author Simon Karlen <simi.albi@gmail.com>
 */
class JsonLDHelper {
	/**
	 * @var Model[] Keeps schema org models wich will be displayed on page
	 */
	private static $models = [];

	/**
	 * Adds BreadcrumbList schema.org markup based on the application view `breadcrumbs` parameter
	 */
	public static function addBreadCrumbList() {
		$view = Yii::$app->view;

		$breadcrumbs    = ArrayHelper::getValue($view->params, 'breadcrumbs', []);
		$breadcrumbList = new BreadcrumbList();
		if (!empty($breadcrumbs)) {
			$position = 1;
			foreach ($breadcrumbs as $breadcrumb) {
				$listItem           = new ListItem();
				$listItem->position = $position++;
				if (is_array($breadcrumb)) {
					$listItem->item = [
						'@id'  => Url::to(ArrayHelper::getValue($breadcrumb, 'url', ''), true),
						'name' => ArrayHelper::getValue($breadcrumb, 'label', '')
					];
				} else {
					$listItem->item = [
						'name' => $breadcrumb
					];
				}
				$breadcrumbList->itemListElement[] = $listItem;
			}
		}

		self::add($breadcrumbList);
	}

    /**
     * Add model to json+ld rendering queue
     *
     * @param Model $model
     * @param string $key
     */
	public static function add($model, $key = null) {
	    if (empty($key)) {
	        $key = md5(Json::encode($model));
        }

		self::$models[$key] = $model;
	}

	/**
	 * Renders ld+json data
	 */
	public static function render() {
		if (!empty(self::$models)) {
		    $parts = [];
			foreach (self::$models as $key => $model) {
				try {
                    $parts[] = Json::encode($model->toJsonLDArray());
				} catch (InvalidArgumentException $e) {
					$logger = Yii::$app->log->logger;
					$logger->log($e->getMessage(), $logger::LEVEL_ERROR);
				}
			}

			if (count($parts) > 0) {
                echo Html::script(implode(",\n", $parts), ['type' => 'application/ld+json'])."\n";
            }
		}
	}
}
