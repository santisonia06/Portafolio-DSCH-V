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
	  