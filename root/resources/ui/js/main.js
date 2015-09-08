$(document).ready(function() {

	// General
	$('html').removeClass('no-js');



	// pjax
	// $(function() { $("a").pjax("#main", { fragment: "#main" }); });
	// $(document).pjax('a', '#main');
	



//$(document).ready(function() {
  //  $("#main a").pjax(
    //    {
      //      container: "#main",
        //    timeout: 5000
        //}
		//);
//});


});

var direction = "right";

function autorun()
{
	
	console.error('autorun');
	
	$(document).pjax('a', '#main');
	$(document).on('pjax:start', function() {
		$(this).addClass('loading')
	});
	$(document).on('pjax:end', function() {
		$(this).removeClass('loading')
	});
}

if (document.addEventListener) document.addEventListener("DOMContentLoaded", autorun, false);

else if (document.attachEvent) document.attachEvent("onreadystatechange", autorun);

else window.onload = autorun;




