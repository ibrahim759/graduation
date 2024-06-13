<?php
//  to connect with database ===>
const HOSTNAME = 'localhost';
const DB_USERNAME = 'root';
const DB_PASS = '';
// const DB_NAME = 'bobos_2';
const DB_NAME = 'web_course';
function db_connect()
{
    return mysqli_connect(HOSTNAME, DB_USERNAME, DB_PASS, DB_NAME);
}
//end connect
// 
function redirect_page($url)
{
    header('location:' . $url);
    die();
}
// 
function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}
