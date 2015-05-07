<?php
//Connect to MySQL
$con = mysqli_connect("localhost", "root","whobutJ90","shoutit"); //MySQLI CONSTRUCTOR of con with <host>, <user>, <password>, <sql_document>

//Test connection
if(mysqli_connect_errno()){
	echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}
