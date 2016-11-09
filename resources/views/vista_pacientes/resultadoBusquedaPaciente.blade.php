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
              <h3 class="box-title">Pacientes encontrados</h3>
            </div>
            <div class="box-body">
                     <!-- AQUI EMPIEZA EL WIDGET -->
              <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
               <div class="widget-user-header bg-primary">                
                  <h5 class="widget-user-username">Carlos Lechuga</h5>
                  <p> Climatizacion, 20 años, 17.564.984-6, roedor pequeño, mas datos, mas datos</p>
                  <p>Placeholder de moar datos, mas datos</p>                  
                </div>
                <div class="box-footer no-padding">
                  <ul class="nav nav-stacked">
                    <li><a href="#">Ver ficha de paciente </a></li>
                    <li><a href="#">Ver resultados test OQ <span class="pull-right badge bg-green">5 realizados</span></a></li>
                    <li><a href="#">Agregar Pauta de evaluación</a></li>
                    <li><a href="#">Crear Ficha de Ingreso</a></li>
                    <li><a href="#">Agregar resumen de sesión</a></li>
                    <li><a href="#">Placeholder para mas opciones <span class="pull-right badge bg-red">Aqui puede ir numeros o algo</span></a></li>
                  </ul>
                </div>
              </div>
              <!-- TERMINA EL WIDGET -->

              <!-- AQUI EMPIEZA EL WIDGET -->
              <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
               <div class="widget-user-header bg-primary">                
                  <h5 class="widget-user-username">Cree un segundo usuario</h5>
                  <p> Para que se vea como se van a presentar</p>
                  <p>Hay que generar cada una de estas con un for-each de laravel</p>                  
                </div>
                <div class="box-footer no-padding">
                  <ul class="nav nav-stacked">
                    <li><a href="#">Ver ficha de paciente </a></li>
                    <li><a href="#">Ver resultados test OQ <span class="pull-right badge bg-green">5 realizados</span></a></li>
                    <li><a href="#">Agregar Pauta de evaluación</a></li>
                    <li><a href="#">Crear Ficha de Ingreso</a></li>
                    <li><a href="#">Agregar resumen de sesión</a></li>
                    <li><a href="#">Placeholder para mas opciones <span class="pull-right badge bg-red">Aqui puede ir numeros o algo</span></a></li>
                  </ul>
                </div>
              </div>
              <!-- TERMINA EL WIDGET -->
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
