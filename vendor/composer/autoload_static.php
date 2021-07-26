<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc95fce7e1f5a77c38a92e0c30d4ef977
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '4e0dc17ffaf28ec98f12a50d6e181361' => __DIR__ . '/..' . '/tommyknocker/pdo-database-class/PDODb.php',
        '2ce9fb4f015ef9d1272e86425d4d7181' => __DIR__ . '/..' . '/nass600/get-id3/getid3/getid3.php',
        '2a1d435e4c89b89127643829cbea18d9' => __DIR__ . '/..' . '/nass600/get-id3/getid3/write.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'PhpOption\\' => 10,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'PhpOption\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/modules',
        ),
    );

    public static $classMap = array (
        'Verot\\Upload\\Upload' => __DIR__ . '/..' . '/verot/class.upload.php/src/class.upload.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc95fce7e1f5a77c38a92e0c30d4ef977::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc95fce7e1f5a77c38a92e0c30d4ef977::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc95fce7e1f5a77c38a92e0c30d4ef977::$classMap;

        }, null, ClassLoader::class);
    }
}
