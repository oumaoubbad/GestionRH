
@extends("layouts.master")

  @section('content')

  {{-- @if(auth()->user()->role) --}}


  <div class="col">
    <!-- Page Wrapper -->
    <div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-users-center">
                <div class="col"><br>
                    <h3 class="page-title"><b>Liste Des Congés</b></h3>

                    <ul class="breadcrumb">
                        <li class="breadcrumb-user"><a href="/home">tableau de bord</a></li>
                        <li class="breadcrumb-user active"> / liste des congés</li>

                    </ul>
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

                </div>



                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus">
                            <input type="text" name="table_search" class="form-control float-right"   placeholder="Recherche">
                        <label class="focus-label"> <br></br> </label>

                    </div>
                </div>
                <div      class="col-sm-6 col-md-3">
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
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                {{-- <thead class="bg-dark"> --}}

                                <tr>
                        <th></th>
                        <th>employe</th>
                        {{-- <th>Date début</th> --}}
                        {{-- <th>Date fin</th>
                        <th>type</th>
                        <th>dure</th>--}}
                        <th>statut</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                @foreach ($conges as $key => $conge)
                <tr>
                  <th>
                    <?php $user = App\Models\User::findOrFail($conge->user_id); ?>
                    @if ($user->sexe == "Femme")
                        <img src="{{ asset('images/mra.png') }}" width="28" />
                    @else
                        <img src="{{ asset('images/rajil.png') }}" width="28" />
                    @endif

                      </th>

                  <th>{{App\Models\User::findOrFail($conge->user_id)->prenom}} {{App\Models\User::findOrFail($conge->user_id)->name}}</th>






                    {{-- @if(Illuminate\Support\Facades\Auth::user()->role) --}}

                     <th>
                        @switch($conge->statut)
                            @case(STATUT_EN_ATTENTE)
                            <h5><span class="badge badge-pill badge-secondary">En attente</span></h5>

                            <form id="approve-leave-{{$conge->id}}" action="{{route('conge.approve',$conge->id)}}" method="POST">
                                    @csrf
                                    {{-- <button type="submit" onclick="return confirm('Are you sure want to approve leave?')" class="btn btn-sm btn-success" name="approve" value="{{ STATUT_ACCEPTE }}">Accepté</button> --}}
                                </form>
                                <form id="reject-leave-{{$conge->id}}" action="{{route('conge.approve',$conge->id)}}" method="POST">
                                    @csrf
                                    {{-- <button type="submit" onclick="return confirm('Are you sure want to reject leave?')" class="btn btn-sm btn-danger" name="approve" value="{{ STATUT_REFUSE }}">Refusé</button> --}}
                                </form>
                                @break


                            @case(STATUT_ACCEPTE)
                            <h5><span class="badge badge-pill badge-info">Accepté</span></h5>


                                <form action="{{route('conge.approve',$conge->id)}}" method="POST">
                                    @csrf
                                    {{-- <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to reject leave?')" type="submit" name="approve" value="{{ STATUT_REFUSE }}">Refusé</button> --}}
                                </form>
                                @break

                            @case(STATUT_REFUSE)
                            <h5><span class="badge badge-pill badge-danger">Refusé</span></h5>


                                <form action="{{route('conge.approve',$conge->id)}}" method="POST">
                                    @csrf
                                    {{-- <button class="btn btn-sm btn-success" onclick="return confirm('Are you sure want to approve leave?')" type="submit" name="approve" value="{{ STATUT_ACCEPTE }}">Accepté</button> --}}
                                </form>
                                @break

                            @default
                                Statut inconnu
                        @endswitch
                    </th>





                <th>

                    <form action="" method="POST">
                      {{-- <a class="btn btn-dark"  href=" "> <i class="fas fa-eye"></i> </a> --}}

                      {{-- <a class="btn btn-secondary" href=" "><i class="fas fa-edit "></i> </a> --}}

                      @csrf
                      <a href=" {{route('conge.show',$conge->id)}}" class="btn btn-outline-info"><i class="fas fa-exclamation-circle"></i>
                      </a>

                      <a  id="deleteC" onclick="deleteConge()" href="{{route('conge.delete',$conge->id)}}" class="btn btn-outline-dark"><i class="fas fa-trash-alt"></i></a>

                     </form>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        {{$conges->links()}}
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
      padding: 4%;
      width: 70%;
      cursor: pointer;
       background: #008B8B;
       /* //006400 */ vert
      color: #fff;


        }

        .float-right
    {

        border-radius:1.5rem;
        border: 3px solid 	#d4d4d4;

    }


.add-btn
{

}





</style>


@endsection
{{-- @section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css"/>

@endsection --}}

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


@endsection

{{-- <script>
     $(document).ready(function() {
    $('#myTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print' , 'colvis'
        ]
    } );
} );
 </script> --}}



 <script>
    function deleteConge(){

      Swal.fire({
title: 'Etes-vous sur de continuer?',
text: "Vous-êtes sur le point de supprimer cette Demande.Voulez-vous continuer ?",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#008B8B',
cancelButtonColor: '#393d3a',
confirmButtonText: 'Continuer',
cancelButtonText: 'Annuler'

}).then((result) => {

if (result.isConfirmed) {
  document.getElementById('deleteC').submit()

  Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
  )
}
})
    }

</script>
