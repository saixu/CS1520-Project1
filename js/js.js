(function(){
   var arr;
   var input_company= document.getElementById("search_input1");
    document.getElementById("button").onclick= function(){
   	var html= "";
   	document.getElementById("result").innerHTML= html;
   	var xhttp; 
  	if (input_company.value == " ") {
    	document.getElementById("result").innerHTML = "";
    	return;
  	}
  	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
    		var arr = JSON.parse(this.responseText).data;
    		for(var i= 0; i< arr.length; i++){ 
   				if(arr[i].CompanyName== input_company.value){ 
   					html+= '<li id= "search_result">Company Name: '+ arr[i].CompanyName+ '             Position: '+arr[i].Position+ '             Location: '+arr[i].Location+ '</li>';
   				} 
   			} 
   			console.log(html);
   		document.getElementById("result").innerHTML= html;
    	}
  	};
  	xhttp.open("GET", 'http://localhost/cs1520-project1/company.php', true);
 	xhttp.send();
   }




	var arr= document.getElementsByClassName("li");
	for(var i= 0; i< arr.length; i++){
		arr[i].onmouseover= function(){
			this.style.background= "#666";
			this.getElementsByTagName('ul')[0].style.display= "block";
		};
		arr[i].onmouseout= function(){
			this.style.background= "#eee";
			this.getElementsByTagName('ul')[0].style.display= "none";
		};
	}

	var arr= document.getElementsByClassName("head_li");
	var resume= document.getElementById("resume_show");
	var list= document.getElementById("list_show");
	for(var i= 0; i< arr.length; i++){
		arr[i].onmouseover= function(){
			this.style.background= "#666";
		};
		arr[i].onmouseout= function(){
			this.style.background= "#eee";
		};
	}

	arr[0].onclick= function(){
		resume.style.display= "block";
		list.style.display= "none";
	}
	arr[1].onclick= function(){
		list.style.display= "block";
		resume.style.display= "none";
	}




	var IT= ["Google", "Facebook", "Uber", "Amazon"];
	var url1= ["https://www.google.com", "https://www.Facebook.com", "https://www.Uber.com", "https://www.Amazon.com"];
	
	var Finance= ["PNC", "National Bank", "Wall Street", "ICBC"];
	var url2= ["https://www.pnc.com", "https://www.nationalbank.com", "https://www.wallstreet.com", "https://www.icbc.com"];
	
	var Medical= ["UPMC1", "UPMC2", "UPMC3", "UPMC4"];
	var url3= ["https://www.UPMC.com", "https://www.UPMC.com", "https://www.UPMC.com", "https://www.UPMC.com"];
	var companies= document.getElementsByClassName("company");
	var show= document.getElementById("show");
	companies[0].onclick= function(){
		show.innerHTML= " ";
		for(var j= 0; j< 4; j++){
			show.innerHTML+= "<div class= 'companyname'><p>"+ IT[j]+"</p><a href= '"+url1[j]+"'>Website</a></div>";
		}
	}
	companies[1].onclick= function(){
		show.innerHTML= " ";
		for(var j= 0; j< 4; j++){
			show.innerHTML+= "<div class= 'companyname'><p>"+ Finance[j]+"</p><a href= '"+url2[j]+"'>Website</a></div>";
		}
	}
	companies[2].onclick= function(){
		show.innerHTML= " ";
		for(var j= 0; j< 4; j++){
			show.innerHTML+= "<div class= 'companyname'><p>"+ Medical[j]+"</p><a href= '"+url3[j]+"'>Website</a></div>";
		}
	}
})();
