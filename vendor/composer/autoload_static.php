<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc0fad78eca2e3fd358a3431888ac6c4
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
        'G' => 
        array (
            'GatewayWorker\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman-for-win',
        ),
        'GatewayWorker\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/gateway-worker-for-win/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc0fad78eca2e3fd358a3431888ac6c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc0fad78eca2e3fd358a3431888ac6c4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
