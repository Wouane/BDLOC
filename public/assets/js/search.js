
$('#search').on("keyup", function()
{
	
	var search = $('#search').val();
	if (search.length < 0) {
		$('.listcat').html("");
	}


	else {
			$.ajax({
				//récupère l'url du formulaire
				"url":$("#searchform").attr("action"),

				"data":{
					"search": $("#search").val()
						}

			}).done(function(response) {
				var content = $(response).find(".listcat");
				
				$('.listcat').html(content);
				//console.log(content);
			});	
		}
	
});

//<LOGIN></LOGIN>


