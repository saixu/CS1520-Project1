window.onload= function(){
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

	var IT= ["Google", "Facebook", "Uber", "Amazon"];
	var url1= ["www.google.com", "www.Facebook.com", "www.Uber.com", "www.Amazon.com"];
	
	var Finance= ["PNC", "National Bank", "Wall Street", "ICBC"];
	var url2= ["www.pnc.com", "www.nationalbank.com", "www.wallstreet.com", "www.icbc.com"];
	
	var Medical= ["UPMC1", "UPMC2", "UPMC3", "UPMC4"];
	var url3= ["www.google.com", "www.Facebook.com", "www.Uber.com", "www.Amazon.com"];
	var companies= document.getElementsByClassName("company");
	var show= document.getElementById("show");
	companies[0].onclick= function(){
		show.innerHTML= " ";
		for(var j= 0; j< 4; j++){
			show.innerHTML+= "<div><p>"+ IT[j]+"</p><a href= '"+url1[j]+"'>Website</a></div>";
		}
	}
	companies[1].onclick= function(){
		show.innerHTML= " ";
		for(var j= 0; j< 4; j++){
			show.innerHTML+= "<div><p>"+ Finance[j]+"</p><a href= '"+url2[j]+"'>Website</a></div>";
		}
	}
	companies[2].onclick= function(){
		show.innerHTML= " ";
		for(var j= 0; j< 4; j++){
			show.innerHTML+= "<div><p>"+ Medical[j]+"</p><a href= '"+url3[j]+"'>Website</a></div>";
		}
	}
}

