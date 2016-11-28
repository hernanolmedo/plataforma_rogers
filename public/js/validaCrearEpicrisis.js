/**
 * Created by Fernanda on 10-11-2016.
 */
//
// Validador de Rut
// Descargado desde http://www.juque.cl/
//
function revisarDigito( dvr )
{
    dv = dvr + ""
    if ( dv != '0' && dv != '1' && dv != '2' && dv != '3' && dv != '4' && dv != '5' && dv != '6' && dv != '7' && dv != '8' && dv != '9' && dv != 'k'  && dv != 'K')
    {
        alert("Debe ingresar un digito verificador valido");
        window.document.form1.rut.focus();
        window.document.form1.rut.select();
        return false;
    }
    return true;
}

function revisarDigito2( crut )
{
    largo = crut.length;
    if ( largo < 2 )
    {
        alert("Debe ingresar el rut completo")
        window.document.form1.rut.focus();
        window.document.form1.rut.select();
        return false;
    }
    if ( largo > 2 )
        rut = crut.substring(0, largo - 1);
    else
        rut = crut.charAt(0);
    dv = crut.charAt(largo-1);
    revisarDigito( dv );

    if ( rut == null || dv == null )
        return 0

    var dvr = '0'
    suma = 0
    mul  = 2

    for (i= rut.length -1 ; i >= 0; i--)
    {
        suma = suma + rut.charAt(i) * mul
        if (mul == 7)
            mul = 2
        else
            mul++
    }
    res = suma % 11
    if (res==1)
        dvr = 'k'
    else if (res==0)
        dvr = '0'
    else
    {
        dvi = 11-res
        dvr = dvi + ""
    }
    if ( dvr != dv.toLowerCase() )
    {
        alert("EL rut es incorrecto")
        window.document.form1.rut.focus();
        window.document.form1.rut.select();
        return false
    }

    return true
}

