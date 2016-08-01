window.addEventListener("load", function(){
	var tabs = document.getElementsByClassName("articleTab");
	var content = document.getElementsByClassName("article");

	tabs[0].style.background = "#ebcded"; 

	for(i=0; i<tabs.length; i++){
		
		tabs[i].addEventListener("click", function(){
			var id = this.getAttribute("id");
			
			for(i=0; i<content.length;i++){
				content[i].style.display = "none";
			}
			
			document.getElementById("art_"+id).style.display = "block";
			
			for(i=0; i<tabs.length;i++){
				tabs[i].style.background = "#C2AFC7";
			}
			
			this.style.background = "#ebcded";
		});

		content[i].style.display ="none";
	}

	content[0].style.display = "block";



});