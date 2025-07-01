@extends("layouts.master")


@section('content')
<div class="col "><br>
    <h3 class="page-title"><b>Le Profil</b></h3>


    <ul class="breadcrumb">
        <li class="breadcrumb-user"><a href="/profile"> profil</a></li>

        {{-- <li class="breadcrumb-user active"> / </li> --}}

    </ul>  </div></div>


    <!-- Content Header (Page header) -->


      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="card card-info card-outline">
                <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle admin_picture"src=" {{asset('/images/user.png') }}" alt="User profile picture">
                  </div>
                  {{-- {{ Auth::user()->picture }} --}}

                  <h3 class="profile-username text-center admin_name">{{ Illuminate\Support\Facades\Auth::user()->prenom }} {{Illuminate\Support\Facades\Auth::user()->name}}  </h3>

                  <p class="text-muted text-center">{{ Illuminate\Support\Facades\Auth::user()->poste }}</p>

                  <input type="file" name="admin_image" id="admin_image" style="opacity: 0;height:1px;display:none">
                  <a href="javascript:void(0)" class="btn btn-info " id="change_picture_btn"><b>Changer la photo </b></a>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->


            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2 bg-secondary">
                  <ul class="nav nav-pills ">
                    <li class="nav-item"><a class="nav-link active text-white" href="#personal_info" data-toggle="tab"><b>Information personnelle</b></a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#change_password" data-toggle="tab"><b>Changer le mot de passe</b></a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="personal_info">
                      <form class="form-horizontal" method="POST" action="{{route('adminUpdateInfo') }} " id="AdminInfoForm">
                        @csrf
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Name" value="{{ Illuminate\Support\Facades\Auth::user()->name }}" name="name">

                              <span class="text-info error-text name_error"></span>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Prenom</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Name" value="{{ Illuminate\Support\Facades\Auth::user()->prenom }}" name="prenom">

                              <span class="text-info error-text prenom_error"></span>
                            </div>
                          </div>


                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Adresse-email</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Email" value="{{ Illuminate\Support\Facades\Auth::user()->email }}" name="email">
                            <span class="text-info error-text email_error"></span>
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-success"><b>sauvegarder</b></button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="change_password">
                        <form class="form-horizontal" action="{{route('adminChangePassword') }}" method="POST" id="changePasswordAdminForm">

                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">ancien mot de passe</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="inputName" placeholder="Enter current password" name="ancien mot de passe">
                              <span class="text-info error-text oldpassword_error"></span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Nouveau mot de passe</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="newpassword" placeholder="Nouveau mot de passe" name="newpassword">
                              <span class="text-info error-text newpassword_error"></span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Confirmer le nouveau mot de passe</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="cnewpassword" placeholder="Confirmer le nouveau mot de passe" name="cnewpassword">
                              <span class="text-info error-text cnewpassword_error"></span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-success"><b>sauvegarder</b></button>
                            </div>
                          </div>
                        </form>

                      </div>
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>






            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

<style>

.btn-info
        {


            border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      /* padding: 1%; */
      /* width: 15%; */
       cursor: pointer;
       background: #008B8B;
       /* 006400  vert */
      color: #fff;
      text-align: center;
         display: block;
        margin: 0 auto;


        }
        .btn-success
        {


            border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      /* padding: 1%; */
      /* width: 20%; */
      cursor: pointer;
       background: #008B8B;
       /* //006400 */ vert
      color: #fff;


        }

        .form-control
        {
            border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;

        }
        .card-outline
        {
            border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;

        }

        .card
        {
            border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;

        }

        .bg-secondary
        {
            border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;


        }





</style>
@endsection
