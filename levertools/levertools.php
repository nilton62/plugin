<?php
/*
Plugin Name: Levertools
Plugin URI: https://levertools.com
Description: This plugin shows the current user IP address. Shortcode [levertools_ip] displays the IP address.
Author: Nilton Huayhua
Version: 1.0
Author URI: https://levertools.com
*/

function showLevertoolsIp(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return apply_filters('wpb_get_ip', $ip);
}
add_shortcode('levertools_ip', 'showLevertoolsIp'); 
?>
