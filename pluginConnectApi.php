<?php
/*
Plugin Name: pluginConnectApi
Plugin URI: https://www.linkedin.com/in/antonio-mar%C3%ADn-b0468592
Description: Este plugin permite conectarse a una api (probada en 127.0.0.1:8000) para realizar operaciones aritméticas
Version:1.0
Author: Antonio Marín
License:GPL
*/

//Esto es para evitar que un usuario pueda ejecutar un PHP introduciendo la ruta directamente en el navegador.
defined( 'ABSPATH' ) or die( 'Scripts no, gracias.' );

function add_CA_tables()
{

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    global $wpdb;

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE CONNECT_API_CONFIG (
    ID mediumint(9) NOT NULL AUTO_INCREMENT,
    TIME datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
    URLAPI varchar(55),
    PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}
register_activation_hook(__FILE__,'add_CA_tables');

add_action( 'admin_menu', 'menu_connect_api' );



function menu_connect_api(){
    //add_menu_page( 'ConnectApi', 'ConnectApi', 'manage_options', 'connectApi', 'contenido' );
      add_menu_page( 'ConnectApi', 'ConnectApi', 'manage_options', 'connectApi', 'contenido');
    //add_submenu_page('bibliolink','Configuracion','Configuracion','manage_options',plugin_dir_path(__FILE__).'admin/config_bbl.php');
}
 
function contenido(){
    include('includes/connectApi.php');
}


?>