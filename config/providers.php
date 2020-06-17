<?php

declare(strict_types=1);

/* @var array $params */

use App\Provider\WebViewProvider;
use Yiisoft\Arrays\Modifier\ReverseBlockMerge;

return [
    'yiisoft/view/webview' => [
        '__class' => WebViewProvider::class,
        '__construct()' => [
            $params['yiisoft/view']['defaultParameters'],
        ],
    ],

    ReverseBlockMerge::class => new ReverseBlockMerge()
];
