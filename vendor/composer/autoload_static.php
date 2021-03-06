<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit60e838dd0b3693093a9e9c88c7eaf2ea
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Colors\\' => 7,
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Colors\\' => 
        array (
            0 => __DIR__ . '/..' . '/mistic100/randomcolor/src',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit60e838dd0b3693093a9e9c88c7eaf2ea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit60e838dd0b3693093a9e9c88c7eaf2ea::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit60e838dd0b3693093a9e9c88c7eaf2ea::$classMap;

        }, null, ClassLoader::class);
    }
}
