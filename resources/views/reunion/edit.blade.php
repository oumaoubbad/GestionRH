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
                     <b>Modifier La Reunion</b>
            </h3>
        </div>

<div class="card-body">




    <form action="{{ route('reunion.update',$reunion->id)}}" methode="POST">
    @csrf   {{-- c est un champs fl forme ismo token de type hidden  w kaykon fiha wahid value = "code"
     dik code khas bik tina ayi operation dart f site key3arfok tina grace a ce code    --}}
     @method('put')
     <div class="mb-3">
        <label for="titre" class="form-label" >Titre</label>
        <input type="text" class="form-control"  value="{{$reunion->titre}}" name="titre" placeholder="titre">
      </div>


      <div class="mb-3">

        <label for="exampleFormControlTextarea1" class="form-label" >Type</label>
        <select   class='form-control' name="type" value="{{$reunion->type}}">

                              <option value=""> -----------</option>
                              <option value="reunion externe"> reunion externe</option>
                              <option value="reunion interne"> reunion interne</option>

                          </select>
        {{-- <label for="titre" class="form-label" >Type</label>
        <input type="text" class="form-control"  value="{{$reunion->type}}" name="type" placeholder="type">
       --}}
    </div>



    <div class="d-flex">
        <div class="form-group flex-grow-1 mr-2">

            <div class="form-group">
                <label for="date_reunions" class="form-label">Date de reunion</label>
                <input type="date" class="form-control" name="date_reunions" value="{{$reunion->date_reunions}}" >
            </div>
        </div>

      <div class="form-group flex-grow-1">
        <label for="heure_reunions" class="form-label">Heure de réunion</label>
<input type="time"   name="heure_reunions" class="form-control"  value="{{$reunion->heure_reunions}}">
</div></div>




  {{-- <div class="mb-3">
    <label for="image">Image</label>
    <input type="file" class="form-control" name="image" >
  </div> --}}




  <div class="card-footer">
    <a  href="/reunion/index " type="submit" class="btn btn-outline-dark"><b>Retour</b></a>

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


