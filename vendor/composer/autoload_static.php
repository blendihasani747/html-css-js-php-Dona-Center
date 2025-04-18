<?php

// autoload_static.php 

namespace Composer\Autoload;

class ComposerStaticInitb299d17303e629ef36c433e6d8390978
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Uddhav\\Itcompany\\' => 17,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Uddhav\\Itcompany\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb299d17303e629ef36c433e6d8390978::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb299d17303e629ef36c433e6d8390978::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb299d17303e629ef36c433e6d8390978::$classMap;

        }, null, ClassLoader::class);
    }
}
