@extends('layouts.master')
@section('content')



{{-- <div class="row  p-4 pt-5"> --}}
<div class="col">
<!-- Page Wrapper -->
<div class="page-wrapper">
<!-- Page Content -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-users-center">
            <div class="col"><br>
                <h3 class="page-title"><b>La présence des employés</b></h3>

                <ul class="breadcrumb">
                    <li class="breadcrumb-user"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-user active">Attendance</li>

                </ul>
            </div>
            <div class="card-tools  d-flex align-users-center ">
            {{-- <div class="col-auto float-right ml-auto"> --}}


                <div class="view-icons">
                    {{-- <a href="{{ route('all/employee/card') }}" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a> --}}
                    {{-- <a href="{{ route('all/employee/list') }}" class="list-view btn btn-link"><i class="fa fa-bars"></i></a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <!-- Search Filter -->
    {{-- <form action=" " method="POST">
        @csrf --}}
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3">
                {{-- <div class="form-group form-focus">
                    <input type="text" class="form-control floating" name="employee_id">
                    <label class="focus-label">Employee ID</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Employee Name</label>
                </div> --}}
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">

                      <input type="text" name="table_search" class="form-control float-right"      placeholder="Rechercher">
                    <label class="focus-label"> <br></br> </label>

                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <button type="sumit" class="btn btn-success btn-blockk">  <i class="fas fa-search"></i> </button>

            </div>
        </div>
    </form>
    <!-- Search Filter -->
    {{-- message --}}
    {{-- {!! Toastr::message() !!} --}}


         {{-- <div class="col-md-12"> --}}
            {{-- <div class="table-responsive"> --}}
                <table class="table table-striped custom-table datatable">
                    <thead>
                        <tr>
                            <th style="width:5%;"></th>
                            <th style="width:25%;">Employé</th>
                            <th style="width:20%;">Poste</th>
                            {{-- <th style="width:15%;">Telephone</th> --}}
                            {{-- <th style="width:15%;">Email</th> --}}

                            <th class="text-right no-sort" style="width:10%;" >Action</th>
                            {{-- <th class="text-nowrap"> </th>
                            <th>Role</th> --}}

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user )
                        <tr>

                                  <td>
                                      @if ($user->sexe == "Femme")
                                    <img src="{{asset ('images/mra.png')}}" width="28"/>
                                    @else
                                     <img src="{{asset ('images/rajil.png')}}" width="28"/>
                                    @endif
                                        </td>



                            <td><b> {{ $user->prenom }} {{ $user->name }}</b></td>
                            <td>{{$user->poste}}</td>
                            {{-- <td>{{$user->allRoleNames}}</td> --}}
                            {{-- <td>{{ $user->tel}}</td> --}}
                            {{-- <td>{{ $user->email}}</td> --}}

                            {{-- <td>{{ $user->join_date }}</td>
                            <td>{{ $users->role_name }}</td> --}}
                            <td  class="text-center">


                                <a href="/calendar/index" class="btn btn-outline-info"><i class="fas fa-user-clock"></i>
                                    <a  onclick="deleteAnnonce()"   href=" " class="btn btn-outline-dark"><i class="fas fa-trash-alt"></i></a>

                                </a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
               <div class="float-right">
                  {{$users->links()}}
               </div>

            </div>
            </div>
        </div>
    </div>
</div>
<style>



  .float-right
    {

        border-radius:1.5rem;
        border: 3px solid 	#d4d4d4;

    }


.btn-blockk
        {
            border: 2px solid 	#d4d4d4;
      border-radius:1.5rem;
      padding: 3%;
      width: 70%;
              cursor: pointer;
              background: #008B8B;
            color: #fff;
        }


        .table {
  width: 70%;
  height: 20%;
  margin: 5%;
  text-align: center;
}


.card-footer {
  display: flex; /* utilisez display:flex pour aligner les éléments au centre*/
  justify-content: center; /* utilisez justify-content:center pour centrer horizontalement*/
  align-items: center; /* utilisez align-items:center pour centrer verticalement*/
}

</style>

@endsection
