<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcdc7189903ca0d337449028d65be1f83
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Slim\\Views\\' => 11,
            'Slim\\' => 5,
            'Service\\' => 8,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'H' => 
        array (
            'Helper\\' => 7,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'D' => 
        array (
            'Database\\' => 9,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Slim\\Views\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/php-view/src',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Service\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Service',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Model',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'Helper\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Helper',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Database',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Controller',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcdc7189903ca0d337449028d65be1f83::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcdc7189903ca0d337449028d65be1f83::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitcdc7189903ca0d337449028d65be1f83::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
