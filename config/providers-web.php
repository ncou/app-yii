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
    'yii-extension/app/applicationparameters' => [
        '__class' => ApplicationParametersProvider::class,
        '__construct()' => [
            $params['yii-extension/app'],
        ],
    ],

    ReverseBlockMerge::class => new ReverseBlockMerge(),
];
