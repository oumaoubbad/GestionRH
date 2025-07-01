




<form action="{{ route('reunion.store')}} " method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="modal fade text-left" id="ReunionCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">{{ __('Créer Une Reunion') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>
                    </button>

                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                </div>

                <div class="modal-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif




                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Titre</label>
                        <input type="text" class="form-control" name="titre" placeholder="title">
                      </div>





                      <div class="mb-3">
                        <label for="participants" class="form-label">Participants</label>
                        <input type="text" class="form-control" name="participants" placeholder="ajouter Adresse e-mail des participants">
                    </div>




                      <div class="mb-3">

                        <label for="exampleFormControlTextarea1" class="form-label" >Type</label>
                        <select   class='form-control' name="type">

                                              <option value=""> -----------</option>
                                              <option value="reunion externe"> reunion externe</option>
                                              <option value="reunion interne"> reunion interne</option>

                                          </select>

                      </div>

                      {{-- <div class="mb-3">

                        <label for="exampleFormControlTextarea1" class="form-label" >Lieu</label>
                        <select   class='form-control' name="lieu">

                                              <option value=""> -----------</option>
                                              <option value="salle A">salle A</option>
                                              <option value="salle B"> salle B  </option>
                                              <option value="salle C"> salle C  </option>

                                          </select>

                      </div> --}}
                      <div class="d-flex">
                        <div class="form-group flex-grow-1 mr-2">

                            <div class="form-group">
                                <label for="date_reunions" class="form-label">Date de reunion</label>
                                <input type="date" class="form-control" name="date_reunions"  >
                            </div>
                        </div>

                      <div class="form-group flex-grow-1">
                        <label for="heure_reunions" class="form-label">Heure de réunion</label>
<input type="time" id="heure_reunions" name="heure_reunions" class="form-control">
</div></div>

                      <div class="card-footer">
                        <a  href="/reunion/index " type="submit" class="btn btn-dark btn-outline-darkk"><b>Retour</b></a>

                        <button class="btn btn-success btn-blockkkk"><b>Ajouter</b></button>


                     </div>



                   </div>

                </form>

        </div>
    </div>
 </div>




<style>
    .card-footer {
display: flex;
justify-content: center;
}



      .card{

          border: 1px solid 	#d4d4d4;
                  border-radius:1.5rem;
      /* padding: 1%; */
      /* width: 20%; */
      /* cursor: pointer; */
      /* background: #028329fb; */
      background: #e9e9e9 ;
      /* color: #fff; */
  }

  .form-control{
      border-radius:1.5rem;
      border: 3px solid #d4d4d4;
  }
      /* .col-10{


       border: 1px solid #000000;
       border-radius:1.5rem;
 } */



  /* .card-title{
      color: #031307fb;
      text-align: center;
      font-weight: bold;
      border-radius:1.5rem;
  } */



  /* .form-content
  {
      padding: 5%;
      border: 2px solid #1e1f1f;
      margin-bottom: 2%;
  } */

  .btn-blockkkk
  {
    border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      padding: 1%;
      width: 20%;
      cursor: pointer;
      /* background: #028329fb; */
      background: #008B8B;
      color: #fff;
  }

  .btn-outline-darkk
  {
    border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      padding: 1%;
      width: 20%;
      cursor: pointer;
      background:  #454545 ;
      color: #fff;
  }

  </style>

@section('js')
<script>

</script>
@if (session()->has('successs'))
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
