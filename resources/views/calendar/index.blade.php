@extends('layouts.master')
@section('content')

 <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <link rel="stylesheet" href="{{mix('css/app.css')}}" />
            <meta name="csrf-token" content="{{ csrf_token() }}" />

          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <p class="lead">Ajouter un événement</p>
          <input type="text" class="form-control" id="title">
          <span id="titleError" class="text-danger"></span>
        </div>
        <div class="modal-footer">
            <button type="button" id="saveBtn" class="btn btn-success"><b>OK</b></button>
          <button type="button" class="btn btn-dark" data-bs-dismiss="modal"><b>Annuler</b></button>
        </div>
      </div>
    </div>
  </div><br>

  {{-- <div class="card-tools  d-flex align-users-center "> --}}
    {{-- <div class="col-auto float-right ml-auto"> --}}
        {{-- <a  class="btn" href="/attendances "    ><i class="fas fa-arrow-left"></i><b>Retour</b></a> --}}
        {{-- <a  href="/attendances " type="submit" class="btn btn-outline-dark"><b><i class="fas fa-arrow-left"></i></b></a> --}}




         <div class="card border-dark my-5">
                <h3 class="text-center mt-5"> <strong> </strong></h3>

                    <div id="calendar">

                    </div>
         </div>

         {{-- <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus"> --}}

         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />

         <style>
            .btn-outline-dark
                                   {
                                       border:none;
                                       /* border-radius:1.5rem; */
                                       /* padding: 2%; */
                                       /* width: 20%; */
                                       cursor: pointer;
                                       /* background: linear-gradient(to right, rgb(45, 45, 46), rgba(100, 94, 104, 0.459)); */
                                       color: #000000;
                                       /* margin: auto;
                                    text-align: center; */
                                   }
       </style>




 @endsection


  @section('js')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  <script src='fullcalendar/fullcalendar.js'></script>
  <script src='fullcalendar/lang-all.js'></script>

 <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var booking = @json($events);

            $('#calendar').fullCalendar({
                header: {

                    left: 'prev, next today',
                    center: 'title',
                    right: 'month, agendaWeek, agendaDay',
                },

                events: booking,
                selectable:true,
        selectHelper: true,
        select:function(start, end, allDay) {
                    $('#bookingModal').modal('toggle');

                    $('#saveBtn').click(function() {
                        var title = $('#title').val();
                        var start_date = moment(start).format('YYYY-MM-DD');
                        var end_date = moment(end).format('YYYY-MM-DD');

                        $.ajax({
                            url:"{{ route('calendar.store') }}",
                            type:"POST",
                            dataType:'json',
                            data:{ title, start_date, end_date  },
                            success:function(response)
                            {
                                $('#bookingModal').modal('hide')
                                $('#calendar').fullCalendar('renderEvent', {
                                    'title': response.title,
                                    'start' : response.start,
                                    'end'  : response.end,
                                    'color' : response.color
                                });

                            },
                            error:function(error)
                            {
                                if(error.responseJSON.errors) {
                                    $('#titleError').html(error.responseJSON.errors.title);
                                }
                            },
                        });
                    });
                },
                editable: true,
                eventDrop: function(event) {
                    var id = event.id;
                    var start_date = moment(event.start).format('YYYY-MM-DD');
                    var end_date = moment(event.end).format('YYYY-MM-DD');

                    $.ajax({
                            url:"{{ route('calendar.update', '') }}" +'/'+ id,
                            type:"PATCH",
                            dataType:'json',
                            data:{ start_date, end_date  },
                            success:function(response)
                            {
                                swal("Good job!", "Event Updated!", "success");
                            },
                            error:function(error)
                            {
                                console.log(error)
                            },
                        });
                },
                eventClick: function(event){
                    var id = event.id;
                        Swal.fire({
                        title: 'Êtes-vous sûr de continuer?',
                        text: "Vous êtes sur le point de supprimer l'evenement. Voulez-vous continuer?",
                        icon: 'info',
                        showCancelButton: true,
                        confirmButtonColor: '#1cccd9',
                        cancelButtonColor: 'secondary',
                        confirmButtonText: 'Continuer',
                        cancelButtonText: 'Annuler'
                        }).then((result) => {
                        if (result.isConfirmed) {
                             $.ajax({
                            url:"{{ route('calendar.destroy', '') }}" +'/'+ id,
                            type:"DELETE",
                            dataType:'json',
                            success:function(response)
                            {
                                $('#calendar').fullCalendar('removeEvents', response);
                                // swal("Good job!", "Event Deleted!", "success");
                            },
                            error:function(error)
                            {
                                console.log(error)
                            },
                        });
                            Swal.fire(
                           { position: 'top-end',
                                    icon: 'success',
                                    title: 'Evenement est supprimer avec success',
                                    showConfirmButton: false,
                                    timer: 3000}
                            )

                        }
})

                },

            });


            $("#bookingModal").on("hidden.bs.modal", function () {
                $('#saveBtn').unbind();
            });




        });








</script>


 @endsection
