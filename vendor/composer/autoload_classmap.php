<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Album' => $baseDir . '/app/models/Album.php',
    'App\\TinyURL\\Repository\\TinyURLRepositoryProvider' => $baseDir . '/app/TinyURL/Repository/TinyURLRepositoryProvider.php',
    'Artist' => $baseDir . '/app/models/Artist.php',
    'AuthController' => $baseDir . '/app/controllers/AuthController.php',
    'AuthorizationInterface' => $baseDir . '/app/TinyURL/Authorization/AuthorizationInterface.php',
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'Genre' => $baseDir . '/app/models/Genre.php',
    'HomeController' => $baseDir . '/app/controllers/HomeController.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'IndexController' => $baseDir . '/app/controllers/IndexController.php',
    'ManagerController' => $baseDir . '/app/controllers/ManagerController.php',
    'Normalizer' => $vendorDir . '/patchwork/utf8/src/Normalizer.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Resources/stubs/SessionHandlerInterface.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'TinyURLAuthorizationProvider' => $baseDir . '/app/TinyURL/Authorization/TinyURLAuthorizationProvider.php',
    'TinyURL\\Authorization\\AutorizationUser' => $baseDir . '/app/TinyURL/Authorization/AuthorizationUser.php',
    'TinyURL\\Repository\\LinkRepository' => $baseDir . '/app/TinyURL/Repository/LinkRepository.php',
    'TinyURL\\Repository\\Link\\DbLinkRepository' => $baseDir . '/app/TinyURL/Repository/Link/DbLinkRepository.php',
    'TinyURL\\Repository\\Link\\LinkRepositoryInterface' => $baseDir . '/app/TinyURL/Repository/Link/LinkRepositoryInterface.php',
    'TinyURL\\Repository\\Link\\ShortLinkRepository' => $baseDir . '/app/TinyURL/Repository/Link/ShortLinkRepository.php',
    'TinyURL\\Service\\IdEncoder' => $baseDir . '/app/TinyURL/Service/IdEncoder.php',
    'Track' => $baseDir . '/app/models/Track.php',
    'User' => $baseDir . '/app/models/User.php',
    'Whoops\\Module' => $vendorDir . '/filp/whoops/src/deprecated/Zend/Module.php',
    'Whoops\\Provider\\Zend\\ExceptionStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/ExceptionStrategy.php',
    'Whoops\\Provider\\Zend\\RouteNotFoundStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/RouteNotFoundStrategy.php',
);
