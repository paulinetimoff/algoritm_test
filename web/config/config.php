<?php

$dblocation = 'localhost';

$dbname = 'tipo';

$dbuser = 'root';

$dbpasswd = '';

$link = mysqli_connect($dblocation, $dbuser, $dbpasswd, $dbname); 

if (!$link){
    exit('Error connect database');
}

// mysqli_query($link, "SET NAMES utf8"); 
