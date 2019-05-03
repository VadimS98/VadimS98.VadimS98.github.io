function AddNew(){
	var inputTitle = $('#inputTitle').val ();
	var inputText = $('#inputText').val ();
	$.ajax({
		url:    	'../functions/AddNews.php',
		type:		'POST',
		cache: 		false,
		data:   	{'title':inputTitle, 'text':inputText},
		dataType:	'html',
		success: function(data) {
			console.log(data);
			if (data == true) {
				$('#inputTitle').val ("");
				$('#inputText').val ("");
			} else {
				if (data == false)
					alert ("Что-то пошло не так!");
				else {
					switch (data) {
					case "MISSING_TITLE":
   					$('#inputTitle').css ("border-color", "#f7b4b4");
   					break;
					case "MISSING_TEXT":
   					$('#inputText').css ("border-color", "#f7b4b4");
   					break;
					default:
   					$('#inputText').css ("border-color", "#f7b4b4");
   					$('#inputTitle').css ("border-color", "#f7b4b4");
					}
				}
			}
		}
	});
}