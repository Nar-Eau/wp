<?php
/**
 * Plugin Name: Axome My Plugin
 * Plugin URI: https://www.axome.com/
 * Description: Top Bar abdelito
 * Version: 1.0.0
 * Author: Axome
 * Author URI: https://www.axome.com/
 * License: GPL-2.0+
 * Text Domain: ax-blocks
 * Domain Path: /languages
 */

require __DIR__ . '/vendor/autoload.php';
 

if (!defined('ABSPATH')) {
    exit;
}

 
// Définitions des constantes
define( 'AX_MYPLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'AX_MUYPLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'AX_MYPLUGIN_BUILD_FOLDER_PATH', AX_MYPLUGIN_PATH . 'build' );

function ax_myplugin_init(): void
{
    AxMyplugin\Topbar::instance();
}

function my_plugin_settings_page() {
    add_options_page(
        __( 'Axome My Plugin', 'Axome My Plugin' ),
        __( 'Axome My Plugin', 'Axome My Plugin' ),
        'manage_options',
        'Axome My Plugin',
        'ax_my_plugin_settings_page_html'
    );
}

function ax_my_plugin_settings_page_html() {
    printf(
        '<div class="top-bar-container"><span>Bonjour voici le texte du plugin</span></div>', esc_html('Chargement...' , 'Top Bar abdelito' )
    );
}

add_action( 'admin_menu', 'my_plugin_settings_page');

add_action('plugins_loaded', 'ax_myplugin_init');