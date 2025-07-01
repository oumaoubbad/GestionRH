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
         </div>
        </div>



        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                        <b>Ajouter une reunion</b>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('reunion.store')}}" methode="post">
                @csrf




                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Titre</label>
                        <input type="text" class="form-control" name="titre" placeholder="title">
                      </div>


                      <div class="mb-3">

                        <label for="exampleFormControlTextarea1" class="form-label" >Type</label>
                        <select   class='form-control' name="type">

                                              <option value=""> -----------</option>
                                              <option value="reunion externe"> reunion externe</option>
                                              <option value="reunion interne"> reunion interne</option>

                                          </select>
                        {{-- <label for="exampleFormControlTextarea1" class="form-label">Type</label>
                        <input type="text" class="form-control" name="type" placeholder="type"> --}}
                      </div>


                      <div class="d-flex">
                        <div class="form-group flex-grow-1 mr-2">

                            <div class="form-group">
                                <label for="date_reunions" class="form-label">Date de reunion</label>
                                <input type="date" class="form-control" name="date_reunions"  >
                            </div>
                        </div>

                      <div class="form-group flex-grow-1">
                        <label for="heure_reunions" class="form-label">Heure de réunion</label>
<input type="time" id="heure_reunions" name="heure_reunions" class="form-control">
</div></div>


                      <div class="card-footer">
                        <a  href="/reunion/index " type="submit" class="btn btn-outline-dark"><b>Retour</b></a>

                        <button class="btn btn-outline-success"><b>Valider</b></button>


                     </div>



                   </div>

                </form>

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


{{--@section('javascript')
           <script>
            alert("hello")
            </script>
@endsection--}}
