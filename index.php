<?php
/*
 * Plugin Name: GitModule Pro
 * Textdomain: gitmodule-pro
 * */

// Security Check
defined('ABSPATH') || die();

// Constant defination
if( !defined('GIT_MODULE_PRO') )
    define('GIT_MODULE_PRO', 'git_module_pro_version');

require_once ('lib/gitmodule-implementation-demo-free/index.php');

class WebAppickGMP{

    public function __construct(){

        // hook registration
        add_filter('webappick_menu_page', [&$this, 'main_menu_title_update']);

    }

    public function main_menu_title_update($title){

        return str_replace('Free', 'Pro', $title);

    }

}

global $WebAppickGMP;
$WebAppickGMP = new WebAppickGMP();