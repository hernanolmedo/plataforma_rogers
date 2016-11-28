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
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Resultado Cuestionario OQ_45.2</h3>
            </div>
            <div class="box-body">
              
            <!-- /.box-body -->
           
             <label>El cuestionario fue respondido exitosamente, los resultados se presentan en la siguiente tabla. Tomar en consideración que el paciente
               @if($observacion_riesgo == True)
                  <span class="badge bg-red">Es de riesgo</span>
                 @else
                 <span class="badge bg-green">No es de riesgo</span>
               @endif
             </label>
             <br>
             
           <br>
           <table class="table table-condensed">
                <tr>
                  <th>Evaluación</th>
                  <th>Nivel</th>
                  <th style="width: 40px">Valor</th>
                </tr>
                <tr>
                  <td>Sintomatología </td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-red">{{$sintomatologia}}</span></td>
                </tr>
                <tr>
                  <td>Relaciones interpersonales</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-yellow">{{ $rel_interpersonales}}</span></td>
                </tr>
                <tr>
                  <td>Rol social</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">{{$rol_social}}</span></td>
                </tr>
                <tr>
                  <td>Respuesta total</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-green">{{$total}}</span></td>
                </tr>
              </table>

              <br>
              <br>
              
              <table class="table table-condensed">
              <tr>
                <th><label>#</label></th>
                <th>
                  <label>Respuesta preguntas riesgosas:</label>
                </th>
                <th></th>
                <th></th>
              </tr>
              <tr>
                <td>8</td>
                <td>¿Pienso en quitarme la vida?</td>
                <td>
                 <span class="label
              @if($preg_8 == 4)
                label-danger"> Casi siempre </span>
                @elseif($preg_8 == 3) label-danger"> Con frecuencia </span>
                @elseif($preg_8 == 2) label-warning"> A veces </span>
                @elseif($preg_8 == 1) label-success"> Casi Nunca </span>
                @else label-success"> Nunca </span>
              @endif
                </td>
              </tr>

              <tr>
                <td>11</td>
                <td>Necesito tomar bebidas alcohólicas en la mañana, después de haber tomado el dia anterior.</td>
                <td><span class="label
                @if($preg_11 == 4) label-danger"> Casi siempre </span>
                  @elseif($preg_11 == 3)label-danger"> Con frecuencia </span>
                  @elseif($preg_11 == 2) label-warning"> A veces </span>
                  @elseif($preg_11 == 1) label-success"> Casi Nunca </span>
                  @else label-success"> Nunca </span>
                @endif
                </td>
              </tr>

              <tr>
                <td>26.</td>
                <td>Me molesta que me critiquen porque tomo o me drogo.</td>
                <td><span class="label
              @if($preg_26 == 4) label-danger"> Casi siempre </span>
              @elseif($preg_26 == 3) label-danger"> Con frecuencia </span>
              @elseif($preg_26 == 2) label-warning"> A veces </span>
              @elseif($preg_26 == 1) label-success"> Casi Nunca </span>
              @else label-success"> Nunca </span>
              @endif
                </td>
              </tr>

              <tr>
                <td>30.</td>
                <td>Tengo dificultades para llevarme bien con mis  amigos y conocidos</td>
                <td><span class="label
              @if($preg_30 == 4) label-danger"> Casi siempre </span>
              @elseif($preg_30 == 3) label-danger"> Con frecuencia </span>
              @elseif($preg_30 == 2) label-warning"> A veces </span>
              @elseif($preg_30 == 1) label-success"> Casi Nunca </span>
              @else label-success"> Nunca </span>
              @endif
                </td>
              </tr>

              <tr>
                <td>32.</td>
                <td>Tengo problemas en el trabajo/universidad debido a las drogas o el alcohol.</td>
                <td><span class="label
              @if($preg_32 == 4) label-danger"> Casi siempre </span>
              @elseif($preg_32 == 3) label-danger"> Con frecuencia </span>
              @elseif($preg_32 == 2) label-warning"> A veces </span>
              @elseif($preg_32 == 1) label-success"> Casi Nunca </span>
              @else label-success"> Nunca </span>
              @endif
                </td>
              </tr>

              <tr>
                <td>37.</td>
                <td>Me satisfacen mis relaciones con mis seres queridos</td>
                <td><span class="label
              @if($preg_37 == 4) label-danger"> Nunca </span>
              @elseif($preg_37 == 3) label-danger"> Casi Nunca </span>
              @elseif($preg_37 == 2) label-warning"> A veces </span>
              @elseif($preg_37 == 1) label-success"> Con frecuencia </span>
              @else label-success"> Casi siempre </span>
              @endif
                </td>
              </tr>


              </table>
           <!-- Final de la tabla -->
           
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
<!-- Page script -->
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