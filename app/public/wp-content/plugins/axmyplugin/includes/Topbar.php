<?php

namespace AxMyplugin;

if (!defined('ABSPATH')) {
    exit;
}

final class Topbar {
    private static $_instance = null;

    public static function instance(): ?self
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct() {
        add_action('init', [$this, 'init']);
    }
    
    public function init() {
        var_dump("test");
        add_action('wp_body_open', [$this, 'addHtmlStructure']);
    }

    public function addHtmlStructure() {
        ?>
            <div class="top-bar-container">
                <span>Bonjour voici le texte du plugin</span>
            </div>
        <?php
    }
}