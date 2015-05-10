call();

function ejecutarajax(){
	var conexion;

	if (window.XMLHttpRequest){
	  conexion = new XMLHttpRequest();
	} else {
	  conexion = new ActiveXObject("Microsoft.XMLHTTP");
	}

	conexion.onreadystatechange=function(){
		if(conexion.readyState==4 && conexion.status==200){
			document.getElementById("messages").innerHTML=conexion.responseText;
		}
	}

	conexion.open("POST","here.php", true);
	conexion.send();
	setTimeout(function(){
		call();
	}, 100);
}

function call(){
	ejecutarajax();
}