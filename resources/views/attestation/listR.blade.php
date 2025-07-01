@extends("layouts.master")

@section('content')
<div class="col"><br>
    <h3 class="page-title"><b>Liste Des Documents</b></h3>

    <ul class="breadcrumb">
        <li class="breadcrumb-user"><a href="/home">tableau de bord</a></li>
        <li class="breadcrumb-user"><a href="/attestation/index">/ gestion des requetes</a></li>
        <li class="breadcrumb-user active"> / liste des documents</li>

    </ul>



{{-- <div class="col"> --}}
    <!-- Page Wrapper -->
    {{-- <div class="page-wrapper"> --}}
    <!-- Page Content -->
    {{-- <div class="content container-fluid"> --}}
        <!-- Page Header -->
        {{-- <div class="page-header"> --}}
            {{-- <div class="row align-users-center"> --}}

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




            </div>
        </form>
        <!-- Search Filter -->
        {{-- message --}}
        {{-- {!! Toastr::message() !!} --}}

             <div class="row  p-4 pt-7">
                <div class="col-md-12">
                    {{-- <div class="table-responsive"> --}}
                        <table  id="myTable" class="table table-striped custom-table datatable">
                            <thead>
                <tr>
                            {{-- <th>Id</th>
                            <th>employe</th> --}}
                            <th>  </th>
                            <th>Employée  </th>

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
                        <th>
                            <?php $user = App\Models\User::findOrFail($attestation->user_id); ?>
                            @if ($user->sexe == "Femme")
                                <img src="{{ asset('images/mra.png') }}" width="28" />
                            @else
                                <img src="{{ asset('images/rajil.png') }}" width="28" />
                            @endif

                              </th>
                              <th>{{App\Models\User::findOrFail($attestation->user_id)->prenom}} {{App\Models\User::findOrFail($attestation->user_id)->name}}</th>


                                                    <th>{{ $attestation->created_at}}</th>
                      <th>{{ $attestation->type }}</th>

                      <th>{{ $attestation->date }}</th>
                      {{-- <th>{{ $attestation->duree }}</th> --}}

                      <th>
                        <select onchange="handleChange({{$attestation->id}}, this.value)">
                            @switch($attestation->statut)
                                @case(STATUT_EN_ATTENTE)
                                    <option value="{{ STATUT_EN_ATTENTE }}" selected>En cours&nbsp; &nbsp;</option>
                                    <option value="{{ STATUT_ACCEPTE }}">Prête&nbsp; &nbsp;</option>
                                    <option value="{{ STATUT_REFUSE }}">Refusé&nbsp; &nbsp;</option>
                                    @break

                                @case(STATUT_ACCEPTE)
                                <option value="{{ STATUT_EN_ATTENTE }}" >En cours&nbsp; &nbsp;</option>
                                <option value="{{ STATUT_ACCEPTE }}"selected>Prête&nbsp; &nbsp;</option>
                                <option value="{{ STATUT_REFUSE }}">Refusé&nbsp; &nbsp;</option>
                                    @break

                                @case(STATUT_REFUSE)
                                <option value="{{ STATUT_EN_ATTENTE }}" >En cours &nbsp; &nbsp;</option>
                                <option value="{{ STATUT_ACCEPTE }}">Prête&nbsp; &nbsp;</option>
                                <option value="{{ STATUT_REFUSE }}"selected>Refusé&nbsp; &nbsp;</option>
                                    @break

                                @default
                                    <option value="">Statut inconnu</option>
                            @endswitch
                        </select>

                        <form id="approve-leave-{{$attestation->id}}" action="{{route('attestation.approve',$attestation->id)}}" method="POST">
                            @csrf
                            <input type="hidden" id="approve-value-{{$attestation->id}}" name="approve" value="{{ $attestation->statut }}">
                            <button type="submit" onclick="return confirm('Are you sure want to update leave status?')" class="btn btn-sm btn-info">Mettre à jour</button>
                        </form>





                    </th>
                      <th>

                        <form action="" method="POST">
                          {{-- <a class="btn btn-dark"  href=" "> <i class="fas fa-eye"></i> </a> --}}

                          {{-- <a class="btn btn-secondary" href=" "><i class="fas fa-edit "></i> </a> --}}

                          @csrf
                          {{-- @method('DELETE') --}}
                          <a href="{{route('attestation.show',$attestation->id)}}" class="btn btn-outline-info"><i class="fas fa-print"></i></a>

                          <a  onclick="deleteAnnonce()"   href="{{route('attestation.deleteR',$attestation->id)}}" class="btn btn-outline-dark"><i class="fas fa-trash-alt"></i></a>
                          {{-- <button class="btn btn-link" wire:click="editattestation({{$attestation->id}})"> <i class="far fa-edit">Edite</i> </button> --}}
                          {{-- <a class="btn btn-link text-white mr-4 d-block" wire:click="editattestation({{$attestation->id}})"> <i class="nav-icon fas fa-cogs"></i> --}}
                            {{-- <a class="btn btn-link text-white mr-4 d-block" wire:click="AddModele"> <i class="nav-icon fas fa-cogs"></i> --}}
                                {{-- Nouveau Modéle</a> --}}
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
            {{-- {{$attestations->links()}} --}}
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
    {{-- @include('attestation.modal.create') --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"/>

@endsection



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
@endsection


