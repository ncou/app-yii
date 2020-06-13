<?php

declare(strict_types=1);

namespace App\Provider;

use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Yiisoft\Assets\AssetConverterInterface;
use Yiisoft\Assets\AssetManager;
use Yiisoft\Assets\AssetPublisherInterface;
use Yiisoft\Di\Container;
use Yiisoft\Di\Support\ServiceProvider;

final class AssetManagerProvider extends ServiceProvider
{
    private array $bundles;
    private array $register;

    public function __construct(array $bundles = [], array $register = [])
    {
        $this->bundles = $bundles;
        $this->register = $register;
    }

    /**
     * @suppress PhanAccessMethodProtected
     */
    public function register(Container $container): void
    {
        $container->set(AssetManager::class, function (ContainerInterface $container) {
            $assetManager = new AssetManager($container->get(LoggerInterface::class));
            $assetManager->setConverter($container->get(AssetConverterInterface::class));
            $assetManager->setPublisher($container->get(AssetPublisherInterface::class));

            if ($this->bundles !== []) {
                $assetManager->setBundles($this->bundles);
            }

            if ($this->register !== []) {
                $assetManager->register($this->register);
            }

            return $assetManager;
        });
    }
}
