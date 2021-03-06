<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit55cc996630129c23cd830d180ab9cba3
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Facebook\\AutoloadMap\\ComposerPlugin' => __DIR__ . '/..' . '/hhvm/hhvm-autoload/ComposerPlugin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit55cc996630129c23cd830d180ab9cba3::$classMap;

        }, null, ClassLoader::class);
    }
}
