Sidebar User Example
=======================

## Default Value

```
<?php use cinghie\adminlte\widgets\SidebarUser; ?>

<!-- sidebar user panel -->
<?= SidebarUser::widget() ?>
```

## Custom Value

```
<?php use cinghie\adminlte\widgets\SidebarUser; ?>

<!-- sidebar user panel -->
<?= SidebarUser::widget([
    'username' => \Yii::$app->user->identity->fullName,
    'userimg' => Url::to(Yii::$app->assetManager->getPublishedUrl('@igor162/nav/img').'/male.png'),
]) ?>
```
