<?php

namespace app\controllers;
use app\models\Category;
use app\models\Articles;
use Yii;


class ArticleController extends AppController
{

    public function actionIndex($id) {
        $this->layout = 'page';

        $article = Articles::findOne($id);
        $this->setMeta('Статья | ' . $article->title, $article->keywords, $article->description);
        return $this->render('article', compact('article'));
    }

}

?>
