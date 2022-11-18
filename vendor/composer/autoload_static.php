<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc516d3ab36672961adebc0c369638367
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
        'M' => 
        array (
            'MaxMind\\Db\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'MaxMind\\Db\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db',
        ),
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JsonSerializable' => 
            array (
                0 => __DIR__ . '/..' . '/geoip2/geoip2/compat',
            ),
        ),
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
            'GeoIp2' => 
            array (
                0 => __DIR__ . '/..' . '/geoip2/geoip2/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc516d3ab36672961adebc0c369638367::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc516d3ab36672961adebc0c369638367::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc516d3ab36672961adebc0c369638367::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
