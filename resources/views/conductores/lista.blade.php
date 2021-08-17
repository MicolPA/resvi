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
                     Conductor
                    </th>
                    <th>
                      Nombre Completo
                    </th>
                    <th>
                      Correo Electronico
                    </th>
                    <th>
                      Trasporte
                    </th>
                    <th>
                      Agencia de viaje
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-1">
                      <img src="{{asset('../../template-admin/images/faces/face1.jpg')}}" alt="image">
                    </td>
                    <td>
                      Herman Beck
                    </td>
                    <td>
                     beta@beta.com
                    </td>
                    <td>
                        Modelo New G7
                    </td>
                    <td>
                        APTPRA
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="{{asset('../../template-admin/images/faces/face2.jpg')}}" alt="image">
                    </td>
                    <td>
                      Messsy Adam
                    </td>
                    <td>
                        beta@beta.com
                    </td>
                    <td>
                        Modelo New G7
                    </td>
                    <td>
                        APTPRA
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="{{asset('../../template-admin/images/faces/face3.jpg')}}" alt="image">
                    </td>
                    <td>
                      John Richards
                    </td>
                    <td>
                        beta@beta.com
                    </td>
                    <td>
                        Modelo New G7
                    </td>
                    <td>
                        APTPRA
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="{{asset('../../template-admin/images/faces/face4.jpg')}}" alt="image">
                    </td>
                    <td>
                      Peter Meggik
                    </td>
                    <td>
                        beta@beta.com
                    </td>
                    <td>
                        Modelo New G7
                    </td>
                    <td>
                        APTPRA
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="{{asset('../../template-admin/images/faces/face5.jpg')}}" alt="image">
                    </td>
                    <td>
                      Edward
                    </td>
                    <td>
                        beta@beta.com
                    </td>
                    <td>
                        Modelo New G7
                    </td>
                    <td>
                        APTPRA
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="{{asset('../../template-admin/images/faces/face6.jpg')}}" alt="image">
                    </td>
                    <td>
                      John Doe
                    </td>
                    <td>
                        beta@beta.com
                    </td>
                    <td>
                        Modelo New G7
                    </td>
                    <td>
                        APTPRA
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="{{asset('../../template-admin/images/faces/face7.jpg')}}" alt="image">
                    </td>
                    <td>
                      Henry Tom
                    </td>
                    <td>
                        beta@beta.com
                    </td>
                    <td>
                        Modelo New G7
                    </td>
                    <td>
                        APTPRA
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>



          
    </div>
  </div>
  <!-- content-wrapper ends -->
{{-- Final del formulario --}}
@endsection
     