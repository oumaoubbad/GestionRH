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
                    <h3 class="page-title"><b> Liste de vos réclamations</b></h3>

                    <ul class="breadcrumb">
                        {{-- <li class="breadcrumb-user"><a href="index.html">Dashboard</a></li> --}}
                        <li class="breadcrumb-user active">vos réclamations</li>

                    </ul>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                </div>
                <div class="card-tools  d-flex align-users-center ">
                {{-- <div class="col-auto float-right ml-auto"> --}}

                    <div class="view-icons">
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
                        <a href="/reclamation/index" class="btn btn-success btn-block"   ><b>faire une réclamation</b></a>
                </div></div>
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


             <div class="row  p-4 pt-7">
                <div class="col-md-12">
                         <table class="table table-striped custom-table datatable">
                            <thead>
                <tr>

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
                       <th>{{ $reclamation->created_at}}</th>
                      <th>{{ $reclamation->type }}</th>

                      <th>{{ $reclamation->description }}</th>

                      <th>


                          @if($reclamation->statut == STATUT_EN_ATTENTE)
                          <h5><span class="badge badge-pill badge-secondary">en attente</span></h5>
                      @elseif($reclamation->statut == STATUT_ACCEPTE)
                          <h5><span class="badge badge-pill badge-info">accepté</span></h5>
                      @else
                          <h5><span class="badge badge-pill badge-danger">refusé</span></h5>
                      @endif



                        </th>
                      <th>

                        <form action="" method="POST">


                          @csrf
                          {{-- <a    href="{{route('reclamation.edit',$reclamation->id)}}" class="btn btn-outline-warning"><i class="far fa-edit"></i></a> --}}

                          <a    href="{{route('reclamation.delete',$reclamation->id)}}" class="btn btn-outline-dark"><i class="fas fa-trash-alt"></i></a>

        </button>

                         </form>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{$reclamations->links()}}
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

@endsection




