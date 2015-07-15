<?php
namespace app\controllers;

use app\models\Address;
use app\models\City;
use Yii;
use yii\web\Controller;
/**
 * User: mo
 * Date: 2015-7-14
 * Time: 22:27
 */
class CityController extends Controller
{

    function actionIndex()
    {
        //查询城市的关联国家
        //$city = City::findOne(1);
        //$country = $city->country;
        //var_dump($country);

        //findOne 已经返回了一条数据的对象
        //$city = City::findOne(1);
        //var_dump($city);exit;
        //$addresses = $city->getAddresses()->all();

        //关联查询返回的是 yii\db\ActiveQuery 的实例，如果像特性（如类属性）那样连接关联数据，
        //返回的结果是关联查询的结果，即 yii\db\ActiveRecord 的实例， 或者是数组，或者是 null ，取决于关联关系的多样性
        //还没搞懂这是为啥？？？？？
//        $addresses = $city->districtAddress;
//        var_dump($addresses);

        $addresses = City::find()->joinWith('country')->all();
        var_dump($addresses);


        return $this->render('index');
    }


}