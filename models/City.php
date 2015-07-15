<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * User: mo
 * Date: 2015-7-14
 * Time: 22:30
 */
class City extends ActiveRecord
{
    public static function getDb()
    {
        return Yii::$app->db2;
    }

    public function getCountry()
    {
        return $this->hasOne(Country::className(),['country_id'=>'country_id']);
    }

    public function getAddresses()
    {
        $query = $this->hasMany(Address::className(),['city_id'=>'city_id']);
        //var_dump($query);exit;
        return $this->hasMany(Address::className(),['city_id'=>'city_id']);
    }

    public function getDistrictAddress($district = 'Galicia')
    {
        return $this->hasMany(Address::className(), ['city_id'=>'city_id'])
            ->where('district =:district', [':district' => $district]);
    }
}