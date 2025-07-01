
<!DOCTYPE html>
                                                  {{-- //adminlte --}}
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>ORMVAL </title>


    <link rel="stylesheet" href="{{mix("css/app.css")}}" />

@livewireStyles

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
<x-topnav />


  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->



    <a href="/home" class="brand-link">
        <img src="{{asset('images/ORMVAL.png')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">

      <span class="brand-text font-weight-bold" style="font-size: 1.3em;"><b>ORM<span class="info-text">VAL</span></b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
              <img src="{{asset('images/user.png')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">

            </div>
            <div class="info">
            <a href="{{route('admin.profile')}}" class="d-block"><b>{{ Illuminate\Support\Facades\Auth::user()->prenom }} {{ Illuminate\Support\Facades\Auth::user()->name }}</b></a>

            </div>
            </div>

<x-menu />


            </div>

            </aside>


      <!-- Sidebar Menu -->




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            @yield("content")


            <style>
                .info-text {
                  color:  #008B8B;
                }
              </style>
        <!-- /.row -->

    <!-- /.content -->

  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->


  <!-- /.control-sidebar -->

  <!-- Main Footer -->

</div>
<!-- ./wrapper -->
<x-sidebar />


<footer class="main-footer">
    <!-- To the right -->

  </footer>

</div>



<!-- REQUIRED SCRIPTS -->
<script src="{{ mix('js/app.js') }}    "></script>



<!-- Styles -->


{{-- CUSTOM JS CODES --}}













<script src="sweetalert2.min.js"></script>
<script src="sweetalert.min.js"></script>


<script>
<script src="{{ asset('plugins/ijaboCropTool.min.js') }}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/locales-all.min.js">
</script>
  <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>



    @yield('js')





</script>

@livewireScripts


</body>
</html>

