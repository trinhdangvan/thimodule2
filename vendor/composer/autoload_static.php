<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb716538f5dc2b980b5dab99f8cbadb90
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb716538f5dc2b980b5dab99f8cbadb90::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb716538f5dc2b980b5dab99f8cbadb90::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
