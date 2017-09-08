<?php

namespace app\controllers;
use app\models\Category;
use app\models\Articles;
use Yii;
use yii\data\Pagination;


class ArticlesController extends AppController
{

    public function actionIndex($id)
    {
        $this->layout = 'page';


        $articles = Articles::find()->where(['category_id' => $id]);

        $query = Articles::find()->where(['category_id' => $id]);
		$pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
		$articless = $query->offset($pages->offset)->limit($pages->limit)->all();

		$metaCategory = Category::findOne($id);

        $this->setMeta('раздел | ' . $metaCategory->name, $metaCategory->keywords, $metaCategory->description);
        return $this->render('articles', compact('articles', 'articless', 'pages', 'metaCategory'));
    }

    public function actionSelect() {
    	$this->layout = 'page';
        $categorys = Category::find()->all();
    	$this->setMeta('Выбор раздела', 'какое-то описание', 'какие-то ключевики');
    	return $this->render('select', compact('categorys'));
    }

}
