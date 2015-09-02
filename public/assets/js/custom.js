//Login sur home page
$(document).ready(function(){
    $("button").click(function(event){
    	//event.stopPropagation();
      //$('.login').css('display','block');
        $(".login").animate({
        	top: '165px',
        	opacity: '1',
        });
    });
});
// $('#slider').click(function(e){
//   $(".login").animate({
//           top: '-665px',
//           opacity: '0',
//         });
//           //e.stopPropagation();
 
// });
// $('.login').click(function(e){
//   //empêche l'évenement sur la div login
//   e.stopPropagation();
// });
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


//page catalogue check / uncheck box
$(".chk_boxe").click(function () {
    $('.chk_boxes').prop('checked', this.checked);
    $(".cheked_label").text(function(i, v){
        return v === 'Check all' ? 'Uncheck all' : 'Check all'
    })
});