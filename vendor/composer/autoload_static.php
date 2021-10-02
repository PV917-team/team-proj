<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbaa80478be82ef2c87fb5046f549b0f5
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Ilyas\\TeamProj\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ilyas\\TeamProj\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbaa80478be82ef2c87fb5046f549b0f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbaa80478be82ef2c87fb5046f549b0f5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbaa80478be82ef2c87fb5046f549b0f5::$classMap;

        }, null, ClassLoader::class);
    }
}