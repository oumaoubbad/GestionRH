@extends("layouts.master")


@section('content')


<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <body>
{{-- <div class="row  p-4 pt-5">
    <div class="col">
        <h3 class="page-title"><b>formulaire de création d'un nouvel employé</b></h3> --}}
        <br>

        {{-- <a href=" {{route('recrutement.indexcand',$recrutement->id)}}"class="btn btn-sm btn-outline-dark"><b>Retour à la liste des candidats</b></a> --}}
<div class="resume-main">
<div class="left-box">



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    {{-- <div class="profile">
        <img src={{asset("images/user.png")}}>		</div>


</div> --}}
<div class="profile profile-img-container">
    {{-- <img src={{asset("images/v.jpg")}}> --}}
</div>

<div class="right-box">
    <h1>
        &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;&nbsp;   {{ $candidat->nom}} {{ $candidat->prenom}}
        &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;&nbsp;   &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;&nbsp;  <span class="blue-text">{{ $candidat->niveauEtude}}</span>
    </h1>
    <style>
        .blue-text {
            color: #008B8B;
        }
    </style>
    {{-- <p class="p3">UI & UX DESIGNER</p> --}}
      <p class="p3"> .</p>
    <br>

    <h2 class="heading">INFORMATION DE CONTACT</h2>
    <hr class="hr2">
    <br>
    <div class="col-div-4">
        <p class="p5">Date de naissance</p>
        <span class="span1">{{ $candidat->date_naissance}}</span>
    </div>
    <div class="col-div-8">
        <p class="p5">Numero de Telephone</p>
        <span class="span1">{{ $candidat->tel}}</span>
    </div>
    <div class="clearfix"></div>
    <br>
    <div class="col-div-4">
        <p class="p5">Adresse email</p>
        <span class="span1">{{ $candidat->email}}</span>
    </div>

    <div class="col-div-8">
        <p class="p5">CV</p>
        {{-- <span class="span1"><a href="{{route('cv.downloadCV',$candidat->id)}}" class="btn btn-sm btn-info"><i class="fa fa-download"></i> cv</a></span> --}}
        <span class="span1"><a href="{{route('cv.downloadCV',$candidat->id)}}" class="btn  btn-outline-darkx"><i class="fa fa-download"></i> <b>télécharger</b> </a></span>

    </div>
    <div class="clearfix"></div>
    <br>
    {{-- <div class="col-div-4">
        <p class="p5">CIN</p>
        <span class="span1">{{ $candidat->nom}}</span>
    </div> --}}
    {{-- <div class="col-div-8">
        <p class="p5">Adresse email</p>
        <span class="span1">{{ $candidat->nom}}</span>
    </div> --}}

    <h2 class="heading"> POSTE</h2>
    <hr class="hr2">
    <br>
    <div class="col-div-4">
        <p class="p5">Niveau d'étude</p>
        <span class="span1">{{ $candidat->niveauEtude}}</span>
    </div>
    <div class="col-div-8">
        <p class="p5">Diplome</p>
        <span class="span1">{{ $candidat->diplome}}</span>
    </div>
    <div class="clearfix"></div>
    <br>

    <div class="col-div-8">
        <p class="p5">les expériences</p>
        <span class="span1">{{ $candidat->descriptionExperience}}</span>
    </div>

    <br><br>
    <div style="text-align:center;">
        <br><br>
        <a href="{{ url('/recrutement/candidat/3') }}" class="btn btn-outline-darkg"><b>Retour</b></a>

        <a href="{{ url('/envoyer-email') }}" class="btn btn-outline-success">
            <b>Envoyer un email de confirmation</b>
        {{-- <a href="{{ url('/envoyer-email') }}" class="btn btn-outline-success">
            <b>Envoyer un email de confirmation</b> --}}
        </a>
         {{-- <a  class="btn btn-outline-success" > <b>Envoyer un email de confirmation</b> </a> --}}





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
  width: 40%;
  cursor: pointer;
   background: #008B8B;
  color: #fff;
}

.btn-outline-darkg
{
border: 2px solid 	#ffffff;
  border-radius:1.5rem;
  /* padding: 1%; */
  width: 30%;
  cursor: pointer;
  background:  #454545 ;
  color: #fff;
}



.btn-outline-dark
{
border: 2px solid 	#454545;
  border-radius:1.5rem;
  /* padding: 1%; */
  width: 30%;
  cursor: pointer;
  /* background:  #454545 ; */
  color: #000000;
}



.btn-outline-darkx
{
border: 2px solid 	#454545;
  border-radius:1.5rem;
  /* padding: 1%; */
  width: 30%;
  cursor: pointer;
  background:  #454545 ;
  color: #ffffff;
}


.profile-img-container {
    float: right;
    margin-top: -10px;
/* margin-left: 10px; */
}
.profile img{
  border-radius: 50%;}





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




.hr1{border: none; height: 1px; background: var(--white); margin-top: 3px;}
.p1{font-size: 11px;color: var(--white);letter-spacing: 1px;padding-top: 12px;}



h1{font-size: 50px; text-transform: uppercase; color: var(--black); line-height: 50px;}
h1 span{color: var(--one);}
.p3{letter-spacing: 4px;color: #54585d; font-weight: 500;}
.heading{text-transform: uppercase;font-weight: 500;color: var(--one);
letter-spacing: 1px; font-size: 20px;}
.hr2{border: none; height: 2px; background: var(--black); margin-top: 3px;}
.p5{font-weight: 700;color: var(--black);}
.span1{font-size: 16px;color: var(--black);}

</style>
@endsection

@section('js')

@if (session()->has('success'))
    <script>

Swal.fire({
                     position: 'top-end',
                     icon: 'success',
                     toast:true,
                     title: "Opération effectuée avec succès!",
                     showConfirmButton: false,
                     timer: 5000


             })
</script>
@endif

@endsection
