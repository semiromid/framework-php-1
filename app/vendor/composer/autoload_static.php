<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit83f3b8003c0bdf1777fbc66c722eddce
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'approot\\' => 8,
            'app\\' => 4,
        ),
        'W' => 
        array (
            'Webmozart\\Assert\\' => 17,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
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
        'Webmozart\\Assert\\' => 
        array (
            0 => __DIR__ . '/..' . '/webmozart/assert/src',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
    );

    public static $classMap = array (
        'Symfony\\Polyfill\\Ctype\\Ctype' => __DIR__ . '/..' . '/symfony/polyfill-ctype/Ctype.php',
        'Webmozart\\Assert\\Assert' => __DIR__ . '/..' . '/webmozart/assert/src/Assert.php',
        'app\\classes\\db\\Task_db' => __DIR__ . '/../..' . '/../classes/db/Task_db.php',
        'app\\config\\routing\\Routing' => __DIR__ . '/../..' . '/../config/routing/Routing.php',
        'app\\controllers\\IndexController' => __DIR__ . '/../..' . '/../controllers/IndexController.php',
        'app\\controllers\\PrivateController' => __DIR__ . '/../..' . '/../controllers/PrivateController.php',
        'app\\models\\UserAuthentication' => __DIR__ . '/../..' . '/../models/UserAuthentication.php',
        'app\\models\\api\\IndexModel__GET' => __DIR__ . '/../..' . '/../models/api/IndexModel__GET.php',
        'app\\models\\api\\PostModel__GET' => __DIR__ . '/../..' . '/../models/api/PostModel__GET.php',
        'app\\models\\index\\Login__POST' => __DIR__ . '/../..' . '/../models/index/Login__POST.php',
        'app\\modules\\api\\v1\\controllers\\IndexController' => __DIR__ . '/../..' . '/../modules/api/v1/controllers/IndexController.php',
        'app\\modules\\api\\v1\\controllers\\UserController' => __DIR__ . '/../..' . '/../modules/api/v1/controllers/UserController.php',
        'app\\modules\\api\\v1\\models\\user\\FriendModel__GET' => __DIR__ . '/../..' . '/../modules/api/v1/models/user/FriendModel__GET.php',
        'app\\modules\\api\\v1\\models\\user\\UserModel__GET' => __DIR__ . '/../..' . '/../modules/api/v1/models/user/UserModel__GET.php',
        'approot\\App' => __DIR__ . '/../..' . '/App.php',
        'approot\\AppControllerAPI' => __DIR__ . '/../..' . '/AppControllerAPI.php',
        'approot\\AppControllers' => __DIR__ . '/../..' . '/AppControllers.php',
        'approot\\AppDB' => __DIR__ . '/../..' . '/AppDB.php',
        'approot\\AppModel' => __DIR__ . '/../..' . '/AppModel.php',
        'approot\\AppRouting' => __DIR__ . '/../..' . '/AppRouting.php',
        'approot\\classes\\Files' => __DIR__ . '/../..' . '/classes/Files.php',
        'approot\\classes\\Logger' => __DIR__ . '/../..' . '/classes/Logger.php',
        'approot\\classes\\Request' => __DIR__ . '/../..' . '/classes/Request.php',
        'approot\\classes\\ResponseCode' => __DIR__ . '/../..' . '/classes/ResponseCode.php',
        'approot\\classes\\Sanitize' => __DIR__ . '/../..' . '/classes/Sanitize.php',
        'approot\\classes\\authentication\\User' => __DIR__ . '/../..' . '/classes/authentication/User.php',
        'approot\\classes\\authentication\\interfaces\\UserIdentity' => __DIR__ . '/../..' . '/classes/authentication/interfaces/UserIdentity.php',
        'approot\\classes\\authentication\\user\\LoginMiddleware' => __DIR__ . '/../..' . '/classes/authentication/user/LoginMiddleware.php',
        'approot\\classes\\authentication\\user\\login_middleware\\Login' => __DIR__ . '/../..' . '/classes/authentication/user/login_middleware/Login.php',
        'approot\\classes\\authentication\\user\\login_middleware\\LoginByAPI_KEY' => __DIR__ . '/../..' . '/classes/authentication/user/login_middleware/LoginByAPI_KEY.php',
        'approot\\classes\\authentication\\user\\login_middleware\\LoginBySessionDB' => __DIR__ . '/../..' . '/classes/authentication/user/login_middleware/LoginBySessionDB.php',
        'approot\\classes\\authentication\\user\\login_middleware\\LoginBySessionFile' => __DIR__ . '/../..' . '/classes/authentication/user/login_middleware/LoginBySessionFile.php',
        'approot\\debug\\AppDebug' => __DIR__ . '/../..' . '/debug/AppDebug.php',
        'approot\\debug\\controllers\\DebugController' => __DIR__ . '/../..' . '/debug/controllers/DebugController.php',
        'approot\\debug\\models\\debug\\ErrorLog__GET' => __DIR__ . '/../..' . '/debug/models/debug/ErrorLog__GET.php',
        'approot\\debug\\models\\debug\\Index__GET' => __DIR__ . '/../..' . '/debug/models/debug/Index__GET.php',
        'approot\\debug\\models\\debug\\ValidationLog__GET' => __DIR__ . '/../..' . '/debug/models/debug/ValidationLog__GET.php',
        'approot\\debug\\modules\\api\\v1\\controllers\\DebugController' => __DIR__ . '/../..' . '/debug/modules/api/v1/controllers/DebugController.php',
        'approot\\debug\\modules\\api\\v1\\models\\debug\\ErrorLog__DELETE' => __DIR__ . '/../..' . '/debug/modules/api/v1/models/debug/ErrorLog__DELETE.php',
        'approot\\debug\\modules\\api\\v1\\models\\debug\\ValidationLog__DELETE' => __DIR__ . '/../..' . '/debug/modules/api/v1/models/debug/ValidationLog__DELETE.php',
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
