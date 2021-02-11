<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit332c4068946bdd804796b299920beb7b
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPExcel' => 
            array (
                0 => __DIR__ . '/..' . '/phpoffice/phpexcel/Classes',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit332c4068946bdd804796b299920beb7b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit332c4068946bdd804796b299920beb7b::$classMap;

        }, null, ClassLoader::class);
    }
}