<?php

declare(strict_types=1);

namespace App\Provider;

use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Yiisoft\Aliases\Aliases;
use Yiisoft\Assets\AssetConverter;
use Yiisoft\Assets\AssetConverterInterface;
use Yiisoft\Di\Container;
use Yiisoft\Di\Support\ServiceProvider;

final class AssetConverterProvider extends ServiceProvider
{
    private string $from;
    private string $to;
    private string $command;
    private bool $forceConvert;

    public function __construct(
        string $from = '',
        string $to = '',
        string $command = '',
        bool $forceConvert = false
    ) {
        $this->from = $from;
        $this->to = $to;
        $this->command = $command;
        $this->forceConvert = $forceConvert;
    }

    /**
     * @suppress PhanAccessMethodProtected
     */
    public function register(Container $container): void
    {
        $container->set(AssetConverterInterface::class, function (ContainerInterface $container) {

            $assetConverter = new AssetConverter(
                $container->get(Aliases::class),
                $container->get(LoggerInterface::class)
            );

            if ($this->from !== '' && $this->to !== '' && $this->command !== '') {
                $assetConverter->setCommand($this->from, $this->to, $this->command);
            }

            $assetConverter->setForceConvert($this->forceConvert);

            return $assetConverter;
        });
    }
}
