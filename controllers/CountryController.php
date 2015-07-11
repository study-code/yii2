<?php
/**
 * User: mo
 * Date: 2015-7-6
 * Time: 22:53
 */

namespace app\controllers;

use app\models\Country;
use yii\web\Controller;
use app\models\CountrySearch;

class CountryController extends Controller
{

    function actionIndex()
    {
        $countrySearch = new CountrySearch();
        $dataProvider = $countrySearch->search($_GET);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'countrySearch' => $countrySearch,
        ]);
    }

    function actionTest()
    {
        $country = new Country();
        //var_dump($country);
        $country->on(Country::EVENT_INIT, function () {
            echo 'hello';
        });
        $this->trigger(Country::EVENT_INIT);
    }

    function person_say_hello($event)
    {
        echo $event->data;
    }

    function actionCaption()
    {
        $countrys = Country::find()->limit(12)->with('caption')->all();
        foreach ($countrys as $country) {
            $caption = $country->caption;
            var_dump($caption);
        }
        return $this->render('caption');
        //var_dump($caption);
    }

    function actionJoin()
    {
        $captions = Country::find()->joinWith('caption')->all();
        var_dump($captions);
        return $this->render('caption');
    }

    function actionDb()
    {
        echo \Yii::getAlias('@Ext');
        exit;
        $db2 = \Yii::$app->db2;
        var_dump($db2);
    }



}