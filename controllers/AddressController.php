<?php
namespace app\controllers;

use app\models\Address;
use yii\web\Controller;
use app\extensions\Common;

/**
 * User: mo
 * Date: 2015-7-12
 * Time: 22:15
 */
class AddressController extends Controller
{

    function actionIndex()
    {
        $address = Address::find()->setCache(true)->asArray()->one();
        Common::dump($address);
    }




}