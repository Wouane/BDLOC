
$('#search').on("keyup", function(){
	console.log('julien');
	var search = $('#search').val();
	if (search.length < 0) {
		$('.listcat').html("");
	}
	else {
			$.ajax({
				//récupère l'url du formulaire
				"url":$("#filter").attr("action"),
				"data":{
					"search": $("#search").val()
				}
			}).done(function(response){
				var content=$(response).find(".listcat")
				$('.listcat').html(content);
			});	
		}
	
});

