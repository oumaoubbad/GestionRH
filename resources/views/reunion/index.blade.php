@extends('layouts.master')
@section('content')


{{--
<div class="row  p-4 pt-5">
    --}}

<div class="col">
<!-- Page Wrapper -->
<div class="page-wrapper">
<!-- Page Content -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-users-center">
            <div class="col"><br>
                <h3 class="page-title"><b>Liste Des Réunions</b></h3>

                <ul class="breadcrumb">
                    <li class="breadcrumb-user"><a href="/home">tableau de bord</a></li>
                    <li class="breadcrumb-user active"> / liste des réunions</li>

                </ul>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            </div><br>
            <div class="card-tools  d-flex align-users-center ">


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
            <div class="col-sm-6 col-md-3"><br>
                <div class="form-group form-focus">
                    <a href="#" class="tn btn-success btn-bloc1" data-toggle="modal" data-target="#ReunionCreate" ><b>Ajouter une réunion</b></a>                </div>
                </div>

            <div class="col-sm-6 col-md-3">

            </div>
            <div class="col-sm-6 col-md-3"><br>
                <div class="form-group form-focus">

                      <input type="text" name="table_search" class="form-control float-right"      placeholder="Rechercher">
                    <label class="focus-label"> <br></br> </label>

                </div>
            </div>
            <div class="col-sm-6 col-md-3"><br>
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

                            <th style="width:25%;">Titre</th>
                            <th style="width:20%;">Type</th>
                            <th style="width:15%;">Date de reunion</th>
                            <th style="width:15%;">Heure de reunion</th>
                            <th class="text-right no-sort" style="width:25%;" >Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reunions as $reunion )
                        <tr>


                            <td> <b>{{$reunion->titre}}</b></td>
                            <td> <b>{{$reunion->type}}</b></td>
                            <td> <b>{{$reunion->date_reunions}}</b></td>
                            <td> <b>{{$reunion->heure_reunions}}</b></td>


                            <td  class="text-center">




                                <a href=""   data-toggle="modal" data-target="#wahyata{{$reunion->id}}" class="btn btn-outline-info"><i class="fas fa-edit"></i></a>

                                <a id="deleteR" onclick="deleteAnnonce()" href="{{route('reunion.delete',$reunion->id)}} " class="btn btn-outline-dark"><i class="fas fa-trash-alt"></i></a>



                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{$reunions->links()}}
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

        .btn-bloc1
        {


            border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      padding: 4%;
      width: 50%;
      cursor: pointer;
       background: #008B8B;
       /* //006400 */ vert
      color: #fff;

        }



        .add-btn
        {

        }



</style>

@include('reunion.modal.create')
@include('reunion.modal.edit')
@endsection

<script>
    function deleteAnnonce(){

      Swal.fire({
title: 'Etes-vous sur de continuer?',
text: "Vous-êtes sur le point de supprimer cette Réunion.Voulez-vous continuer ?",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#008B8B',
cancelButtonColor: '#393d3a',
confirmButtonText: 'Continuer',
cancelButtonText: 'Annuler'

}).then((result) => {

if (result.isConfirmed) {
  document.getElementById('deleteR').submit()

  Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
  )
}
})
    }





</script>
