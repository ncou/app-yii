<?php

declare(strict_types=1);

use App\Provider\ApplicationProvider;
use Yiisoft\Arrays\Modifier\ReverseBlockMerge;

return [
    'yiisoft/yii-console' => [
        '__class' => ApplicationProvider::class,
        '__construct()' => [
            $params['yiisoft/yii-console']['commands'],
            $params['yiisoft/yii-console']['name'],
            $params['yiisoft/yii-console']['version']
        ],
    ],

    ReverseBlockMerge::class => new ReverseBlockMerge(),
];
