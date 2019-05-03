<?php

$connection = mysqli_connect('localhost','root','','articles');

if( $connection == false ){
	echo "Не удалось подключиться к базе данных";
	echo mysqli_connect_error();
	exit(); 
}

function closeDB(){
  global $connection;
  $connection->close();
}

?>