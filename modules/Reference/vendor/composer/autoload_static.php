<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9047872ca226b0a26441c8485ca01ec9
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Reference\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Reference\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9047872ca226b0a26441c8485ca01ec9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9047872ca226b0a26441c8485ca01ec9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
