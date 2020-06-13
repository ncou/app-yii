<?php

declare(strict_types=1);

use App\Provider\ApplicationProvider;
use Yiisoft\Arrays\Modifier\ReverseBlockMerge;

return [
    'yiisoft/yii-console' => [
        '__class' => ApplicationProvider::class,
        '__construct()' => [
            $params['console']['commands'],
            $params['console']['name'],
            $params['console']['version']
        ],
    ],

    ReverseBlockMerge::class => new ReverseBlockMerge(),
];
