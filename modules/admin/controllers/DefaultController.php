<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout = 'main';


    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTest()
    {
        echo \Yii::getAlias('@adminasset');
    }

    public function actionAsset(){
        return $this->render('asset');
    }
}
