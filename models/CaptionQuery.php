<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Caption]].
 *
 * @see Caption
 */
class CaptionQuery extends \yii\db\ActiveQuery
{
    public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }

    /**
     * @inheritdoc
     * @return Caption[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Caption|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}