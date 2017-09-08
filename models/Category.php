<?php

namespace app\models;
use yii\db\Activerecord;



class Category extends Activerecord {


	public static function tableName() {
		return 'category';
	}

	public function getArticles () {
		return $this->hasMany(Articles::classname(), ['category_id' => 'id']);
	}

	public function getOrders () {
		return $this->hasMany(Articles::classname(), ['category_id' => 'id']);
	}
}


?>