<?php

declare(strict_types=1);

use App\Provider\ApplicationParametersProvider;
use App\Provider\AssetConverterProvider;
use App\Provider\AssetPublisherProvider;
use App\Provider\AssetManagerProvider;
use App\Provider\ContainerInterfaceProvider;
use App\Provider\HtmlRendererProvider;
use App\Provider\DebuggerProvider;
use App\Provider\MiddlewareProvider;
use App\Provider\Psr17Provider;
use App\Provider\SessionProvider;
use Yiisoft\Arrays\Modifier\ReverseBlockMerge;

return [
    'psr/container/containerinterface' => ContainerInterfaceProvider::class,
    'yiisoft/yii-web/psr17' => Psr17Provider::class,
    'yiisoft/yii-web/middleware' => MiddlewareProvider::class,
    'yiisoft/yii-web/htmlrenderer' => [
        '__class' => HtmlRendererProvider::class,
        '__construct()' => [
            $params['htmlRenderer']['templates']
        ],
    ],
    'yiisoft/yii-web/session' => [
        '__class' => SessionProvider::class,
        '__construct()' => [
            $params['yiisoft/yii-web']['session']['options'],
            $params['yiisoft/yii-web']['session']['handler']
        ],
    ],
    'yii-extension/app/applicationparameters' => [
        '__class' => ApplicationParametersProvider::class,
        '__construct()' => [
            $params['yii-extension/app'],
        ],
    ],

    ReverseBlockMerge::class => new ReverseBlockMerge(),
];
