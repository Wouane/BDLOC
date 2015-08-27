$('#recherche').on("keyup", function(){
	var kw = $('#kw').val();
	if (kw.length < 3) {
		$('#result').html("");
	}
	else {
			$.ajax({
				"url":"http://localhost/ajax/test.php",
				"data":{
					"kw": $("#kw").val()
				}
			}).done(function(response){
				$('#result').html(response);
			});	
		}
	
});