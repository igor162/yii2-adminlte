AdminLTE
========
AdminLTE backend theme asset bundle for Yii 2.0 Framework

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist igor162/yii2-adminlte "*"
```

or add

```
"igor162/yii2-adminlte": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \igor162\adminlte\widgets\Alert::widget(); ?>
<?= \igor162\adminlte\widgets\Box::widget(); ?>
<?= \igor162\adminlte\widgets\SidebarMenu::widget(); ?>
<?= \igor162\adminlte\widgets\SidebarSearch::widget(); ?>
<?= \igor162\adminlte\widgets\SidebarUser::widget(); ?>

<?= \igor162\adminlte\ColorCSS::widget(); ?>

```