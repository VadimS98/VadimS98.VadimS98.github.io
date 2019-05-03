<?php
   $err = "";
   if(trim($_POST['title'])  == "" && trim($_POST['text'])  == ""){
      $err = "All fields are not filled";
   }elseif (trim($_POST['title'])  == "") {
      $err = "MISSING_TITLE";
   }elseif (trim($_POST['text'])  == "") {
      $err = "MISSING_TEXT";
   }
   if ($err != ""){
      echo $err;
      exit;
   }
   require_once "BDconnect.php";
   global $connection;
   $sql = "INSERT INTO Articles (title, text)
      VALUES (\""
         .$_POST['title'].
         "\", \""
         .$_POST['text'].
      "\")";
   if ($connection->query($sql) === TRUE) {
      echo true;
   } else {
      echo "Error: " . $sql . "<br>" . $connection->error;
   }
   closeDB();
?>