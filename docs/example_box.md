Box Examples
=======================

## Box

Default Values:
```

<?php use igor162\adminlte\widgets\Box; ?>

<!-- Box -->
<?= Box::widget() ?>
```

Custom Values:
```
<!-- Box -->
Box::begin([
    'type' => Box::TYPE_SUCCESS,
    'title' => 'Box title',
    'refreshUrl' => '/userinfo',
    'tools' => ['refresh', 'collapse', 'remove'],
    'collapsed' => false,
    'footer' => $array_button,
]);

echo "cszchen/alte";

Box::end();
```