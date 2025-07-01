@extends('layouts.master')
@section('content')

<br>


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
                <h3 class="card-title">
                        <b>Poster une offre d'emploi</b>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('recrutement.store')}}" methode="post">
                @csrf
                    <div class="mb-3">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Titre</label>
                        <input type="text" class="form-control" name="titre" placeholder="title">
                      </div>





                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3" placeholder="description"></textarea>
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Compétences</label>
                        <input type="text" class="form-control" name="competence" placeholder="competence">
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ville </label>
                        <input type="text" class="form-control" name="lieu" placeholder="lieu">
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Date limite</label>
                        <input type="date" class="form-control" name="date_limite" placeholder="date_limite">
                      </div>






{{--   <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea id="description" name="description" class="form-control"></textarea>
                            </div>
                        </div>
                    </div> --}}


                      <div class="card-footer">
                        <a  href="/recrutement/index " type="submit" class="btn btn-outline-dark"><b>Retour</b></a>

                        <button class="btn btn-outline-success"><b>Valider</b></button>


                     </div>



                   </div>

                </form>

        </div>
    </div>
 </div>


 {{-- <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
 <script type="text/javascript">
     $(document).ready(function() {
        $('.ckeditor').ckeditor();
     });
 </script> --}}






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
      /* background: #028329fb; */
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
















