@extends('layouts.mainAdmin')

@section('content')
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12 main-chart">
        <!--CUSTOM CHART START -->
        
        <!--custom chart end-->
        <div class="row mt">
          <!-- SERVER STATUS PANELS -->
          <div class="col-md-4 col-sm-4 mb">
            <div class="grey-panel pn donut-chart">
              <div class="grey-header">
                <h5>Actualités</h5>
              </div>
              <canvas id="serverstatus01" height="120" width="120"></canvas>
              <script>
                var doughnutData = [{
                    value: 70,
                    color: "#FF6B6B"
                  },
                  {
                    value: 30,
                    color: "#fdfdfd"
                  }
                ];
                var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
              </script>
              <div class="row">
                <div class="col-sm-6 col-xs-6 goleft">
                  {{-- <p>Usage<br/>Increase:</p> --}}
                </div>
                <div class="col-sm-6 col-xs-6">
                  <h2>{{count($news)}}</h2>
                </div>
              </div>
            </div>
            <!-- /grey-panel -->
          </div>
          <!-- /col-md-4-->
          <div class="col-md-4 col-sm-4 mb">
            <div class="darkblue-panel pn">
              <div class="darkblue-header">
                <h5>Projets</h5>
              </div>
              <canvas id="serverstatus02" height="120" width="120"></canvas>
              <script>
                var doughnutData = [{
                    value: 60,
                    color: "#1c9ca7"
                  },
                  {
                    value: 40,
                    color: "#f68275"
                  }
                ];
                var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
              </script>
              {{-- <p>April 17, 2014</p> --}}
              <footer>
                <div class="pull-left">
                  <h5><i class="fa fa-hdd-o"></i> </h5>
                </div>
                <div class="pull-right">
                  <h2>{{count($projets)}}</h2>
                </div>
              </footer>
            </div>
            <!--  /darkblue panel -->
          </div>
          <!-- /col-md-4 -->
          <div class="col-md-4 col-sm-4 mb">
            <!-- REVENUE PANEL -->
            <div class="green-panel pn">
              <div class="green-header">
                <h5>Références</h5>
              </div>
              <div class="chart mt">
                
              </div>
              <p class="mt"><b><h2>{{count($references)}}</b><br/></p>
            </div>
          </div>
          <!-- /col-md-4 -->
        </div>
        <!-- /row -->
        
        <!-- /row -->
       
      </div>
      <!-- /col-lg-9 END SECTION MIDDLE -->
      <!-- **********************************************************************************************************************************************************
          RIGHT SIDEBAR CONTENT
          *********************************************************************************************************************************************************** -->
    </div>
    <!-- /row -->
  </section>
</section>
@endsection
