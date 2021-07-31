<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd4fead45e0fa114c2c94d387fded5f6
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MailchimpTests\\' => 15,
            'MailchimpAPI\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MailchimpTests\\' => 
        array (
            0 => __DIR__ . '/..' . '/jhut89/mailchimp3php/tests',
        ),
        'MailchimpAPI\\' => 
        array (
            0 => __DIR__ . '/..' . '/jhut89/mailchimp3php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd4fead45e0fa114c2c94d387fded5f6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd4fead45e0fa114c2c94d387fded5f6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
