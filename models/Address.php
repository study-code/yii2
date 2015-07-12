<?php
namespace app\models;

use yii\db\ActiveRecord;

/**
 * User: mo
 * Date: 2015-7-12
 * Time: 22:31
 */
class Address extends ActiveRecord
{
    /**
     * @var bool $isCache 默认是否走缓存取数据
     */
    public $isCache = false;
    /**
     * @return 返回数据库db2实例
     */
    public static function getDb()
    {
        return \Yii::$app->db2;
    }

    public static function find()
    {
        return new AddressQuery(get_called_class());
    }

}
