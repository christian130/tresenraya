<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4702e85e68938952bd6ef8455796f595
{
    public static $prefixesPsr0 = array (
        't' => 
        array (
            'tresenraya\\' => 
            array (
                0 => __DIR__ . '/../..' . '/controlador',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit4702e85e68938952bd6ef8455796f595::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}