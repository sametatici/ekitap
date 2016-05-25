<?php

namespace backend\modules\ekitap\controllers;

use yii\web\Controller;

/**
 * Default controller for the `ekitap` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionKitaplar()
    {
    	return $this->render('kitaplar');
    }
    public function actionKategori()
    {
    	return $this->render('kategori');
    }
}
