//Login sur home page
$(document).ready(function(){
  //console.log( "ready!" );
  var url = document.location.href;
  console.log(url);
  if(url!='http://bdloc.dev/'){$('.btn-login').css('display','none');}
    $("button").click(function(event){
    	//event.stopPropagation();
      $('.login').css('display','block');
        $(".login").animate({
        	top: '165px',
        	opacity: '1',
        });
    });
    $('.closelog').click(function(e){
        $(".login").animate({
          top: '-665px',
          opacity: '0.1',
        });
    }); 
    //Page details
        $(".btn-details").click(function(event){
        event.stopPropagation();
        $(".details").animate({         
          opacity: '1',
        });
    });
});

//requête AJAX pour filtres catégories
$('.chk_boxes').on("click", function(){
             //console.log('Affichage');
  var categorie = $('.chk_boxes').val();  
  if (categorie == false) {
    $('.listcat').html("");
  }
  else {
      $.ajax({
        //récupère l'url du formulaire        
        data:$('#filters').serialize()+'&'+$('#dispo').serialize()
      }).done(function(response){
        var content=$(response).find(".listcat");
        $('.listcat').html(content);
      }); 
    }
});
//available
// $('.available').on("click", function(){
//              //console.log('Affichage');
//   var available = $('.available').val()
//   if (available == false) {
//     $('.listcat').html("");
//   }
//   else {
//       $.ajax({
//         //récupère l'url du formulaire        
//         "data":$('#dispo').serialize()
//       }).done(function(response){
//         var content=$(response).find(".listcat");
//         $('.listcat').html(content);
//       }); 
//     }
// });


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