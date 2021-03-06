<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2013 Zend Technologies USA Inc. (http://www.zend.com)
 */

return array(
    // Development time modules
    'modules' => array(
        'ZFTool',
        'ZF\Apigility\Admin',
        'ZF\Apigility\Doctrine\Admin',
    ),
    // development time configuration globbing
    'module_listener_options' => array(
        'config_glob_paths' => array('config/autoload/{,*.}{global,local}-development.php')
    )
);
