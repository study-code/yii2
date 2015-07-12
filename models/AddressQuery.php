<?php

namespace app\models;

use yii\db\ActiveQuery;
use Yii;

/**
 * User: mo
 * Date: 2015-7-12
 * Time: 22:41
 */
class AddressQuery extends ActiveQuery
{
    public $isCache = false;

    public function setCache($status = false)
    {
        $this->isCache = $status;
        return $this;
    }

    /**
     * @inheritdoc
     * @return Country|array|null
     */
    public function one($db = null)
    {
        $memKey = 'mofei';
        $result = Yii::$app->cache->get($memKey);
        if ($this->isCache && !empty($result)) {
            return $result;
        } else {
            $result = parent::one($db);
            if (!empty($result)) {
                Yii::$app->cache->set($memKey,$result,5);
            }
            return $result;
        }

    }
}