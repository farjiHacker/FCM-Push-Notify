<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13254202f1ffea3e7bc69b08aa985051
{
    public static $prefixesPsr0 = array (
        'F' => 
        array (
            'FirebaseNotify' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit13254202f1ffea3e7bc69b08aa985051::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
