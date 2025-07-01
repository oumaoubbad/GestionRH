
<!DOCTYPE html>
<html>
<head>
<title>ORMVAL</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">


<style>



body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("https://www.shutterstock.com/image-illustration/plain-black-solid-color-background-260nw-1677128971.jpg");
  min-height: 35%;
}

.menu {
  display: none;
}
</style>
</head>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
    <div class="w3-row w3-padding w3-black">
      <div class="w3-col s3">
        <a href="/site#" class="w3-button w3-block w3-black">HOME</a>
      </div>
      <div class="w3-col s3">
        <a href="/site#about" class="w3-button w3-block w3-black">A PROPOS DE NOUS</a>
      </div>
      <div class="w3-col s3">
        <a href="/recrutement/show" class="w3-button w3-block w3-black">OFFRES D'EMPLOI</a>
      </div>
      <div class="w3-col s3">
        <a href="/login" class="w3-button w3-block w3-black">SE CONNECTER</a>
      </div>
    </div>
  </div>



<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
      <span class="w3-tag">Ouvert de 8h à 16h</span>
    </div>
    <div class="w3-display-middle w3-center">
      <span class="w3-text-white" style="font-size:25px">Remplissez ce formulaire afin d'envoyer vos demandes</span>
    </div>
    <div class="w3-display-bottomright w3-center w3-padding-large">
      <span class="w3-text-white">Ksar E Kebir B.P 48</span>
    </div>
  </header>




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

            <div class="card-body">
                <form action="{{ route('candidat.storeCandidat')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="recrutement_id" value="{{ $recrutement_id }}">

                <div class="mb-3">
                    <div class="d-flex">
                        <div class="form-group flex-grow-1 mr-2">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><b>Nom</b></label>
                        <input type="text" class="form-control" name="nom" placeholder="Nom">
                      </div>
                    </div>

                    <div class="form-group flex-grow-1">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"><b>Prénom</b></label>
                        <input type="text" class="form-control" name="prenom" placeholder="Prénom">
                      </div>
                    </div></div>

                    <div class="mb-3">
                        <div class="d-flex">
                            <div class="form-group flex-grow-1 mr-2">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>Date naissance</b></label>
                            <input type="date" class="form-control" name="date_naissance" placeholder="Date naissance">
                          </div>
                        </div>

                        <div class="form-group flex-grow-1">
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>Adresse email</b></label>
                            <input type="text" class="form-control" name="email" placeholder="Adresse email">
                          </div>
                        </div></div>

                        <div class="mb-3">
                            <div class="d-flex">
                                <div class="form-group flex-grow-1 mr-2">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><b>Numéro de téléphone</b></label>
                                <input type="text" class="form-control" name="tel" placeholder="Numéro de téléphone">
                              </div>
                            </div>

                            <div class="form-group flex-grow-1">
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"><b>CV</b></label>
                                <input type="file" class="form-control" name="cv" placeholder="CV">
                              </div>
                            </div></div>

                            <div class="mb-3">
                                <div class="d-flex">
                                    <div class="form-group flex-grow-1 mr-2">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>Niveau d'étude</b></label>
                                    <input type="text" class="form-control" name="niveauEtude" placeholder="Niveau d'étude">
                                  </div>
                                </div>

                                <div class="form-group flex-grow-1">
                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"><b>Diplome</b></label>
                                    <input type="text" class="form-control" name="diplome" placeholder="Diplome">
                                  </div>
                                </div></div>

                                    <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><b>Expériance</b></label>
                            <textarea type="text" class="form-control" name="descriptionExperience" placeholder="Expériance"></textarea>
                          </div>

                      <div class="card-footer">
                        <a  href="/recrutement/show" type="submit" class="btn btn-outline-dark"><b>Retour</b></a>

                        <button class="btn btn-outline-info"><b>Envoyer</b></button>


                     </div>



                   </div>

                </form>

        </div>
    </div>
 </div>






            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <!------ Include the above in your HEAD tag ---------->






            <style>
                 .card{
    border: 2px solid 	#ffffff;
      border-radius:1.5rem;

  }


                    .card-footer {
display: flex;
justify-content: center;
}

  .btn-outline-info{
    border: 2px solid 	#ffffff;
      border-radius:1.5rem;
      padding: 1%;
      width: 30%;
      cursor: pointer;
      background:  #000000 ;
      color: #fff4f4;
  }

  .btn-outline-dark
  {
    border: 2px solid 	#000000;
      border-radius:1.5rem;
      /* padding: 1%; */
      width: 30%;
      cursor: pointer;
      /* background:  #af0303 ; */
      color: #000000;
  }



                .col-10{


border: 1px solid 	#000000;
border-radius:1.5rem;
background: #ffffff ;

     /* background: #e9e9e9 ; */

}
/* les champs de formulaire */
.form-control{
    border: 2px solid 	#000000;
border-radius:1.5rem;
/* background: #cac5c5 ; */
/* e9e9e9 */
         }




     /*cars reinitialiser mot passe   et les roles*/
     .col-md-12{


border: 1px solid #000000;
/* background: #cac8c8 ; */

border-radius:1.5rem;
padding: 2%;
width: 100%;
/* background: #e9e9e9 ; */

}
</style>



