window.onload=function(){

	box= document.getElementsByClassName("fa-bars");
	albums= document.getElementsByClassName("albums");
	for(var i=0; i<box.length; i++){
		box[i].onclick=overbox;
	}


	for(var i=0; i<albums.length - 1; i++){
		//ONMOUSEOUT WAS NOT WORKING CORRECTLY
		albums[i].onmouseleave=removebox;
	}
}

//Removing box over image when mouse leaves albums div.

function removebox(){
	var reqnode = this.children[0];
	if(reqnode.style.opacity < 1 && reqnode.style.opacity > 0){
		reqnode.style.visibility="hidden";
		clearInterval(p);
		reqnode.style.opacity=0;
		console.log("opacity = "+reqnode.style.opacity);
	}
	else if(reqnode.style.opacity == 1){
		deanimateopacity(reqnode);
		//setTimeout(function(){reqnode.style.visibility="hidden";
							//reqnode.style.opacity=0;},1500);
	}
	
}

//Draws box over albums

function overbox(){
	var node=this.parentNode.children;
	var reqnode=node[0];
	console.log(reqnode.style.visibility);

	//IT HAD AN ISSUE WITH TWO CLICKS TRIGGERING

	if((!(reqnode.style.visibility) || reqnode.style.visibility=="hidden")&& reqnode.style.opacity==0){
		reqnode.style.visibility="visible";
		animateopacity(reqnode);
		console.log(reqnode.style.visibility);
	}
	else if(reqnode.style.opacity==1){
		//reqnode.style.visibility="hidden";
		deanimateopacity(reqnode);
		//setTimeout(function(){reqnode.style.visibility= "hidden";
							//this.children[0].style.opacity=0;
						//},1000);
		console.log(reqnode.style.visibility);
	}
}

//INCREASE AND DECREASE OPACITY LOGIC

function animateopacity(obj){
	p=setInterval(function(){opaq(obj);},10);
	//setTimeout(function(){clearInterval(p);},1200); //LISTENER GETS QUEUED SO DOESNOT WORK AS EXPECTED
}

function opaq(obj){
	obj.style.opacity -= (-0.01) ;
	console.log("opacity = "+obj.style.opacity);
	if(obj.style.opacity >= 1)
		clearInterval(p);
}
function deanimateopacity(obj){
	p=setInterval(function(){deopaq(obj);},10);
	//setTimeout(function(){clearInterval(p);},1000);
}

function deopaq(obj){
	obj.style.opacity -= 0.01 ;
	console.log("opacity = "+obj.style.opacity);
	if(obj.style.opacity <= 0){
		clearInterval(p);
		obj.style.visibility="hidden";
	}
}

