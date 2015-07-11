<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%caption}}".
 *
 * @property integer $id
 * @property string $code
 * @property string $caption
 */
class Caption extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%caption}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code'], 'string', 'max' => 20],
            [['caption'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'caption' => '首都',
        ];
    }

    /**
     * @inheritdoc
     * @return CaptionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CaptionQuery(get_called_class());
    }
}
