<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b2f42fc677f9c8fd614102ea12ab576
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'cdemers\\webdav-client\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'cdemers\\webdav-client\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7b2f42fc677f9c8fd614102ea12ab576::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7b2f42fc677f9c8fd614102ea12ab576::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
