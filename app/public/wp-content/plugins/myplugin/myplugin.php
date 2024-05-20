<?php
/**
 * Plugin Name: My Plugin
 * Plugin URI: https://www.axome.com/
 * Description: Top Bar abdelito
 * Version: 1.0.0
 * Author: Axome
 * Author URI: https://www.axome.com/
 * License: GPL-2.0+
 * Text Domain: ax-blocks
 * Domain Path: /languages
 */
 
if (!defined('ABSPATH')) {
    exit;
}
 
// Définitions des constantes
define( 'AX_MYPLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'AX_MUYPLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'AX_MYPLUGIN_BUILD_FOLDER_PATH', AX_MYPLUGIN_PATH . 'build' );

function ax_myplugin_init(): void
{
    //code...
    AxMyplugin\Plugin::instance();
}

add_action('plugins_loaded', 'ax_myplugin_init');