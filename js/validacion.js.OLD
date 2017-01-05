function ValidarFormulario()
{
    var url = location.href.split("/").pop();
	var regexp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
	var alertita = "";
	var i = 0;
	var arrayrosa = [false,false,false,false,false,false,false,false];
	var hoy = new Date();
	var hace16a = new Date();
	ano = hoy.getFullYear() - 16;
	hace16a.setFullYear(ano);
	hace16a.setHours(0);
	hace16a.setMinutes(0);
	hace16a.setSeconds(0);
    
    if (url=="igbadmin.php"){
        var condiciones = true;
    }
    else
    {
        var condiciones = false;
    }
    
	if (document.form1.usuario.value.length == 0)
	{
		alertita += "Tiene que introducir un nombre de usuario\n";
		arrayrosa[0] = true;
	}
	else{
		if (document.form1.usuario.value.length < 6)
		{
			alertita += "El nombre de usuario ha de tener al menos 6 caracteres\n";
		}
		else
		{
			arrayrosa[0] = false;
		}
	}
	if (document.form1.pw.value.length == 0)
	{
		alertita += "Tiene que introducir una contraseña\n";
		arrayrosa[1] = true;
		arrayrosa[2] = true;
	}
	else{
		if (document.form1.pw.value.length < 6)
		{
			alertita += "La contraseña ha de tener al menos 6 caracteres\n";
		}
		else
		{
			arrayrosa[1] = false;
			if (document.form1.pw2.value != document.form1.pw.value)
			{
				alertita += "Las contraseñas no coinciden\n";
				arrayrosa[2] = true;
			}
			else{arrayrosa[2] = false}
		}
	}
	
	if (document.form1.email.value.length == 0)
	{
		alertita += "Tiene que introducir una dirección de e-mail\n";
		arrayrosa[3] = true;
		arrayrosa[4] = true;
	}
	else{
		if (regexp.test(document.form1.email.value) == false)
		{
			alertita += "Tiene que introducir una dirección de e-mail válida\n";
			arrayrosa[3] = true;
			arrayrosa[4] = true;
		}
		else
		{
			arrayrosa[3] = false;
			if (document.form1.email.value !=document.form1.email2.value)
			{
				alertita += "Las direcciones de email introducidas no coinciden\n";
				arrayrosa[4] = true;
			}
			else{arrayrosa[4] = false}
		}
	}
	
	if (document.form1.nombre.value.length == 0)
	{
		alertita += "Tiene que introducir un nombre\n";
		arrayrosa[5] = true;
	}
	else{arrayrosa[5] = false;}
	
	
	if (document.form1.apellidos.value.length == 0)
	{
		alertita += "Tiene que introducir apellidos\n";
		arrayrosa[6] = true;
	}
	else{arrayrosa[6] = false;}
	
	if (document.form1.fechanac.value.length == 0)
	{
		alertita += "Tiene que introducir su fecha de nacimiento\n";
		arrayrosa[7] = true;
	}
	else
	{
		if (new Date(document.form1.fechanac.value) > hace16a)
		{
			alertita += "Tiene que ser mayor de 16 años\n";
			arrayrosa[7] = true;
		}
		arrayrosa[7] = false;
	}
	
    if (url!="igbadmin.php")
        {
            if (document.form1.cond.checked == 0)
            {
                alertita += "Tiene que aceptar los términos de uso\n";
            }
            else
            {
                condiciones = true;
            }
        }
	
	
	
	if (alertita.length != 0){
		
		alert(alertita);
		
		if (arrayrosa[0]==true) {document.form1.usuario.style.backgroundColor = "pink";}
		else {(arrayrosa[0]==false); document.form1.usuario.style.backgroundColor = "white";}
		if (arrayrosa[1]==true) {document.form1.pw.style.backgroundColor = "pink";}
		else {(arrayrosa[1]==false); document.form1.pw.style.backgroundColor = "white";}
		if (arrayrosa[2]==true) {document.form1.pw2.style.backgroundColor = "pink";}
		else {(arrayrosa[2]==false); document.form1.pw2.style.backgroundColor = "white";}
		if (arrayrosa[3]==true) {document.form1.email.style.backgroundColor = "pink";}
		else {(arrayrosa[3]==false); document.form1.email.style.backgroundColor = "white";}
		if (arrayrosa[4]==true) {document.form1.email2.style.backgroundColor = "pink";}
		else {(arrayrosa[4]==false); document.form1.email2.style.backgroundColor = "white";}
		if (arrayrosa[5]==true) {document.form1.nombre.style.backgroundColor = "pink";}
		else {(arrayrosa[5]==false); document.form1.nombre.style.backgroundColor = "white";}
		if (arrayrosa[6]==true) {document.form1.apellidos.style.backgroundColor = "pink";}
		else {(arrayrosa[6]==false); document.form1.apellidos.style.backgroundColor = "white";}
		if (arrayrosa[7]==true) {document.form1.fechanac.style.backgroundColor = "pink";}
		else {(arrayrosa[7]==false); document.form1.fechanac.style.backgroundColor = "white";}
		if (arrayrosa[8]==true) {document.form1.cond.style.backgroundColor = "pink";}
		else {(arrayrosa[8]==false); document.form1.cond.style.backgroundColor = "white";}
		
		return 0;
	}
	
document.form1.submit();

}
