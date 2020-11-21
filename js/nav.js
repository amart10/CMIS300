//navigation bar
//get
var ico=document.getElementsByClassName("ico")[0];
var lists=document.getElementsByClassName("uu-lists")[0];
//click
ico.onclick = function() {
//determine style
	if(lists.style.opacity ==1){
		lists.style.opacity="0";
	}else{
		lists.style.opacity="1";
	}
 }
