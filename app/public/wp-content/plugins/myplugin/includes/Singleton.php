<?php

namespace AxMyplugin;

if (!defined('ABSPATH')) {
    exit;
}

final class Plugin {
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
	    //code...
    }
}