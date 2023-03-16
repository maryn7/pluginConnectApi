<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$url = $_POST['url'];
echo insert_url($url);

 
function insert_url($url){   
    define( 'SHORTINIT', true );
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );
    global $wpdb;     
    //include( "../../../../wp-config.php" );

    
    $table_name = 'CONNECT_API_CONFIG';        
    $wpdb->update( $table_name, 
    // Datos que se remplazarán
    array( 
        'TIME' => date('Y-m-d H:i:s'),
        'URLAPI' => $url
    ),
    // Cuando el ID del campo es igual al número 1
    array( 'ID' => 1 )
    );
    $error = $wpdb->print_error();
    echo $error; 
    
    
}



?>