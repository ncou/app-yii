<?php

declare(strict_types=1);

namespace App\Provider;

use Psr\Container\ContainerInterface;
use Yiisoft\Aliases\Aliases;
use Yiisoft\Assets\AssetPublisher;
use Yiisoft\Assets\AssetPublisherInterface;
use Yiisoft\Di\Container;
use Yiisoft\Di\Support\ServiceProvider;

final class AssetPublisherProvider extends ServiceProvider
{
    private bool $appendTimestamp;
    private array $assetMap;
    private string $basePath;
    private string $baseUrl;
    private bool $forceCopy;
    private bool $linkAssets;

    public function __construct(
        bool $appendTimestamp = false,
        array $assetMap = [],
        string $basePath = '',
        string $baseUrl = '',
        bool $forceCopy = false,
        bool $linkAssets = false
    ) {
        $this->appendTimestamp = $appendTimestamp;
        $this->assetMap = $assetMap;
        $this->basePath = $basePath;
        $this->baseUrl = $baseUrl;
        $this->forceCopy = $forceCopy;
        $this->linkAssets = $linkAssets;
    }

    /**
     * @suppress PhanAccessMethodProtected
     */
    public function register(Container $container): void
    {
        $container->set(AssetPublisherInterface::class, function (ContainerInterface $container) {
            $assetPublisher = new AssetPublisher($container->get(Aliases::class));

            $assetPublisher->setAppendTimestamp($this->appendTimestamp);

            if ($this->assetMap != []) {
                $assetPublisher->setAssetMap($this->assetMap);
            }

            if ($this->basePath !== '') {
                $assetPublisher->setBasePath($this->basePath);
            }

            if ($this->baseUrl !== '') {
                $assetPublisher->setBaseUrl($this->baseUrl);
            }

            $assetPublisher->setForceCopy($this->forceCopy);
            $assetPublisher->setLinkAssets($this->linkAssets);

            return $assetPublisher;
        });
    }
}
