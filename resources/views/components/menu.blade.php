<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
@can("responsable_rh")

        <li class="nav-item">
            <a href="{{route("home")}}" class="nav-link {{ setMenuActive('home', '') }}">
                <i class="fas fa-tachometer-alt"></i> &nbsp;
                <p>
                    <b>Tableau de bord</b>
                </p>
            </a>
        </li>



        @endcan

@can("responsable_rh")

 <li class="nav-item ">
<a href="{{route('responsable_rh.habilitations.users.index')}}" class="nav-link" > <i class=" nav-icon fas fa-user-shield"></i>

 <p>  <b>Gestion des Employés</b></p>
</a>
</li>
@endcan


@can("responsable_rh")

 <li class="nav-item ">
<a href="/recrutement/index" class="nav-link" >         <i class="fas fa-briefcase"></i>

 <p>  <b>Gestion de Recrutement</b></p>
</a>
</li>
@endcan






@can("employe")

 <li class="nav-item ">
<a href="/info/employe" class="nav-link" ><i class="fas fa-user"></i> </i>&nbsp;&nbsp;

 <p>  <b>Votre informations</b></p>
</a>
</li>
@endcan





@can("responsable_rh")

 <li class="nav-item ">
<a href="/reunion/index" class="nav-link" > <i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;
 <p>  <b>Gestion des Réunions</b></p>
</a>
</li>
@endcan



@can("responsable_rh")

 <li class="nav-item  ">

     <a href="" class="nav-link  " ><i class="fas fa-file-signature"></i>&nbsp;&nbsp;&nbsp;

         <p>
         <b>  Gestion des requête</b>
         <i class="right fas fa-angle-left"></i>
         </p>


     </a>

     <ul class="nav nav-treeview">
         <li class="nav-item ">
             <a href="/attestation/listR "
             class="nav-link active">
                 {{-- <i class=" nav-icon fas fa-users-cog"></i> --}}
                 <p><b>Gestion de documents</b> </p>
             </a>
 </li>





 </ul>

 <ul class="nav nav-treeview">
     <li class="nav-item ">
         <a href="/reclamation/listR"
         class="nav-link active">
              <p><b>Gestion des réclamations </b> </p>
         </a>
 </li>


 </ul>

 </li>

@endcan






@can("responsable_rh")

 <li class="nav-item ">
<a href="/conge/index" class="nav-link" > <i class="fas fa-suitcase "></i>&nbsp;&nbsp;&nbsp;
 <p>  <b>Gestion des Congés</b></p>
</a>
</li>
@endcan



@can("responsable_rh")

<li class="nav-item ">
    <a href="#" class="nav-link" >
        <i class="fas fa-newspaper"></i>  &nbsp;      <p>
        <b> Gestion des Annonce</b>  <i class="right fas fa-angle-left"></i>

        </p>
    </a>



    <ul class="nav nav-treeview">
        <li class="nav-item ">
            <a href="/annonce/index" class="nav-link active" >
                {{-- <i class=" nav-icon fas fa-chart-line"></i> --}}
                <p><b>Liste des annonces</b></p>
            </a>
        </li>






</ul>

</li>

@endcan


{{--
@can("responsable_rh")

<li class="nav-item ">
    <a href="/candidat/index" class="nav-link" >
        <i class="fas fa-briefcase"></i>&nbsp;&nbsp;&nbsp;
        <p>
            <b> candidat</b>
         </p>
    </a>




    </li>


@endcan --}}






{{--
@can("responsable_rh")

<li class="nav-item ">
    <a href="/attestation/index" class="nav-link" >  <i class="fas fa-file-signature"></i>

               <p>
        <b>Gestion des requetes</b>
         </p>
    </a>

@endcan

 --}}








@can("employe")

<li class="nav-item  ">

    <a href="" class="nav-link  " ><i class="fas fa-file-signature"></i>&nbsp;&nbsp;&nbsp;

        <p>
        <b>  Faire une requête</b>
        <i class="right fas fa-angle-left"></i>
        </p>


    </a>

    <ul class="nav nav-treeview">
        <li class="nav-item ">
            <a href="/attestation/list "
            class="nav-link active">
                {{-- <i class=" nav-icon fas fa-users-cog"></i> --}}
                <p><b>Liste de vos documents</b> </p>
            </a>
</li>





</ul>

{{-- <ul class="nav nav-treeview">
    <li class="nav-item ">
        <a href="/reclamation/list"
        class="nav-link active">
             <p><b>Liste de vos réclamations </b> </p>
        </a>
</li>


</ul> --}}

