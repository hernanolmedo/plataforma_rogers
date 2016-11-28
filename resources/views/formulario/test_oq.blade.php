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
              <h3 class="box-title">Cuestionario OQ</h3>
            </div>
            <div class="box-body">
              <!-- Minimal style -->

              <!-- radio -->
                    Para ayudarnos a entender cómo te has estado sintiendo, básate en los Ultimos 7 dias, incluyendo el dia de hoy. Lee cuidadosamente las frases y selecciona la cateroía que mejor describa como te sientes esta semana. En el cuestionario el término "trabajo" se refiere al empleo, la universidad, el trabajo voluntario, ser dueña de casa, cuidar niños, etc. Haz click en el circulo de la columna que corresponda, y no te preocupes si te equivocas, puedes cambiarlo libremente hasta que lo envíes.
                    <br>
                    <br>
              <form method="post">
              {!! csrf_field() !!}
              <table class="table table-bordered">                
                <tr>
                  <th>
                    <label>
                      Con que frecuencia te sientes así?                    
                    </label>
                  </th>
                  <th style="text-align: center;">
                    <label>
                      NUNCA
                    </label>
                  </th>
                  <th style="text-align: center;">
                    <label>
                      CASI NUNCA
                    </label>
                  </th>
                  <th style="text-align: center;">
                    <label>
                      A VECES
                    </label>
                  </th>
                  <th style="text-align: center;">
                    <label>
                      CON FRECUENCIA
                    </label>
                  </th>
                  <th style="text-align: center;">
                    <label>
                      CASI SIEMPRE
                    </label>
                  </th>            
                </tr>        
                
  
                <tr>
                  <td>
                    <label>
                        1.- Me llevo bien con otros.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre1" class="square center" value="4">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre1" class="square" value="3">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre1" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre1" class="square" value="1">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre1" class="square" value="0">                   
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        2.- Me canso rápidamente.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre2" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre2" class="square" value="1">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre2" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre2" class="square" value="3">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre2" class="square" value="4">                   
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        3.- Nada me interesa.                
                    </label>
                  </td>
                 <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre3" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre3" class="square" value="1">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre3" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre3" class="square" value="3">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre3" class="square" value="4">                   
                    </label>
                  </td>                
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        4.- Me siento presionado (estresado) en el trabajo/ universidad.                
                    </label>
                  </td>
                 <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre4" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre4" class="square" value="1">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre4" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre4" class="square" value="3">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre4" class="square" value="4">                   
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        5.- Me siento culpable.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre5" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre5" class="square" value="1">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre5" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre5" class="square" value="3">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre5" class="square" value="4">                   
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        6.- Me siento irritado, molesto.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre6" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre6" class="square" value="1">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre6" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre6" class="square" value="3">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre6" class="square" value="4">                   
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        7.- Me siento contento con mi matrimonio/pareja (si no  tienes pareja: "me siento contento con estar soltero/  a).                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre7" class="square" value="4">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre7" class="square" value="3">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre7" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre7" class="square" value="1">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre7" class="square" value="0">                   
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        8.- Pienso en quitarme la vida.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre8" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre8" class="square" value="1">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre8" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre8" class="square" value="3">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre8" class="square" value="4">                   
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        9.- Me siento débil.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre9" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre9" class="square" value="1">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre9" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre9" class="square" value="3">                   
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre9" class="square" value="4">                   
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        10.- Me siento atemorizado.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre10" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre10" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre10" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre10" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre10" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        11.- Necesito tomar bebidas alcohólicas en la mañana,   después de haber tomado el dia anterior (si esto no   ocurre, marque nunca).                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre11" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre11" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre11" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre11" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre11" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        12.- Encuentro satisfacción en mi trabajo/  universidad.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre12" class="square" value="4">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre12" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre12" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre12" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre12" class="square" value="0">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        13.- Soy una persona feliz.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre13" class="square" value="4">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre13" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre13" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre13" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre13" class="square" value="0">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        14.- Trabajo/estudio excesivamente (más de la   cuenta).                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre14" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre14" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre14" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre14" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre14" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        15.- Me siento inútil.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre15" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre15" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre15" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre15" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre15" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        16.- Me abruman (angustian) los problemas de mi   familia.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre16" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre16" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre16" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre16" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre16" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        17.- Mi vida sexual me llena (sea activa o  no).                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre17" class="square" value="4">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre17" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre17" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre17" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre17" class="square" value="0">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        18.- Me siento solo.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre18" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre18" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre18" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre18" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre18" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        19.- Discuto frecuentemente.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre19" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre19" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre19" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre19" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre19" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        20.- Me siento querido y que me   necesitan.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre20" class="square" value="4">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre20" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre20" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre20" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre20" class="square" value="0">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        21.- Disfruto mi tiempo libre.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre21" class="square" value="4">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre21" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre21" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre21" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre21" class="square" value="0">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        22.- Tengo dificultades para  concentrarme.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre22" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre22" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre22" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre22" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre22" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        23.- Me siento sin esperanzas en el   futuro.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre23" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre23" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre23" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre23" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre23" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        24.- Estoy contento conmigo mismo.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre24" class="square" value="4">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre24" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre24" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre24" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre24" class="square" value="0">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        25.- Me perturban o molestan pensamientos de los que no   me puedo deshacer.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre25" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre25" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre25" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre25" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre25" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        26.- Me molesta que me critiquen porque tomo o me   drogo. (No se refiere a medicamentos). (Si esto no le   ocurre, marque nunca).                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre26" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre26" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre26" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre26" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre26" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        27.- Tengo malestares estomacales.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre27" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre27" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre27" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre27" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre27" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        28.- Trabajo/estudio tan bien como lo hacia   antes.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre28" class="square" value="4">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre28" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre28" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre28" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre28" class="square" value="0">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        29.- Mi corazon palpita demasiado.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre29" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre29" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre29" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre29" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre29" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        30.- Tengo dificultades para llevarme bien con mis  amigos y conocidos.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre30" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre30" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre30" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre30" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre30" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        31.- Estoy satisfecho con mi vida.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre31" class="square" value="4">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre31" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre31" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre31" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre31" class="square" value="0">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        32.- Tengo problemas en el trabajo/universidad debido a   las drogas o el alcohol. (Si esto no le ocurre, marque  nunca).                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre32" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre32" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre32" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre32" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre32" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        33.- Siento que algo malo va a ocurrir.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre33" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre33" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre33" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre33" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre33" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        34.- Tengo los músculos adolorídos.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre34" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre34" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre34" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre34" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre34" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        35.- Me atemorizan los espacios abiertos, el manejar,   el estar dentro de un bus, el metro, ascensores,  etc.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre35" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre35" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre35" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre35" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre35" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        36.- Me siento nervioso.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre36" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre36" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre36" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre36" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre36" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        37.- Me satisfacen mis relaciones con mis seres   queridos.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre37" class="square" value="4">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre37" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre37" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre37" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre37" class="square" value="0">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        38.- Siento que me va bien en el trabajo/ escuela.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre38" class="square" value="4">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre38" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre38" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre38" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre38" class="square" value="0">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        39.- Tengo muchas discuciones en el trabajo/  universidad.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre39" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre39" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre39" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre39" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre39" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        40.- Siento que algo anda mal con mi  mente.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre40" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre40" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre40" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre40" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre40" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        41.- Tengo dificultades para dormir, o no me puedo  quedar dormido.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre41" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre41" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre41" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre41" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre41" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        42.- Me siento triste.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre42" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre42" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre42" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre42" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre42" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        43.- Mis relaciones con otros me  satisfacen.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre43" class="square" value="4">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre43" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre43" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre43" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre43" class="square" value="0">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        44.- Me enojo tanto en el trabajo/universidad que puedo   hacer algo de lo que después me puedo   arrepentir.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre44" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre44" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre44" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre44" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre44" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
      
  
                <tr>
                  <td>
                    <label>
                        45.- Me dan dolores de cabeza.                
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre45" class="square" value="0">
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre45" class="square" value="1">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre45" class="square" value="2" required>
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre45" class="square" value="3">                    
                    </label>
                  </td>
                  <td  style="text-align: center;">
                    <label class="radio-inline">
                      <input type="radio" name="pre45" class="square" value="4">                    
                    </label>
                  </td>              
                </tr>
              </form>
              </table>
             <div class="box-footer">
              <button type="submit" class="btn btn-success">Enviar Cuestionario</button>
            </div>
              <br>
            </div>
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
      checkboxClass: 'icheckbox_square-green',
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
</script>
@endsection
