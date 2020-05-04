<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit83f3b8003c0bdf1777fbc66c722eddce
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'approot\\' => 8,
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'approot\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/..',
        ),
    );

    public static $classMap = array (
        'app\\config\\routing\\Routing' => __DIR__ . '/../..' . '/../config/routing/Routing.php',
        'app\\controllers\\MyController' => __DIR__ . '/../..' . '/../controllers/MyController.php',
        'app\\models\\MyModel' => __DIR__ . '/../..' . '/../models/MyModel.php',
        'approot\\App' => __DIR__ . '/../..' . '/App.php',
        'approot\\AppControllers' => __DIR__ . '/../..' . '/AppControllers.php',
        'approot\\AppModel' => __DIR__ . '/../..' . '/AppModel.php',
        'approot\\AppRouting' => __DIR__ . '/../..' . '/AppRouting.php',
        'approot\\debug\\AppDebug' => __DIR__ . '/../..' . '/debug/AppDebug.php',
        'approot\\debug\\controllers\\DebugController' => __DIR__ . '/../..' . '/debug/controllers/DebugController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit83f3b8003c0bdf1777fbc66c722eddce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit83f3b8003c0bdf1777fbc66c722eddce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit83f3b8003c0bdf1777fbc66c722eddce::$classMap;

        }, null, ClassLoader::class);
    }
}
