<?php

ob_start();
session_start();

date_default_timezone_set("Europe/Warsaw");


try
{
    $connect = new PDO("mysql:dbname=netflix;host=localhost","root","");
    $connect->setAttribute( PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
}
catch(PDOException $e)
{
    exit("Errror" . $e->getMessage());
}

?>