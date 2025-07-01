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
                        <b>Faire une reclmation</b>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{  route('reclamation.update',$reclamation->id)}}" methode="post">
                @csrf



                <div class="mb-3">
                    <label class="form-label">Type De Réclamation</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="type1" value="Comptabilité et Facturataion">
                        <label class="form-check-label" for="type1"> Comptabilité et Facturataion</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="type2" value="Conditions de travail">
                        <label class="form-check-label" for="type2">Conditions de travail</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="type3" value="Problèmes de sécurité ">
                        <label class="form-check-label" for="type3">Problèmes de sécurité </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="type4" value="Manque de ressources matérielles">
                        <label class="form-check-label" for="type4">Manque de ressources matérielles</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="{{$reclamation->type}}" type="radio" name="type" id="type5" value="Autre">
                        <label class="form-check-label" for="type5">Autre

                        </label>

                    </div>

                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Entrer plus de détails par rapport audit réclamation
                    </label>
                    <input type="texte" class="form-control" name="description" value="{{$reclamation->description}}">
                </div>






              <div class="card-footer">
                <a  href="/reclamation/list" type="submit" class="btn btn-outline-ddark"><b>Retour</b></a>

                <button class="btn btn-outline-success"><b>Modifier</b></button>


             </div>



           </div>

        </form>


@endsection
