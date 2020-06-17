<?php

declare(strict_types=1);

namespace App\Provider;

use App\ApplicationParameters;
use Psr\Container\ContainerInterface;
use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Log\LoggerInterface;
use Yiisoft\Aliases\Aliases;
use Yiisoft\Assets\AssetManager;
use Yiisoft\Di\Container;
use Yiisoft\Di\Support\ServiceProvider;
use Yiisoft\Router\UrlGeneratorInterface;
use Yiisoft\Router\UrlMatcherInterface;
use Yiisoft\View\Theme;
use Yiisoft\View\WebView;

final class WebViewProvider extends ServiceProvider
{
    private array $defaultParameters;

    public function __construct(array $defaultParameters = [])
    {
        $this->defaultParameters = $defaultParameters;
    }

    /**
     * @suppress PhanAccessMethodProtected
     */
    public function register(Container $container): void
    {
        $container->set(WebView::class, function (ContainerInterface $container) {
            $defaultParameters = [];

            $webView = new WebView(
                $container->get(Aliases::class)->get('@views'),
                $container->get(Theme::class),
                $container->get(EventDispatcherInterface::class),
                $container->get(LoggerInterface::class)
            );

            foreach ($this->defaultParameters as $key => $value) {
                $defaultParameters[$key] = $container->get($value);
            }

            $webView->setDefaultParameters($defaultParameters);

            return $webView;
        });
    }
}
