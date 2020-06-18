<?php

declare(strict_types=1);

/**
 * @var array $menuItems
 * @var \App\ApplicationParameters $applicationParameters
 * @var \Yiisoft\Yii\Web\User\User $user
 */

use Yii\Extension\Bulma\Nav;
use Yii\Extension\Bulma\NavBar;
use Yiisoft\Html\Html;

if ($user !== null && $user->getId() !== null) {
    $menuItems[] = [
        'label' => 'Logout' . ' ' . '(' . $user->getIdentity()->username . ')',
        'url' => '/auth/logout'
    ];
} else {
    $menuItems =  $applicationParameters->getMenu();
}
?>

<?= NavBar::begin()
    ->brandLabel($applicationParameters->getName())
    ->brandImage($applicationParameters->getLogo())
    ->brandUrl($applicationParameters->getBrandUrl())
    ->options($applicationParameters->getNavBarOptions())
    ->start();
?>

    <?= Nav::widget()
        ->currentPath($urlGenerator->generate($urlMatcher->getCurrentRoute()->getName()))
        ->items($menuItems)
    ?>

<?= NavBar::end();
