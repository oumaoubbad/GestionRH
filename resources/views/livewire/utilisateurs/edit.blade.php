<div class="row  p-2 pt-5">
    <div class="col">
        <h3 class="page-title"><b> Formulaire D'édition Employé</b></h3>

        <ul class="breadcrumb">
            <li class="breadcrumb-user"><a href="/home">tableau de bord</a></li>
            <li class="breadcrumb-user"><a href="/habilitations/utilisateurs"> / liste des employés</a></li>

            <li class="breadcrumb-user active">/ éditer employé</li>

        </ul>
        <div class="row p-4 pt-5">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class=" " >

        <!-- general form elements -->
      {{--    <div class="card card-dark" >
          <style>
                /* .card {
  background-image: linear-gradient(to bottom, #191970, #4169E1);
} */

            </style>
            <div class="card-header ">
            <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i><b> Formulaire d'édition employé</b></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

 --}}
 {{-- <div class="row  p-4 pt-5">
    <div class="col"> --}}
        {{-- <h3 class="page-title"><b>formulaire de  employé</b></h3>

        <ul class="breadcrumb">
            <li class="breadcrumb-user"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-user active">Employe</li>

        </ul> --}}

            <div class="row  p-4 pt-5">               {{-- ajout dun user --}}
        <div class="col-10">

        <div class="card card-secondary">
            {{-- <div class="card-header "> --}}
            {{-- <h3 class="card-title" > <i class="fas fa-user-plus fa-2x mr-1 "></i>  Formulaire de création d'un nouvel employé </h3> --}}

        </div>












            <form role="form" wire:submit.prevent="updateUser()" method="POST">
            <div class="card-body">

                <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label >Nom</label>{{-- wire:model="editUser.name: kansta3mloha ftraitement d'enregister user f BD(ajouter nv user)--}}
                        <input type="text" wire:model="editUser.name"  class='form-control @error('editUser.name') is-invalid @enderror'>

                                           @error("editUser.name")
                                           <span class="text-danger">{{ $message }}</span>
                                           @enderror

                                       </div>

                                       <div class="form-group flex-grow-1">
                                           <label >Prenom</label>
                         <input type="text"   wire:model="editUser.prenom"  class='form-control @error('editUser.prenom') is-invalid @enderror'>

                                           @error("editUser.prenom")
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                       </div></div>

                                           <div class="form-group">
                                               <label >Sexe</label>
                             <select    wire:model="editUser.sexe" class='form-control @error('editUser.sexe') is-invalid @enderror'>

                                                   <option value=""> -----------</option>
                                                   <option value="Femme"> Femme</option>
                                                   <option value="Home"> Home</option>

                                               </select>

                                               @error("editUser.sexe")
                                               <span class="text-danger">{{ $message }}</span>
                                           @enderror
                                               </div>



                                                   <div class="d-flex">
                                                   <div class="form-group flex-grow-1 mr-2">

                                                   <label >Telephone</label>
                                                   <input type="texte"  wire:model="editUser.tel" class='form-control @error('editUser.tel') is-invalid @enderror'>

                                                   @error("editUser.tel")
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                               </div>
                                               <div class="form-group flex-grow-1">
                                                   <label  >Adresse e-mail</label>
                                                   <input type="email"  wire:model="editUser.email" class='form-control @error('editUser.email') is-invalid @enderror'>

                                                   @error("editUser.email")
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                   </div></div>


                                                   <div class="d-flex">
                                                       <div class="form-group flex-grow-1 mr-2">
                                                   <label >CIN</label>
                                                   <input type="text"   wire:model="editUser.numeroPieceIdentite" class='form-control @error('editUser.numeroPieceIdentite') is-invalid @enderror'>

                                                   @error("editUser.numeroPieceIdentite")
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                               </div>

                                               <div class="form-group flex-grow-1">
                                                   <label >Date de naissance</label>
                                                   <input type="text"   wire:model="editUser.date_naissance" class='form-control @error('editUser.date_naissance') is-invalid @enderror'>

                                                   @error("editUser.date_naissance")
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                               </div></div>


                                               <div class="form-group flex-grow-1">
                                                   <label >Adresse</label>
                                                   <input type="text"   wire:model="editUser.adresse" class='form-control @error('editUser.adresse') is-invalid @enderror'>

                                                   @error("editUser.adresse")
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                               </div>







                                                   <div class="d-flex">
                                                   <div class="form-group flex-grow-1 mr-2">
                                                       <label >Département</label>
                                 <select    wire:model="editUser.departement" class='form-control @error('editUser.departement') is-invalid @enderror'>

                                                       <option value=""> -----------</option>
                                                       <option value="Ressources humaines"> Ressources humaines</option>
                                                       <option value="Développement"> Développement</option>
                                                       <option value="Support technique"> Support technique</option>
                                                       <option value=" Administration"> Administration</option>

                                                   </select>

                                                   @error("editUser.departement")
                                                   <span class="text-danger">{{ $message }}</span>
                                               @enderror
                                                   </div>




                                                       <div class="form-group flex-grow-1">
                                                           <label >Poste</label>
                                         <input type="text"   wire:model="editUser.poste"  class='form-control @error('editUser.poste') is-invalid @enderror'>

                                                           @error("editUser.poste")
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                       </div></div>









                                                       <div class="d-flex">
                                                           <div class="form-group flex-grow-1 mr-2">


                                                   <label >Type de contrat</label>
                                                   <input type="text"   wire:model="editUser.type_contrat" class='form-control @error('editUser.type_contrat') is-invalid @enderror'>

                                                   @error("editUser.type_contrat")
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                               </div>



                                               <div class="form-group flex-grow-1">
                                                   <label >date D'embauche</label>
                                                   <input type="text"   wire:model="editUser.dateDembauche" class='form-control @error('editUser.dateDembauche') is-invalid @enderror'>

                                                   @error("editUser.dateDembauche")
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                               </div></div>



            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                {{-- <button type="button" wire:click="goToListUser()" class="btn btn-dark"> --}}
                    {{-- <i class="fa fa-times mr-1"></i>Retour</button> --}}
                {{-- <button type="submit" class="btn btn-info"> <i class="fa fa-save mr-1"></i>Appliquer les modifications   </button>--}}

           {{-- <button  type="button"class="btn btn-custom"  wire:click="goToListUser()"><b>Retour</b></button>
           <style>
            .btn-custom {
                background-color: #191970;
                /* 2F4F4F; */
                color: #FFFFFF;}
        </style>
               <button  type="submit" class="btn btn-c" ><b>Appliquer les modifications</b></button>
                 --}}


                {{-- <button type="button" wire:click="goToListUser()" class="btn btn-danger">  Retour</button> --}}

                {{-- <button type="submit" class="btn btn-primary">  Enregistrer</button> --}}
                <button type="button" class="btn btn-outline-dark" wire:click="goToListUser()"><b>Retour</b></button>

                {{-- <button  type="button"class="btn btn-custom"  wire:click="goToListUser()">Retour</button>
                <style>
                    .btn-custom {
                        background-color: #393d3a;
                        color: #FFFFFF;}
                </style> --}}
                <button type="submit" class="btn btn-success btn-blockk"><b>Enregistrer</b></button>





                <style>


                    .btn-c {
                        background-color:  #191970;
                        color: #FFFFFF;
                    }
                </style>

            </div>
            </form>
        </div>
       <!-- /.card -->
 <!-- /.card -->

</div></div></div>
 <div class="col">
    <div class="row p-2 pt-5">
    <div class="row ">
        <div class="col-md-12">
            <div class=" ">
                <div class="">
                    {{-- <h3 class="card-title"><i class="fas fa-key fa-2x"></i> </h3> --}}
                    </div>
             <div class="card-body">
                        <ul>
                            <li>
           {{-- <a href="#" class="btn btn-link" wire:click.prevent="()"><b>Réinitialiser le mot de passe</b></a> --}}
           <a href="#" class="btn btn-link-reset-password" wire:click.prevent="confirmPwdReset()"><b>Réinitialiser le mot de passe</b></a>
           <style>
           .btn-link-reset-password {
            color: #008B8B;
        }
    </style>
                                <span>("password") </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <!------ Include the above in your HEAD tag ---------->






            <style>
.btn-outline-info
  {
    border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      /* padding: 1%; */
      width: 40%;
      cursor: pointer;
      background: #008B8B;
      color: #fff;
  }

  .btn-outline-dark
  {
    border: 2px solid 	#ffffff;
      border-radius:1.5rem;
      /* padding: 1%; */
      width: 30%;
      cursor: pointer;
      background:  #454545 ;
      color: #fff;
  }

/* btn appliquer... */
  .btn-blockk{
    border: 2px solid 	#ffffff;
    border-radius:1.5rem;
    width: 60%;
    cursor: pointer;
    background: #008B8B;
    color: #fff;

    text-align: center;
     display: block;
    margin: 0 auto;
  }

  .card-footer {
   display: flex;
  justify-content: center;
                }
/* form /card en general de edit */

                .col-10{


border: 1px solid 	#000000;
border-radius:1.5rem;
background: #e9e9e9 ;

     /* background: #e9e9e9 ; */

}
/* les champs de formulaire */
.form-control{
    border-radius:1.5rem;
                            }

     /*cars reinitialiser mot passe   et les roles*/
     .col-md-12{


border: 1px solid #000000;
background: #e9e9e9 ;

border-radius:1.5rem;
padding: 2%;
width: 30%;
/* background: #e9e9e9 ; */

}
</style>








<div></div>
<div class="col-md-12 mt-4">
    <div class="   ">
        <div class=" ">
                    {{-- <h3 class="card-title flex-grow-1"><i class="fas fa-fingerprint fa-2x"></i> <b>Roles d'utilisateur</b></h3> --}}
                    {{-- <button class="btn bg-gradient-dark" wire:click="updateRoleAndPermissions"><i class="fas fa-check"></i> Appliquer les modifications</button> --}}
                    </div>
                    <!-- /.card-header -->

  <div class="card-body">

    <div id="accordion">
        @foreach($rolePermissions["roles"] as $role)
        <div class="">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title flex-grow-1">
  <a  data-parent="#accordion" href="#"  aria-expanded="true">
    <p style="color:black">{{$role["role_name"]}}</p>

                </a>
                </h4>
                <div class="custom-control custom-switch custom-switch-off-dark custom-switch-on-info">

                    <input type="checkbox" class="custom-control-input" wire:model.lazy="rolePermissions.roles.{{$loop->index}}.active"
                        @if($role["active"]) checked @endif
                        id="customSwitch{{$role['role_id']}}">
                    <label class="custom-control-label" for="customSwitch{{$role['role_id']}}"> {{ $role["active"]? "Activé" : "Desactivé" }}</label>
                </div>
            </div>
        </div> </div>
        @endforeach
        <button type="button" class="btn btn-success btn-blockk" wire:click="updateRoleAndPermissions"><b>Appliquer le role</b></button>



                  </div>

                                </div>
                    </div>          </div>
                </div>
            </div>
        </div>
    </div>



























                    {{--  <div class="p-3">
                        <table class="table table-bordered">
                            <thead>
                                <th>Permissions</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach($rolePermissions["permissions"] as $permission)
                                <tr>
                                    <td>{{ $permission["permission_nom"] }}</td>
                                    <td>
                                        <div class="custom-control custom-switch custom-switch-off-dark custom-switch-on-info">

                                                <input type="checkbox" class="custom-control-input"
                                                    @if($permission["active"]) checked @endif
                                                    wire:model.lazy="rolePermissions.permissions.{{$loop->index}}.active"
                                                    id="customSwitchPermission{{$permission['permission_id']}}">
                                                <label class="custom-control-label" for="customSwitchPermission{{$permission['permission_id']}}"> {{ $permission["active"]? "Activé" : "Desactivé" }}</label>
                                            </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div> --}}










            {{-- <div class="col-md-12 mt-4">
                <div class="card card-info">
                    <div class="card-header d-flex align-items-center">
                    <h3 class="card-title flex-grow-1"><i class="fas fa-fingerprint fa-2x"></i> <b>Roles & permissions</b></h3>
                    <button class="btn bg-gradient-dark" wire:click=""><b>Appliquer les modifications</b></button>
                    </div>
                    <!-- /.card-header -->








  <div class="card-body"> /////////////////haaaaaaaaaaaadi
                            <div id="accordion">
                                    {{-- @foreach($rolePermissions["roles"] as $role) --}}
                                    {{-- <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <h4 class="card-title flex-grow-1">
                                            <a  data-parent="#accordion" href="#"  aria-expanded="true">
                                                {{-- {{$role["role_nom"]}} --}}
                                            {{-- </a>
                                            </h4>
                                            <div class="custom-control custom-switch custom-switch-off-dark custom-switch-on-info">

                                                <input type="checkbox" class="custom-control-input" wire:model.lazy="" --}}
                                                    {{-- @if($role["active"]) checked @endif --}}
                                                    {{-- id="customSwitch">
                                                <label class="custom-control-label" for="customSwitch">  "Activé" : "Desactivé" }}</label>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- @endforeach
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> --}}

