<?php

declare(strict_types=1);

namespace App\Provider;

use Psr\Container\ContainerInterface;
use Yiisoft\Di\Container;
use Yiisoft\Di\Support\ServiceProvider;

final class ContainerInterfaceProvider extends ServiceProvider
{
    /**
     * @suppress PhanAccessMethodProtected
     */
    public function register(Container $container): void
    {
        $container->set(ContainerInterface::class, function (ContainerInterface $container) {
            return $container;
        });
    }
}
