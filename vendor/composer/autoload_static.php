<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b5e45269c197435ec014c7d941c9561
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JPush\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JPush\\' => 
        array (
            0 => __DIR__ . '/..' . '/jpush/jpush/src/JPush',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b5e45269c197435ec014c7d941c9561::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b5e45269c197435ec014c7d941c9561::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}