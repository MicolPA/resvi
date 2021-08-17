@extends('layoutdashboard')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
{{-- stilos para la card --}}

<!------ Include the above in your HEAD tag ---------->
{{-- Formulario --}}
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
        {{-- inicio del formulario --}}

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Agendar Turno</h4>
            <p class="card-description">
              Formulario agendar turno
            </p>
            <form class="forms-sample">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Fecha de Viaje</label>
                      <div class="col-sm-9">
                        <input id="datetimepicker6" type="date" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Hora salida</label>
                      <div class="col-sm-9">                        
                        <select  class="form-control" name="cars" id="cars">
                            <option value="volvo">8:00 am</option>
                            <option value="saab">10:00 am</option>
                            <option value="opel">12:00 am</option>
                            <option value="audi">2:00 pm</option>
                            <option value="volvo">4:00 pm</option>
                            <option value="saab">6:00 pm</option>
                            <option value="opel">8:00 pm</option>                            
                        </select>
                      </div>
                    </div>
                  </div>
                </div>               
              <div class="form-group">
                <label for="exampleTextarea1">Comentario</label>
                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
              </div>
              {{-- <button type="submit" class="btn btn-primary mr-2">Agendar viaje</button>
              <button class="btn btn-danger">Cancelar</button> --}}
            </form>
            <button onclick="comprarBoleto()" class="btn btn-primary mr-2">Agendar turno</button>
            <button onclick="cancelarBoleto()" class="btn btn-danger">Cancelar</button>
          </div>
        </div>
      </div>
      {{-- Final del formulario --}}
      
    </div>
  </div>
  <!-- content-wrapper ends -->
{{-- Final del formulario --}}


{{-- javascript --}}
  <script type="text/javascript">
    function comprarBoleto()
    {
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Tu solicitud ha sido guardada',
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
          window.location = "{{route('dashboard')}}";
      })
    }
    function cancelarBoleto()
    {
      Swal.fire({
        title: '¿Está seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: ' sí, ¡Confirmado!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            '¡Cancelado!',
            'Tu solicitud se cancelo con exito.',
            'success'
          ).then(function() {
              window.location = "{{route('dashboard')}}";
          })
        }
      })
    }
    // js para el calendario
    
     
  </script>

{{-- final de javascript --}}
@endsection
     