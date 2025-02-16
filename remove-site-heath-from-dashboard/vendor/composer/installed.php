<?php return array(
    'root' => array(
        'name' => 'fullworks/remove-site-health-dashboard-widget',
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'reference' => '61afa32663dcdb1dbee78d04c51bbaaa2a0e9d2b',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'alanef/free_plugin_lib' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '43f4f538d247dd696a47ed08e4a5b4dde15c7daa',
            'type' => 'library',
            'install_path' => __DIR__ . '/../alanef/free_plugin_lib',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'composer/installers' => array(
            'pretty_version' => 'v1.0.12',
            'version' => '1.0.12.0',
            'reference' => '4127333b03e8b4c08d081958548aae5419d1a2fa',
            'type' => 'composer-installer',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'fullworks/remove-site-health-dashboard-widget' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '61afa32663dcdb1dbee78d04c51bbaaa2a0e9d2b',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
