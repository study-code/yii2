<?php
namespace app\extensions\widgets;

use yii\base\Widget;
use yii\base\Model;
/**
 * Date: 2015-7-10
 * Time: 7:54
 */
class AttachWidget extends Widget
{

    public $model;
    public $attribute;

    public function init()
    {
        parent::init();
    }


    public function run()
    {
        return $this->render('attach');
    }
}