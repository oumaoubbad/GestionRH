@extends('layouts.master')
@section('content')



                                      {{-- la page d modifier un article --}}

                                      <br>

<div class="row mt-5">
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


    <div class="card" >

        <div class="card-header">
            <h3 class="card-title">
                     <b>Modifier L'Annonce</b>
            </h3>
        </div>

<div class="card-body">




    <form action="{{ route('annonce.update',$annonce->id)}}" methode="POST">
        {{--  --}}
    @csrf   {{-- c est un champs fl forme ismo token de type hidden  w kaykon fiha wahid value = "code"
     dik code khas bik tina ayi operation dart f site key3arfok tina grace a ce code    --}}
     @method('put')
<div class="mb-3">
    <label for="titre" class="form-label" >Titre</label>
    <input type="text" class="form-control"  value="{{$annonce->titre}}" name="titre" placeholder="titre">
  </div>

  {{-- <div class="mb-3">
    <label for="image">Image</label>
    <input type="file" class="form-control" name="image" >
  </div> --}}


  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control"  name="description" rows="10" cols="30"> {{$annonce->description}}</textarea>
</div>

  <div class="card-footer">
    <a  href="/annonce/index " type="submit" class="btn btn-outline-dark"><b>Retour</b></a>

    <button class="btn btn-outline-success"><b>Valider</b></button>


 </div>

        </div>
      </div>
    </div>
</div>








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
        margin-bottom: 2%;


    }










    .btn-outline-success
  {
    border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      padding: 1%;
      width: 20%;
      cursor: pointer;
       background: #006400;
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


