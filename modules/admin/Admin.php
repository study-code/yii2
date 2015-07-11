<?php

namespace app\modules\admin;
use Yii;

class Admin extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
        Yii::setAlias('@adminasset','@app/modules/admin/assets/static/');
    }
}
