<?php

namespace app\controllers;
use app\models\Category;
use app\models\Articles;
use app\models\Order;
use Yii;

class SolutionController extends AppController
{

    public function actionIndex()
    {
        $session = Yii::$app->session;
        $session->open();
        $this->layout = 'page';
        $this->setMeta('Форма для заказа', 'какое-то описание', 'какие-то ключевики');
        
        $order = new Order; 

        $categories = Category::find()->all();
        if ($order->load(Yii::$app->request->post()) && $order->validate() && $order->save()) {
            // Yii::$app->session->setFlash('success', 'Ваш заказ принят. Менеджер вскоре свяжется с Вами. ');
            Yii::$app->mailer->compose('order', compact('order'))
                ->setFrom(['vlad_babin_2013@ukr.net' => 'ИНЖЕНЕРНЫЕ РЕШЕНИЯ'])
                ->setTo($order->email)
                ->setSubject('тут тема/название письма ' )
                ->send();
            Yii::$app->mailer->compose('order', compact('order'))
                ->setFrom(['vlad_babin_2013@ukr.net' => 'ИНЖЕНЕРНЫЕ РЕШЕНИЯ'])
                ->setTo(Yii::$app->params['adminEmail'])
                ->setSubject('тут тема/название письма ' )
                ->send();
            return $this->refresh();
        }

        return $this->render('solution', compact('order', 'categories'));

    }
}
