var Lflag=0;

var pause=0;

var songs=["1.mp3","2.mp3","3.mp3","4.mp3"];

function Lay1(){
	document.getElementsByClassName("header")[0].style.background="rgb(87,87,172)";
	document.getElementsByClassName("List1")[0].style.background="rgb(87,87,172)";
	document.getElementsByClassName("List1")[1].style.background="rgb(87,87,172)";
	document.getElementsByClassName("List2")[0].style.background="rgb(87,87,172)";
	document.getElementsByClassName("List3")[0].style.background="rgb(87,87,172)";
	document.getElementsByClassName("List4")[0].style.background="rgb(87,87,172)";
}

function Lay2(){
	document.getElementsByClassName("header")[0].style.background="rgb(128,128,64)";
	document.getElementsByClassName("List1")[0].style.background="rgb(128,128,64)";
	document.getElementsByClassName("List1")[1].style.background="rgb(128,128,64)";
	document.getElementsByClassName("List2")[0].style.background="rgb(128,128,64)";
	document.getElementsByClassName("List3")[0].style.background="rgb(128,128,64)";
	document.getElementsByClassName("List4")[0].style.background="rgb(128,128,64)";
}

function Lay3(){
	document.getElementsByClassName("header")[0].style.background="rgb(64,128,128)";
	document.getElementsByClassName("List1")[0].style.background="rgb(64,128,128)";
	document.getElementsByClassName("List1")[1].style.background="rgb(64,128,128)";
	document.getElementsByClassName("List2")[0].style.background="rgb(64,128,128)";
	document.getElementsByClassName("List3")[0].style.background="rgb(64,128,128)";
	document.getElementsByClassName("List4")[0].style.background="rgb(64,128,128)";
}

function Lay4(){
	document.getElementsByClassName("header")[0].style.background="rgb(79,79,79)";
	document.getElementsByClassName("List1")[0].style.background="rgb(79,79,79)";
	document.getElementsByClassName("List1")[1].style.background="rgb(79,79,79)";
	document.getElementsByClassName("List2")[0].style.background="rgb(79,79,79)";
	document.getElementsByClassName("List3")[0].style.background="rgb(79,79,79)";
	document.getElementsByClassName("List4")[0].style.background="rgb(79,79,79)";
}

function RBox(){
	if (Lflag==0){
		document.getElementById('RegBox').className="classname";
		Lflag=1;
	}
	else{
		document.getElementById('RegBox').className="classname2";
		Lflag=0;
	}
}

function lBox(){
	if (Lflag==0){
		document.getElementById('LoginBox').className="classname";
		Lflag=1;
	}
	else{
		document.getElementById('LoginBox').className="classname2";
		Lflag=0;
	}
}
function exist(){
	document.getElementById('Login_Exist').className="blink_me";
}
function Submitter(){
	if(ChatMAIN.msgBox.value=='')
		alert("Enter Something!");
	else{
		var msg=ChatMAIN.msgBox.value;
		ChatMAIN.msgBox.value="";
	//Creating XMPHTTPREQUEST
	var myRequest = new XMLHttpRequest();
	myRequest.onreadystatechange=function(){
		if (myRequest.readyState==4&&myRequest.status==200) {
			document.getElementById("screen").innerHTML=myRequest.responseText;
			//console.log(myRequest.responseText);
		}
	}
//Sending Data From Post To Another PHP
myRequest.open("POST","back.php",true);
myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
myRequest.send("&msgBox="+msg);

}

}