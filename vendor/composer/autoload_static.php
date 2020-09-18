<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9cf4bf3fd1b059432a058c7fb8af51db
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CarOrder\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CarOrder\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'CarOrder\\CarFactory' => __DIR__ . '/../..' . '/src/CarFactory.php',
        'CarOrder\\CarModelR' => __DIR__ . '/../..' . '/src/CarModelR.php',
        'CarOrder\\CarModelS' => __DIR__ . '/../..' . '/src/CarModelS.php',
        'CarOrder\\CarOrder' => __DIR__ . '/../..' . '/src/CarOrder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9cf4bf3fd1b059432a058c7fb8af51db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9cf4bf3fd1b059432a058c7fb8af51db::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9cf4bf3fd1b059432a058c7fb8af51db::$classMap;

        }, null, ClassLoader::class);
    }
}