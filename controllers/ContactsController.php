<?php

namespace app\controllers;

use app\models\Contact;
use Yii;



class ContactsController extends AppController {

    public function actionIndex() {
		$this->layout = 'page';
		$this->setMeta('Выбор раздела', 'какое-то описание', 'какие-то ключевики');

		$contact = new Contact();

		if ($contact->load(Yii::$app->request->post()) && $contact->validate()) {
			Yii::$app->mailer->compose('contactLayout', compact('contact'))
                ->setFrom(['vlad_babin_2013@ukr.net' => 'ИНЖЕНЕРНЫЕ РЕШЕНИЯ'])
                ->setTo(Yii::$app->params['adminEmail'])
                ->setSubject('тут тема/название письма ' )
                ->send();
			return $this->refresh();
		}

		return $this->render('contacts', compact('contact'));
    }

}
