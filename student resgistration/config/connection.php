<?php

/**
 * Configuration for database connection
 * Author: kripa john
*/

$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "studentsystem"; 

$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
			  