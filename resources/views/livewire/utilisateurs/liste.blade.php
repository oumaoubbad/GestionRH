
    <script>

        window.addEventListener("showSuccessMessage", event=>{

      Swal.fire({
                     position: 'top-end',
                     icon: 'success',
                     toast:true,
                     title: event.detail.message || "Opération effectuée avec succès!",
                     showConfirmButton: false,
                     timer: 5000
                     }
                 )
             })



         window.addEventListener("showConfirmMessage", event=>{

     Swal.fire({
        title: event.detail.message.title,
             text: event.detail.message.text,
             icon: event.detail.message.type,
             showCancelButton: true,
             confirmButtonColor: '#008B8B',
              cancelButtonColor: '#393d3a',
             confirmButtonText: 'Continuer',
             cancelButtonText: 'Annuler'
             }).then((result) => {
             if (result.isConfirmed) {
                 if(event.detail.message.data){
                   // au cas de supprimer un user
                     @this.deleteUser(event.detail.message.data.user_id)
                 }


             }
             })
      })


      window.addEventListener("showConfirmMessagePswrd", event=>{

Swal.fire({
   title: event.detail.message.title,
        text: event.detail.message.text,
        icon: event.detail.message.type,
        showCancelButton: true,
        // confirmButtonColor: '#008B8B',
        confirmButtonColor: '#008B8B',


        cancelButtonColor: '#393d3a',
        confirmButtonText: 'Continuer',
        cancelButtonText: 'Annuler'
        }).then((result) => {
        if (result.isConfirmed) {

              // AU CAS DE RENISEALISER LE PASSWORD
               @this.resetPassword()


        }
        })
 })



//
</script>





