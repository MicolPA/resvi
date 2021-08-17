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
                <h4 class="card-title">Viajes Personalizados</h4>
                <p class="card-description">
                  Listado de tus viajes
                </p>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Numero de viaje</th>
                        <th>Fecha </th>
                        <th>Estatus</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Jacob</td>
                        <td>53275531</td>
                        <td>12 Mayo 2017</td>
                        <td><label class="badge badge-danger">Cancelado</label></td>
                      </tr>
                      <tr>
                        <td>Messsy</td>
                        <td>53275532</td>
                        <td>15 Mayo 2017</td>
                        <td><label class="badge badge-warning">En proceso</label></td>
                      </tr>
                      <tr>
                        <td>John</td>
                        <td>53275533</td>
                        <td>14 Mayo 2017</td>
                        <td><label class="badge badge-info">Modificado</label></td>
                      </tr>
                      <tr>
                        <td>Peter</td>
                        <td>53275534</td>
                        <td>16 Mayo 2017</td>
                        <td><label class="badge badge-success">Completado</label></td>
                      </tr>
                      <tr>
                        <td>Dave</td>
                        <td>53275535</td>
                        <td>20 Mayo 2017</td>
                        <td><label class="badge badge-warning">En proceso</label></td>
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
     