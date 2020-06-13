<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://github.com/yiisoft.png" height="100px">
    </a>
    <h1 align="center">Yii application template</h1>
    <br>
</p>

[![Latest Stable Version](https://poser.pugx.org/yii-extension/app/v/stable.png)](https://packagist.org/packages/yii-extension/app)
[![Total Downloads](https://poser.pugx.org/yii-extension/app/downloads.png)](https://packagist.org/packages/yii-extension/app)
[![build](https://github.com/yii-extension/app/workflows/build/badge.svg)](https://github.com/yii-extension/app/actions)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/yii-extension/app/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/yii-extension/app/?branch=master)
[![codecov](https://codecov.io/gh/yii-extension/app/branch/master/graph/badge.svg)](https://codecov.io/gh/yii-extension/app)
[![Mutation testing badge](https://img.shields.io/endpoint?style=flat&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Fyii-extension%2Fapp%2Fmaster)](https://dashboard.stryker-mutator.io/reports/github.com/yii-extension/app/master)
[![static analysis](https://github.com/yii-extension/app/workflows/static%20analysis/badge.svg)](https://github.com/yii-extension/app/actions?query=workflow%3A%22static+analysis%22)

<p align="center">
    <a href="https://github.com/yii-extension/app" target="_blank">
        <img src="docs\images\home.png" >
    </a>
</p>

Yii application template for Yii 3 is best for rapidly creating projects.

### Directory structure

      config/             contains application configurations
      resources/layout    contains layout files for the web application
      resources/view      contains view files for the web application
      src/                application directory
          Asset/          contains assets definition
          Controller/     contains Web controller classes
          Factory/        contains factory classes files for config
          Provider/       contains provider classes for config
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages      
      public/             contains the entry script and Web resources



### Requirements

The minimum requirement by this project template that your Web server supports PHP 7.4.0.


### Installation

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
composer create-project --prefer-dist --stability dev yii-extension/app <your project>
~~~

Now you should be able to access the application through the following URL, assuming `app` is the directory
directly under the `public` root.

### Configuring your application

The application is fully configurable through parameters. [Application settings](docs/CONFIG.md)

### Using PHP built-in server

~~~
php -S 127.0.0.1:8080 -t public
~~~

### Wait till it is up, then open the following URL in your browser

~~~
http://localhost:8080
~~~

### Codeception testing

The package is tested with [Codeception](https://github.com/Codeception/Codeception). To run tests:

~~~
php -S 127.0.0.1:8080 -t public > yii.log 2>&1 &
vendor/bin/codecept run
~~~

### Static analysis

The code is statically analyzed with [Phan](https://github.com/phan/phan/wiki). To run static analysis:

```php
./vendor/bin/phan
```