<div class="row  p-4 pt-5">
    <div class="col">
  <!-- Page Wrapper -->
  <div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-users-center">
                <div class="col">
                    <h3 class="page-title"><b>Liste des Employés</b></h3>

                    <ul class="breadcrumb">
                        <li class="breadcrumb-user"><a href="/home">tableau de bord</a></li>
                        <li class="breadcrumb-user active"> / liste des employés</li>

                    </ul>
                </div>
                <div class="card-tools  d-flex align-users-center ">
                <div class="col-auto float-right ml-auto">
                    {{-- <a  class="btn add-btn"   wire:click.prevent='goToAddUser()' data-toggle="modal" ><i class="fa fa-plus"></i> <b>Ajouter Employé</b></a> --}}


                    <div class="view-icons">
                        {{-- <a href="{{ route('all/employee/card') }}" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a> --}}
                        {{-- <a href="{{ route('all/employee/list') }}" class="list-view btn btn-link"><i class="fa fa-bars"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <!-- Search Filter -->
        {{-- <form action=" " method="POST">
            @csrf --}}
            <div class="row filter-row">
                <div class="col-sm-6 col-md-3">
                     <div class="form-group form-focus">
                        {{-- <button type="sumit" wire:click.prevent='goToAddUser()'  class="btn btn-success btn-block"><b>Ajouter Employé</b>   </i> </button> --}}

                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    {{-- <div class="form-group form-focus">
                        <input type="text" class="form-control floating">
                        <label class="focus-label">Employee Name</label>
                    </div> --}}
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus">

                          {{-- <input type="text" name="table_search" class="form-control float-right"    wire:model.debounce.300ms="search" placeholder="Search"> --}}
                        <label class="focus-label">  </label>

                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    {{-- <button type="sumit" class="btn btn-success btn-block">  <i class="fas fa-search"></i> </button> --}}
                    <button type="sumit" wire:click.prevent='goToAddUser()'  class="btn  btn-blockk"><b>Ajouter Employé</b>   </i> </button>

                </div>
            </div>
        </form>
        <!-- Search Filter -->
        {{-- message --}}
        {{-- {!! Toastr::message() !!} --}}

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped custom-table datatable">

                        <thead>
                            <tr>
                                <th style="width:5%;"></th>
                                <th style="width:20%;">Employé</th>
                                <th style="width:10%;">Poste</th>
                                <th style="width:15%;">Email </th>
                                <th style="width:20%;">Envoyer un email</th>
                                <th class="text-right no-sort" style="width:30%;" >Action</th>
                                {{-- <th class="text-nowrap"> </th>
                                <th>Role</th> --}}

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user )
                            <tr>

                                      <td>
                                          @if ($user->sexe == "Femme")
                                        <img src="{{asset ('images/mra.png')}}" width="28"/>
                                        @else
                                         <img src="{{asset ('images/rajil.png')}}" width="28"/>
                                        @endif
                                            </td>



                                <td> <b>{{ $user->prenom }} {{ $user->name }}</b></td>
                                <td>{{$user->poste}}</td>
                                {{-- <td>{{$user->allRoleNames}}</td> --}}
                                <td>{{ $user->email}}</td>

                                <td>
                                     {{-- <button type="button" class="btn btn-outline-dark" wire:click="showUserDetails({{ $user->id }})"> envoyer email</button> --}}
                                    <a href="{{ url('/email/employé') }}"  class="btn btn-sm btn-info"> accès à la plateforme </a>

                                </td>

                                {{-- <td>{{ $user->join_date }}</td>
                                <td>{{ $users->role_name }}</td> --}}
                                <td  class="text-center">

                                    {{-- <button class="btn " wire:click="showUserDetails({{ $user->id }})"><i class="fas fa-bars"></i></button> --}}
                                    {{-- class="btn btn-link --}}
                                    <button type="button" class="btn btn-outline-dark" wire:click="showUserDetails({{ $user->id }})"><i class="fas fa-bars"></i></button>

                                    <button type="button" class="btn btn-outline-info"  wire:click="goToEditUser({{ $user->id }})"> <i class="far fa-edit"></i> </button>
                                    <button type="button" class="btn btn-outline-dark" wire:click="confirmDelete('{{ $user->prenom }} {{ $user->name }}',{{ $user->id }})"> <i class="far fa-trash-alt"></i> </button>


                                </td>
                            </tr>
                            @endforeach
                      </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{-- {{$users->links()}} --}}
            </div>

                </div>
                </div>
            </div>
        </div>
    </div>

<style>



.float-right
            {

                border-radius:1.5rem;

            }


            .btn-blockk
            {
                border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      padding: 3%;
      width: 80%;
      cursor: pointer;
       background: #008B8B;
       /* #006400 */
      color: #fff;
            }


            .btn-sm
            {
                border: 2px solid 	#d4d4d4;
      /* border-radius:1.5rem; */
      padding: 3%;
      width: 100%;
      cursor: pointer;
       background: #008B8B;
       /* #006400 */
      color: #fff;
            }



            /* .btn-successs
            {
                border: 2px solid 	#d4d4d4;
      border-radius:1.5rem; */
      /* padding: 1%;
      width: 20%; */
      /* cursor: pointer; */
       /* background: #006400; */

       /* background: #008B8B;//                         info
      color: #fff;
  } */


/*
            .btn-outline-success
  {
    border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      padding: 1%;
      width: 20%;
      cursor: pointer;
       background: #006400;
      color: #fff;
  } */






            .add-btn
            {

            }
            .dataTables_filter input {
                border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
       /* padding: 1%; */
      /* width: 20%; */
      cursor: pointer;
       /* background: #006400; */
      color: #fff;}


</style>



<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"/>

@section('js')



@if (session()->has('success'))
    <script>

Swal.fire({
                     position: 'top-end',
                     icon: 'success',
                     toast:true,
                     title: "Opération effectuée avec succès!",
                     showConfirmButton: false,
                     timer: 5000


             })
</script>
@endif



 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>


<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
<script>
    $(document).ready(function() {
   $('#myTable').DataTable( {
       dom: 'Bfrtip',
       buttons: [
           'copy', 'csv', 'excel', 'pdf', 'print'
       ]
   } );
} );



</script>
@endsection
