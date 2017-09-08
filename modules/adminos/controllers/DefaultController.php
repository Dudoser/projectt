<?php

namespace app\modules\adminos\controllers;


/**
 * Default controller for the `admin` module
 */
class DefaultController extends AppAdminosController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
    	$this->setMeta('Админка');
        return $this->render('index');
    }
}
