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
                    <h3 class="page-title"><b>Liste Des Idées</b></h3>

                    <ul class="breadcrumb">
                        <li class="breadcrumb-user"><a href="/home">tableau de bord</a></li>
                        <li class="breadcrumb-user"><a href="/attestation/index">/ gestion des requetes</a></li>
                        <li class="breadcrumb-user active"> / liste des idées</li>

                    </ul>
                    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}

                </div>
                <div class="card-tools  d-flex align-users-center ">
                <div class="col-auto float-right ml-auto">

                    <div class="view-icons">
                     </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <!-- Search Filter -->

            <div class="row filter-row">
                <div class="col-sm-6 col-md-3">
                     <div class="form-group form-focus">
                 </div></div>


            </div>
        </form>


             <div class="row  p-4 pt-7">
                <div class="col-md-12">
                         <table id="myTable" class="table table-striped custom-table datatable">
                            <thead>
                <tr>

                            <th>Créé le</th>
                              <th>Description</th>
                             <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($idees as $key => $idee)
                    <tr>
                       <th>{{ $idee->created_at}}</th>

                      <th>{{ $idee->description }}</th>



                      <th>

                        <form action="" method="POST">


                          @csrf
                           <a   onclick="deleteAnnonce()"  href="{{route('idee.deleteR',$idee->id)}}" class="btn btn-outline-dark"><i class="fas fa-trash-alt"></i></a>

        </button>

                         </form>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{-- {{$idees->links()}} --}}
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

    </style>

@endsection





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



<script>
    function deleteAnnonce(){

      Swal.fire({
title: 'Etes-vous sur de continuer?',
text: "Vous-êtes sur le point de supprimer cette annonce.Voulez-vous continuer ?",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#008B8B',
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




