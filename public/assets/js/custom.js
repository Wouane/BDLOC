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