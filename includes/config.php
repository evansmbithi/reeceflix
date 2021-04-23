<?php
ob_start(); #turns on output buffering
# waits until all php is executed before outputing it on the page

session_start();
# sessions are a way of saving variables and values even after the page has closed

date_default_timezone_set("Africa/Nairobi");
# Google "php timezone set"
# php.net /list of support timezones
# helps insert date and time into the database

# CONNECTING TO DATABASE with PHP Data Object
try{
    $con = new PDO("mysql:dbname=reeceflix;host=localhost", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    #Accesses a static property on the PDO called attribute error mode
}
catch (PDOException $e){
    exit("Connection failed: ".$e->getMessage());
}
?>