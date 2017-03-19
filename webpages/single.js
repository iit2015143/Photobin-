window.onload=function(){

	cutme=document.getElementById("cutme");
	cutme.onclick= cutmenow;

	uncleofimage = document.getElementsByClassName("imagewrapper");
	for(var i=0; i<uncleofimage.length; i++){
		uncleofimage[i].nextSibling.children[0].onclick = opennewalbum;
	}
}

//UP for foto scrolling view :-) go ahead man

function opennewalbum(e){
	console.log("iam called");
	body  = document.getElementsByTagName("body");
	body[0].style.overflow="hidden";
	document.getElementById("Fixed").style.display="block";
	document.getElementById("Absolute").style.display="block";
	below_table=document.getElementById("below_table").children;
	showimg = document.getElementById("Column2");
	//showimg.innerHTML="fuck me";
	//maincontent= table.children[0].children[1];
	image= document.createElement("img");
	image.src=e.target.src;
	image.style.maxWidth="100%";
	image.style.maxHeight="100%";
	//image.width=100%;
	//image.height=100%;
	//APPEND CHILD didnt work as it keeps on adding

	below_table[6].innerHTML="<div style=\"height:100%;width:100%\"><img src= \"" + e.target.src + "\" style=\"max-width:100%; max-height:100%\"></div>";
	showimg.innerHTML="<div style=\"height:500px;width:100%\"><img src= \"" + e.target.src + "\" style=\"max-width:100%; max-height:100%\"></div>";
	//for(var i=1; i<)
}

function cutmenow(){
	body  = document.getElementsByTagName("body");
	body[0].style.overflow="auto";
	document.getElementById("Fixed").style.display="none";
	document.getElementById("Absolute").style.display="none";
}