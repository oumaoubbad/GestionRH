@extends('layouts.master')
@section('content')
{{-- <div class="row my-5">
    <div class="col-md-8">
        <div class="row">

            @foreach ($annonces as $annonce)
            <div class="col-md-4 mb-2">
                <div class="card h-100 " >
                    <img src="https://cdn.pixabay.com/photo/2022/07/20/18/44/reading-7334749__340.png" class="card-img-top" alt="...">
                             {{--"{{ asset($annonce->image) }}"--}}
                    {{-- <div class="card-body">
                    <h5 class="card-title"><b>{{$annonce->titre}}</b></h5>
                    <p class="card-text">   {{Str::limit($annonce->description,10)}}</p>str limit pour ne pas afficher tout le text on limite l'affichage de text --}}
                    {{-- <a href="{{route('annonce.show',$annonce->id)}}" class="btn btn-primary">voir</a>
                    </div>
                </div>
            </div>
        @endforeach

        </div>
        <div class="d-flex justify-content-center">
            {{$annonces->links()}}
        </div>
    </div>
  </div> --}}











{{--
<div class="row  p-4 pt-5"> --}}
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
                    <li class="breadcrumb-user"><a href="/home">tableau de bord</a></li>
                    <li class="breadcrumb-user active"> / liste des Annonces</li>

                </ul>

                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            </div>

            <div class="card-tools  d-flex align-users-center ">
            {{-- <div class="col-auto float-right ml-auto"> --}}
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
                    {{-- <button type="sumit"    class="btn btn-success btn-block"><b>Ajouter une annonce</b></button> --}}
                    <a href="#" class="btn btn-success btn-blockkkkkk" data-toggle="modal" data-target="#ModalCreate" ><b>Ajouter une annonce</b></a>
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
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable">
                    <thead>
                        <tr>

                            <th style="width:35%;">Titre</th>
                            <th style="width:40%;">Contenu</th>
                            <th class="text-right no-sort" style="width:25%;" >Action</th>
                            {{-- <th class="text-nowrap"> </th>
                            <th>Role</th> --}}

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($annonces as $annonce )
                        <tr>


                             <td> <b>{{Str::limit($annonce->titre,40)}}</b></td>
                             <td>  {{Str::limit($annonce->description,100)}}</td>
                            {{-- <td>{{$user->allRoleNames}}</td> --}}
                            {{-- <td>{{ $user->tel}}</td>
                            <td>{{ $user->email}}</td> --}}

                            {{-- <td>{{ $user->join_date }}</td>
                            <td>{{ $users->role_name }}</td> --}}
                            <td  class="text-center">

                                {{-- <button class="btn " wire:click="showUserDetails({{ $user->id }})"><i class="fas fa-bars"></i></button> --}}
                                {{-- class="btn btn-link --}}




                                {{-- <form  id='deleteForm' action="{{route('annonce.delete',$annonce->id)}}" method="DELETE">
                                    <button type="submit"  class="btn btn-outline-danger"   onclick="deleteAnnonce()"> s</button>

                                    {{-- @method('DELETE') --}}
                                    {{-- @csrf --}}
                                {{-- </form>  --}}
                                <a href="{{route('annonce.show',$annonce->id)}}" class="btn btn-outline-dark"><i class="fas fa-bars"></i></a>


                                <a href="" class="btn btn-outline-info" data-toggle="modal" data-target="#wahya{{$annonce->id}}"><i class="fas fa-edit"></i></a>

                                <a  onclick="deleteAnnonce()" href="{{route('annonce.delete',$annonce->id)}}" class="btn btn-outline-dark"><i class="fas fa-trash-alt"></i></a>


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


.btn-blockkkkkk
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






   /* .swal2-popup {
  background-color: #006400 !important;
  color: #ffffff;
/* } */

</style>




@include('annonce.modal.create')
@include('annonce.modal.edit')
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

