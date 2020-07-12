
document.getElementById("but1").addEventListener("click", function(){
    this.innerHTML = "OK";
}); 




document.getElementById("api_post_1__BUT__GET").addEventListener("click", function(){

  send("/api/user/friend?userid=2", document.getElementById("api_post_1__result"));
}); 


document.getElementById("api_post_2__BUT__GET").addEventListener("click", function(){

  send("/api/user/friend?userid=1", document.getElementById("api_post_2__result"));
}); 







function send(url, $result_el){
	var http = new XMLHttpRequest();
	var url = '//'+window.location.hostname+url;
	http.open('GET', url, true);
	http.setRequestHeader('Content-type', 'application/json; charset=UTF-8');
	http.setRequestHeader('Authorization', 'API_KEY 45%3rfh./,]!=-&FcvFRDVdvm,kl|z.>?');
	http.timeout = 10000; // 10 seconds

	http.onreadystatechange = function() {
	    if(http.readyState === 4) {
	    	if(http.status === 200){
	    		const r = JSON.parse(http.responseText);
				$result_el.textContent = JSON.stringify(r);
	    	}	
	    }
	}

	http.send();
}