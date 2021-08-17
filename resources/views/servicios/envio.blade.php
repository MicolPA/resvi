@extends('layoutdashboard')
@section('content')
{{-- stilos para la card --}}

<!------ Include the above in your HEAD tag ---------->
{{-- Formulario --}}
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">

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
      <section>
        <div class="container">
            <h3 class="card-title">Servicio de Envios</h3>
            <br>
          <div class="row">
            <!--Profile Card 3-->
            <div class="col-md-4">
                <div class="card profile-card-3">
                    <div class="background-block">
                        <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile-sample1" class="background"/>
                    </div>
                    <div class="profile-thumb-block">
                        <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="profile-image" class="profile"/>
                    </div>
                    <div class="card-content">
                        <h2>La Altagracia<small>Conductor -  Jacque Gille</small></h3>
                        <div class="icon-block"><a href="#"><i class="ti-facebook"></i></a><a href="#"> <i class="ti-twitter"></i></a><a href="#"> <i class="ti-instagram"></i></a></div>
                        </div>
                        
                    <br>
                    <a href="{{route('servicios.Envio.boleto')}}" class="btn btn-success btn-md">Solicitar</a>
                    <br>
                    </div>
                    <br>
            </div>
            <div class="col-md-4">
                <div class="card profile-card-3">
                    <div class="background-block">
                        <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile-sample1" class="background"/>
                    </div>
                    <div class="profile-thumb-block">
                        <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="profile-image" class="profile"/>
                    </div>
                    <div class="card-content">
                        <h2>La Romana<small>Conductor - Jose Soto</small></h3>
                        <div class="icon-block"><a href="#"><i class="ti-facebook"></i></a><a href="#"> <i class="ti-twitter"></i></a><a href="#"> <i class="ti-instagram"></i></a></div>
                        </div>
                        <br>
                    <a class="btn btn-success btn-md">Solicitar</a><br>
                    </div>
                    <br>
                   
            </div>
            <div class="col-md-4">
                <div class="card profile-card-3">
                    <div class="background-block">
                        <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile-sample1" class="background"/>
                    </div>
                    <div class="profile-thumb-block">
                        <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="profile-image" class="profile"/>
                    </div>
                    <div class="card-content">
                        <h2>Constanza <small>Conductor - Hector Ortiz</small></h3>
                        <div class="icon-block"><a href="#"><i class="ti-facebook"></i></a><a href="#"> <i class="ti-twitter"></i></a><a href="#"> <i class="ti-instagram"></i></a></div>
                        </div>
                        <br>
                    <a class="btn btn-success btn-md">Solicitar</a><br>
                    </div>
                    <br>
            </div>
            <div class="col-md-4">
                <div class="card profile-card-3">
                    <div class="background-block">
                        <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile-sample1" class="background"/>
                    </div>
                    <div class="profile-thumb-block">
                        <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="profile-image" class="profile"/>
                    </div>
                    <div class="card-content">
                        <h2>San Juan<small>Conductor - Mario Joel Aquino</small></h3>
                        <div class="icon-block"><a href="#"><i class="ti-facebook"></i></a><a href="#"> <i class="ti-twitter"></i></a><a href="#"> <i class="ti-instagram"></i></a></div>
                        </div>
                        <br>
                         <a class="btn btn-success btn-md">Solicitar</a><br>
                    </div>
                    <br>
            </div>
            <div class="col-md-4">
                <div class="card profile-card-3">
                    <div class="background-block">
                        <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile-sample1" class="background"/>
                    </div>
                    <div class="profile-thumb-block">
                        <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="profile-image" class="profile"/>
                    </div>
                    <div class="card-content">
                        <h2>San Pedro de Macoris<small>Conductor - Micol Rojas</small></h3>
                        <div class="icon-block"><a href="#"><i class="ti-facebook"></i></a><a href="#"> <i class="ti-twitter"></i></a><a href="#"> <i class="ti-instagram"></i></a></div>
                        </div>
                        <br>
                        <a class="btn btn-success btn-md">Solicitar</a><br>
                    </div>
                    <br>
                    
            </div>
            <div class="col-md-4">
                <div class="card profile-card-3">
                    <div class="background-block">
                        <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile-sample1" class="background"/>
                    </div>
                    <div class="profile-thumb-block">
                        <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="profile-image" class="profile"/>
                    </div>
                    <div class="card-content">
                        <h2>Barahona<small>Conductor - Paulino Matos</small></h3>
                        <div class="icon-block"><a href="#"><i class="ti-facebook"></i></a><a href="#"> <i class="ti-twitter"></i></a><a href="#"> <i class="ti-instagram"></i></a></div>
                        </div>
                        <br>
                    <a class="btn btn-success btn-md">Solicitar</a><br>
                    </div>
                    <br>
            </div>
            
            
            
          </div>
        </div>
    </section>
    </div>
  </div>
  <!-- content-wrapper ends -->
{{-- Final del formulario --}}
@endsection
     