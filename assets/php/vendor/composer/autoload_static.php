<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f1b640a0c97dcc845bd7254a1f71902
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Validator\\' => 15,
            'Zend\\Stdlib\\' => 12,
            'Zend\\ServiceManager\\' => 20,
            'Zend\\Mime\\' => 10,
            'Zend\\Mail\\' => 10,
            'Zend\\Loader\\' => 12,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-validator/src',
        ),
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\ServiceManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-servicemanager/src',
        ),
        'Zend\\Mime\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-mime/src',
        ),
        'Zend\\Mail\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-mail/src',
        ),
        'Zend\\Loader\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-loader/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5f1b640a0c97dcc845bd7254a1f71902::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5f1b640a0c97dcc845bd7254a1f71902::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
