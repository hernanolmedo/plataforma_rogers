@extends('layouts.master')
@section('body')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Plataforma Rogers
            <small>Usuario Psicologo</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- iCheck -->
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Epicrisis</h3>
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
                <!-- <input type="hidden" name="_token" value="toJrgaGwilNBae71riv71TZO0hoE8k8XTVwF41J5"> -->
                <div class="form-group">
                <label>Tipo Cierre</label>
                  <select required="required" class="form-control" name="tipo_cierre" id="tipo_cierre" onchange="valida()">
                    <option value="">Seleccione Tipo de Cierre</option>
                    <option value="mutuo">Mutuo</option>
                    <option value="terapeuta">Del terapeuta</option>
                    <option value="paciente">Del paciente</option>
                    <option value="desercion">Deserción</option>
                    <option value="otro">Otro</option>                    
                  </select>
                </div>

                <script>
                    function valida(){
                    console.log("entra a funcion valida");
                    if($('select[name=tipo_cierre]').val() == "" || $('select[name=tipo_cierre]').val() == "mutuo" || $('select[name=tipo_cierre]').val() == "terapeuta" || $('select[name=tipo_cierre]').val() == "paciente" || $('select[name=tipo_cierre]').val() == "desercion"){
                      $("#otro").attr("disabled", true);
                      console.log("entra a funcion valida");
                    }
                    else{
                      $("#otro").attr("disabled", false);
                    } 
                    
                  }
                </script>

                <div class="form-group">
                  <input type="text" id="otro" name="otro" class="form-control" placeholder="Especifique" maxlength="255" disabled required>
                </div>                
                <hr>
                <label>Diagnóstico (DSM IV por ejes)</label>       
                <input type="text" name="DSM1" class="form-control" placeholder="1.-" maxlength="255" required="">
                <input type="text" name="DSM2" class="form-control" placeholder="2.-" maxlength="255" required="">
                <input type="text" name="DSM3" class="form-control" placeholder="3.-" maxlength="255" required="">
                <input type="text" name="DSM4" class="form-control" placeholder="4.-" maxlength="255" required="">
                <input type="text" name="DSM5" class="form-control" placeholder="5.-" maxlength="255" required="">
                <hr>
                <label>Interconsultas o derivaciones</label>                  
                <textarea maxlength="255" name="interconsulta" input type="text" class="form-control" rows="3" required></textarea>
                <hr>                   
                <label>Psicodiagnóstico o test administrados</label>              
                <textarea maxlength="255" name="psicodiag" input type="text" class="form-control" rows="3"></textarea>
                <hr>
                <label>Resumen del logro de tratamiento</label>                  
                <textarea maxlength="255" name="resumen" input type="text" class="form-control" rows="6" required></textarea>
                <hr>
                <label>Evaluación del logro de las metas</label>                  
                <textarea maxlength="255" name="metas" input type="text" class="form-control" rows="3" required></textarea>
                <hr>
                <label>Comentarios finales</label>                  
                <textarea maxlength="255" name="comentarios" input type="text" class="form-control" rows="3" required></textarea>
              <!-- /.box-body -->      
              <div class="box-footer">
                <button type="submit" class="btn btn-success">Enviar Epicrisis</button>
              </div>                         
              </form>

            </div>                                           
        <!-- /.box -->
          </div>
      <!-- /.col (right) -->
        </section>
      @endsection        
      @section('script')
      <script>
      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].square, input[type="radio"].square').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue'
      });
      </script>
      @endsection 