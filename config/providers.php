<?php

declare(strict_types=1);

/* @var array $params */

use App\Provider\WebViewProvider;
use Yiisoft\Arrays\Modifier\ReverseBlockMerge;

return [
    'yiisoft/view/webview' => WebViewProvider::class,

    ReverseBlockMerge::class => new ReverseBlockMerge()
];
