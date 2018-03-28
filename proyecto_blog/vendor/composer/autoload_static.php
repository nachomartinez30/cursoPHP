<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80a4159973ea7a60dba1c55d288f95e9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit80a4159973ea7a60dba1c55d288f95e9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80a4159973ea7a60dba1c55d288f95e9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
