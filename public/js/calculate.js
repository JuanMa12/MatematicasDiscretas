var vlr1=0;
var opr="";
var bas="dec";
var rslt = "";
caracter = "0123456789";
var pos = ["a","b", "c", "d", "e", "f", "g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z","á","é","í","ó","ú","Á","É","Í","Ó","Ú"," ",".",",",":",";"];

function caracteres(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(caracter .indexOf(tecla) == -1 && !tecla_especial)
        return false;
}

function tomarValor(val){
	if(val != "" && val!= 0){
		if(bas == 'dec'){
			val =  parseInt(val, 10);
		}else if(bas == 'bin'){
			val =  parseInt(val, 2);
		}else if(bas == 'oct'){
			val =  parseInt(val, 8);
		}else if(bas == 'hex'){
			val =  parseInt(val, 16);
		}
	}else{
		val = 0;
	}
	return val;
}

function ponerBase(val, num=0){
	if(val=='bin'){
		num = num.toString(2);
		caracter = "01";
	}else if(val=='dec'){
		num = num.toString(10);
		caracter = "0123456789";
	}else if(val=='oct'){
		num = num.toString(8);
		caracter = "01234567";
	}else if(val=='hex'){
		num = num.toString(16);
		caracter = "0123456789abcdefABCDEF";
	}
	return num;
}

function  formato(val){
	num = document.getElementById('num1').value;
	var num = tomarValor(num);
	if(val == 'cif'){
		bas = 'cif';
		document.getElementById('cjOpr1').style.display="none";
		document.getElementById('cjOpr2').style.display="none";
		document.getElementById('cjCif').style.display="block";
		vlr1 = 0;
		document.getElementById('num1').value= "";
		document.getElementById('pr').innerHTML = "";
    	caracter = " áéíóúabcdefghijklmnñopqrstuvwxyz";
	}else{
		document.getElementById('cjOpr1').style.display="block";
		document.getElementById('cjOpr2').style.display="block";
		document.getElementById('cjCif').style.display="none";
		if(bas == "cif"){
			vlr1 = 0;
			document.getElementById('num1').value= "";
			document.getElementById('pr').innerHTML = "";
			rslt = "";
		}
		if(num > 0){
			num = ponerBase(val, num);
			document.getElementById('num1').value= num;
		}
		
		if(vlr1 != 0 && vlr1 != ""){
			vlr1 =  tomarValor(vlr1);
			vlr1 = ponerBase(val, vlr1);
			document.getElementById('pr').innerHTML = vlr1;
		}
		ponerBase(val);
		bas = val;	
	}
}

function limpiar(){
	vlr1 = 0;
	document.getElementById('num1').value= "";
	document.getElementById('pr').innerHTML = "";
}

function operar(operacion){
	var num = document.getElementById('num1').value;
	if(num!=""){
		if(vlr1!=0){
			vlr1 = tomarValor(vlr1);
			num = tomarValor(num);
			if(opr == "sum"){
				vlr1 = vlr1 + num;
			}else if(opr == "res"){
				vlr1 = vlr1 - num;
			}else if(opr == "mul"){
				vlr1 = vlr1 * num;
			}else if(opr == "div"){
				vlr1 = vlr1 / num;
			}
			opr = operacion;
			vlr1 = ponerBase(bas, vlr1)
			document.getElementById('pr').innerHTML = vlr1;
			var num = document.getElementById('num1').value = "";
		}else{
			opr = operacion;
			vlr1 = num;
			document.getElementById('pr').innerHTML = vlr1;
			var num = document.getElementById('num1').value = "";
		}
	}
	if(opr == ''){
		var num = document.getElementById('num1').value = vlr1;
	}
}

function cifrar(){
	var palb = document.getElementById('num1').value;
	var nPos=0;
	rslt = "";
	for(i = 0;i < palb.length; i++){
		nPos = Math.abs((pos.indexOf(palb.charAt(i)) - 10)+68);
		if(nPos>68){
			nPos = nPos - 68;
		}
		rslt = rslt + pos[nPos]; 
	}
	document.getElementById('num1').value = "";
	document.getElementById('num1').value = rslt;
}

function decifrar(){
	var palb = document.getElementById('num1').value;
	var nPos=0;
	rslt = "";
	for(i = 0;i < palb.length; i++){
		nPos = (pos.indexOf(palb.charAt(i)) - 68)+10;
		if(nPos<0){
			nPos = pos.indexOf(palb.charAt(i)) + 10;
		}
		rslt = rslt + pos[nPos];
	}
	document.getElementById('num1').value = "";
	document.getElementById('num1').value = rslt;
}

