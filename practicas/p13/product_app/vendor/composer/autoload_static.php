<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3238e15da4dd5a22ab0e006c0e42b1e
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TECWEB\\MYAPI\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TECWEB\\MYAPI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/backend/myapi',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'TECWEB\\MYAPI\\Create\\Create' => __DIR__ . '/../..' . '/backend/myapi/Create/Create.php',
        'TECWEB\\MYAPI\\DataBase' => __DIR__ . '/../..' . '/backend/myapi/DataBase.php',
        'TECWEB\\MYAPI\\Delete\\Delete' => __DIR__ . '/../..' . '/backend/myapi/Delete/Delete.php',
        'TECWEB\\MYAPI\\Read\\Read' => __DIR__ . '/../..' . '/backend/myapi/Read/Read.php',
        'TECWEB\\MYAPI\\Update\\Update' => __DIR__ . '/../..' . '/backend/myapi/Update/Update.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3238e15da4dd5a22ab0e006c0e42b1e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3238e15da4dd5a22ab0e006c0e42b1e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita3238e15da4dd5a22ab0e006c0e42b1e::$classMap;

        }, null, ClassLoader::class);
    }
}
