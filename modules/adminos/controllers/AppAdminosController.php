<?php

namespace app\modules\adminos\controllers;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
class AppAdminosController extends Controller {

	public function behaviors() {
		return [
			'access' => [
				'class' => AccessControl::className(),
				'rules' => [
					[
						'allow' => true,
						'roles' => ['@'],
					]
				],
			],
		];
	}

	protected function setMeta($title = null, $keywords = null, $description = null) {

		$this->view->title = $title;
		$this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
		$this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
	}
}
?>