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
                <h3 class="page-title"><b>Liste des candidats</b></h3>

                <ul class="breadcrumb">
                    <li class="breadcrumb-user"><a href="/home">tableau de bord</a></li>
                    <li class="breadcrumb-user"><a href="/recrutement/index"> / liste des offres d'emploi</a></li>

                    <li class="breadcrumb-user active"> / liste des candidats</li>

                </ul>

                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            </div>

            <div class="card-tools  d-flex align-users-center ">


                <div class="view-icons">
                  </div>
            </div>
        </div>
    </div>

         <div class="row filter-row">
            <div class="col-sm-6 col-md-3">
                 <div class="form-group form-focus">
                    {{-- <button type="sumit"  class="btn btn-success btn-blockk"></button> --}}
                    <a href="/recrutement/index" class="btn btn-success btn-blockk1"><b> Retour à la liste des postes</b></a>


                      </div>

            </div>
            <div class="col-sm-6 col-md-3">

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

                            <th style="width:15%;"><b>Candidat</b></th>
                            <th style="width:20%;"><b>email</b></th>
                            <th style="width:15%;"><b>Statut</b></th>

                            <th style="width:15%;"><b>CV</b></th>
                            <th class="text-right no-sort" style="width:20%;" ><b>Action</b></th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($candidats as $candidat )
                        <tr>




                            <td> <b> {{ $candidat->nom}} {{ $candidat->prenom}}</b></td>
                            <td>  {{ $candidat->email}}</td>
                            <div class="dropdown-menu dropdown-menu-right">

                                <td>
                                    <select onchange="handleChange({{$candidat->id}}, this.value)">
                                        @switch($candidat->statut)
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

                                    <form id="approve-leave-{{$candidat->id}}" action="{{route('candidat.approve',$candidat->id)}}" method="POST">
                                        @csrf
                                        <input type="hidden" id="approve-value-{{$candidat->id}}" name="approve" value="{{ $candidat->statut }}">
                                        <button type="submit" onclick="return confirm('Are you sure want to update leave status?')" class="btn btn-sm btn-info">Mettre à jour</button>
                                    </form>
                                </td>









                            <td>
                                <br>
                                <a href="{{route('cv.downloadCV',$candidat->id)}}" class="btn btn-sm btn-info"><i class="fa fa-download"></i> télécharger</a>
                            </td>


                            <td  class="text-center">


                                <a href="{{route('candidat.show',$candidat->id)}}" class="btn btn-outline-dark"><i class="fas fa-bars"></i></a>
                                <a href="{{route('candidat.delete',$candidat->id)}}" class="btn btn-outline-info"><i class="fas fa-trash"></i></a>




                                {{-- <a  onclick="deleteAnnonce()" href="{{route('annonce.delete',$annonce->id)}}" class="btn btn-outline-dark"><i class="fas fa-trash-alt"></i></a> --}}



                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{-- {{$recrutements->links()}} --}}
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
        .btn-blockk1
        {


            border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      padding: 4%;
      width: 100%;
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
<script>
    function handleChange(id, value) {
        document.getElementById('approve-value-' + id).value = value;
    }
</script>
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

