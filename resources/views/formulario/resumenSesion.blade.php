@extends('layouts.master')
  @section('body')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Plataforma Rogers
        <small>Usuario Alumno</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

          <!-- iCheck -->
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Nuevo resumen de sesión</h3>
            </div>
            <div class="box-body">
              <div class="box-group">
                <label>Nombre completo: </label>
                  Juan Carlos Lechuga Scarolla
                  <br>
                  <label>RUT: </label>
                  20.459.684-5
                  <br>
                  <label>Fecha de nacimiento: </label>
                  10/4/1998
                  <br>
                  <label>Carrera: </label>
                  Ingeniería medioambiental
                  <br>
                  <label>Año de ingreso: </label>
                  2014
                  <br>
                  <label>Jornada acedémica</label>
                  Diurna
                  <br>
                  <label>Nombre de Padre, Madre o Tutor: </label>
                  German Lechuga Scarolla
                  <br>
                  <label>Región donde vive: </label>
                  Titirilquen
                  <br>
                  <label>Comuna: </label>
                  Los Cordones
                  <br>
              </div>
              <br>

              <!-- INICIO FORMULARIO-->

            <form method="post">
              {!! csrf_field() !!}
              
              <!-- INICIO RESUMEN Y OBSERVACIONES-->
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Resumen de la sesión
                  </h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fa fa-minus"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">
              
                    <textarea class="textarea" name="resumen" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
              
                </div>
              </div>

              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Observaciones
                  </h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fa fa-minus"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">
              
                    <textarea class="textarea" name="observaciones" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              
                </div>
              </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-success">Enviar resumen de sesión</button>
            </div>           
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (right) -->
      </div>
      </form>
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
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue'
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

    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();

  });
</script>
@endsection
