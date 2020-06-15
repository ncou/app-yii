<?php

declare(strict_types=1);

/* @var array $params */

use App\Provider\ContainerInterfaceProvider;
use App\Provider\RouterProvider;
use App\Provider\WebViewProvider;
use Yiisoft\Arrays\Modifier\ReverseBlockMerge;

return [
    'yiisoft/router-fastroute/router' => RouterProvider::class,
    'yiisoft/view/webview' => WebViewProvider::class,

    ReverseBlockMerge::class => new ReverseBlockMerge()
];
