@extends('layouts.master')
@section('content')

<br>


 <div class="row my-4">
    <div class="col-md-8 mx-auto">

                @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                        <b>Poster une annonce</b>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('annonce.store')}}" methode="post">
                @csrf
                    <div class="mb-3">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Titre</label>
                        <input type="text" class="form-control" name="titre" placeholder="title">
                      </div>

                    {{-- <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Inserer une image</label>
                        <input type="file" class="form-control" name="image" >
                      </div> --}}



                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3" placeholder="Description"></textarea>
                      </div>






{{--   <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea id="description" name="description" class="form-control"></textarea>
                            </div>
                        </div>
                    </div> --}}


                      <div class="card-footer">
                        <a  href="/annonce/index " type="submit" class="btn btn-outline-dark"><b>Retour</b></a>

                        <button class="btn btn-outline-success"><b>Valider</b></button>


                     </div>



                   </div>

                </form>

        </div>
    </div>
 </div>


 {{-- <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
 <script type="text/javascript">
     $(document).ready(function() {
        $('.ckeditor').ckeditor();
     });
 </script> --}}






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

  .btn-outline-success
  {
    border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      padding: 1%;
      width: 20%;
      cursor: pointer;
      /* background: #028329fb; */
      background: #006400;
      color: #fff;
  }

  .btn-outline-dark
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
@endsection















{{-- @section('js')
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .then(editor => {
            document.querySelector('#submit').addEventListener('click',()=>{
                let description =$('#description').data('description');
                eval(description).set('state.description',editor.getData());
            });
        })
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection --}}

