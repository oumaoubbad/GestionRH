@extends('layouts.auth')
@section('container')






<!DOCTYPE html>
<!--www.codingflicks.com-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> </title>
	<link href="style.css" rel="stylesheet">
</head>
<body>

 	<div class="form-box"><br>
		<div class="header-text">
			ORM<span class="info-text">VAL</span> <br><br>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-3">
                  <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >

                  {{-- <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div> --}}
                </div>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  {{-- <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div> --}}
                </div><br>


                  <!-- /.col -->
                  <div class="col">
                    <button type="submit" class="btn btn-info btn-block">Se connecter</button>
                 {{-- /  <button type="submit" class="btn btn-info btn-block"  ><b>Retour</b></button> --}}

                  </div>
                  <!-- /.col -->
                </div>
              </form>

</body>
</html>



<style>
.info-text {
          color:  #008B8B;
        }

.btn-block
    {
      border: 2px solid     #ffffff;
        border-radius:1.5rem;
        padding: 2%;
        width: 40%;
        cursor: pointer;
        background: #008B8B;
        color: #fff;
    }
    .col {
display: flex;
justify-content: center;
}
/* les inputs */
    .form-control
    {
      border: 4px solid     #ffffff;
        border-radius:1.5rem;
        padding: 5%;

        cursor: pointer;

        color: #fff;
    }
/*
    .login-card-body{

border: 2px solid   #d4d4d4;
        border-radius:1.5rem;

background: #e9e9e9 ;

} */













    * {
	box-sizing: border-box;
}
body {
	font-family: poppins;
	font-size: 16px;
	color: #fff;
}
.form-box {
	background-color: rgba(0, 0, 0, 0.5);
	margin: auto auto;
	padding: 40px;
    border-radius:1.5rem;
	box-shadow: 0 0 10px #000;
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	width: 500px;
	height: 430px;
}
.form-box:before {
	background-image: url(" ");
	width: 100%;
	height: 100%;
	background-size: cover;
	content: "";
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	z-index: -1;
	display: block;
	filter: blur(2px);
}
.form-box .header-text {
	font-size: 32px;
	font-weight: 600;
	padding-bottom: 30px;
	text-align: center;
}

/*
.form-box input {
	margin: 10px 0px;
	border: none;
	padding: 10px;
	border-radius: 5px;
	width: 100%;
	font-size: 18px;
	font-family: poppins;
} */

/*
.form-box input[type=checkbox] {
	display: none;
}
.form-box label {
	position: relative;
	margin-left: 5px;
	margin-right: 10px;
	top: 5px;
	display: inline-block;
	width: 20px;
	height: 20px;
	cursor: pointer;
} */
/* .form-box label:before {
	content: "";
	display: inline-block;
	width: 20px;
	height: 20px;
    border-radius:1.5rem;
	position: absolute;
	left: 0;
	bottom: 1px;
	background-color: #ddd;
} */
/* .form-box input[type=checkbox]:checked+label:before {
	content: "\2713";
	font-size: 20px;
	color: #000;
	text-align: center;
	line-height: 20px;
} */


/* .form-box span {
	font-size: 14px;
} */



/* .form-box button {
	background-color: #454545 ; */
	/* color: #fff; */
	/* border: none; */
	/* border-radius: 5px; */
	/* cursor: pointer; */
	/* width: 100%; */
	/* font-size: 18px; */
	/* padding: 10px; */
	/* margin: 20px 0px; */




    /* border: 2px solid     #ffffff;
        border-radius:1.5rem;
        padding: 1%;
        width: 20%;
        cursor: pointer;
        background:  #454545 ;
        color: #fff;
        margin: 20px 0px;
        font-size: 15px;


} */

span a {
	color: #BBB;
}

</style>





















@endsection
