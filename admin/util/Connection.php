<?php
function getConnection(){
    
    $SERVER = "localhost";
    $USER = "root";
    $PASS = "root";
    $DB = "soccer_play_by_play";
    
    return  new mysqli($SERVER, $USER, $PASS, $DB);
}

