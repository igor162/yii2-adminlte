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

class SidebarSearch extends Widget
{
    public $placeholder;

    public function init()
    {
        parent::init();

        if ($this->placeholder === null) {
            $this->placeholder = 'Search';
        }
    }

    public function run()
    {
        return '<form class="sidebar-form" method="get" action="#">
            <div class="input-group">
                <input type="text" placeholder="'.Html::encode($this->placeholder).'..." class="form-control" name="q">
              <span class="input-group-btn">
                <button class="btn btn-flat" id="search-btn" name="search" type="submit">
                    <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>';
    }

}