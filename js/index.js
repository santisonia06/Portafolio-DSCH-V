let HT = document.getElementById("zona1");
let T = document.getElementById("zona2");
let S = document.getElementById("zona3");
let J = document.getElementById("zona4");
let K = document.getElementById("zona5");

function clickInA() {
	 T.style.display="block";
	 //Otras Paginas Cerradas
	 S.style.display="none";
	 J.style.display="none";
	 K.style.display="none";
}
function clickInB() {
	  S.style.display="block";
	  //Otras Paginas Cerradas
	  T.style.display="none";
	  J.style.display="none";
	  K.style.display="none";
	 
}
function clickInC() {
	 J.style.display="block";	
	 //Otras Paginas Cerradas
	 K.style.display="none";
	 T.style.display="none";
	 S.style.display="none";
	
}
function clickInD() {
	 K.style.display="block";
	  //Otras Paginas Cerradas
	 S.style.display="none";
	 T.style.display="none";
     J.style.display="none";
	
}
//REFRESH
function refresh() {
	window.location.reload()
	let R = document.getElementById("recargar");
	 R.style.display="block";
	 
    }
	function compruebaAceptaCookies() {
		if(localStorage.aceptaCookies != 'true'){
		  cajacookies.style.display = 'block';
		}
		
	  
	  }
	  //BUSCAR CODIGO
	  	

	document.getElementById("passwordForm").addEventListener("submit", function(e) {
    e.preventDefault();
    var password = document.getElementById("password").value;
	var zona6 = document.getElementById("zona6");
	var zona5 = document.getElementById("zona5");
	var zona4 = document.getElementById("zona4");
	var zona3 = document.getElementById("zona3");
	var zona2 = document.getElementById("zona2");
	var zona1 = document.getElementById("zona1");

    if (password === "contraseña") {
        document.getElementById("message").innerHTML = "Contraseña correcta!";
		zona6.style.display="block";
		zona5.style.display="none";
		zona4.style.display="none";
		zona3.style.display="none";
		zona2.style.display="none";
		zona1.style.display="none";
    } else {
        document.getElementById("message").innerHTML = "Contraseña incorrecta!";
		window.location.reload()
    }
});
		  
	
//Bloquear
var userAgent = navigator.userAgent;



// Bloquear usuarios de Android
if (userAgent.includes("Android")) {
  // Bloquear al usuario
//alert("Lo sentimos, no puedes acceder desde este dispositivo");
//document.documentElement.innerHTML = '';
 
}

// Bloquear usuarios de iPhone
if (userAgent.includes("iPhone")) {
  // Bloquear al usuario
//alert("Lo sentimos, no puedes acceder desde este dispositivo");
//document.documentElement.innerHTML = '';
}

// Bloquear usuarios de computadoras
if (!userAgent.includes("Android") && !userAgent.includes("iPhone")) {
  // Bloquear al usuario
//alert("Lo sentimos, no puedes acceder desde este dispositivo."); 
//document.documentElement.innerHTML= '' ;    
}
//COKIE
function compruebaAceptaCookies() {
	if(localStorage.aceptaCookies != 'true'){
	  cajacookies.style.display = 'block';
	}
  }
	  function aceptarCookies() {
	   localStorage.aceptaCookies = 'true';
		cajacookies.style.display = 'none';
	  
	  }

	  $(document).ready(function () {
		compruebaAceptaCookies();
		 
	  });
	 //Open URL 
	 function openD(url) {
         var isHTTPS = url.startsWith("https://");
            
            if (isHTTPS) {
                 open(url,'','top=300,left=300,width=500,height=10,scrollbars=1,location=0,status=0,menubar=0') ;
            } else {
                alert("Este sitio puede ser peligroso");
            }
    }
	
	  