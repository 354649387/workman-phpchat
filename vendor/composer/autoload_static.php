<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita02d27c4c8751f7add2aed302b8e8ffc
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita02d27c4c8751f7add2aed302b8e8ffc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita02d27c4c8751f7add2aed302b8e8ffc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita02d27c4c8751f7add2aed302b8e8ffc::$classMap;

        }, null, ClassLoader::class);
    }
}
