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
    'yiisoft/asset/assetconverter' => [
        '__class' => AssetConverterProvider::class,
        '__construct()' => [
            $params['yiisoft/asset']['assetconverter']['command']['from'],
            $params['yiisoft/asset']['assetconverter']['command']['to'],
            $params['yiisoft/asset']['assetconverter']['command']['command'],
            $params['yiisoft/asset']['assetconverter']['forceconvert'],
        ],
    ],
    'yiisoft/asset/assetpublisher' => [
        '__class' => AssetPublisherProvider::class,
        '__construct()' => [
            $params['yiisoft/asset']['assetpublisher']['appendtimestamp'],
            $params['yiisoft/asset']['assetpublisher']['assetmap'],
            $params['yiisoft/asset']['assetpublisher']['basepath'],
            $params['yiisoft/asset']['assetpublisher']['baseurl'],
            $params['yiisoft/asset']['assetpublisher']['forcecopy'],
            $params['yiisoft/asset']['assetpublisher']['linkassets'],
        ],
    ],
    'yiisoft/asset/assetmanager' => [
        '__class' => AssetManagerProvider::class,
        '__construct()' => [
            $params['yiisoft/asset']['assetmanager']['bundles'],
            $params['yiisoft/asset']['assetmanager']['register'],
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
