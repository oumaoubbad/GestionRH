@extends("layouts.master")

@section('content')


<div class="container">

    <div class="row ">
    <div  Class="col-md-8 mx-auto" >
        <div  class="card p-3 my-5">

  <div class="card-header">
    <p class="lead">
     ORMVA Du Loukkos
    </p>
        <p class="lead">
         233V+MW8, Ksar El-Kébir
                      </p>

   <div class="card-body">
      <div style="text-align:center;">
    <h1><u>Attestation de salaire</u></h1><br>
    </div>
    <p class="lead">
        Je soussigné <b>{{ Illuminate\Support\Facades\Auth::user()->prenom }} {{ Illuminate\Support\Facades\Auth::user()->name }} </b>, agissant en qualité de   <b>{{ Illuminate\Support\Facades\Auth::user()->poste }}</b>  dans <b>Office Régional de Mise en Valeur Agricole du Loukkos</b>, domiciliée au<b>233V+MW8, Ksar El-Kébir </b>, certifie par la présente que :

    </p>

<p class="lead">
    Le salaire mensuel brut de  M. / Mme  <b> {{App\Models\User::findOrFail($attestation->user_id)->prenom}} {{App\Models\User::findOrFail($attestation->user_id)->name}}</b>, demeurant  <b>  {{App\Models\User::findOrFail($attestation->user_id)->adresse}}</b> est de 90000 DH, sur la base d'un contrat de travail à temps plein.
</p>

<p class="lead">
  Cette attestation est délivrée à la demande du stagiaire pour servir et valoir ce que de droit.
</p>
<p class="lead">
    Fait à <b>Ksar El Kebir</b>,<b>le 14 mai 2023</b>
</p>
    <br>
    <p class="lead">
        Signature :</p>

        </div></div></div>
        <div><a href="" class="btn btn-success" id="tiba3a" onclick="

            document.getElementById('tiba3a').style.display='none'
            setTimeout(function(){
                document.getElementById('tiba3a').style.display='block'

            },2000);
            window.print();
            "> <i class="fas fa-print"></i> </a>
                                    <a  href="/attestation/listR" type="submit" class="btn btn-dark"><b>Retour</b></a>


            </div>
    </div>

       </div>
       <style>
         .btn-dark
  {
    border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      padding: 1%;
      width: 20%;
      cursor: pointer;
      background: #343a40;
       color: #fff;
  }

  .btn-success
  {
    border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      padding: 1%;
      width: 20%;
      cursor: pointer;
      background: #008B8B;
       color: #fff;
  }

       </style>
@endsection
