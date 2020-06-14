<?php

declare(strict_types=1);

/* @var array $params */

use App\Provider\AliasesProvider;
use App\Provider\CacheProvider;
use App\Provider\ContainerInterfaceProvider;
use App\Provider\FileRotatorProvider;
use App\Provider\FileTargetProvider;
use App\Provider\LoggerProvider;
use App\Provider\RouterProvider;
use App\Provider\WebViewProvider;
use Yiisoft\Arrays\Modifier\ReverseBlockMerge;

return [
    'yiisoft/aliases' => [
        '__class' => AliasesProvider::class,
        '__construct()' => [
            $params['yiisoft/aliases']['paths'],
        ],
    ],
    'yiisoft/router-fastroute/router' => RouterProvider::class,
    'yiisoft/cache/cache' =>  [
        '__class' => CacheProvider::class,
        '__construct()' => [
            $params['yiisoft/cache-file']['file-cache']['path'],
        ],
    ],
    'yiisoft/log-target-file/filerotator' => [
        '__class' => FileRotatorProvider::class,
        '__construct()' => [
            $params['yiisoft/log-target-file']['file-rotator']['maxfilesize'],
            $params['yiisoft/log-target-file']['file-rotator']['maxfiles'],
            $params['yiisoft/log-target-file']['file-rotator']['filemode'],
            $params['yiisoft/log-target-file']['file-rotator']['rotatebycopy']
        ],
    ],
    'yiisoft/log-target-file/filetarget' => [
        '__class' => FileTargetProvider::class,
        '__construct()' => [
            $params['yiisoft/log-target-file']['file-target']['file'],
            $params['yiisoft/log-target-file']['file-target']['levels']
        ],
    ],
    'yiisoft/log/logger' =>  LoggerProvider::class,
    'yiisoft/view/webview' => WebViewProvider::class,

    ReverseBlockMerge::class => new ReverseBlockMerge()
];
