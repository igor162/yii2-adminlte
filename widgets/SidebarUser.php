<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 24.03.17
 * Time: 10:14
 */

namespace igor162\adminlte\widgets;

use yii\bootstrap\Widget;
use yii\helpers\Html;

class SidebarUser extends Widget
{
    public $username;
    public $userimg;

    public function init()
    {
        parent::init();

        if ($this->username === null) {
            $this->username = 'Your Username';
        }

        if ($this->userimg === null) {
            $this->userimg = 'https://cdn0.iconfinder.com/data/icons/user-pictures/100/matureman1-2-128.png';
        }
    }

    public function run()
    {
        return '<div class="user-panel">
            <div class="pull-left image">
                <img alt="User Image" class="img-circle" src="'.$this->userimg.'">
            </div>
            <div class="pull-left info">
                <p>'.Html::encode($this->username).'</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>';
    }

}