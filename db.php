<?php
//this script is for connection to databse
$dbhost = 'localhost';
$dbname = 'ims';
$dbuser = 'root';
$dbpass = '';


try{

    $dbcon = new PDO("mysql:host=($dbhost);dbname=($dbname)",$dbuser, $dbpass);
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $ex){

	 die($ex->getMessage());
}

?>