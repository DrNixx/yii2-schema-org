<?php
/**
 * @link https://github.com/simialbi/yii2-schema-org
 * @link https://github.com/drnixx/yii2-schema-org
 * @copyright Copyright (c) 2018 Nick Panteleeff
 * @copyright Copyright (c) 2017 Simon Karlen
 * @license MIT
 */

namespace onix\schemaorg;

use onix\schemaorg\helpers\JsonLDHelper;
use yii\base\BootstrapInterface;
use yii\web\View;

/**
 * Class Module
 *
 */
class Module extends \yii\base\Module implements BootstrapInterface {
	/**
	 * @var string the namespace that controller classes are in.
	 */
	public $controllerNamespace = 'onix\schemaorg\controllers';

	/**
	 * @var string source url
	 */
	public $source = 'http://schema.org/docs/full.html';

	/**
	 * @var boolean automatically add ld+json data for breadcrumbs
	 */
	public $autoCreate = false;

	/**
	 * @var boolean automatically render ld+json data at the end of body
	 */
	public $autoRender = false;

	/**
	 * @inheritdoc
	 */
	public function bootstrap($app) {
		if ($app instanceof \yii\console\Application) {
			$this->controllerNamespace = 'onix\schemaorg\commands';
		} else {
			if ($this->autoCreate) {
				\Yii::$app->view->on(View::EVENT_END_BODY, function () {
					JsonLDHelper::addBreadCrumbList();
				});
			}
			if ($this->autoRender) {
				\Yii::$app->view->on(View::EVENT_END_BODY, function () {
					JsonLDHelper::render();
				});
			}
		}
	}
}