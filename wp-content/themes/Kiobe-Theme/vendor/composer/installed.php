<?php return array(
    'root' => array(
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => '4c42b2c58bc14e60bf0cfe84df2774a00f364604',
        'name' => '__root__',
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => '4c42b2c58bc14e60bf0cfe84df2774a00f364604',
            'dev_requirement' => false,
        ),
        'components/font-awesome' => array(
            'pretty_version' => '6.1.0',
            'version' => '6.1.0.0',
            'type' => 'component',
            'install_path' => __DIR__ . '/../components/font-awesome',
            'aliases' => array(),
            'reference' => '9ab1bb955c819daacb3a56ccfacb10fa40b7b50c',
            'dev_requirement' => false,
        ),
        'twbs/bootstrap' => array(
            'pretty_version' => 'v4.6.1',
            'version' => '4.6.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twbs/bootstrap',
            'aliases' => array(),
            'reference' => '043a03c95a2ad6738f85b65e53b9dbdfb03b8d10',
            'dev_requirement' => false,
        ),
        'twitter/bootstrap' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => 'v4.6.1',
            ),
        ),
    ),
);
