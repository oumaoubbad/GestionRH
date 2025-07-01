<form action="{{ route('annonce.store')}} " method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">


                    <h4 class="modal-title">{{ __('Créer Une Annonce') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>


                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


                </div>

                <div class="modal-body">
                    {{-- <div class="col-xs-12 col-sm-12 col-md-12"> --}}

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
                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" rows="3" placeholder="Description"></textarea>
                                  </div>







                                  <div class="card-footer">
                                    <a  href="/annonce/index " type="submit" class="btn btn-dark btn-outline-darkk"><b>Retour</b></a>

                                    <button class="btn btn-success btn-blockkkk"><b>Ajouter</b></button>


                                 </div>



                               </div>

                            </form>

                    </div>
                </div>
             </div>












</form>



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


/*
                 /* .swal2-popup {
  background-color: #006400 !important;
  color: #ffffff;
} */
  </style>

@section('js')

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
