
@extends("layouts.master")
@section('content')

{{--
<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-md-9 col-lg-7 col-xl-5">
          <div class="card" style="border-radius: 15px; background-color: #93e2bb;">
            <div class="card-body p-4 text-black">
              <div>
                <h6 class="mb-4">Exquisite hand henna tattoo</h6>
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <p class="small mb-0"><i class="far fa-clock me-2"></i>3 hrs</p>
                  <p class="fw-bold mb-0">$90</p>
                </div>
              </div>
              <div class="d-flex align-items-center mb-4">
                <div class="flex-shrink-0">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-2.webp"
                    alt="Generic placeholder image" class="img-fluid rounded-circle border border-dark border-3"
                    style="width: 70px;">
                </div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex flex-row align-items-center mb-2">
                    <p class="mb-0 me-2">@sheisme</p>
                    <ul class="mb-0 list-unstyled d-flex flex-row" style="color: #1B7B2C;">
                      <li>
                        <i class="fas fa-star fa-xs"></i>
                      </li>
                      <li>
                        <i class="fas fa-star fa-xs"></i>
                      </li>
                      <li>
                        <i class="fas fa-star fa-xs"></i>
                      </li>
                      <li>
                        <i class="fas fa-star fa-xs"></i>
                      </li>
                      <li>
                        <i class="fas fa-star fa-xs"></i>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <button type="button" class="btn btn-outline-dark btn-rounded btn-sm"
                      data-mdb-ripple-color="dark">+ Follow</button>
                    <button type="button" class="btn btn-outline-dark btn-rounded btn-sm"
                      data-mdb-ripple-color="dark">See profile</button>
                    <button type="button" class="btn btn-outline-dark btn-floating btn-sm"
                      data-mdb-ripple-color="dark"><i class="fas fa-comment"></i></button>
                  </div>
                </div>
              </div>
              <hr>
              <p class="my-4 pb-1">52 comments</p>
              <button type="button" class="btn btn-success btn-rounded btn-block btn-lg"><i
                  class="far fa-clock me-2"></i>Book now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}


  <div class="row  p-4 ">

    <div class="col">
        <h3 class="page-title"><b>Détails de demande de congé</b></h3>

        <ul class="breadcrumb">
            <li class="breadcrumb-user"><a href="/home">tableau de bord</a></li>

            <li class="breadcrumb-user"><a href="/conge/index">/ liste des congés</a></li>
            <li class="breadcrumb-user active"> / détails  </li>

        </ul>

    </div></div>
  {{-- <section class="vh-100" style="background-color: #f4f5f7;"> --}}
    {{-- <div class="container  "> --}}
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-10">

          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                {{-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" --}}
                  {{-- alt="Avatar" class ="img-fluid my-5" style="width: 80px;" /> --}}



                  <img src={{asset("images/v.jpg")}} alt="Avatar" class="img-fluid my-5"  />

                <h5>{{App\Models\User::findOrFail($conge->user_id)->prenom}} {{App\Models\User::findOrFail($conge->user_id)->name}}</h5>

                <p>{{App\Models\User::findOrFail($conge->user_id)->poste}}  </p>


                <a  href="/conge/index " type="submit" class="btn btn-outline-info"><b><i class="fas fa-arrow-left"></i></b></a>

            </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h6>Demande de congé</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>La durée</h6>
                      <p class="text-muted">{{$conge->duree}}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Type de conge</h6>
                      <p class="text-muted">{{$conge->type}}</p>
                    </div>
                  </div>
                  {{-- <h6>Projects</h6> --}}
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Début de congé</h6>
                      <p class="text-muted">{{$conge->date_debut}}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Fin de congé</h6>
                      <p class="text-muted">{{$conge->date_fin}}</p>
                    </div>
                  </div>


                    <div class="col mb-3">



                        @switch($conge->statut)

                        @case(STATUT_EN_ATTENTE)
                        {{-- En attente --}}
                        <form id="approve-leave-{{$conge->id}}" action="{{route('conge.approve',$conge->id)}}" method="POST" class="d-inline-block mr-4">
                            @csrf
                            <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir accepter le congé ?')" class="btn btn-successs" name="approve" value="{{ STATUT_ACCEPTE }}"><b>Accepter</b></button>
                        </form>

                        <form id="reject-leave-{{$conge->id}}" action="{{route('conge.approve',$conge->id)}}" method="POST" class="d-inline-block ml-4">
                            @csrf
                            <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir refuser le congé ??')" class="btn btn-dangerr" name="approve" value="{{ STATUT_REFUSE }}"><b>Refuser</b></button>
                        </form>
                    @break





                            @case(STATUT_ACCEPTE)
                                {{-- Accepté --}}
                                <form action="{{route('conge.approve',$conge->id)}}" method="POST">
                                    @csrf
                                    <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir accepter le congé ?')" class="btn btn-sm btn-success mr-2" name="approve" value="{{ STATUT_ACCEPTE }}"><b>Accepter</b></button>
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir refuser le congé ?')" type="submit" name="approve" value="{{ STATUT_REFUSE }}"><b>Refuser</b></button>

                                </form>
                                @break

                            @case(STATUT_REFUSE)
                                {{-- Refusé --}}
                                <form action="{{route('conge.approve',$conge->id)}}" method="POST">
                                    @csrf
                                    <button class="btn btn-sm btn-success" onclick="return confirm('Êtes-vous sûr de vouloir accepter le congé ?')" type="submit" name="approve" value="{{ STATUT_ACCEPTE }}"><b>Accepter</b></button>

                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir refuser le congé ?')" type="submit" name="approve" value="{{ STATUT_REFUSE }}"><b>Refuser</b></button>
                                </form>
                                @break

                            @default
                                Statut inconnu
                        @endswitch





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

        .btn-danger
        {
             border: 2px solid 	#ffffff;
      border-radius:1.5rem;
       padding: 1%;
      width: 20%;
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
