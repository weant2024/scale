function Mascaracelular(objeto){
    if(objeto.value.length == 0)
      objeto.value = '+55' + objeto.value;
 
    if(objeto.value.length == 3)
       objeto.value = objeto.value + ' ';
      
    if(objeto.value.length == 6)
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