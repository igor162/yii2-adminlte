Menu Examples
=============

## Menu

Default Values:
```

<?php use igor162\adminlte\widgets\Menu; ?>
<?php use igor162\adminlte\ColorCSS; ?>

<!-- Menu -->
<?= Menu::widget(
[
    'items' => [
                    [ 'label' => \Yii::t('app', 'System Menu'), 'options' => ['class' => 'header']],
                    [
                        'label' => \Yii::t('app', 'Menu Yii2'),
                        'icon' => 'fa fa-bullhorn',
                        'url' => '#',
                        'items' => [
                        ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                        ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                    ]
                ]
]
        ); ?>
```

Custom Values:
```
<!-- Menu -->

// check active url
$checkController = function ($array) {
        foreach( $array as $route)
                if( $this->context->getUniqueId() == $route){ return $route;}
};

        $menuItems2 = [
            ['label' => \Yii::t('app', 'System Menu'), 'options' => ['class' => 'header']],
            [
                'label' => \Yii::t('app', 'Menu Yii2'),
                'icon' => 'fa fa-bullhorn',
                'url' => '#',
                'items' => [
                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                ],
            ],
            [
                'label' => \Yii::t('app', 'Statistics1'),
                'icon' => 'fa fa-area-chart',
                'url' => '#',
                'smalls' => [
                    [
                        "label" => 44,
                        "color" => ColorCSS::BG_FUCHSIA,
                    ],
                    [
                        "label" => 55,
                        "color" => ColorCSS::BG_AQUA,
                    ],
                    [
                        "label" => 55,
                        "color" => ColorCSS::BG_BLACK,
                    ],
                ]
            ],
            [
                'label' => \Yii::t('app', 'Statistics2'),
                'icon' => 'fa fa-area-chart',
                'url' => '#',
                'smalls' => [12,55,8]
            ],
            [
                'label' => \Yii::t('app', 'Notes1'),
                'icon' => 'fa fa-sticky-note-o',
                'url' => '#',
                'small' => [
                    "label" => 44,
                    "color" => ColorCSS::BG_FUCHSIA,
                ],
            ],
            [
                'label' => \Yii::t('app', 'Notes2'),
                'icon' => 'fa fa-sticky-note-o',
                'url' => '#',
                'small' => 11,
            ],
            [
                'label' => \Yii::t('app', 'Notes3'),
                'icon' => 'fa fa-sticky-note-o',
                'url' => '#',
                'small' => [
                    "label" => 'new',
                    "color" => ColorCSS::BG_FUCHSIA,
                ],
            ],
];
       echo Menu::widget(['items' => $menuItems2,]);
```