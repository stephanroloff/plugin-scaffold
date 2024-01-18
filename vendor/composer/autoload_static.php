<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26e4f043cdfb358e3485dbea09e4a1ca
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PluginScaffold\\' => 15,
        ),
        'O' => 
        array (
            'OtherNamespace\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PluginScaffold\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'OtherNamespace\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/OtherFile',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26e4f043cdfb358e3485dbea09e4a1ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26e4f043cdfb358e3485dbea09e4a1ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit26e4f043cdfb358e3485dbea09e4a1ca::$classMap;

        }, null, ClassLoader::class);
    }
}