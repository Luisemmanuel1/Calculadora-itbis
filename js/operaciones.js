function calcularN(){
	var precio = Number(document.getElementById('txt_calc').value);
	var total_gral = precio; 
	var sub_total = total_gral / 1.18;
	var itbis = sub_total * 0.18;
	document.getElementById('total').value= sub_total;
	document.getElementById('itbis').value= itbis;
	document.getElementById('total_g').value= total_gral+".00";
}
function borrarT(){
	document.getElementById('txt_calc').value="";
	document.getElementById('total').value= "";
	document.getElementById('itbis').value= "";
	document.getElementById('total_g').value= "";
}
function pressT(){
	if (event.keyCode == 13){
		//alert('preciono enter');
		calcularN();
	}
}