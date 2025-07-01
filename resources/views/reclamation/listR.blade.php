@extends("layouts.master")

@section('content')

<div class="col">
    <!-- Page Wrapper -->
    <div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-users-center">
                <div class="col"><br>
                    <h3 class="page-title"><b>Liste Des Réclamations</b></h3>

                    <ul class="breadcrumb">
                        <li class="breadcrumb-user"><a href="/home">tableau de bord</a></li>
                        <li class="breadcrumb-user"><a href="/attestation/index">/ gestion des requetes</a></li>
                        <li class="breadcrumb-user active"> / liste des réclamations</li>

                    </ul>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                </div>
                <div class="card-tools  d-flex align-users-center ">
                <div class="col-auto float-right ml-auto">

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
                        {{-- <button type="sumit"    class="btn btn-success btn-block"><b>Ajouter une annonce</b></button> --}}
                        <a href="/reclamation/index" class="btn btn-success btn-blockkkkkk"    ><b>nouvelle réclamation</b></a>
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

                          {{-- <input type="text" name="table_search" class="form-control float-right"      placeholder="Rechercher"> --}}
                        <label class="focus-label"> <br>  </label>

                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    {{-- <button type="sumit" class="btn btn-success btn-blockk">  <i class="fas fa-search"></i> </button> --}}

                </div>
            </div>
        </form>


             <div class="row  p-4 pt-7">
                <div class="col-md-12">
                         <table id="myTable" class="table table-striped custom-table datatable">
                            <thead>
                <tr>

                    <th>Employée</th>
                    <th>Créé le</th>
                    <th>Titre</th>
                             <th>Description</th>
                            <th>Statut</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($reclamations as $key => $reclamation)
                    <tr>
                        <th>{{App\Models\User::findOrFail($reclamation->user_id)->prenom}} {{App\Models\User::findOrFail($reclamation->user_id)->name}}</th>
                        <th>{{ $reclamation->created_at}}</th>
                        <th>{{ $reclamation->type }}</th>

                      <th>{{ $reclamation->description }}</th>

                      <th>

                        <select onchange="handleChange({{$reclamation->id}}, this.value)">
                            @switch($reclamation->statut)
                                @case(STATUT_EN_ATTENTE)
                                    <option value="{{ STATUT_EN_ATTENTE }}" selected>En attente</option>
                                    <option value="{{ STATUT_ACCEPTE }}">Accepté</option>
                                    <option value="{{ STATUT_REFUSE }}">Refusé</option>
                                    @break

                                @case(STATUT_ACCEPTE)
                                    <option value="{{ STATUT_EN_ATTENTE }}">En attente</option>
                                    <option value="{{ STATUT_ACCEPTE }}" selected>Accepté</option>
                                    <option value="{{ STATUT_REFUSE }}">Refusé</option>
                                    @break

                                @case(STATUT_REFUSE)
                                    <option value="{{ STATUT_EN_ATTENTE }}">En attente</option>
                                    <option value="{{ STATUT_ACCEPTE }}">Accepté</option>
                                    <option value="{{ STATUT_REFUSE }}" selected>Refusé</option>
                                    @break

                                @default
                                    <option value="">Statut inconnu</option>
                            @endswitch
                        </select>

                        <form id="approve-leave-{{$reclamation->id}}" action="{{route('reclamation.approve',$reclamation->id)}}" method="POST">
                            @csrf
                            <input type="hidden" id="approve-value-{{$reclamation->id}}" name="approve" value="{{ $reclamation->statut }}">
                            <button type="submit" onclick="return confirm('Are you sure want to update leave status?')" class="btn btn-sm btn-info">Mettre à jour</button>
                        </form>



                    </th>
                      <th>

                        <form action="" method="POST">


                          @csrf
                          <a   href="{{route('reclamation.deleteR',$reclamation->id)}}" class="btn btn-outline-dark "><i class="fas fa-trash-alt"></i></a>

        </button>

                         </form>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{-- {{$reclamations->links()}} --}}
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




    .btn-block
            {
                 border: 2px solid  #d4d4d4;
          border-radius:1.5rem;
          /* padding: 1%;
          width: 20%; */
          cursor: pointer;
           background: #006400;
          color: #fff;
            }

    .add-btn
    {

    }


    .dataTables_filter input {
        border: 2px solid  #d4d4d4;
          border-radius:1.5rem;
          /* padding: 1%;
          width: 20%; */
          cursor: pointer;
           /* background: #006400; */
          color: #fff;
}





 .btn-success
        {
             border: 2px solid 	#ffffff;
      border-radius:1.5rem;
      padding: 5%;
      width: 40%;
      cursor: pointer;
       background: #008B8B;
      color: #fff;
        }

        .btn-danger
        {
             border: 2px solid 	#ffffff;
      border-radius:1.5rem;
       padding: 5%;
      width: 40%;
      cursor: pointer;
       background: #343a40;
      color: #fff;
        }

        .btn-blockkkkkk
        {


            border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      padding: 3%;
      width: 90%;
      cursor: pointer;
       background: #008B8B;
       /* //006400 */ vert
      color: #fff;

        }


    </style>

@endsection





<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"/>

@section('js')
<script>
    function handleChange(id, value) {
        document.getElementById('approve-value-' + id).value = value;
    }
</script>

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
{{--


<script>
    function deleteAnnonce(){

      Swal.fire({
title: 'Etes-vous sur de continuer?',
text: "Vous-êtes sur le point de supprimer cette annonce.Voulez-vous continuer ?",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#099c1c',
cancelButtonColor: '#393d3a',
confirmButtonText: 'Continuer',
cancelButtonText: 'Annuler'

}).then((result) => {

if (result.isConfirmed) {
  document.getElementById('deleteA').submit()

  Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
  )
}
})
    }





</script>
 --}}
