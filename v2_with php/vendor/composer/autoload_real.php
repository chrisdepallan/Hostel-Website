<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbac4a39ea4f4fe9ad82a0506e94936e9
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitbac4a39ea4f4fe9ad82a0506e94936e9', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbac4a39ea4f4fe9ad82a0506e94936e9', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbac4a39ea4f4fe9ad82a0506e94936e9::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}