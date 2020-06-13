### Setting up your Yii application

This application is based on the configuration of Service Providers, which are defined in ```src/Provider```, which are configured through parameters without the need to modify any.

#### Aliases:

```php
'yiisoft/aliases' => [
    // Directory path aliases.
    'paths' => [
        '@root' => dirname(__DIR__),
        '@assets' => '@root/public/assets',
        '@assetsUrl' => '/assets',
        '@npm' => '@root/node_modules',
        '@public' => '@root/public',
        '@resources' => '@root/resources',
        '@runtime' => '@root/runtime',
        '@views' => '@root/resources/views',
        '@vendor' => '@root/vendor'
    ],
],
```

#### Asset:
```php
use App\Asset\AppAsset;

'yiisoft/asset' => [
    'assetconverter' => [
        // Allows you to set a command that is used to perform the asset conversion.
        'command' => [
            'from' => '',
            'to' => '',
            'command' => ''
        ],
        // Make the conversion regardless of whether the asset already exists.
        'forceconvert' => false
    ],
    'assetpublisher' => [
        // Append a timestamp to the URL of every published asset.
        'appendtimestamp' => true,
        // Mapping from source asset files (keys) to target asset files (values).
        'assetmap' => [],
        // The root directory storing the published asset files.
        'basepath' => '',
        // The base URL through which the published asset files can be accessed.
        'baseurl' => '',
        // Whether the directory being published should be copied even if it is found in the target directory.
        'forcecopy' => false,
        // Whether to use symbolic link to publish asset files.
        'linkassets' => false,
    ],
    'assetmanager' => [
        // This property is provided to customize asset bundles.
        'bundles' => [
        ],
        // Generate the array configuration of the AssetBundles.
        'register' => [
            AppAsset::class
        ],
    ],
],
```

### Cache

```php
'yiisoft/cache-file' => [
    // Directory cache path.
    'file-cache' => [
        'path' => '@runtime/cache'
    ],
],
```

### Console commands
```php
'console' => [
    'id' => 'app-console',
    'commands' => [
        'hellow' => Hellow::class
    ],
],
```

### Log-Target-File:

```php
use Psr\Log\LogLevel;

'yiisoft/log-target-file' => [
    'file-target' => [
        // Log file path.
        'file' => '@runtime/logs/app.log',
        // The message levels that this target is interested in.
        'levels' => [
            LogLevel::EMERGENCY,
            LogLevel::ERROR,
            LogLevel::WARNING,
            LogLevel::INFO,
            LogLevel::DEBUG,
        ],
    ],
    'file-rotator' => [
        // Maximum file size, in kilo-bytes. Defaults to 10240, meaning 10MB.
        'maxfilesize' => 10,
        // Number of files used for rotation. Defaults to 5.
        'maxfiles' => 5,
        // The permission to be set for newly created files.
        'filemode' => null,
        // Whether to rotate files by copy and truncate in contrast to rotation by renaming files.
        'rotatebycopy' => null
    ],
],
```

### Session

```php
'yiisoft/yii-web' => [
    'session' => [
        'options' => ['cookie_secure' => 0],
        'handler' => null
    ],
],
```

### Application

```php
'yii-extension/app' => [
    'brandurl' => '/',
    'charset' => 'UTF-8',
    'hero.options' => ['class' => 'hero is-fullheight-with-navbar is-light'],
    'hero.body.options' => ['class' => 'hero-body is-light'],
    'hero.container.options' => ['class' => 'container has-text-centered'],
    'hero.footer.options' => ['class' => 'hero-footer has-background-black'],
    'hero.footer.column.options' => ['class' => 'columns is-mobile'],
    'hero.footer.column.left' => 'Left',
    'hero.footer.column.left.options' => ['class' => 'column has-text-left has-text-light'],
    'hero.footer.column.center' => 'Center',
    'hero.footer.column.center.options' => ['class' => 'column has-text-centered has-text-light'],
    'hero.footer.column.right' => 'Right',
    'hero.footer.column.right.options' => ['class' => 'column has-text-right has-text-light'],
    'language' => 'en',
    'logo' => '/images/yii-logo.jpg',
    'menu' => [
        /**
         * Example menu config simple link, dropdown menu.
         *[
         *   'label' => 'Home',
         *   'url' => ['site/index']
         *],
         *[
         *   'label' => 'Dropdown',
         *   'items' => [
         *       ['label' => 'Level 1 - Dropdown B', 'url' => '#'],
         *       ['label' => 'Level 2 - Dropdown A', 'url' => '#'],
         *       '<li class="dropdown-divider"></li>',
         *       '<li style="color:black;list-style-type: none">Dropdown Header</li>',
         *       ['label' => 'Level 3 - Dropdown B', 'url' => '#'],
         *       ['label' => 'Level 4 - Dropdown A', 'url' => '#'],
         *   ],
         *],
         */
    ],
    'name' => 'My Project',
    'navbar.options' => ['class' => 'is-black', 'data-sticky' => '', 'data-sticky-shadow' => ''],
],
