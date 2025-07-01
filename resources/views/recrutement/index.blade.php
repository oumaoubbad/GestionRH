@extends('layouts.master')
@section('content')


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
                <h3 class="page-title"><b>Liste Des offres d'emploi</b></h3>

                <ul class="breadcrumb">
                    <li class="breadcrumb-user"><a href="/home">tableau de bord</a></li>
                    <li class="breadcrumb-user active"> / liste des offres d'emploi</li>

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
                    <a href="/recrutement/create" class="btn btn-success btn-blockkkkkk"    ><b>Ajouter une offre d'emploi</b></a>
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
                    <label class="focus-label"> <br>  </label>

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

                            <th style="width:15%;">Titre</th>
                            <th style="width:20%;">Contenu</th>
                            <th style="width:15%;">Compétences</th>

                            {{-- <th style="width:10%;">Ville</th> --}}

                            {{-- <th style="width:10%;">Crée le</th> --}}
                            <th style="width:10%;">Date Limite</th>
                            {{-- <th style="width:10%;">Statut</th> --}}

                            <th class="text-right no-sort" style="width:20%;" >Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recrutements as $recrutement )
                        <tr>


                             <td> <b>{{Str::limit($recrutement->titre,40)}}</b></td>
                             <td>  {{Str::limit($recrutement->description,100)}}</td>
                             <td>  {{ $recrutement->competence}}</td>
                             {{-- <td>  {{ $recrutement->lieu}}</td> --}}

                             {{-- <td>  {{ $recrutement->created_at}}</td> --}}

                             <td>  {{ $recrutement->date_limite}}</td>
                             {{-- <td>   </td> --}}


                            <td  class="text-center">

                                {{-- <button class="btn " wire:click="showUserDetails({{ $user->id }})"><i class="fas fa-bars"></i></button> --}}
                                {{-- class="btn btn-link --}}




                                {{-- <form  id='deleteForm' action="{{route('annonce.delete',$annonce->id)}}" method="DELETE">
                                    <button type="submit"  class="btn btn-outline-danger"   onclick="deleteAnnonce()"> s</button>

                                    {{-- @method('DELETE') --}}
                                    {{-- @csrf --}}
                                {{-- </form>  --}}
                                <a href=" {{route('recrutement.indexcand',$recrutement->id)}}" class="btn btn-outline-dark"><i class="fas fa-users"></i></a>


                                <a href="{{route('recrutement.edit',$recrutement->id)}}" class="btn btn-outline-info"  ><i class="fas fa-edit"></i></a>

                                <a  onclick="deleteRecrutement()" href="{{route('recrutement.delete',$recrutement->id)}}" class="btn btn-outline-dark"><i class="fas fa-trash-alt"></i></a>







                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{$recrutements->links()}}
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
      width: 90%;
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



{{--
@include('annonce.modal.create')
@include('annonce.modal.edit') --}}
@endsection

 <script>
      function deleteRecrutement(){

        Swal.fire({
  title: 'Etes-vous sur de continuer?',
  text: "Vous-êtes sur le point de supprimer cette annonce de recrutement.Voulez-vous continuer ?",
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

