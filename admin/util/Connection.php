<?php
function getConnection(){
    
    $SERVER = "127.0.0.1";
    $USER = "root";
    $PASS = "root";
    $DB = "soccer_play_by_play";
    
    return  new mysqli($SERVER, $USER, $PASS, $DB);
}