</li>

@endcan



@can("employe")

<li class="nav-item ">
    <a href="/conge/indexE" class="nav-link" > <i class="fas fa-suitcase "></i>&nbsp;&nbsp;&nbsp;
               <p>
        <b>Demander un congé</b>
         </p>
    </a>



@endcan

@can("employe")

 <li class="nav-item ">
<a href="/annonce/indexE" class="nav-link" > <i class="fas fa-newspaper"></i>&nbsp;&nbsp;&nbsp;
 <p>  <b>Les annonces</b></p>
</a>
</li>
@endcan

@can("employe")

 <li class="nav-item ">
<a href="/calendar/index" class="nav-link" >  <i class="far fa-dot-circle"></i>&nbsp;&nbsp;&nbsp;
 <p>  <b>Calendrier</b></p>
</a>
</li>
@endcan





@can("responsable_rh")

 <li class="nav-item ">
<a href="/calendar/index" class="nav-link" >  <i class="far fa-dot-circle"></i>&nbsp;&nbsp;&nbsp;
 <p>  <b>Calendrier</b></p>
</a>
</li>
@endcan







@can("responsable_rh")

    {{-- <li class="nav-item ">
        <a href="#" class="nav-link active" >
            <i class=" nav-icon fas fa-swatchbook"></i>
            <p>Utilisateurs</p>

        </a>
    </li>
    </ul> --}}

@endcan









{{-- @can("employe")

 <li class="nav-item ">
<a href="/reunion/indexE" class="nav-link" ><i class="fas fa-calendar-alt"></i> </i>&nbsp;&nbsp;&nbsp;

 <p>  <b>Les Réunions</b></p>
</a>
</li>
@endcan --}}





@can("employe")

<li class="nav-item  ">

    <a href="" class="nav-link  }  " >
        <i class="fas fa-cog"></i>&nbsp;&nbsp;&nbsp;
        <p>
        <b>  Paramètres</b>
        <i class="right fas fa-angle-left"></i>
        </p>


    </a>

    <ul class="nav nav-treeview">
        <li class="nav-item ">
            <a href="/profile "
            class="nav-link active">
                {{-- <i class=" nav-icon fas fa-users-cog"></i> --}}
                <p><b>Modifier Profil</b> </p>
            </a>
</li>





</ul>

<ul class="nav nav-treeview">
    <li class="nav-item ">
        <a href="/profile"
        class="nav-link active" >
            {{-- <i class=" nav-icon fas fa-users-cog"></i> --}}
            <p><b>Modifier password</b> </p>
        </a>
</li>


</ul>

</li>

@endcan










{{-- @can("employe")

<li class="nav-item ">
    <a href="/attestation/indexE" class="nav-link" >  <i class="fas fa-file-signature"></i>

               <p>
        <b>faire une requête</b>
         </p>
    </a>

@endcan --}}








@can("responsable_rh")

<li class="nav-item  ">

    <a href="" class="nav-link  }  " >
        <i class="fas fa-cog"></i>&nbsp;&nbsp;&nbsp;
        <p>
        <b>  Paramètres</b>
        <i class="right fas fa-angle-left"></i>
        </p>


    </a>

    <ul class="nav nav-treeview">
        <li class="nav-item ">
            <a href="/profile "
            class="nav-link active" >
                {{-- <i class=" nav-icon fas fa-users-cog"></i> --}}
                <p><b>Modifier Profil</b> </p>
            </a>
</li>





</ul>

<ul class="nav nav-treeview">
    <li class="nav-item ">
        <a href="/profile"
        class="nav-link active" >
            {{-- <i class=" nav-icon fas fa-users-cog"></i> --}}
            <p><b>Modifier password</b> </p>
        </a>
</li>


</ul>

</li>

@endcan








{{--
@can("employe")
<li class="nav-header "> SALAM</li>
<li class="nav-item ">
    <a href="#" class="nav-link" >
        <i class=" nav-icon fas fa-users"></i>
        <p>Gestion dscvj</p>
    </a>
</li>
@endcan
@can("employe")

<li class="nav-header "> Profile</li>
<li class="nav-item ">
<a href="#" class="nav-link" >
<i class=" nav-icon fas fa-coins"></i>
<p>f</p>
</a>
</li>
@endcan

@can("employe")



<li class="nav-header "> SALAM</li>
<li class="nav-item ">
<a href="#" class="nav-link" >
<i class=" nav-icon fas fa-coins"></i>
<p>Gestion rftgyhuyj</p>
</a>
</li>
@endcan
 --}}














