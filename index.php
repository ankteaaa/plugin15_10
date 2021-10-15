<?php
/** 
* Plugin name: Popup with JavaScript
* Description: A popup that can be turned off with JavaScript
* Plugin URI: http://localhost
* Version: 1.0
* Author: Andreas Kure Thorngreen
* Author http://localhost
* License: GPL2
*/ 


function showPopup(){
    §message = 'Hello world!';
    return §message;
}

add_shortcode('andreaspopup', 'showPopup');
?>