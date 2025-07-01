<form action="{{ route('annonce.update',$annonce->id)}}" method="post" enctype="multipart/form-data">
    {{-- {{ method_field('patch') }} --}}
    @csrf
    <div class="modal fade text-left" id="wahya{{$annonce->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Editer Cette Annonce') }}</h4>
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

                    {{-- @method('put') --}}
                    <div class="mb-3">
                        <label for="titre" class="form-label" >Titre</label>
                        <input type="text" class="form-control"  value="{{$annonce->titre}}" name="titre" placeholder="titre">
                      </div>

                      {{-- <div class="mb-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" >
                      </div> --}}


                      <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control"  name="description" rows="10" cols="30"> {{$annonce->description}}</textarea>
                    </div>

                      <div class="card-footer">
                        <a  href="/annonce/index " type="submit" class="btn btn-dark btn-outline-darkk"><b>Retour</b></a>

                        <button class="btn btn-success btn-blockkkk"><b>Editer</b></button>


                     </div>

                            </div>
                        </div>
                      </div>
                  </div>

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
                            margin-bottom: 2%;


                        }










.btn-blockkkk                      {
                        border: 2px solid 	#d4d4d4;
                          border-radius:1.5rem;
                          padding: 1%;
                          width: 20%;
                          cursor: pointer;
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
                     title:   "Opération effectuée avec succès!",
                     showConfirmButton: false,
                     timer: 5000
})
</script>
@endif

@endsection
