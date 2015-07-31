<?php

use Phalcon\Mvc\View;
use Phalcon\DI\FactoryDefault;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Mvc\View\Engine\Volt as VoltEngine;
use Phalcon\Mvc\Model\Metadata\Memory as MetaData;
use Phalcon\Session\Adapter\Files as SessionAdapter;
use Phalcon\Flash\Session as FlashSession;
use Phalcon\Events\Manager as EventsManager;

/**
 * 生成容器
 */
$di = new FactoryDefault();

/**
 * 注册分发器
 */
$di->set('dispatcher', function() use ($di) {
	$dispatcher = new Dispatcher;
	return $dispatcher;
});

/**
 * 注册路由
 */
$di->set('url', function() use ($config){
	$url = new UrlProvider();
	$url->setBaseUri($config->application->baseUri);
	return $url;
});

/**
 * 注册视图组件
 */
$di->set('view', function() use ($config) {

	$view = new View();
	$view->setViewsDir(APP_PATH . $config->application->viewsDir);
	$view->registerEngines(array(
		".volt" => 'volt'
	));

	return $view;
});

/**
 * 设置模板引擎
 */
$di->set('volt', function($view, $di) {

	$volt = new VoltEngine($view, $di);

	$volt->setOptions(array(
		"compiledPath" => APP_PATH . "cache/volt/"
	));

	$compiler = $volt->getCompiler();
	$compiler->addFunction('is_a', 'is_a');

	return $volt;
}, true);

/**
 * 注册数据库
 */

$di->set('db', function() use ($config) {

	$dbclass = 'Phalcon\Db\Adapter\Pdo\\' . $config->database->adapter;
	return new $dbclass(array(
		"dbname"   => APP_PATH .$config->database->name
	));
});

/**
 * 注册数据库缓存
 */

$di->set('modelsCache', function(){
    $frontCache = new Phalcon\Cache\Frontend\Data(array(
        //'lifetime' => 1
        'lifetime' => 3600
    ));

    $cache = new Phalcon\Cache\Backend\Memcache($frontCache, array(
        //'cacheDir' => APP_PATH . "cache/database/"
        "servers" => array(
            array(
                "host" => "127.0.0.1",
                "port" => "11211",
                "weight" => "1"
            )
        )
    ));
    return $cache;
});

/**
 * 注册页面缓存
 */

$di->set('viewCache', function(){
    $frontCache = new Phalcon\Cache\Frontend\Output(array(
        //'lifetime' => 2
        'lifetime' => 7200
    ));

    $cache = new Phalcon\Cache\Backend\Memcache($frontCache, array(
        //'cacheDir' => APP_PATH . 'cache/view/'
        "servers" => array(
            array(
                "host" => "127.0.0.1",
                "port" => "11211",
                "weight" => "1"
            )
        )
    ));
    return $cache;
});
