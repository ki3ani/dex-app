@extends('layout.layout')
@section('title','Dashboard - ')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $production[0]->sum  }} Litres</h3>

                                <p><b>Producted at {{ $production_time }} <br> {{ date('d-m-Y') }}</b></p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer"><i class="fas fa-balance-scale"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{  $daysproduction[0]->sum }} Litres</h3>

                                <p><b>Milked Today <br> {{ date('d-m-Y') }}</b></p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer"><i class="fas fa-balance-scale"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $herd }}</h3>

                                <p><b>Size of the herd being milked in our farm</b></p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer"><i class="fas fa-address-card"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $users }}</h3>

                                <p><b>Unique Users registered to use this platform in our farm</b></p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer"><i class="fas fas fa-user"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
           <!-- LINE CHART -->
           <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Line Chart</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block;" class="chartjs-render-monitor" width="468" height="250"></canvas>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
          <!-- BAR CHART -->
        
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@push('scripts')
<script src="{{  asset('/dist/js/demo.js') }}"></script>
<script src="{{  asset('/plugins/chart.js/Chart.min.js')  }}"></script>
<script type="text/javascript">
    $(function () {
    /* ChartJS
    
    //-------------
    //- LINE CHART -
    //-------------- */
    var areaChartOptions = {
  maintainAspectRatio : false,
  responsive : true,
  legend: {
    display: false
  },
  scales: {
    xAxes: [{
      gridLines : {
        display : false,
      }
    }],
    yAxes: [{
      gridLines : {
        display : true,
      }
    }]
  }
}
var labelsvalues =  {!! json_encode($labels) !!};
var values={!! json_encode($productionvalues,true) !!};
//values=JSON.stringify(labels);
var values1=[];
var values2=[];
var values3=[];
var values4=[];
var values5=[];
var labels=[];

for(var x=0;x<values.length;x++){
  labels.push(labelsvalues[x].production_date)
for(var y =0; y < values[x].length; y++){
  switch(x){
    case 0:
      values1.push(values[x][y].amount);

      break;
    case 1:
      values2.push(values[x][y].amount);

      break;
    case 2:
      values3.push(values[x][y].amount);
      break;
    case 3:
      values4.push(values[x][y].amount);
      break;
    case 4:
      values5.push(values[x][y].amount);
  }

}
}
console.log(labels);


var areaChartData = {
labels  : labels,
datasets: [
    {
      label               : labels[0],
      backgroundColor     : 'rgba(255,255,255,0.8)',
      borderColor         : 'rgba(60,141,188,0.8)',
      pointRadius         : 5,
      pointColor          : 'rgba(60,141,188,1)',
      pointStrokeColor    : 'rgba(60,141,188,1)',
      pointHighlightFill  : '#0ff',
      pointHighlightStroke: 'rgba(60,141,188,1)',
      lineTension: 0.4,
      data                : values1
    },
    {
      label               : labels[1],
      borderColor         : 'rgba(0, 214, 10, 0.8)',
      pointRadius         : 5,
      pointColor          : 'rgba(0, 214, 10, 1)',
      pointStrokeColor    : 'rgba(0, 214, 10, 1)',
      pointHighlightFill  : '#f0f',
      pointHighlightStroke: 'rgba(0,220,220,1)',
      lineTension: 0.4,
      data                : values2
    },{
      label               : labels[2],
      backgroundColor     : 'rgba(255,255,255, 1)',
      borderColor         : 'rgba(220,0,0, 1)',
      pointRadius         : 5,
      pointColor          : 'rgba(220,0,0, 1)',
      pointStrokeColor    : 'rgba(220,0,0, 1)',
      pointHighlightFill  : '#ff0',
      pointHighlightStroke: 'rgba(220,0,0,1)',
      lineTension: 0.4,
      data                : values3
    },{
      label               : labels[3],
      backgroundColor     : 'rgba(255,255,255, 1)',
      borderColor         : 'rgba(20,50,200, 1)',
      pointRadius         : 5,
      pointColor          : 'rgba(20,50,200, 1)',
      pointStrokeColor    : 'rgba(20,50,200, 1)',
      pointHighlightFill  : '#ff0',
      pointHighlightStroke: 'rgba(20,50,200,1)',
      lineTension: 0.4,
      data                : values4
    },{
      label               : labels[4],
      backgroundColor     : 'rgba(255,255,255, 1)',
      borderColor         : 'rgba(220,0,255, 1)',
      pointRadius         : 5,
      pointColor          : 'rgba(220,0,255, 1)',
      pointStrokeColor    : 'rgba(220,0,255, 1)',
      pointHighlightFill  : '#ff0',
      pointHighlightStroke: 'rgba(220,0,255,1)',
      lineTension: 0.4,
      data                : values5
    }
  ]
}

    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartData.datasets[2].fill = false;
    lineChartData.datasets[3].fill = false;
    lineChartData.datasets[4].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: lineChartData,
        options: lineChartOptions
    })

    
    })

    
</script>
@endpush

@push('styles')
<style type="text/css">/* Chart.js */
    @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
</style>
@endpush