function Rut(texto)
{
    var tmpstr = "";
    for ( i=0; i < texto.length ; i++ )
        if ( texto.charAt(i) != ' ' && texto.charAt(i) != '.' && texto.charAt(i) != '-' )
            tmpstr = tmpstr + texto.charAt(i);
    texto = tmpstr;
    largo = texto.length;

    if ( largo < 2 )
    {
        alert("Debe ingresar el rut completo")
        window.document.form1.rut.focus();
        window.document.form1.rut.select();
        return false;
    }

    for (i=0; i < largo ; i++ )
    {
        if ( texto.charAt(i) !="0" && texto.charAt(i) != "1" && texto.charAt(i) !="2" && texto.charAt(i) != "3" && texto.charAt(i) != "4" && texto.charAt(i) !="5" && texto.charAt(i) != "6" && texto.charAt(i) != "7" && texto.charAt(i) !="8" && texto.charAt(i) != "9" && texto.charAt(i) !="k" && texto.charAt(i) != "K" )
        {
            alert("El valor ingresado no corresponde a un R.U.T valido");
            window.document.form1.rut.focus();
            window.document.form1.rut.select();
            return false;
        }
    }

    var invertido = "";
    for ( i=(largo-1),j=0; i>=0; i--,j++ )
        invertido = invertido + texto.charAt(i);
    var dtexto = "";
    dtexto = dtexto + invertido.charAt(0);
    dtexto = dtexto + '-';
    cnt = 0;

    for ( i=1,j=2; i<largo; i++,j++ )
    {
        //alert("i=[" + i + "] j=[" + j +"]" );
        if ( cnt == 3 )
        {
            dtexto = dtexto + '.';
            j++;
            dtexto = dtexto + invertido.charAt(i);
            cnt = 1;
        }
        else
        {
            dtexto = dtexto + invertido.charAt(i);
            cnt++;
        }
    }

    invertido = "";
    for ( i=(dtexto.length-1),j=0; i>=0; i--,j++ )
        invertido = invertido + dtexto.charAt(i);

    window.document.form1.rut.value = invertido.toUpperCase()

    if ( revisarDigito2(texto) )
        return true;
    return false;
}
function Sexo(sexo) {
	if(!sexo){
		alert("Debe seleccionar sexo");
		window.document.form1.sexo.focus();
		//window.document.form1.sexo.select();
		return false;
	}
	else
		return true;
}
function Prevision(prevision) {
	if(!prevision){
		alert("Debe seleccionar una previsión");
		window.document.form1.sistema_previsional.focus();
		return false;
	}
	else
		return true;
}
function Region(region) {
	if(!region){
		alert("Debe seleccionar una región en donde vive");
		window.document.form1.regiones.focus();
		return false;
	}
	else
		return true;
}
function Comuna(comuna) {
	if(!comuna){
		alert("Debe seleccionar una comuna en donde vive");
		window.document.form1.comunas.focus();
		return false;
	}
	else
		return true;
}
function Facultad(facultad) {
	if(!facultad){
		alert("Debe seleccionar una facultad a la que pertenece");
		window.document.form1.facultades.focus();
		return false;
	}
	else
		return true;
}
function Carrera(carrera) {
	if(!carrera){
		alert("Debe seleccionar una carrera a la que pertenece");
		window.document.form1.carreras.focus();
		return false;
	}
	else
		return true;
}
function AnoIngreso(ingreso) {
	if(!ingreso){
		alert("Debe seleccionar un año de ingreso");
		window.document.form1.year.focus();
		return false;
	}
	else
		return true;
}
function NivelCarrera(nivel) {
	if(!nivel){
		alert("Debe seleccionar un nivel académico");
		window.document.form1.nivel_carrera.focus();
		return false;
	}
	else
		return true;
}
function Jornada(jornada) {
	if(!jornada){
		alert("Debe seleccionar una jornada académica");
		window.document.form1.jornada.focus();
		return false;
	}
	else
		return true;
}
function Matricula(matricula) {
	if(!matricula){
		alert("Debe seleccionar una opción de matrícula");
		window.document.form1.matricula_al_dia.focus();
		return false;
	}
	else
		return true;
}
function validarFormatoFecha(campo) {
      var RegExPattern = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
      if ((campo.match(RegExPattern)) && (campo!='')) {
            return true;
      } else {
            return false;
      }
}
function existeFecha(fecha){
      var fechaf = fecha.split("/");
      var day = fechaf[0];
      var month = fechaf[1];
      var year = fechaf[2];
      var date = new Date(year,month,'0');
      if((day-0)>(date.getDate()-0)){
            return false;
      }
      return true;
}
function validarFechaMenorActual(date){
      var x=new Date();
      var fecha = date.split("/");
      x.setFullYear(fecha[2],fecha[1]-1,fecha[0]);
      var today = new Date();
 
      if (x >= today)
        return false;
      else
        return true;
}
function FechaNac(fecha){
	if(validarFormatoFecha(fecha) == false){
		alert("El formato de fecha ingresado no es válido (DD/MM/AAAA");
		window.document.form1.datepicker.focus();
		return false;
	}
	if(existeFecha(fecha) == false){
		alert("La fecha ingresada no existe");
		window.document.form1.datepicker.focus();
		return false;
	}
	if(validarFechaMenorActual(fecha) == false){
		alert("La fecha ingresada es incorrecta");
		window.document.form1.datepicker.focus();
		return false;
	}
	return true;

}
function Telefono(tel){
	if(isNaN(tel)){  
        alert("El teléfono solo debe contener números");  
        return false;  
    }
    if(tel.length < 9 || tel.length > 9) {  
        alert("El teléfono debe tener 9 caracteres. Ej. 666112233");  
        return false;  
    }  
    return true;
}
function validarForm1(e){
	if(!Rut($("#rut").val())){
		e.preventDefault();
		return false;
	}
	if(!Sexo($("#sexo").val())){
		e.preventDefault();
		return false;
	}
	if(!Prevision($("#sistema_previsional").val())){
		e.preventDefault();
		return false;
	}
	if(!Region($("#regiones").val())){
		e.preventDefault();
		return false;
	}
	if(!Comuna($("#comunas").val())){
		e.preventDefault();
		return false;
	}
	if(!Facultad($("#facultades").val())){
		e.preventDefault();
		return false;
	}
	if(!Carrera($("#carreras").val())){
		e.preventDefault();
		return false;
	}
	if(!AnoIngreso($("#year").val())){
		e.preventDefault();
		return false;
	}
	if(!NivelCarrera($("#nivel_carrera").val())){
		e.preventDefault();
		return false;
	}
	if(!Jornada($("#jornada").val())){
		e.preventDefault();
		return false;
	}
	if(!Matricula($("#matricula_al_dia").val())){
		e.preventDefault();
		return false;
	}
	if(!FechaNac($("#datepicker").val())){
		e.preventDefault();
		return false;
	}
	if(!Telefono($("#fono_casa").val())){
		window.document.form1.fono_casa.focus();
		e.preventDefault();
		return false;
	}
	if(!Telefono($("#celular").val())){
		window.document.form1.celular.focus();
		e.preventDefault();
		return false;
	}
	if(!Telefono($("#fono_padre_tutor").val())){
		window.document.form1.fono_padre_tutor.focus();
		e.preventDefault();
		return false;
	}
}