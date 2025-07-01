@extends('layouts.master')
@section('content')

<div class="row  p-4 pt-5">
    <div class="col">
        <h3 class="page-title"><b>Formulaire Pour Demander Un Document</b></h3>

        <ul class="breadcrumb">
            {{-- <li class="breadcrumb-user"><a href="/home">tableau de bord</a></li> --}}
            <li class="breadcrumb-user"><a href="/attestation/indexE"> faire une requetes</a></li>

            <li class="breadcrumb-user active">/  demande un document</li>

        </ul>


 <div class="row my-4">
    <div class="col-md-8 mx-auto">

                @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif





        <div class="card">
            <div class="card-header">
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <h3 class="card-title">

                        <b>Demande un document</b>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('attestation.store')}}" methode="post">
                @csrf


                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">créé le</label>
                    <input type="date" class="form-control" name="created_at" placeholder="créé le">
                </div>
                <div class="mb-3">
                    <label class="form-label">Type De Document</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="type1" value="Attestation d'emploi">
                        <label class="form-check-label" for="type1">Attestation d'emploi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="type2" value="Attestation de stage">
                        <label class="form-check-label" for="type2">Attestation de stage</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="type3" value="Attestation de salaire">
                        <label class="form-check-label" for="type3">Attestation de salaire</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="type4" value="Attestation de formation">
                        <label class="form-check-label" for="type4">Attestation de formation</label>
                    </div>

                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date Limite</label>
                    <input type="date" class="form-control" name="date" placeholder="date">
                </div>






              <div class="card-footer">
                <a  href="/attestation/list" type="submit" class="btn btn-outline-dark"><b>Retour</b></a>

                <button class="btn btn-outline-success"><b>Ajouter</b></button>


             </div>



           </div>

        </form>










<style>
    .card-footer {
display: flex;
justify-content: center;
}



      .card{

          border: 1px solid 	#d4d4d4;
                  border-radius:1.5rem;
      /* padding: 1%; */
      /* width: 20%; */
      /* cursor: pointer; */
      /* background: #028329fb; */
      background: #e9e9e9 ;
      /* color: #fff; */
  }

  .form-control{
      border-radius:1.5rem;
      border: 3px solid #d4d4d4;
  }
      /* .col-10{


       border: 1px solid #000000;
       border-radius:1.5rem;
 } */



  /* .card-title{
      color: #031307fb;
      text-align: center;
      font-weight: bold;
      border-radius:1.5rem;
  } */



  /* .form-content
  {
      padding: 5%;
      border: 2px solid #1e1f1f;
      margin-bottom: 2%;
  } */

  .btn-outline-success
  {
    border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      padding: 1%;
      width: 20%;
      cursor: pointer;
      background: #008B8B;
       color: #fff;
  }

  .btn-outline-dark
  {
    border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      padding: 1%;
      width: 20%;
      cursor: pointer;
      background:  #454545 ;
      color: #fff;
  }

  </style>


@endsection

@section('js')

@if (session()->has('successs'))
    <script>

Swal.fire({
                     position: 'top-end',
                     icon: 'success',
                     toast:true,
                     title: "Opération effectuée avec succès!",
                     showConfirmButton: false,
                     timer: 5000


             })
</script>
@endif

@endsection
