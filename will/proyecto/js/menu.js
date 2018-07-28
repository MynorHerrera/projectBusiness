var m = {
	inicio: function(){
		var menu = document.getElementById("check");
		var icon =document.getElementById("icon-menu");	

		menu.addEventListener("change", function(e){
		if(e.target.checked){
			document.querySelector(".navbar ul").style.marginLeft = "0";
			icon.classList.add("icon-cancel");
			icon.classList.remove("icon-menu");
		}else{
			document.querySelector(".navbar ul").style.marginLeft = "-80%";
			icon.classList.add("icon-menu");
			icon.classList.remove("icon-cancel");
	}
	})
	}
}

m.inicio();



