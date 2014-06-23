<?php
const SERVER = "localhost";
const USER = "root";
const PASS = "root";
const DB = "soccer_play_by_play";

function getConnection(){
    return  new mysqli(SERVER, USER, PASS, DB);
}

