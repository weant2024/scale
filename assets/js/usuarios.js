function redirectTo(url, id) {
    window.location.href = url + '?id=' + id;
}

function Mascaracelular(objeto){
    if(objeto.value.length == 2)
       objeto.value = objeto.value + ' ';
  
 }

 function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0 || tecla==9) return true;
	else  return false;
    }
}