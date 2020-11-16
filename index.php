<?php
/*
* Plugin Name: Manaknightdigital Debug
* Description: This plugin helps you get information when FTP and SSH is disabled
* Version:     1.0
* Author:      Ryan Wong
* Author URI:  https://manaknightdigital.com/
* License:     Private
* License URI: https://manaknightdigital.com/
* Text Domain: manaknight
*/
defined( 'ABSPATH' ) or die( '¡Errors!' );

define('MKD_PLUGIN_FILE_PATH', __FILE__);

function mkd_debug_menus () {
    //this is the main item for the menu
    add_menu_page('MKD Debug', //page title
    'Debug', //menu title
    'manage_options', //capabilities
    'mkd_debug', //menu slug
    'mkd_debug' //function
    );
}

function mkd_debug () {
  ?>
  <p>Manaknightdigital Debug Panel</p>

  <?php
    echo 'DB_NAME: ' . DB_NAME . '<br/>';

    /** MySQL database username */
    echo 'DB_USER: ' . DB_USER . '<br/>';

    /** MySQL database password */
    echo 'DB_PASSWORD: ' . DB_PASSWORD . '<br/>';

    /** MySQL hostname */
    echo 'DB_HOST: ' . DB_HOST . '<br/>';

    /** Database Charset to use in creating database tables. */
    echo 'DB_CHARSET: ' . DB_CHARSET . '<br/>';

    /** The Database Collate type. Don't change this if in doubt. */
    echo 'DB_COLLATE: ' . DB_COLLATE . '<br/>';

    echo 'Path: ' . MKD_PLUGIN_FILE_PATH . '/mysql.php<br/>';
}

add_action('admin_menu','mkd_debug_menus');
