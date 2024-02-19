<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit715d800bc7ae6a952cc41365d745042d
{
    public static $files = array (
        '87c83f3e9bcb828d13769f82bfcff850' => __DIR__ . '/../..' . '/oauth/oauth2/service/DiscordExtend.php',
        '21eae3be3a721cd434d6614a581716ab' => __DIR__ . '/../..' . '/oauth/oauth2/service/GitHubExtend.php',
        'ea98e2d13cdfc6ffb7faa0ac497fb920' => __DIR__ . '/../..' . '/oauth/oauth2/service/WordpressExtend.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit715d800bc7ae6a952cc41365d745042d::$classMap;

        }, null, ClassLoader::class);
    }
}
