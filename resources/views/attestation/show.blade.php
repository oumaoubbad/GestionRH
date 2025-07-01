@extends("layouts.master")

@section('content')


















  <div class="col "><br>
    <h3 class="page-title"><b>Générer une attestation</b></h3>

    <ul class="breadcrumb">
        <li class="breadcrumb-user"><a href="/home">tableau de bord</a></li>
        <li class="breadcrumb-user"><a href="/attestation/index">/ gestion des requetes</a></li>
        <li class="breadcrumb-user"><a href="/attestation/listR">/  liste des documents</a></li>
        <li class="breadcrumb-user active"> / générer une attestation</li>

    </ul>  </div></div>





    <br><br>




<div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col col-lg-10">

      <div class="card mb-3" style="border-radius: .5rem;">
        <div class="row g-0">
          <div class="col-md-4 gradient-custom text-center text-white"
            style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
            {{-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" --}}
              {{-- alt="Avatar" class ="img-fluid my-5" style="width: 80px;" /> --}}
{{--
              <small class="badge badge-danger"><i class="far fa-clock"></i> demande doit traiter avant :{{ $attestation->date }} </small> --}}
              <br><br><br><br><br>

              {{-- <img src={{asset("images/v.jpg")}} alt="Avatar" class="img-fluid my-5"  /> --}}
              <h1>{{App\Models\User::findOrFail($attestation->user_id)->prenom}} {{App\Models\User::findOrFail($attestation->user_id)->name}}</h1>


            <h5>{{App\Models\User::findOrFail($attestation->user_id)->poste}} </h5>

            <p> </p>


            <a  href="/attestation/listR " type="submit" class="btn btn-outline-info"><b><i class="fas fa-arrow-left"></i></b></a>

        </div>
          <div class="col-md-8">
            <div class="card-body p-4">
              <h6> Génénrer les attestations</h6>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <small class="badge badge-danger"><i class="far fa-clock"></i> demande doit traiter avant :{{ $attestation->date }} </small>
              <hr class="mt-0 mb-4">

              <div class="row pt-1">

                <div class="col-6 mb-3">

                  <h6>Attestation de Travail</h6>
                  <p class="text-muted"><a href="{{route('attestation.travailAT',$attestation->id)}}" class="btn btn-outline-dark">  <b>Travail</b></a> </p>
                </div>
                <div class="col-6 mb-3">
                  <h6>Attestation de Stage</h6>
                  <p class="text-muted"> <a href="{{route('attestation.stageAT',$attestation->id)}}" class="btn btn-outline-dark"><b>Stage</b></a></p>
                </div>
              </div>
              {{-- <h6>Projects</h6> --}}
              <hr class="mt-0 mb-4">
              <div class="row pt-1">
                <div class="col-6 mb-3">
                  <h6>Attestation de Salaire</h6>
                  <p class="text-muted">  <a href="{{route('attestation.salaireAT',$attestation->id)}}" class="btn btn-outline-dark"><b>Salaire</b></a></p>
                </div>
                <div class="col-6 mb-3">
                  <h6>Attestation de Formation</h6>
                  <p class="text-muted"><a href="{{route('attestation.formationAT',$attestation->id)}}" class="btn btn-outline-dark">  <b>Formation</b></a> </p>
                </div>
              </div>


                <div class="col mb-3">







              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>


<style>

/* photo */

.img-fluid{
border-radius: 50%;
}



.btn-success
    {
         border: 2px solid 	#ffffff;
  border-radius:1.5rem;
  padding: 1%;
  width: 20%;
  cursor: pointer;
   background: #008B8B;
  color: #fff;
    }

    .btn-outline-dark
    {
         border: 2px solid 	#ffffff;
  border-radius:1.5rem;
   padding: 1%;
  width: 35%;
  cursor: pointer;
   background: #3e3f3e;
  color: #fff;
    }





    .btn-successs
    {
         border: 2px solid 	#ffffff;
  border-radius:1.5rem;
  padding: 6%;
  width: 170%;
  cursor: pointer;
   background: #008B8B;
  color: #fff;
    }


    .btn-dangerr
    {
         border: 2px solid 	#ffffff;
  border-radius:1.5rem;
  padding: 6%;
  width: 170%;
  cursor: pointer;
  background: #3e3f3e;
  color: #fff;
    }



.btn-outline-info    {
         border: 2px solid 	#ffffff;
  border-radius:3.5rem;
  background: #008B8B;

  color: #fff;

    }


.gradient-custom {
/* fallback for old browsers */
background: #008B8B;

/* Chrome 10-25, Safari 5.1-6 */
background: #008B8B;

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background:#008B8B;
}
</style>



@endsection



