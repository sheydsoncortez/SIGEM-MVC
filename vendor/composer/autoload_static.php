<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit386918364e4f896d6607d8c91b13948e
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit386918364e4f896d6607d8c91b13948e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit386918364e4f896d6607d8c91b13948e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
