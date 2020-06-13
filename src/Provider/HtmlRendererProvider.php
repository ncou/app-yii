<?php

declare(strict_types=1);

namespace App\Provider;

use Psr\Container\ContainerInterface;
use Yiisoft\Di\Container;
use Yiisoft\Di\Support\ServiceProvider;
use Yiisoft\Yii\Web\ErrorHandler\HtmlRenderer;
use Yiisoft\Yii\Web\ErrorHandler\ThrowableRendererInterface;

final class HtmlRendererProvider extends ServiceProvider
{
    private array $templates;

    public function __construct(array $templates = [])
    {
        $this->templates = $templates;
    }

    /**
     * @suppress PhanAccessMethodProtected
     */
    public function register(Container $container): void
    {
        $container->set(HtmlRenderer::class, [
            '__class' => HtmlRenderer::class,
            '__construct()' => [
                $this->templates,
            ]
        ]);

        $container->set(ThrowableRendererInterface::class, HtmlRenderer::class);
    }
}
