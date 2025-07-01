<aside class="control-sidebar control-sidebar-dark">
    <div class="bg-dark">
    <div class="card-body  box-profile">
    <div class="text-center">
    <img class="profile-user-img img-fluid img-circle" src="{{asset('images/user.png')}}" alt="User profile picture">
    </div>
    <h3 class="profile-username text-center ellipsis">{{ Illuminate\Support\Facades\Auth::user()->prenom }} {{ Illuminate\Support\Facades\Auth::user()->name }}</h3>
    <p class="text-muted text-center">{{ Illuminate\Support\Facades\Auth::user()->poste}}</p>
    {{-- {{getRolesName()}} --}}
     <ul class="list-group bg-dark mb-3">
            <li class="list-group-item">
            <a href="{{route("admin.profile")}}" class="d-flex align-items-center "><i class="fa fa-lock pr-2"></i><b >Mot de passe</b> </a>
            </li>
            <li class="list-group-item">

            <a href="{{route("admin.profile")}}" class="d-flex align-items-center"><i class="fa fa-user pr-2"></i><b >Mon profile</b> </a>
            </li>
        </ul>
      <a class="btn btn-info btn-block" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                   <b>  Déconnexion</b>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
    </div>



    </div>





<style>
      .list-group{
      border: 1px solid     #ffffff;
        border-radius:1.5rem;

        cursor: pointer;

        color: #fff;
    }

    .btn-block
    {

      border: 2px solid     #ffffff;
        border-radius:1.5rem;
        padding: 2%;
        width: 100%;
        cursor: pointer;
        background: #008B8B;
        color: #fff;
    }
</style>


    </aside>
