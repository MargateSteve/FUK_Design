<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite57495cff9f19b4636473f57272e176a
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite57495cff9f19b4636473f57272e176a::$classMap;

        }, null, ClassLoader::class);
    }
}
