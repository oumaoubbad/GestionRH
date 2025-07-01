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
                    <h3 class="page-title"><b>Liste de vos demandes de documents </b></h3>

                    <ul class="breadcrumb">
                        {{-- <li class="breadcrumb-user"><a href="index.html">Dashboard</a></li> --}}
                        <li class="breadcrumb-user active">vos demandes de documents</li>

                    </ul>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                </div>
                <div class="card-tools  d-flex align-users-center ">
                {{-- <div class="col-auto float-right ml-auto"> --}}

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
                        <a href="/demandeDocument/index" class="btn btn-success btn-blockkkkkk"   ><b>demander un document</b></a>
                          </div>
                    </div>
                    <div class="col-sm-6 col-md-3">

                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus">

                          <input type="text" name="table_search" class="form-control float-right"      placeholder="Rechercher">
                        <label class="focus-label"> <br></br> </label>

                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <button type="sumit" class="btn btn-success btn-blockk">  <i class="fas fa-search"></i> </button>

                </div>
            </div>
        </form>
        <!-- Search Filter -->
        {{-- message --}}
        {{-- {!! Toastr::message() !!} --}}

             <div class="row  p-4 pt-7">
                <div class="col-md-12">
                    {{-- <div class="table-responsive"> --}}
                        <table  id="myTable"class="table table-striped custom-table datatable">
                            <thead>
                <tr>
                            {{-- <th>Id</th>
                            <th>employe</th> --}}
                            <th>Créé le</th>
                            <th>Type de document</th>
                             <th>Date Limite</th>
                            <th>Statut</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($attestations as $key => $attestation)
                    <tr>
                      {{-- <th scope="row">{{ $key+=1 }}</th> --}}
                      {{-- <th>{{App\Models\User::findOrFail($attestation->user_id)->prenom}} {{App\Models\User::findOrFail($attestation->user_id)->name}}</th> --}}
                      {{-- <th> <img src="image/{{App\Models\Voiture::findOrFail($attestation->voiture_id)->image}}" alt="Card image cap"  width="100px"></th>                  <th>{{ $attestation->date_debut }}</th> --}}
                      <th>{{ $attestation->created_at}}</th>
                      <th>{{ $attestation->type }}</th>

                      <th>{{ $attestation->date }}</th>
                      {{-- <th>{{ $attestation->duree }}</th> --}}

                      <th>
                        {{-- @if(Illuminate\Support\Facades\Auth::user()->role) --}}
                        {{-- {{$attestation->statut}}
                        @if($attestation->statut==0)
                              <h5><span class="badge badge-pill badge-secondary">en attente</span></h5>
                          @elseif($attestation->statut==1)
                             <h5> <span   class="badge badge-pill  badge-info">accepté</span></h5>
                          @else
                             <h5> <span  class="badge badge-pill badge-danger ">refusé</span></h5>
                          @endif --}}

                          @if($attestation->statut == STATUT_EN_ATTENTE)
                          <h5><span class="badge badge-pill badge-secondary">en attente  </span></h5>
                      @elseif($attestation->statut == STATUT_ACCEPTE)
                          <h5><span class="badge badge-pill badge-info">  prête</span></h5>
                      @else
                          <h5><span class="badge badge-pill badge-danger">refusé</span></h5>
                      @endif




                        </th>
                      <th>

                        <form action="" method="POST">
                          {{-- <a class="btn btn-dark"  href=" "> <i class="fas fa-eye"></i> </a> --}}

                          {{-- <a class="btn btn-secondary" href=" "><i class="fas fa-edit "></i> </a> --}}

                          @csrf
                          {{-- @method('DELETE') --}}
                          <a  onclick="deleteAnnonce()"   href="{{route('attestation.delete',$attestation->id)}}" class="btn btn-outline-dark"><i class="fas fa-trash-alt"></i></a>
                          <a href="" class="btn btn-outline-info"  ><i class="fas fa-edit"></i></a>

                          {{-- <button type="submit" class="btn btn-info"><i class="fa fa-times" aria-hidden="true"></i> --}}
       </button>

                         </form>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{$attestations->links()}}
        </div>



        </div>
        </div>
    </div>
    </div>
    </div>
    <style>






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





.float-right
    {

        border-radius:1.5rem;
        border: 3px solid 	#d4d4d4;

    }




    .btn-blockk
        {


            border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      padding: 3%;
      width: 70%;
      cursor: pointer;
       background: #008B8B;
       /* //006400 */ vert
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
    {{-- @include('attestation.modal.create') --}}

@endsection


{{--
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"/>

@section('js')
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
 --}}


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

