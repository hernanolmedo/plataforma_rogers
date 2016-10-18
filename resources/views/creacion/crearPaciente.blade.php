<html>
<body>

    <<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ingreso paciente</title>

    </head>
    <body>
    <h1>Ingreso de paciente</h1>

    <h3>Datos Personales </h3>
    <form  method="post">
        {!! csrf_field() !!}
        nombre completo  <input type="text" name="nombre" maxlength="150"> <br>
        <!-- Validar digito verificador del rut -->
        RUT <input type="text" name="rut" maxlength="15"> <br>
        Fecha de nacimiento <input type="date" name="fecha_nac"> <br>
        Sexo <select name="sexo">
            <option value="F" selected>F</option>
            <option value="M">M</option>
        </select><br>
        <!-- el Email se debe enviar desde el login -->
        Telefono de casa<input type="tel" name="fono_casa" maxlength="10"><br>
        celular<input type="tel" name="celular" maxlength="10"><br>
        Nombre completo Padre/Madre o tutor <input type="text" name="nombre_padre_tutor" maxlength="150"><br>
        Telefono Padre/Madre o Tutor<input type="tel" name="fono_padre_tutor" maxlength="10"><br>
        Sistema Previsional <select name="sistema_previsional">
            <option name="NINGUNO">Ninguno</option>
            <option name="FONASA">Fonasa</option>
            <option name="ISAPRE">Isapre</option>
        </select>

        <!--  SI EL CAMPO ISAPRE ES SELECCIONADO ACTIVAR EL TEXT CUAL (JAVASCRIPT)  -->
        ¿Cual?<input type="text" name="isapre_cual" maxlength="50">
        <br>
        region<select id="regiones"></select><br>
        comuna<select id="comunas"></select>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/regiones_comunas.js"></script>

        Preferencia horaria<br>
        Lunes:
        <input name="L1" type="checkbox" value="L1" />L1
        <input name="L2" type="checkbox" value="L2"/>L2
        <input name="L3" type="checkbox" value="L3"/>L3
        <input name="L4" type="checkbox" value="L4"/>L4
        <input name="L5" type="checkbox" value="L5"/>L5
        <input name="L6" type="checkbox" value="L6"/>L6
        <br>
        Martes:
        <input name="M1" type="checkbox" value="M1" />M1
        <input name="M2" type="checkbox" value="M2"/>M2
        <input name="M3" type="checkbox" value="M3"/>M3
        <input name="M4" type="checkbox" value="M4"/>M4
        <input name="M5" type="checkbox" value="M5"/>M5
        <input name="M6" type="checkbox" value="M6"/>M6
        <br>
        Miercoles:
        <input name="W1" type="checkbox" value="W1" />W1
        <input name="W2" type="checkbox" value="W2"/>W2
        <input name="W3" type="checkbox" value="W3"/>W3
        <input name="W4" type="checkbox" value="W4"/>W4
        <input name="W5" type="checkbox" value="W5"/>W5
        <input name="W6" type="checkbox" value="W6"/>W6
        <br>
        Jueves:
        <input name="J1" type="checkbox" value="J1" />J1
        <input name="J2" type="checkbox" value="J2"/>J2
        <input name="J3" type="checkbox" value="J3"/>J3
        <input name="J4" type="checkbox" value="J4"/>J4
        <input name="J5" type="checkbox" value="J5"/>J5
        <input name="J6" type="checkbox" value="J6"/>J6
        <br>
        Viernes:
        <input name="V1" type="checkbox" value="V1" />V1
        <input name="V2" type="checkbox" value="V2"/>V2
        <input name="V3" type="checkbox" value="V3"/>V3
        <input name="V4" type="checkbox" value="V4"/>V4
        <input name="V5" type="checkbox" value="V5"/>V5
        <input name="V6" type="checkbox" value="V6"/>V6
        <br>
        <h3>Datos curriculares</h3>
        Facultad<select id="facultades"></select><br>
        Carrera<select id="carreras"></select>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/facul_carrera.js"></script>
        <input type="submit" value="Enviar" />
    </form>
</body>
</html>
   <!-- Schema::create('carrera_paciente', function (Blueprint $table) {
    $table->increments('id');
    $table->timestamp('created_at')->nullable();
    $table->string('facultad');
    $table->string('nombre_carrera');
    $table->integer('ano_ingreso');
    $table->integer('nivel_carrera');
    $table->string('jornada');
    $table->boolean('matricula_al_dia');
    });
    } -->