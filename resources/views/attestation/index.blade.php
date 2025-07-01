@extends("layouts.master")

  @section('content')

  <div class="row  p-4 ">

    <div class="col">
      <h3 class="page-title"><b>Gestion Des Requetes</b></h3>

      <ul class="breadcrumb">
          <li class="breadcrumb-user"><a href="/home">tableau de bord</a></li>
           <li class="breadcrumb-user active"> / gestion des requetes</li>

      </ul>  </div></div>

    <div class="card md-8 mx-auto">
        <h2>REQUETE AUPRES DE ORMVAL</h2>
    </div>

    <div class="card md-8 mx-auto">
        <h2>Gestion des Requetes</h2>
            <h6 class="lead">Veuillez sélectionner la requête que vous souhaitez traiter.</h6><br>

            <form action="{{ route('demandeDocument.store')}}" methode="post">
                @csrf
            {{-- <button class="btn">Continue</button> --}}
            <select   class='form-control' name="type">
                <option value="" > -------------------------------------------------------------------------------------------------------------------------------</option>
                <option value="Congé de maladie "  data-href="{{ route('attestation.listR') }}"   class="btn btn-outline-success"> Gestion de documents</option>

                <option value="Congés de maternité "   data-href="{{ route('reclamation.listR') }}"  class="btn btn-outline-success"> Gestion des réclamations</option>

                <option value="Congé sans solde "  data-href="{{ route('idee.listR') }}"  class="btn btn-outline-success" >Gestion de  Boite à idées</option>

            </select>
        </form>

    </div>









<style>
    .btn-outline-info
      {
        border: 2px solid 	#d4d4d4;
          border-radius:1.5rem;
          /* padding: 1%; */
          width: 40%;
          cursor: pointer;
          background: #008B8B;
          color: #fff;
      }

      .btn-outline-dark
      {
        border: 2px solid 	#ffffff;
          border-radius:1.5rem;
          /* padding: 1%; */
          width: 30%;
          cursor: pointer;
          background:  #454545 ;
          color: #fff;
      }

    /* btn appliquer... */
      .btn-blockk{
        border: 2px solid 	#ffffff;
        border-radius:1.5rem;
        width: 60%;
        cursor: pointer;
        background: #008B8B;
        color: #fff;

        text-align: center;
         display: block;
        margin: 0 auto;
      }

      .card-footer {
       display: flex;
      justify-content: center;
                    }
    /* form /card en general de edit */

                    .col-10{


    border: 1px solid 	#000000;
    border-radius:1.5rem;
    background: #e9e9e9 ;

         /* background: #e9e9e9 ; */

    }
    /* les champs de formulaire */
    .form-control{
        border: 2px solid 	#000000;

        border-radius:1.5rem;
        background: #008B8B;

                                }

         /*cars reinitialiser mot passe   et les roles*/
         .card{


    border: 2px solid #000000;
    background: #e9e9e9 ;

    border-radius:1.5rem;
    padding: 2%;
    width: 70%;
    /* background: #e9e9e9 ; */

    }
    .h2 {


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



<script>
    // INSERT JS HERE

// SOCIAL PANEL JS
const floating_btn = document.querySelector('.floating-btn');
const close_btn = document.querySelector('.close-btn');
const social_panel_container = document.querySelector('.social-panel-container');

floating_btn.addEventListener('click', () => {
    social_panel_container.classList.toggle('visible')
});

close_btn.addEventListener('click', () => {
    social_panel_container.classList.remove('visible')
});
</script>


