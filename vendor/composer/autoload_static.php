<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf97e92d804d31d75d9fd642b42c1ac38
{
    public static $files = array (
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        '_' => 
        array (
            '_PhpScoper5c3efd0df2edb\\Tests\\' => 30,
            '_PhpScoper5c3efd0df2edb\\Psr\\Http\\Message\\' => 41,
            '_PhpScoper5c3efd0df2edb\\GuzzleHttp\\Psr7\\' => 40,
            '_PhpScoper5c3efd0df2edb\\GuzzleHttp\\Promise\\' => 43,
            '_PhpScoper5c3efd0df2edb\\GuzzleHttp\\' => 35,
            '_PhpScoper5c3efd0df2edb\\Composer\\CaBundle\\' => 42,
        ),
        'M' => 
        array (
            'Mollie\\Api\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        '_PhpScoper5c3efd0df2edb\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        '_PhpScoper5c3efd0df2edb\\Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        '_PhpScoper5c3efd0df2edb\\GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        '_PhpScoper5c3efd0df2edb\\GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        '_PhpScoper5c3efd0df2edb\\GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        '_PhpScoper5c3efd0df2edb\\Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
        'Mollie\\Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf97e92d804d31d75d9fd642b42c1ac38::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf97e92d804d31d75d9fd642b42c1ac38::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
