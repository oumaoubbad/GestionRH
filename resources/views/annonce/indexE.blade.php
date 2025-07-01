@extends('layouts.master')
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
                <h3 class="page-title"><b>Liste Des Annonces</b></h3>

                <ul class="breadcrumb">
                    {{-- <li class="breadcrumb-user"><a href="/home"></a></li> --}}
                    <li class="breadcrumb-user active"> Annonce</li>

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
                        <tr>

                            <th style="width:20%;">Titre</th>
                            <th style="width:35%;">Contenu</th>
                            <th style="width:20%;">Ajouté à</th>

                            <th class="text-right no-sort" style="width:25%;" >Action</th>
                            {{-- <th class="text-nowrap"> </th>
                            <th>Role</th> --}}

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($annonces as $annonce )
                        <tr>


                             <td> <b>{{Str::limit($annonce->description,20)}}</b></td>
                             <td>  {{Str::limit($annonce->description,40)}}</td>
                             <td>  {{ $annonce->created_at}}</td>

                            {{-- <td>{{$user->allRoleNames}}</td> --}}
                            {{-- <td>{{ $user->tel}}</td>
                            <td>{{ $user->email}}</td> --}}

                            {{-- <td>{{ $user->join_date }}</td>
                            <td>{{ $users->role_name }}</td> --}}
                            <td  class="text-center">

                                {{-- <button class="btn " wire:click="showUserDetails({{ $user->id }})"><i class="fas fa-bars"></i></button> --}}
                                {{-- class="btn btn-link --}}

                                <a href="{{route('annonce.showE',$annonce->id)}}" class="btn btn-outline-info"><i class="fa fa-bars"></i></i></a>
                                <a onclick="deleteAnnonce()"    href="{{route('annonce.deleteE',$annonce->id)}}" class="btn btn-outline-dark"><i class="fa fa-trash-alt"></i></i></a>


                                {{-- <button type="button" class="btn btn-outline-warning"  > <i class="far fa-edit"></i> </button>
                                <button type="button" class="btn btn-outline-danger" > <i class="far fa-trash-alt"></i> </button> --}}


                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{$annonces->links()}}
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
      padding: 4%;
      width: 70%;
      cursor: pointer;
       background: #008B8B;
       /* //006400 */ vert
      color: #fff;


        }




</style>

@endsection

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
