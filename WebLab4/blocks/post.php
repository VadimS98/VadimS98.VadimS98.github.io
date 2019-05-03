<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
 	<link rel="stylesheet" href="../css/AddNews.css">
</head>
<body>
<div class="main">
   <div class="apanel col-sm-10 offset-sm-1 col-md-8 offset-md-2">
      <div class="container-fluid">
     		<p class="formHeader">Добавьте новость</p>
     		<form>
     			<div class="form-group">
   			    <label  for="inputTitle">Заголовок</label>
   			    <input type="text" class="form-control" id="inputTitle"  placeholder="Введите заголовок">
   		  	</div>
   		  	<div class="form-group col-xs-8">
   			    <label  for="inputText">Пост</label>
   				<textarea class="form-control" id="inputText" cols="80%" rows="10"></textarea>
   		  	</div>
   		  	<button id="send" type="button" class="btn btn-outline-secondary btn-lg" onclick="AddNew();">Отправить!</button>
     		</form>
     	</div>
   </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="../js/script.js"></script>
</body>