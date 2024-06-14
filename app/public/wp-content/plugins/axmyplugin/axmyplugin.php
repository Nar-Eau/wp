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
        __( 'Axome My Plugin', 'axome-my-plugin' ),
        __( 'Axome My Plugin', 'axome-my-plugin' ),
        'manage_options',
        'axome-my-plugin',
        'ax_my_plugin_settings_page_html'
    );
}

function ax_my_plugin_settings_page_html() {
    printf(
        '<div id="top-bar-settings">%s</div>', esc_html('Chargement...' , 'axome-my-plugin' )
    );
}

function top_bar_settings_page_enqueue_scripts( $admin_page ) {
    if ( 'settings_page_axome-my-plugin' !== $admin_page ) {
        return;
    }

    $asset_file = plugin_dir_path(__FILE__) . 'build/index.asset.php';

    if ( !file_exists( $asset_file ) ) {
        return;
    }

    $asset = include $asset_file ;

    wp_enqueue_script(
        'axome-my-plugin-script',
        plugins_url( 'build/index.js', __FILE__),
        $asset['dependencies'],
        $asset['version'],
        array(
            'in_footer' => true,
        )
    );
}

add_action( 'admin_enqueue_scripts', 'top_bar_settings_page_enqueue_scripts' );

add_action( 'admin_menu', 'my_plugin_settings_page');

add_action('plugins_loaded', 'ax_myplugin_init');