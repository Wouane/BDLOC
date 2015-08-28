//Login sur home page
$(document).ready(function(){
    $("button").click(function(event){
    	event.stopPropagation();
        $(".login").animate({
        	top: '165px',
        	opacity: '1',
        });
    });
});
function onChange(){
	this.form.submit();
	//showUser(this.value)
}
//Page details
$(document).ready(function(){
    $(".btn-details").click(function(event){
    	event.stopPropagation();
        $(".details").animate({
        	
        	opacity: '1',
        });
    });
});

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


