<?php

/**
 * Bootstrap
 */

require_once __DIR__.'/../vendor/Silex/autoload.php';

$app = new Silex\Application();
$config = require_once __DIR__.'/config.php';

$app['debug'] = $config['misc']['debug'];

/**
 * Add paths to be autoloaded.
 * Uncomment/remove as needed.
 */
//$app['autoloader']->registerNamespaces(array(
    //'Symfony'     => __DIR__.'/../vendor',
//));

/**
 * Define various controller providers to be mounted. 
 * Uncomment/remove as needed.
 */
//$app['controller_providers'] = array(
    //'/route/example' => new Example\Provider\Controller\HelloWorld(),
//);

/**
 * Register some "commonly-used" services here.
 * Uncomment/remove as needed.
 */
//$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    //'db.options'            => $config['db'],
    //'db.dbal.class_path'    => __DIR__.'/../vendor/Silex/vendor/doctrine-dbal/lib',
    //'db.common.class_path'  => __DIR__.'/../vendor/Silex/vendor/doctrine-common/lib',
//));

//$app->register(new Silex\Provider\SymfonyBridgesServiceProvider());
//$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

//$app->register(new Silex\Provider\TwigServiceProvider(), array(
    //'twig.path' => array(
        //__DIR__.'/../src/Resources/views',
        //__DIR__.'/../vendor/Symfony/Bridge/Twig/Resources/views/Form',
    //),
    //'twig.class_path' => __DIR__.'/../vendor/silex/vendor/twig/lib',
//));

//$app->register(new Silex\Provider\TranslationServiceProvider(), array(
    //'locale_fallback'           => 'en',
    //'translation.class_path'    => __DIR__.'/../vendor/Symfony/src',
    //'translator.messages'      => array(),
//));


return $app;
