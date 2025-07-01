
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    {{-- <div class="row  p-4 pt-5">
        <div class="col">
            <h3 class="page-title"><b>formulaire de création d'un nouvel employé</b></h3> --}}
            <br><br>
<div class="resume-main">
	<div class="left-box">

		{{-- <div class="profile">
            <img src={{asset("images/user.png")}}>		</div>


	</div> --}}
    <div class="profile profile-img-container">
        <img src={{asset("images/v.jpg")}}>
    </div>

	<div class="right-box">
		<h1>
			 {{$user->name}}<br>
             <span class="blue-text">{{$user->prenom}}</span>

		</h1>
		{{-- <p class="p3">UI & UX DESIGNER</p> --}}
        <p class="p3">{{$user->poste}}</p>

		<br>
		<h2 class="heading">INFORMATION DE CONTACT</h2>
		<hr class="hr2">
		<br>
		<div class="col-div-4">
			<p class="p5">Sexe</p>
			<span class="span1">{{$user->sexe}}</span>
		</div>
		<div class="col-div-8">
			<p class="p5">Numero de Telephone</p>
			<span class="span1">{{$user->tel}}</span>
		</div>
		<div class="clearfix"></div>
		<br>
		<div class="col-div-4">
			<p class="p5">Date de naissance</p>
			<span class="span1">{{$user->date_naissance}}</span>
		</div>
		<div class="col-div-8">
			<p class="p5">Adresse</p>
			<span class="span1">{{$user->adresse}}</span>
		</div>
		<div class="clearfix"></div>
		<br>
		<div class="col-div-4">
			<p class="p5">CIN</p>
			<span class="span1">{{$user->numeroPieceIdentite}}</span>
		</div>
		<div class="col-div-8">
			<p class="p5">Adresse email</p>
			<span class="span1">{{$user->email}}</span>
		</div><br><br><br><br><br>
        <h2 class="heading"> POSTE</h2>
		<hr class="hr2">
		<br>
		<div class="col-div-4">
			<p class="p5">Poste</p>
			<span class="span1"> {{$user->poste}}</span>
		</div>
		<div class="col-div-8">
			<p class="p5">Departement</p>
			<span class="span1"> {{$user->departement}}</span>
		</div>
		<div class="clearfix"></div>
		<br>
		<div class="col-div-4">
			<p class="p5">Type de contrat</p>
			<span class="span1">{{$user->type_contrat}}</span>
		</div>
		<div class="col-div-8">
			<p class="p5">Date d'embauche</p>
			<span class="span1">{{$user->dateDembauche}}</span>
		</div>

        <br><br>
        <div style="text-align:center;">
            <br><br>
             <button type="button" class="btn btn-outline-dark" wire:click="goToListUser()"><b>Retour</b></button>



             <a href="" class="btn btn-outline-success" id="tiba3a" onclick="

             document.getElementById('tiba3a').style.display='none'
             setTimeout(function(){
                 document.getElementById('tiba3a').style.display='block'

             },2000);
             window.print();
             "> <b>Exporter en PDF</b> </a>
            {{-- <button type="submit" class="btn btn-outline-success"><b>Exporter en PDF</b></button> --}}





        </div>

</body>
</html>





<style>

.clearfix {
  /* display: flex; */
  justify-content: center;
}

    .btn-outline-success
  {
    border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      /* padding: 1%; */
      width: 20%;
      cursor: pointer;
       background: #008B8B;
      color: #fff;
  }

  .btn-outline-dark
  {
    border: 2px solid 	#ffffff;
      border-radius:1.5rem;
      /* padding: 1%; */
      width: 20%;
      cursor: pointer;
      background:  #454545 ;
      color: #fff;
  }
    .profile-img-container {
        float: right;
    margin-left: 10px;
}

    :root{
	--background: #c3c0ba;
	--white: #fff;
	--one: #54585d;
	--two: #54585d;
	--black: #54585d;
	--process: #54585d;
}
*{margin:0px; padding:0px; box-sizing: border-box; font-family: system-ui;}
body{background: var(--background);}
.col-div-3{width: 25%; float: left;}
.col-div-7{width: 75%; float: left;}
.col-div-4{width: 35%; float: left;}
.col-div-8{width: 65%; float: left;}
.col-div-6{width: 50%; float: left; position: relative;}
.clearfix{clear: both;}


.resume-main{
    width: 900px; height: 1000px;
 	margin: 30px auto;

 }


 .right-box{width: 100%; background-color:  ; height: 900px;
	margin: 50px 0px; border-radius: 50px  50px 50px 50px; padding:30px 50px;
	box-shadow: -7px 2px 15px 2px #54585d52;
}
.profile{width: 200px; height: 200px;

	padding: 20px; border-radius: 50%; margin: 30px auto;}
.profile img{    margin-right: 20px;
width: 100%; border-radius: 50%;}



 .hr1{border: none; height: 1px; background: var(--white); margin-top: 3px;}
.p1{font-size: 11px;color: var(--white);letter-spacing: 1px;padding-top: 12px;}



h1{font-size: 50px; text-transform: uppercase; color: var(--black); line-height: 50px;}
h1 span{color: var(--one);}
.p3{letter-spacing: 4px;color: #54585d; font-weight: 500;}
.heading{text-transform: uppercase;font-weight: 500;color: var(--one);
	letter-spacing: 1px; font-size: 20px;}
.hr2{border: none; height: 1px; background: var(--black); margin-top: 3px;}
.p5{font-weight: 700;color: var(--black);}
.span1{font-size: 16px;color: var(--black);}




    .blue-text {
        color: #008B8B;
    }
</style>
