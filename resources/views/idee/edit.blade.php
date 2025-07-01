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
                        <b>Vos idees</b>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{  route('idee.update',$idee->id)}}" methode="post">
                @csrf





                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Décrivez votre idée!
                    </label>
                    <input type="texte" class="form-control" name="description" value="{{$idee->description}}">
                </div>






              <div class="card-footer">
                <a  href="/idee/list" type="submit" class="btn btn-outline-ddark"><b>Retour</b></a>

                <button class="btn btn-outline-success"><b>Modifier</b></button>


             </div>



           </div>

        </form>


@endsection
