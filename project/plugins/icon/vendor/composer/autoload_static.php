<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee9ba071db68b8fbb2bb8d9347061509
{
    public static $classMap = array (
        'Flextype\\Icon' => __DIR__ . '/../..' . '/app/Models/Icon.php',
        'Flextype\\IconTwigExtension' => __DIR__ . '/../..' . '/twig/IconTwigExtension.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitee9ba071db68b8fbb2bb8d9347061509::$classMap;

        }, null, ClassLoader::class);
    }
}