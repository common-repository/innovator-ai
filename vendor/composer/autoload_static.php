<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8fd1a5b26704ba9b6aaa4cd71e52d92
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WpInnovator\\InnovatorAi\\Tests\\' => 30,
            'WpInnovator\\InnovatorAi\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WpInnovator\\InnovatorAi\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests/phpunit',
        ),
        'WpInnovator\\InnovatorAi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WpInnovator\\InnovatorAi\\Abstracts\\BaseModel' => __DIR__ . '/../..' . '/includes/Abstracts/BaseModel.php',
        'WpInnovator\\InnovatorAi\\Abstracts\\DBMigrator' => __DIR__ . '/../..' . '/includes/Abstracts/DBMigrator.php',
        'WpInnovator\\InnovatorAi\\Abstracts\\DBSeeder' => __DIR__ . '/../..' . '/includes/Abstracts/DBSeeder.php',
        'WpInnovator\\InnovatorAi\\Abstracts\\RESTController' => __DIR__ . '/../..' . '/includes/Abstracts/RESTController.php',
        'WpInnovator\\InnovatorAi\\Admin\\Menu' => __DIR__ . '/../..' . '/includes/Admin/Menu.php',
        'WpInnovator\\InnovatorAi\\Assets\\Manager' => __DIR__ . '/../..' . '/includes/Assets/Manager.php',
        'WpInnovator\\InnovatorAi\\Blocks\\Manager' => __DIR__ . '/../..' . '/includes/Blocks/Manager.php',
        'WpInnovator\\InnovatorAi\\Common\\Keys' => __DIR__ . '/../..' . '/includes/Common/Keys.php',
        'WpInnovator\\InnovatorAi\\Databases\\Seeder\\Manager' => __DIR__ . '/../..' . '/includes/Databases/Seeder/Manager.php',
        'WpInnovator\\InnovatorAi\\Databases\\Seeder\\SettingsSeeder' => __DIR__ . '/../..' . '/includes/Databases/Seeder/SettingsSeeder.php',
        'WpInnovator\\InnovatorAi\\Helpers\\Url' => __DIR__ . '/../..' . '/includes/Helpers/Url.php',
        'WpInnovator\\InnovatorAi\\REST\\Api' => __DIR__ . '/../..' . '/includes/REST/Api.php',
        'WpInnovator\\InnovatorAi\\REST\\SettingsController' => __DIR__ . '/../..' . '/includes/REST/SettingsController.php',
        'WpInnovator\\InnovatorAi\\Settings\\Manager' => __DIR__ . '/../..' . '/includes/Settings/Manager.php',
        'WpInnovator\\InnovatorAi\\Settings\\Setting' => __DIR__ . '/../..' . '/includes/Settings/Setting.php',
        'WpInnovator\\InnovatorAi\\Setup\\Installer' => __DIR__ . '/../..' . '/includes/Setup/Installer.php',
        'WpInnovator\\InnovatorAi\\Traits\\InputSanitizer' => __DIR__ . '/../..' . '/includes/Traits/InputSanitizer.php',
        'WpInnovator\\InnovatorAi\\Traits\\Queryable' => __DIR__ . '/../..' . '/includes/Traits/Queryable.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc8fd1a5b26704ba9b6aaa4cd71e52d92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc8fd1a5b26704ba9b6aaa4cd71e52d92::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc8fd1a5b26704ba9b6aaa4cd71e52d92::$classMap;

        }, null, ClassLoader::class);
    }
}
