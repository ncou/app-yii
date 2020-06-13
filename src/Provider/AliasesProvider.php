<?php

declare(strict_types=1);

namespace App\Provider;

use Yiisoft\Aliases\Aliases;
use Yiisoft\Di\Container;
use Yiisoft\Di\Support\ServiceProvider;

final class AliasesProvider extends ServiceProvider
{
    private array $paths;

    public function __construct(array $paths = [])
    {
        $this->paths = $paths;
    }

    /**
     * @suppress PhanAccessMethodProtected
     */
    public function register(Container $container): void
    {
        $container->set(Aliases::class, [
            '__class' => Aliases::class,
            '__construct()' => [$this->paths],
        ]);
    }
}
