<?php
// Start output buffering to capture output before sending it to the browser
ob_start();

// Set the default timezone to Asia/Manila
ini_set('date.timezone','Asia/Manila');
date_default_timezone_set('Asia/Manila');

// Start a PHP session
session_start();

// Include necessary files
require_once('initialize.php');
require_once('classes/DBConnection.php');
require_once('classes/SystemSettings.php');

// Create a new instance of DBConnection class
$db = new DBConnection;
// Get the database connection
$conn = $db->conn;

// Function to redirect to a specified URL
function redirect($url=''){
    if(!empty($url))
        echo '<script>location.href="'.base_url .$url.'"</script>';
}

// Function to validate and return the path of an image
function validate_image($file){
    if(!empty($file)){
        $ex = explode('?',$file);
        $file = $ex[0];
        $param =  isset($ex[1]) ? '?'.$ex[1]  : '';
        if(is_file(base_app.$file)){
            return base_url.$file.$param;
        } else {
            return base_url.'dist/img/no-image-available.png';
        }
    } else {
        return base_url.'dist/img/no-image-available.png';
    }
}

// Function to check if the user is using a mobile device
function isMobileDevice(){
    $aMobileUA = array(
        '/iphone/i' => 'iPhone', 
        '/ipod/i' => 'iPod', 
        '/ipad/i' => 'iPad', 
        '/android/i' => 'Android', 
        '/blackberry/i' => 'BlackBerry', 
        '/webos/i' => 'Mobile'
    );

    //Return true if Mobile User Agent is detected
    foreach($aMobileUA as $sMobileKey => $sMobileOS){
        if(preg_match($sMobileKey, $_SERVER['HTTP_USER_AGENT'])){
            return true;
        }
    }
    //Otherwise return false..  
    return false;
}

// Function to format a number with proper decimal precision
function format_num($number){
    if(is_numeric($number)){
        $ex = explode(".",$number);
        $dec_length = isset($ex[1]) ? strlen($ex[1]) : 0;
        return number_format($number,$dec_length);
    } else {
        return '0';
    }
}

// Flush the output buffer
ob_end_flush();
?>
