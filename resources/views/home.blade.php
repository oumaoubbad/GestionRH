@extends('layouts.master')
@section('content')

<div class="row  p-9 pt-5">

    <div class="col-md-2">
        <div class="small-box bg-dark">
            <div class="inner">
                <h2> {{\App\Models\User::count()}}</h2>
                <p> <b> Employés</b> </p>
                <div class="icon">
                    <i class="fa fa-users "></i>
                    <a href="/habilitations/utilisateurs" classe="small-box-footer" >
                        <b>Plus d'infos </b>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="small-box bg-info">
            <div class="inner">
                <h2> {{\App\Models\Annonce::count()}}</h2>
                <p> <b>Recrutements</b> </p>
                <div class="icon">
                <i class="fas fa-newspaper" aria-hidden="true"></i>
                    <a href="/annonce/index" classe="small-box-footer" >
                        <b>Plus d'infos </b>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="small-box bg-dark">
            <div class="inner">
                <h2> {{\App\Models\Conge::count()}}</h2>
                <p> <b>Congés </b> </p>
                <div class="icon">
                <i class="fas fa-suitcase" aria-hidden="true"></i>
                    <a href="/conge/index " classe="small-box-footer" >
                       <b>Plus d'infos </b> {{-- <i class="fas fa-arrow-circle-right"></i> --}}
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-2">
        <div class="small-box bg-info">
            <div class="inner">
                <h2> {{\App\Models\Annonce::count()}}</h2>
                <p> <b>Annonces</b> </p>
                <div class="icon">
                <i class="fas fa-newspaper" aria-hidden="true"></i>
                    <a href="/annonce/index" classe="small-box-footer" >
                        <b>Plus d'infos </b>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="small-box bg-dark">
            <div class="inner">
                <h2> {{\App\Models\Reunion::count()}}</h2>
                <p> <b>Réunions </b> </p>
                <div class="icon">
                <i class="fas fa-calendar" aria-hidden="true"></i>
                    <a href="/reunion/index " classe="small-box-footer" >
                       <b>Plus d'infos </b> {{-- <i class="fas fa-arrow-circle-right"></i> --}}
                    </a>
                </div>
            </div>
        </div></div>


        <div class="col-md-2">
            <div class="small-box bg-info">
                <div class="inner">
                    <h2> {{\App\Models\Annonce::count()}}</h2>
                    <p> <b>Attestations</b> </p>
                    <div class="icon">
                    <i class="fas fa-newspaper" aria-hidden="true"></i>
                        <a href="/annonce/index" classe="small-box-footer" >
                            <b>Plus d'infos </b>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12 p-4">

             </div></div>

            <div class="row py-5" style="width: 90rem;  height: 400px;">
                <div class=" col-md-6">

            <div class="chart-container">
            <div class="pie-chart-container">
              <canvas id="pie-chart"></canvas>
            </div>

            </div>
            </div>

        <div class=" col-md-6">
        <div class="panel panel-default">
                    <div class="panel-heading"> <b>Employées inscrits chaque année</b></div>
                    <div class="panel-body">
                        <canvas id="canvas" height="300" width="600"></canvas>
                    </div>
                </div>
        </div>

        </div>
        @endsection



@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

@endsection
 @section('js')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script>
    $(function(){
        //get the pie chart canvas
        var cData = JSON.parse(`<?php echo $chart_data; ?>`);
        var ctx = $("#pie-chart");

        //pie chart data
        var data = {
          labels: cData.label,
          datasets: [
            {
              label: "Users Count",
              data: cData.data,
              backgroundColor: [
                  "#343a40",//dark
                  "#008B8B",//info
                "#2128f5",//bleu
                "#F4A460",
                "#2E8B57",
                "#1D7A46",
                "#CDA776",
              ],
              borderColor: [
                "#343a40",
                "#343a40",
                "#343a40",
                "#343a40",
                "#343a40",
                "#343a40",
                "#343a40",
              ],
              borderWidth: [2, 2, 2,2,2,2,2]
            }
          ]
        };

        //options
        var options = {
          responsive: true,
          title: {
            display: true,
            position: "top",
            text: "Nombre de congés créés au cours des 7 derniers jours",
            fontSize: 16,
            fontColor: "#343a40"
          },
          legend: {
            display: true,
            position: "bottom",
            labels: {
              fontColor: "#343a40",
              fontSize: 16
            }
          }
        };

        //create Pie Chart class object
        var chart1 = new Chart(ctx, {
          type: "pie",
          data: data,
          options: options
        });

    });

  </script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
    var year = <?php echo $year; ?>;
    var user = <?php echo $user; ?>;
    var barChartData = {
        labels: year,
        datasets: [{
            label: 'Employée',
            backgroundColor: "dark",
            data: user
        }]
    };

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: "#343a40",
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    display: true,
                    // text: 'Employées inscrits chaque année'
                           }
            }
        });
    };
</script>
@endsection





