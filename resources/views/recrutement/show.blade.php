<!DOCTYPE html>
<html>
<head>
<title>ORMVAL</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

<style>


.btn-outline-info{
    border: 2px solid 	#0e0d0d;
      border-radius:1.5rem;
      padding: 1%;
      width: 30%;
      cursor: pointer;
      background:  #000000 ;
      color: #fff4f4;

  }


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




.card {
      margin-bottom: 20px;
            border-radius:1.5rem;
            background:  #ffffff ;


      border: 2px solid black; /* Ajout de la bordure */
      padding: 10px; /* Espacement interne pour le contenu de la carte */
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
        <span class="w3-text-white" style="font-size:30px">Choisissez le poste auquel vous souhaitez envoyer votre demande</span>
      </div>
      <div class="w3-display-bottomright w3-center w3-padding-large">
        <span class="w3-text-white">Ksar E Kebir B.P 48</span>
      </div>
    </header>






<body>
  <div class="w3-sand w3-grayscale w3-large">
    <div class="w3-container" id="menu">
      <div class="w3-content" style="max-width:700px">
        <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">LES OFFRES D'EMPLOI</span></h5>
        @foreach ($recrutements as $recrutement )
        <div class="card w3-card w3-padding">
          <h2><b><u>{{ $recrutement->titre}}</u></b></h2>
         <p> <p class="w3-text"> {{ $recrutement->created_at}}</p>
          <p class="w3-text"><b><u>Missions:</u></b>  &nbsp;  &nbsp;{{ $recrutement->description}}</p>
          <p class="w3-text"><b><u>compétences:</u> </b>{{ $recrutement->competence}}</p>
          <p class="w3-text-black"><b><u>Région de:</u></b>&nbsp;  &nbsp;{{ $recrutement->lieu}}</p>
          <p class="w3-text"><b><u>Date Limite:</u></b> {{ $recrutement->date_limite}}</p>

          <button onclick="window.location.href='{{ route('recrutement.createCand', ['recrutement_id' => $recrutement->id]) }}';" class="btn-outline-info" type="button">postuler</button>

          {{-- <p><button onclick="window.location.href='/recrutement/createCand';" class="btn-outline-info" type="button">postuler</button></p> --}}
        </div>
        <hr>
        @endforeach
      </div>
    </div>
  </div>
</body>
</html>
