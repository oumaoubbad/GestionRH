<div class="row  p-4 pt-5">
<div class="col">
    <h3 class="page-title"><b>Formulaire De Création D'un Nouvel Employé</b></h3>

    <ul class="breadcrumb">
        <li class="breadcrumb-user"><a href="/home">tableau de bord</a></li>
        <li class="breadcrumb-user"><a href="/habilitations/utilisateurs"> / liste des employés</a></li>

        <li class="breadcrumb-user active">/ ajouter employé</li>

    </ul>

        <div class="row  p-4 pt-5">               {{-- ajout dun user --}}
    <div class="col-10">

    <div class="card card-secondary">
        {{-- <div class="card-header "> --}}
        {{-- <h3 class="card-title" > <i class="fas fa-user-plus fa-2x mr-1 "></i>  Formulaire de création d'un nouvel employé </h3> --}}

    </div>

        {{-- class="bg-gray"  pour changer couleur de form  09-04-2023--}}
        <form  role="form"    wire:submit.prevent='addUser()'>
            <div class="card-body">

            <div class="d-flex">
            <div class="form-group flex-grow-1 mr-2">
                <label >Nom</label>{{-- wire:model="newUser.name: kansta3mloha ftraitement d'enregister user f BD(ajouter nv user)--}}
 <input type="text" wire:model="newUser.name"  class='form-control @error('newUser.name') is-invalid @enderror'>

                    @error("newUser.name")
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-group flex-grow-1">
                    <label >Prenom</label>
  <input type="text"   wire:model="newUser.prenom"  class='form-control @error('newUser.prenom') is-invalid @enderror'>

                    @error("newUser.prenom")
                     <span class="text-danger">{{ $message }}</span>
                 @enderror
                </div></div>

                    <div class="form-group">
                        <label >Sexe</label>
      <select    wire:model="newUser.sexe" class='form-control @error('newUser.sexe') is-invalid @enderror'>

                            <option value=""> -----------</option>
                            <option value="F"> Femme</option>
                            <option value="H"> Home</option>

                        </select>

                        @error("newUser.sexe")
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                        </div>



                            <div class="d-flex">
                            <div class="form-group flex-grow-1 mr-2">

                            <label >Telephone</label>
                            <input type="texte"  wire:model="newUser.tel" class='form-control @error('newUser.tel') is-invalid @enderror'>

                            @error("newUser.tel")
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label  >Adresse e-mail</label>
                            <input type="email"  wire:model="newUser.email" class='form-control'>

                            @error("newUser.email")
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                            </div></div>


                            <div class="d-flex">
                                <div class="form-group flex-grow-1 mr-2">
                            <label >CIN</label>
                            <input type="text"   wire:model="newUser.numeroPieceIdentite" class='form-control @error('newUser.numeroPieceIdentite') is-invalid @enderror'>

                            @error("newUser.numeroPieceIdentite")
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                        </div>

                        <div class="form-group flex-grow-1">
                            <label >Date de naissance</label>
                            <input type="date"   wire:model="newUser.date_naissance" class='form-control @error('newUser.date_naissance') is-invalid @enderror'>

                            @error("newUser.date_naissance")
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                        </div></div>


                        <div class="form-group flex-grow-1">
                            <label >Adresse</label>
                            <input type="text"   wire:model="newUser.adresse" class='form-control'>

                            @error("newUser.adresse")
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                        </div>







                            <div class="d-flex">
                            <div class="form-group flex-grow-1 mr-2">
                                <label >Département</label>
          <select    wire:model="newUser.departement" class='form-control @error('newUser.departement') is-invalid @enderror'>

                                <option value=""> -----------</option>
                                <option value="R"> Ressources humaines</option>
                                <option value="D"> Développement</option>
                                <option value="T"> Support technique</option>
                                <option value="A"> Administration</option>

                            </select>

                            @error("newUser.departement")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                            </div>




                                <div class="form-group flex-grow-1">
                                    <label >Poste</label>
                  <input type="text"   wire:model="newUser.poste"  class='form-control @error('newUser.poste') is-invalid @enderror'>

                                    @error("newUser.poste")
                                     <span class="text-danger">{{ $message }}</span>
                                 @enderror
                                </div></div>









                                <div class="d-flex">
                                    <div class="form-group flex-grow-1 mr-2">


                            <label >Type de contrat</label>
                            <input type="text"   wire:model="newUser.type_contrat" class='form-control @error('newUser.type_contrat') is-invalid @enderror'>

                            @error("newUser.type_contrat")
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                        </div>



                        <div class="form-group flex-grow-1">
                            <label >date D'embauche</label>
                            <input type="date"   wire:model="newUser.dateDembauche" class='form-control @error('newUser.dateDembauche') is-invalid @enderror'>

                            @error("newUser.dateDembauche")
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                        </div></div>



                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mot de passe</label>
                                    <input type="texte"  disabled placeholder="Password" class='form-control'>
                                    </div>


        <div class="card-footer">
            {{-- <button type="button" wire:click="goToListUser()" class="btn btn-danger">  Retour</button> --}}

            {{-- <button type="submit" class="btn btn-primary">  Enregistrer</button> --}}
            <button type="button" class="btn btn-outline-dark" wire:click="goToListUser()"><b>Retour</b></button>

            {{-- <button  type="button"class="btn btn-custom"  wire:click="goToListUser()">Retour</button>
            <style>
                .btn-custom {
                    background-color: #2F4F4F;
                    color: #FFFFFF;}
            </style> --}}
            <button type="submit" class="btn btn-outline-success"><b>Enregistrer</b></button>

           {{-- <button  type="submit" class="btn btn-c" >Enregistrer</button>
            <style>
                .btn-c {
                    background-color:  #008B8B;
                    color: #FFFFFF;}
            </style> --}}



        </div>
        </form>
    </div></div>




</div>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


        <style>
            .card-footer {
  display: flex;
  justify-content: center;
}


/* form /card en general */
                .col-10{


                    border: 1px solid 	#080808;
                 border-radius:1.5rem;
                         background: #e9e9e9 ;

           }



            /* .card-title{
                color: #028329fb;
                text-align: center;
                font-weight: bold;
                border-radius:1.5rem;
            } */



            .form-content
            {
                padding: 5%;
                border: 1px solid #ced4da;
                margin-bottom: 2%;
            }
            .form-control{
                border-radius:1.5rem;
            }











    .btn-outline-success
  {
    border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      padding: 1%;
      width: 20%;
      cursor: pointer;
       /* background: #006400; */

       background: #008B8B;
      color: #fff;
  }

  .btn-outline-dark
  {
    border: 2px solid 	#ffffff;
      border-radius:1.5rem;
      padding: 1%;
      width: 20%;
      cursor: pointer;
      background:  #454545 ;
      color: #fff;
  }

            </style>




<script>
        window.addEventListener("showSuccessMessage", event=>{
    Swal.fire({
                position: 'top-end',
                icon: 'success',
                toast: true,
                title: event.detail.message ||"opération effectuée avec succès!.",
                showConfirmButton: false,
                timer: 5000
})

})


</script>
