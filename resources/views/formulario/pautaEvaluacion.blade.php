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
              <h3 class="box-title">Pauta de evaluación</h3>
            </div>
            <div class="box-body">
              <div class="box-group">
                <b>Nombre paciente: </b>Carlos Lechuga <br>
                <b>Rut: </b>17.549.954-8 <br>
                <b>Fecha de nacimiento: </b>28/02/1996 <br>
                <b>Matriculado: </b>Si <br>
                <b>Sistema de salud: </b>Fonasa <br>
              </div>
              <br>

              <!-- INICIO FORMULARIO-->

            <form method="post">
              {!! csrf_field() !!}
              <!-- INICIO TABLA SINTOMAS -->
              <table class="table table-bordered">                
                <tr>
                  <th>
                    <label>
                                          
                    </label>
                  </th>
                  <th style="text-align: center;">
                    <label>
                      No presenta
                    </label>
                  </th>  
                  <th style="text-align: center;">
                    <label>
                      Leve
                    </label>
                  </th>
                  <th style="text-align: center;">
                    <label>
                      Moderada
                    </label>
                  </th>
                  <th style="text-align: center;">
                    <label>
                      Grave
                    </label>
                  </th>                      
                </tr>        
                
  
                <tr>
                  <td>
                    <label>
                        Sintomatología ansiosa                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre1" class="square center" value="NO PRESENTA">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre1" class="square center" value="LEVE">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre1" class="square" value="MODERADO">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre1" class="square" value="GRAVE" required>
                    </label>
                  </td>             
                </tr>
                
                <tr>
                  <td>
                    <label>
                        Sintomatología depresiva                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre2" class="square center" value="NO PRESENTA">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre2" class="square center" value="LEVE">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre2" class="square" value="MODERADO">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre2" class="square" value="GRAVE" required>
                    </label>
                  </td>             
                </tr>

                <tr>
                  <td>
                    <label>
                        Ideación/intengo suicida                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre3" class="square center" value="NO PRESENTA">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre3" class="square center" value="LEVE">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre3" class="square" value="MODERADO">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre3" class="square" value="GRAVE" required>
                    </label>
                  </td>             
                </tr>

                <tr>
                  <td>
                    <label>
                        Trastorno alimentario                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre4" class="square center" value="NO PRESENTA">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre4" class="square center" value="LEVE">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre4" class="square" value="MODERADO">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre4" class="square" value="GRAVE" required>
                    </label>
                  </td>             
                </tr>

                <tr>
                  <td>
                    <label>
                        Problemas identidad y autoestima                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre5" class="square center" value="NO PRESENTA">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre5" class="square center" value="LEVE">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre5" class="square" value="MODERADO">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre5" class="square" value="GRAVE" required>
                    </label>
                  </td>             
                </tr>

                <tr>
                  <td>
                    <label>
                        Problemas académicos                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre6" class="square center" value="NO PRESENTA">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre6" class="square center" value="LEVE">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre6" class="square" value="MODERADO">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre6" class="square" value="GRAVE" required>
                    </label>
                  </td>             
                </tr>

                <tr>
                  <td>
                    <label>
                        Problemas familiares                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre7" class="square center" value="NO PRESENTA">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre7" class="square center" value="LEVE">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre7" class="square" value="MODERADO">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre7" class="square" value="GRAVE" required>
                    </label>
                  </td>             
                </tr>

                <tr>
                  <td>
                    <label>
                        Problemas de pareja                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre8" class="square center" value="NO PRESENTA">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre8" class="square center" value="LEVE">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre8" class="square" value="MODERADO">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre8" class="square" value="GRAVE" required>
                    </label>
                  </td>             
                </tr>

                <tr>
                  <td>
                    <label>
                        Problemas interpersonales                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre9" class="square center" value="NO PRESENTA">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre9" class="square center" value="LEVE">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre9" class="square" value="MODERADO">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre9" class="square" value="GRAVE" required>
                    </label>
                  </td>             
                </tr>

                <tr>
                  <td>
                    <label>
                        Duelo                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre10" class="square center" value="NO PRESENTA">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre10" class="square center" value="LEVE">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre10" class="square" value="MODERADO">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre10" class="square" value="GRAVE" required>
                    </label>
                  </td>             
                </tr>

                <tr>
                  <td>
                    <label>
                        Abuso sexual                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre11" class="square center" value="NO PRESENTA">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre11" class="square center" value="LEVE">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre11" class="square" value="MODERADO">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre11" class="square" value="GRAVE" required>
                    </label>
                  </td>             
                </tr>

                <tr>
                  <td>
                    <label>
                        Otro                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre12" class="square center" value="NO PRESENTA">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre12" class="square center" value="LEVE">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre12" class="square" value="MODERADO">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre12" class="square" value="GRAVE" required>
                    </label>
                  </td>             
                </tr>
              </table>
              <!-- FINAL DE LA TABLA DE SINTOMAS-->

              <!-- MOTIVO DE CONSULTA-->
              <div class="form-group">
                  <label>Motivo de consulta</label>
                  <textarea class="form-control" rows="3" placeholder="Especifique brevemente" name="motivo_consulta" required></textarea>
              </div>
              <!-- FIN MOTIVO DE CONSULTA-->
              <!-- INICIO INDICACIONES DE TRATAMIENTO-->
              <label> Indicaciones</label>
              <table class="table table-bordered">                
                <tr>
                  <th>
                    <label>
                         Psicoterapia individual inmediata (Urgentes)                 
                    </label>
                  </th>
                  <th style="text-align: center;">
                    <label>
                      Psicoterapia Individual A
                    </label>
                  </th>
                  <th style="text-align: center;">
                    <label>
                      Psicoterapia Individual B
                    </label>
                  </th>
                  <th style="text-align: center;">
                    <label>
                      No requiere psicoterapia
                    </label>
                  </th>
                  <th style="text-align: center;">
                    <label>
                      Derivación a Psiquiatría
                    </label>
                  </th>                        
                </tr>        
                
  
                <tr>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="indicaciones" class="square" value="PSICOTERAPIA INDIVIDUAL URGENTE">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="indicaciones" class="square center" value="PSICOTERAPIA INDIVIDUAL A">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="indicaciones" class="square center" value="PSICOTERAPIA INDIVIDUAL B">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="indicaciones" class="square" value="NO REQUIERE PSICOTERAPIA">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="indicaciones" class="square" value="DERIVACIÓN A PSIQUIATRÍA" required>
                    </label>
                  </td>
                </tr>
              </table>
              <table class="table table-bordered">                
                <tr>
                  <th>
                    <label>
                         SE SUGIERE               
                    </label>
                  </th>
                  <th style="text-align: center;">
                    <label>TERAPIA GRUPAL </label>
                    <label class="radio-inline">
                      <input type="checkbox" name="checkboxTG" class="square center" value="TERAPIA GRUPAL">
                    </label>
                  </th>
                  <th style="text-align: center;">
                    <label>COACHING </label>
                    <label class="radio-inline">
                      <input type="checkbox" name="checkboxC" class="square center" value="COACHING">
                    </label>
                  </th>                                       
                </tr> 
              </table>

              <!-- FIN INDICACIONES DE TRATAMIENTO-->
              <!-- INICIO OBSERVACIONES Y COMENTARIOS-->
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

              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Comentarios
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
              
                    <textarea class="textarea" name="comentarios" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              
                </div>
              </div>


            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-success">Enviar Evaluación</button>
            </div>           
          </div>

            </form>
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
