<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd7fbdcbf1f6abdf58e561bf0810f8a6
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd7fbdcbf1f6abdf58e561bf0810f8a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd7fbdcbf1f6abdf58e561bf0810f8a6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
