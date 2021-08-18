@extends('layoutdashboard')
@section('content')
{{-- stilos para la card --}}

<!------ Include the above in your HEAD tag ---------->
{{-- Formulario --}}
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Conductores</h4>
            <p class="card-description">
              Lista de conductores registrados
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>                    
                    <th>
                     Usuario
                    </th>
                    <th>
                      Codigo
                    </th>
                    <th>
                      Nombre Completo
                    </th>
                    <th>
                      Correo Electronico
                    </th>                    
                    <th>
                      Fecha Registro
                    </th>
                  </tr>
                </thead>
                <tbody>
                   
                    @foreach ($suariosRegistrados as $usuarioslista)
                    <tr>
                    <td class="py-1">
                      <img src="{{asset('../../template-admin/images/faces/face1.jpg')}}" alt="image">
                    </td>
                    <td>
                      {{$usuarioslista['id']}}
                    </td>
                    <td>
                      {{$usuarioslista['name']}}
                    </td>
                    <td>
                      {{$usuarioslista['email']}}
                    </td>                    
                    <td>
                      {{-- {{DATE($usuarioslista['created_at'])}} --}}
                      {{ \Carbon\Carbon::parse($usuarioslista['created_at'])->format('d/m/Y')}}                      
                    </td>
                  </tr>
                  
                  @endforeach                  
                </tbody>
              </table>              
            </div>
            <br>
            {{$suariosRegistrados->links()}}
          </div>
        </div>
      </div>          
    </div>
  </div>
  <!-- content-wrapper ends -->
{{-- Final del formulario --}}
@endsection
     