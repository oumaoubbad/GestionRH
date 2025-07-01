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
                        <b>Ajouter congé</b>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('conge.store')}}" methode="post">
                @csrf
                    {{-- <div class="mb-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nom</label>
                            <input type="text" class="form-control" name="user_id" placeholder="user_id">
                          </div> --}}



                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">créé le</label>
                            <input type="date" class="form-control" name="created_at" placeholder="créé le">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">type</label>
                            <select   class='form-control' name="type">
                                <option value=""> -------------</option>
                                <option value="Congé de maladie "> Congé de maladie</option>
                                <option value="Congés de maternité "> Congés de maternité</option>
                                <option value="Congé sans solde "> Congé sans solde</option>
                                <option value="Congés exceptionnels"> Congés exceptionnels </option>
                                <option value="Accident de travail ">Accident de travail</option>
                                <option value="Autorisation d'allaitement "> Autorisation d'allaitement </option>
                            </select>

                          </div>

                          <div class="d-flex">
                            <div class="form-group flex-grow-1 mr-2">

                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">date de début</label>
                            <input type="date" class="form-control" name="date_debut" placeholder="date">
                        </div></div>

                          <div class="form-group flex-grow-1">


                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">date de fin</label>
                            <input type="date" class="form-control" name="date_fin" placeholder="date">
                          </div></div></div>

                    {{-- <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Inserer une image</label>
                        <input type="file" class="form-control" name="image" >
                      </div> --}}



                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">durée</label>
                        <input type="text" class="form-control" name="duree" placeholder="duree">
                    </div>




                      <div class="card-footer">
                        <a  href="/conge/indexE " type="submit" class="btn btn-outline-dark"><b>Retour</b></a>

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


