<?php

declare(strict_types=1);

namespace App\Provider;

use App\ApplicationParameters;
use Yiisoft\Di\Container;
use Yiisoft\Di\Support\ServiceProvider;

final class ApplicationParametersProvider extends ServiceProvider
{
    private array $params;

    public function __construct(array $params = [])
    {
        $this->params = $params;
    }

    /**
     * @suppress PhanAccessMethodProtected
     */
    public function register(Container $container): void
    {
        $container->set(ApplicationParameters::class, function () {
            $applicationParameters = new ApplicationParameters();

            return $applicationParameters
                ->brandUrl($this->params['brandurl'])
                ->charset($this->params['charset'])
                ->heroOptions($this->params['hero.options'])
                ->heroBodyOptions($this->params['hero.body.options'])
                ->heroContainerOptions($this->params['hero.container.options'])
                ->heroFooterOptions($this->params['hero.footer.options'])
                ->heroFooterColumnOptions($this->params['hero.footer.column.options'])
                ->heroFooterColumnLeft($this->params['hero.footer.column.left'])
                ->heroFooterColumnLeftOptions($this->params['hero.footer.column.left.options'])
                ->heroFooterColumnCenter($this->params['hero.footer.column.center'])
                ->heroFooterColumnCenterOptions($this->params['hero.footer.column.center.options'])
                ->heroFooterColumnRight($this->params['hero.footer.column.right'])
                ->heroFooterColumnRightOptions($this->params['hero.footer.column.right.options'])
                ->language($this->params['language'])
                ->logo($this->params['logo'])
                ->name($this->params['name'])
                ->navBarOptions($this->params['navbar.options'])
                ->menu($this->params['menu']);
        });
    }
}
