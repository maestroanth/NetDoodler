function showContent(page, anchor) {
    var xmlhttp = new XMLHttpRequest();
    if(anchor == "#rate"){
        xmlhttp.addEventListener("load", rateListener);
    }
    if(anchor == "#discount"){
        xmlhttp.addEventListener("load", discountListener);
    }

    xmlhttp.onreadystatechange = function() {
    	document.getElementById("theContent").innerHTML = xmlhttp.responseText;
    	
    };
    xmlhttp.open("GET", page, true);

    xmlhttp.send();
    xmlhttp.load


    
}

function rateListener () {

		$('html, body').animate({
	        scrollTop: $("#rate").offset().top - $("#mainnav").height()
	    }, 500);

	}

function discountListener () {
		$('html, body').animate({
	        scrollTop: $("#discount").offset().top - $("#mainnav").height()
	    }, 500);

}