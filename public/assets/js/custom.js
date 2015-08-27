$(document).ready(function(){
    $("button").click(function(){
        $(".login").animate({
        	top: '250px',
        	opacity: '1',
        });
    });
});
function onChange(){
	this.form.submit();
	//showUser(this.value)
}