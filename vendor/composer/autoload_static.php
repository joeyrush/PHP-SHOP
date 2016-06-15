<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5e646a44dd5d275d171fd75d14562d11
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5e646a44dd5d275d171fd75d14562d11::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5e646a44dd5d275d171fd75d14562d11::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}