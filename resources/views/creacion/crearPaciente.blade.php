@extends('layouts.master')
@section('body')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Plataforma Rogers
        <small>Usuario Alumno</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

          <!-- iCheck -->
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Datos Personales</h3>
            </div>
            <div class="box-body">
                <form role="form" method="post" id="form1" name="form1" onSubmit="javascript:return validarForm1(event)">
                {!! csrf_field() !!}
                <div class="form-group">
                  <label>Nombre completo</label>
                  <input type="text" name="nombre" class="form-control" placeholder="Nombres y Apellidos" maxlength="150" required />
                </div>


                <div class="form-group">

                    <label>RUT</label>
                  <input type="text" name="rut" id="rut" class="form-control" placeholder="Ejemplo: 14.113.678-9" maxlength="15" required>
      

                </div>

                    <label>Fecha de nacimiento:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="fecha_nac" required>                  
                </div>

                <br>
                
                <div class="form-group">
                <label>Sexo</label>
                  <select class="form-control" name="sexo" id="sexo">
                    <option value="sin-sexo" selected disabled>Seleccione sexo</option>
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                  </select>
                </div>

                <label>Telefono de casa</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" name="fono_casa" id="fono_casa" maxlength="9" placeholder="Ejemplo: 227894561">
                </div>
                
                <br>
                
                <label>Telefono Celular</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" name="celular" id="celular" maxlength="9" required placeholder="Ejemplo: 97894563">
                </div>

                <br>

                <div class="form-group">
                  <label>Nombre completo Padre, Madre o Tutor</label>
                  <input type="text" name="nombre_padre_tutor" class="form-control" placeholder="Nombres y Apellidos" maxlength="150">
                </div>

                <br>

                <label>Telefono de Padre, Madre o Tutor</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" name="fono_padre_tutor" id="fono_padre_tutor" maxlength="9" placeholder="Ejemplo: 97894563">
                </div>

                <br>

                <div class="form-group">
                <label>Sistema Previsional</label>
                  <select class="form-control" name="sistema_previsional" id="sistema_previsional" onchange="valida()">
                    <option value="sin-prevision" selected disabled>Seleccione Sistema Previsional</option>
                    <option value="NINGUNO">Ninguno</option>
                    <option value="FONASA" >Fonasa</option>
                    <option value="ISAPRE">Isapre</option>
                  </select>
                </div>

                <script>
                    function valida(){
                    console.log("entra a funcion valida");
                    if($('select[name=sistema_previsional]').val() == "FONASA" || $('select[name=sistema_previsional]').val() == "NINGUNO"){
                      $("#isapre_cual").attr("disabled", true);
                      console.log("entra a funcion valid");
                    }
                    else{
                      $("#isapre_cual").attr("disabled", false);
                    } 
                    
                  }
                </script>

<!--  SI EL CAMPO ISAPRE ES SELECCIONADO ACTIVAR EL TEXT CUAL (JAVASCRIPT)  -->
                <div class="form-group">
                  <label>¿Cual?</label>
                  <input type="text" id="isapre_cual" name="isapre_cual" class="form-control" placeholder="Ejemplo: Consalud" maxlength="150" disabled required>
                </div>

                <div class="form-group">
                <label>Región donde vive</label>
                  <select class="form-control" id="regiones" name="region">
                  </select>
                </div>

                <div class="form-group">
                <label>Comuna</label>
                  <select class="form-control" id="comunas" name="comuna">
                  </select>
                </div>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>        
        <script src="js/regiones_comunas.js"></script>

        <!-- Tabla para elegir la preferencia horaria -->

                <br>
                <div class="form-group">
                    <label>Preferencia Horaria</label>
                    <table class="table table-bordered">                
                        <tr>
                          <th>
                            <label>
                              Bloque / Dia de la semana                    
                            </label>
                          </th>
                          <th>
                            <label>
                              Lunes
                            </label>
                          </th>
                          <th>
                            <label>
                              Martes
                            </label>
                          </th>
                          <th>
                            <label>
                              Miércoles
                            </label>
                          </th>
                          <th>
                            <label>
                              Jueves
                            </label>
                          </th>
                          <th>
                            <label>
                              Viernes
                            </label>
                          </th>                                     
                        </tr>

                        <tr>
                            <td>
                                Bloque 1
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="L1" value="L1">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="M1" value="M1">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="W1" value="W1">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="J1" value="J1">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="V1" value="V1">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Bloque 2
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="L2" value="L2">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="M2" value="M2">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="W2" value="W2">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="J2" value="J2">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="V2" value="V2">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Bloque 3
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="L3" value="L3">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="M3" value="M3">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="W3" value="W3">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="J3" value="J3">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="V3" value="V3">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Bloque 4
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="L4" value="L4">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="M4" value="M4">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="W4" value="W4">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="J4" value="J4">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="V4" value="V4">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Bloque 5
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="L5" value="L5">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="M5" value="M5">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="W5" value="W5">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="J5" value="J5">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="V5" value="V5">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Bloque 6
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="L6" value="L6">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="M6" value="M6">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="W6" value="W6">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="J6" value="J6">
                            </td>
                            <td>
                                <input type="checkbox" class="flat-red" name="V6" value="V6">
                            </td>
                        </tr>


                    </table>
                </div>

        <!--Final de la tabla de preferencia horaria -->
                <div class="form-group">
                    <h3>Datos Curriculares</h3>
                </div>

                <div class="form-group">
                <label>Facultad</label>
                  <select class="form-control" id="facultades" name="facultad">
                  </select>
                </div>

                <div class="form-group">
                <label>Carrera</label>
                  <select class="form-control" id="carreras" name="carrera">
                  </select>
                </div>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/facul_carrera.js"></script>
                  <label>Año de ingreso</label>
                  <select class="form-control" id="year" name="ano_ingreso">
                    <option value="sin-ano_ingreso" selected disabled>Seleccione su año de ingreso</option>
                    <script>
                      var myDate = new Date();
                      var year = myDate.getFullYear();
                      while(year >= 1950){
                        document.write('<option value="'+year+'">'+year+'</option>');
                          year--;
                      }
                    </script>
                    </select>

                  <label>Nivel académico</label>
                  <select class="form-control"  name="nivel_carrera" id="nivel_carrera">
                    <option value="sin-nivel" selected disabled>Seleccione su nivel académico</option>
                    <script>
                      for(var i = 1; i < 15; i++){
                        document.write('<option value="'+i+'">'+i+'</option>');
                      }
                    </script>
                  </select>

                  <label>Jornada acedémica</label>
                  <select class="form-control" name="jornada" id="jornada">
                    <option value="sin-jornada" selected disabled>Seleccione su jornada Académica</option>
                    <option value="D">Diurno</option>
                    <option value="V">Vespertino</option>
                  </select>

                  <label>¿Tiene su matrícula al día?</label>
                  <select class="form-control" name="matricula_al_dia" id="matricula_al_dia">
                    <option value="sin-matricula" selected disabled>¿matrícula al día?</option>
                    <option value="T">SI</option>
                    <option value="F">NO</option>
                  </select>
                <button type="submit" class="btn btn-success" name="btnIngresoPaciente">Enviar datos</button>

                </form>              
            <!-- /.box-body -->           
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  @endsection
  @section('script')
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].square, input[type="radio"].square').iCheck({
      checkboxClass: 'icheckbox_square-gree',
      radioClass: 'iradio_square-green'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({

      showInputs: false
    });
  });
</script>
@endsection
