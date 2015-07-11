<?php
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use app\models\Country;
use yii\db\Query;


//$dataProvider = new ActiveDataProvider([
//    'query' => Country::find(),
//    'pagination' => [
//        'pageSize' => 20,
//    ],
//]);

//$query = new Query();
//$dataProvider = new ActiveDataProvider([
//    'query' => $query->from('country'),
//    'pagination' => [
//        'pageSize' => 20,
//    ],
//]);

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $countrySearch,
]);