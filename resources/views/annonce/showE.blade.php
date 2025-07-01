@extends("layouts.master")

@section('content')



<div class="row  p-4 ">

  <div class="col">
      <h3 class="page-title"><b>Détails De l'Annonce</b></h3>

      <ul class="breadcrumb">
          {{-- <li class="breadcrumb-user"><a href="/home">tableau de bord</a></li> --}}

          <li class="breadcrumb-user"><a href="/annonce/indexE">liste des annonces</a></li>
          <li class="breadcrumb-user active"> / détails  </li>

      </ul>

  </div></div>


  

    
<div class="courses-container ml-5">
  <div class="course">
     <div class="course-preview"><br>
         <h6> {{ $annonce->created_at}}</h6>
          <a href="#">  </a>
         {{-- <i class="fas fa-chevron-right"></i> --}}
     </div>
     <div class="course-info">
         <div class="progress-container">
             <div class="progress">
             </div>
             <span class="progress-text">

             </span>
         </div>
         <h6></h6>
         <h2>{{$annonce->titre}}</h2>             

         <h6>     {{ $annonce->description}}
          .</h6><br>
          <a  href="{{route('annonce.indexE')}}" type="submit" class="btn btn-outline-dark"><b>Retour</b></a>        </div>

        

 </div>
</div>
 


<style>


.btn {
    background-color: #008B8B;
    border: 0;
    border-radius: 50px;
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
    color: #fff;
    /* font-size: 16px; */
    /* padding: 10px 20px; */
    /* position: left; */
    /* bottom: 50px; */
    /* right: 30px; */
    /* letter-spacing: 1px; */
} 
.course-preview {
        background-color: #008B8B;
        color: #fff;
        padding: 30px;
        max-width: 250px;
    }

    .course-preview a {
        color: #fff;
        display: inline-block;
        font-size: 12px;
        opacity: 0.6;
        margin-top: 30px;
        text-decoration: none;
    }

    .courses-container {

    }

    .course {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
        display: flex;
        max-width: 100%;
        margin: 20px;
        overflow: hidden;
        width: 700px;
    }

    .course h6 {
        opacity: 0.6;
        margin: 0;
        letter-spacing: 1px;
        /* text-transform: uppercase; */
    }

    .course h7 {
        opacity: 0.1;
        margin: 0;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .course h2 {
        letter-spacing: 1px;
        margin: 10px 0;
    }


    .course-info {
        padding: 30px;
        position: relative;
        width: 100%;
    }

    .progress-container {
        position: absolute;
        top: 30px;
        right: 30px;
        text-align: right;
        width: 150px;
    }

    .progress {
        background-color: #ddd;
        border-radius: 3px;
        height: 5px;
        width: 100%;
    }

    .progress::after {
        border-radius: 3px;
        background-color: #008B8B;
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 5px;
        width: 66%;
    }

    .progress-text {
        font-size: 10px;
        opacity: 0.6;
        letter-spacing: 1px;
    }

    .form-control {
    background-color: #008B8B;#008B8B
    border: 0;
    border-radius: 50px;
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
    color: #fff;
    /* font-size: 16px; */
    /* padding: 10px 20px; */
    /* position: left; */
    /* bottom: 50px; */
    /* right: 30px; */
    /* letter-spacing: 1px; */
}
.course h7 {
        opacity: 0.1;
        margin: 0;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

</style>
@endsection

@section('js')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
$('select[name="type"]').change(function() {
  var selectedOption = $('option:selected', this);
  if (selectedOption.val() === 'demande_document') {
    $('#demande-document-modal').modal('show');
  } else {
    var url = selectedOption.attr('data-href');
    if (url) {
      window.location.href = url;
    }
  }
});

$('#demande-document-form').submit(function(event) {
  event.preventDefault();
  var url = $(this).attr('action');
  window.location.href = url;
});
});
</script>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
$('select[name="type"]').change(function() {
  var selectedOption = $('option:selected', this);
  if (selectedOption.val() === 'reclamation') {
    $('#reclamation-modal').modal('show');
  } else {
    var url = selectedOption.attr('data-href');
    if (url) {
      window.location.href = url;
    }
  }
});

$('#reclamation-form').submit(function(event) {
  event.preventDefault();
  var url = $(this).attr('action');
  window.location.href = url;
});
});
</script>





<script>

$(document).ready(function() {
$('select[name="type"]').change(function() {
  var selectedOption = $('option:selected', this);
  if (selectedOption.val() === 'idee') {
    $('#idee-modal').modal('show');
  } else {
    var url = selectedOption.attr('data-href');
    if (url) {
      window.location.href = url;
    }
  }
});

$('#idee-form').submit(function(event) {
  event.preventDefault();
  var url = $(this).attr('action');
  window.location.href = url;
});
});

</script>
@endsection


