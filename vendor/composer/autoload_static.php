<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2d8cb0ec4b057362a53f87939715213b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Ashik\\Bkash\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ashik\\Bkash\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2d8cb0ec4b057362a53f87939715213b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2d8cb0ec4b057362a53f87939715213b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2d8cb0ec4b057362a53f87939715213b::$classMap;

        }, null, ClassLoader::class);
    }
}
