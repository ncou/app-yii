<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use Psr\Container\ContainerInterface;
use App\Tests\UnitTester;
use Symfony\Component\Console\Tester\CommandTester;
use Yiisoft\Composer\Config\Builder;
use Yiisoft\Di\Container;
use Yiisoft\Yii\Console\Application;
use Yiisoft\Yii\Console\ExitCode;

final class HellowCommandCest
{
    private ContainerInterface $container;

    public function _before(UnitTester $I): void
    {
        $this->container = new Container(
            require Builder::path('console'),
            require Builder::path('providers-console')
        );
    }

    public function testExecute(UnitTester $I): void
    {
        $application = $this->container->get(Application::class);
        $command = $application->find('hellow');

        $commandCreate = new CommandTester($command);

        $commandCreate->setInputs(['yes']);

        $I->assertEquals(
            ExitCode::OK,
            $commandCreate->execute([])
        );

        $output = $commandCreate->getDisplay(true);

        $I->assertStringContainsString('Hellow Command', $output);
    }
}
