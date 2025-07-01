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
  min-height: 75%;
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
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">A PROPOS DE NOUS</a>
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
    <span class="w3-text-white" style="font-size:60px">Office Régional de Mise en Valeur Agricole du Loukkos</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">Ksar E Kebir B.P 48</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">A PROPOS D'ORMVAL</span></h5>
    <p>L'Office Régional de Mise en Valeur Agricole du Loukkos (ORMVAL) est un organisme situé dans la région du Loukkos au Maroc. Il est chargé de promouvoir et de développer .</p>
    <p>l'agriculture dans cette région spécifique. L'ORMVAL met en œuvre des programmes et des projets visant à améliorer les conditions agricoles, à augmenter la productivité et à favoriser le développement économique de la zone du Loukkos. Cela peut inclure des initiatives telles que l'irrigation, la gestion des ressources hydriques, la modernisation des exploitations .</p>
    <p>agricoles, la formation des agriculteurs, la commercialisation des produits agricoles, etc. Son objectif principal est de valoriser les ressources agricoles de la région et d'apporter un soutien aux agriculteurs locaux.</p>
    {{-- <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"Use products from nature for what it's worth - but never too early, nor too late." Fresh is the new sweet.</i></p>
      <p>Chef, Coffeeist and Owner: Liam Brown</p>
    </div> --}}
    <img src="https://muhub.ma/wp-content/uploads/2022/08/AF1QipMEd51Wio42CCfcSH75WqJAKW384-ndaVVjKotbw1600-h1000-k-no.jpeg" style="border-radius:1.5rem;
    width:100%;max-width:1000px"  class="w3-margin-top">
    <p><strong>Horaires d'ouvertures:</strong> tous les jours de 8h à 16h.</p>
    <p><strong>Adresse:</strong> Ksar E Kebir B.P 48</p>
  </div>
</div>

<!-- Menu Container -->
<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">

    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">LES ACTIVITES D'ORMVAL</span></h5>

    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
        <div class="w3-col s6 tablink">Activités </div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
        <div class="w3-col s6 tablink">La suite </div>
      </a>
    </div>

    <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
      <h5>Irrigation </h5>
      <p class="w3-text-grey">L'ORMVAL s'occupe de la gestion des ressources hydriques et de l'irrigation des terres agricoles dans la région. Il met en place et entretient des infrastructures d'irrigation pour assurer un approvisionnement en eau adéquat aux agriculteurs.</p><br>

      <h5>Modernisation agricole : </h5>
      <p class="w3-text-grey">L'ORMVAL travaille à la modernisation des exploitations agricoles en introduisant des techniques et des technologies agricoles avancées. Cela comprend l'utilisation de méthodes d'irrigation efficaces, de semences de qualité, de fertilisants appropriés et de bonnes pratiques agricoles.</p><br>

      <h5>Formation et assistance technique :</h5>
      <p class="w3-text-grey"> L'ORMVAL offre des formations et une assistance technique aux agriculteurs de la région. Il organise des sessions de formation sur des sujets tels que la gestion agricole, la diversification des cultures, l'utilisation efficace de l'eau, la gestion des maladies des plantes, etc.</p><br>


    </div>

    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
      <h5>Valorisation des produits agricoles :</h5>
      <p class="w3-text-grey"> L'ORMVAL travaille à la valorisation des produits agricoles de la région. Il encourage la commercialisation des produits locaux, aide à améliorer leur qualité et facilite l'accès aux marchés.</p><br>

      <h5>Développement rural :</h5>
      <p class="w3-text-grey"> L'ORMVAL participe également au développement rural de la région. Il soutient la mise en place de projets et d'initiatives visant à diversifier l'économie rurale, à créer des emplois et à améliorer les conditions de vie des populations locales.</p><br>

      <h5>Recherche et développement : </h5>
      <p class="w3-text-grey">L'ORMVAL mène des activités de recherche et développement agricole pour identifier de nouvelles variétés de cultures adaptées à la région, développer des techniques agricoles durables et trouver des solutions aux problèmes agricoles spécifiques du Loukkos.</p><br>


    </div>
    {{-- <img src={{asset("images/v.jpg")}} style="width:100%;max-width:1000px;margin-top:32px;"> --}}
  </div>
</div>

<!-- Contact/Area Container -->
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">contactez nous</span></h5>

    <p><strong>contactez-nous:</strong> Veuillez remplir ce formulaire</p>
    <form action="/action_page.php" target="_blank">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Prenom" required name="Name"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nom" required name="Nom"></p>

        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Adresse email" required name="Adresse email"></p>

      <p><button class="w3-button w3-black" type="submit">Envoyer</button></p>
    </form>
  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  {{-- <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p> --}}
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>


