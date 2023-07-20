<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6f7e8cd935e1c6fad390cc7094752c6
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Ednei\\BibliotecaPhp\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ednei\\BibliotecaPhp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite6f7e8cd935e1c6fad390cc7094752c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6f7e8cd935e1c6fad390cc7094752c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite6f7e8cd935e1c6fad390cc7094752c6::$classMap;

        }, null, ClassLoader::class);
    }
}
