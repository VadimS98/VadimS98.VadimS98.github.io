<?php
   require_once "BDconnect.php";
   function getNews(){
      global $connection;
      $data = $connection->query("SELECT * FROM Articles ORDER BY id DESC");
      closeDB();
      return dataToArray($data);
   }
   function dataToArray($data){
      $array = array();
      while (($row = $data->fetch_assoc())) {
         $array[] = $row;
      }
      return $array;
   }
?>