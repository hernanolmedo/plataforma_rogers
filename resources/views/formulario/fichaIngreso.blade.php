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
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Ficha de ingreso</h3>
            </div>
            <div class="box-body">
                <form role="form" method="post">
                {!! csrf_field() !!}
                  <h3>Identificación</h3>
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
                  <label>Nivel académico: </label>
                  3º nivel
                  <br>
                  <label>Año de ingreso: </label>
                  2014
                  <br>
                  <label>Jornada acedémica</label>
                  Diurna
                  <br>
                  <label>¿Tiene la matrícula al día?</label>
                  Si
                  <br>           
                  <label>Preferencia Horaria: </label>
                  L3-L5-J1
                  <br>
                  <label>Telefono de casa: </label>
                  58494526
                  <br>                
                  <label>Telefono Celular: </label>
                  95846512
                  <br>
                  <label>Nombre de Padre, Madre o Tutor: </label>
                  German Lechuga Scarolla
                  <br>
                  <label>Telefono de Padre, Madre o Tutor: </label>
                  58476543
                  <br>
                  <label>Región donde vive: </label>
                  Titirilquen
                  <br>
                  <label>Comuna: </label>
                  Los Cordones
                  <br>
                  <label>Sistema Previsional: </label>
                  Fonasa
                  <br>
                  <br>
                  <form role="form" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                      <label>¿Se ha atendido en salud mental en la Usach antes?</label>
                      <textarea name="antendido_usach" class="form-control" rows="3" placeholder="Brevemente"></textarea>
                    </div>

                    <div class="form-group">
                      <label>¿Se ha atendido o se atiende en salud mental fuera de la Usach?</label>
                      <textarea name="antendido_afuera_usach" class="form-control" rows="3" placeholder="Brevemente"></textarea>
                    </div>
                    <h3>Antecedentes</h3>

                    <div class="box box-info">
                      <div class="box-header">
                        <h3 class="box-title">Motivo de consulta y Sintomatología
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
              
                        <textarea class="textarea" placeholder="Maximo de XXXX caracteres..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              
                      </div>
                    </div>

                    <div class="box box-info">
                      <div class="box-header">
                        <h3 class="box-title">Hipótesis Diagnóstica
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
              
                        <textarea class="textarea" placeholder="Maximo de XXXX caracteres..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              
                      </div>
                    </div>

                    <div class="box box-info">
                      <div class="box-header">
                        <h3 class="box-title">Antecedentes Generales
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
              
                        <textarea class="textarea" placeholder="Maximo de XXXX caracteres..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              
                      </div>
                    </div>

                    <div class="box box-info">
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
              
                        <textarea class="textarea" placeholder="Maximo de XXXX caracteres..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              
                      </div>
                    </div>
          <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">Enviar Ficha</button>
          </div>
                  </form>
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

    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();

  });
</script>
@endsection

