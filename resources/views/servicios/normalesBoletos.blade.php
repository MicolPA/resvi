@extends('layoutdashboard')
@section('content')
{{-- stilos para la card --}}

<!------ Include the above in your HEAD tag ---------->
{{-- Formulario --}}
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
        {{-- inicio del formulario --}}

      {{-- <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Servicio Normales</h4>
            <p class="card-description">
              Formulario para solicitar servicio
            </p>
            <form class="forms-sample">
              <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleSelectGender">Gender</label>
                  <select class="form-control" id="exampleSelectGender">
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
              <div class="form-group">
                <label>File upload</label>
                <input type="file" name="img[]" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputCity1">City</label>
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Textarea</label>
                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div> --}}
      {{-- Final del formulario --}}
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Solicitar Boleto</h4>
            <p class="card-description">
            Cuando solicite su boleto favor de estar 15 minutos antes en la parada asignada 
            </p>
            <br>
            {{-- bloque del boleto --}}
            <div class="card" style="width: 100%">
              <div class="row no-gutters">
                  <div class="col-sm-5">
                      <img class="card-img" src="https://pbs.twimg.com/profile_images/1536230818/FacebookHomescreenImage_400x400.jpg" style="width: 300px;margin: 0 auto;display: block;">
                  </div>
                  <div class="col-sm-7">
                      <div class="card-body">
                          <h5 class="card-title"><strong><h3>La Altagracia</h3></strong></h5>
                          <p class="card-text"><strong>Condutor:</strong> Jacque Gille</p>
                          <p class="card-text"><strong>Parada:</strong> Parque Eriquillo (Santo Domingo)</p>
                          <p class="card-text"><strong>Hora de Salida:</strong> 10:00 PM </p>
                          <p class="card-text"><strong>Hora de Llegada:</strong> 12:00 PM</p>
                          <p class="card-text"><strong>Autobús Asignado:</strong> Modelo New G7</p>
                          <p class="card-text"><strong>Asiento disponibles:</strong> 70</p>
                          <p class="card-text"><strong>Nota:</strong> Si llega 15minutos antes de viaje su boleto sera cancelado</p>
                          <br>
                          {{-- <a href="{{route('servicios.Normales')}}">Boton anterior</a> --}}
                         
                            <button onclick="comprarBoleto()" class="btn btn-primary">Comprar Boleto</button>
                            <button onclick="cancelarBoleto()" class="btn btn-danger">Cancelar Boleto</button>
                        
                      </div>
                  </div>
              </div>
          </div>
{{-- final de bloque del boleto --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
{{-- Final del formulario --}}

{{-- javascript --}}
  <script>
    function comprarBoleto()
    {
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Tu solicitud ha sido guardada',
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
          window.location = "{{route('servicios.Normales')}}";
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
              window.location = "{{route('servicios.Normales')}}";
          })
        }
      })
    }
  </script>

{{-- final de javascript --}}
@endsection
     