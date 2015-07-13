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
use yii\db\Query;

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
        $db2 = \Yii::$app->db2;
        $rows = (new Query())->select('*')->from('country')->limit(10)->all($db2);

        $count = (new Query())->from('country')->count('*', $db2);//查询当前country表总数

        //select查询部分使用数组
        //$query = (new Query())->select(['country_id','country'])->from('country');
        //$command = $query->createCommand($db2);
        //echo $command->sql;//查看当前的SQL文件

        //列合并
        //$query = (new Query())->select(['CONCAT(country_id, country) AS country_full'])->from('country');
        //$command = $query->createCommand($db2);
        //echo $command->sql;

        //where andWhere filterWhere andFilterWhere orFilterWhere
        //$query = new Query();
        //$country_value = 'China';
        //$query->where(['country_id'=>23]);//此处不支持绑定
        //$query->andWhere(['like','country','']);

        //添加andWhere条件 不会移除条件中的空值
        //if ($country_value) {
        //$query->andWhere(['like', 'country', $country_value]);
        //}

        // filterWhere() 最大的区别是从提供的条件中移除空值
        //$query->filterWhere(['country'=>$country_value]);
        //$query->filterWhere(['like', 'country', $country_value]);
        //$query->orFilterWhere(['country'=>'Colombia']);

        //var_dump($query);exit;
        //$query->from('country');
        //$command = $query->createCommand($db2);
        //$result = $command->queryAll();
        //echo $command->sql;exit;
        //var_dump($result);exit;


        //批量查询
        //$query = (new Query())
        //    ->from('country')
        //    ->orderBy('country_id');

        //foreach ($query->batch(100,$db2) as $countries) {
        //    var_dump($countries);//第一次先取出100条数据，第二次在取出100条，不足100条的，直接显示
        //}

        //返回 yii\db\ActiveQuery 实例,并向AR实例里填充数据
        //$countries = Country::find()->indexBy('country_id')->all();
        //var_dump($countries);

        //返回 AR 总数
        //$count = Country::find()->count();
        //var_dump($count);


        
        return $this->render('test');
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