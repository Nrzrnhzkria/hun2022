@extends('layouts.admin-panel')

@section('title')
    Dashboard
@endsection

@section('content')

<div class="container">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <div class="row">
      
      <div class="col-md-4 pb-4">
        <div class="card border-0 shadow text-center" style="height: 125px">
          <h6 class="pt-4">Total Coupon</h6>
          <b class="display-6 pb-3">{{ number_format($totalcoupon) }}</b>
        </div>
      </div>

      <div class="col-md-4 pb-4">
        <div class="card border-0 shadow text-center" style="height: 125px">
          <h6 class="pt-4">Total Vendor</h6>
          <b class="display-6 pb-3">{{ number_format($totalvendor) }}</b>
        </div>
      </div>

      <div class="col-md-4 pb-4">
        <div class="card border-0 shadow text-center" style="height: 125px">
          <h6 class="pt-4">Total User</h6>
          <b class="display-6 pb-3">{{ number_format($totaluser) }}</b>
        </div>
      </div>
      
      {{-- <div class="col-md-4 pb-4">
        <div class="card border-0 shadow text-center" style="height: 125px">
          <h6 class="pt-4">Member</h6>
          <b class="display-6 pb-3">{{ number_format($member) }}</b>
        </div>
      </div>
      
      <div class="col-md-4 pb-4">
        <div class="card border-0 shadow text-center" style="height: 125px">
          <h6 class="pt-4">Non-Member</h6>
          <b class="display-6 pb-3">{{ number_format($nonmember) }}</b>
        </div>
      </div> --}}
      
    </div>

    <div class="row pb-4">
      <div class="col-md-8">
        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
      </div>
      <div class="col-md-4">
        <div class="card border-0 shadow text-center" style="height: 22rem">
          <h6 class="pt-4">HUN Membership</h6>
          <canvas id="memberChart" style="width:100%; max-width:600px; height:65%; max-height:800px;"></canvas>
          <div class="table-responsive p-3">
            <table class="table table-borderless table-sm">
              <tr>
                <td class="text-end">Members</td>
                <td style="width: 1rem">:</td>
                <td class="text-start">{{ $member }}</td>
              </tr>
              <tr>
                <td class="text-end">Non-members</td>
                <td style="width: 1rem">:</td>
                <td class="text-start">{{ $nonmember }}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>

    <h2>Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>text</td>
              <td>random</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>placeholder</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,007</td>
              <td>placeholder</td>
              <td>tabular</td>
              <td>information</td>
              <td>irrelevant</td>
            </tr>
            <tr>
              <td>1,008</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,009</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,010</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,011</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,012</td>
              <td>text</td>
              <td>placeholder</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,013</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>visual</td>
            </tr>
            <tr>
              <td>1,014</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,015</td>
              <td>random</td>
              <td>tabular</td>
              <td>information</td>
              <td>text</td>
            </tr>
          </tbody>
        </table>
    </div>
</div>

<script>
    var xValues = [50,60,70,80,90,100,110,120,130,140,150];
    var yValues = [7,8,8,9,9,9,10,11,14,14,15];
    
    new Chart("myChart", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{
          fill: false,
          lineTension: 0,
          backgroundColor: "rgba(0,0,255,1.0)",
          borderColor: "rgba(0,0,255,0.1)",
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        scales: {
          yAxes: [{ticks: {min: 6, max:16}}],
        }
      }
    });
</script>

{{-- Members chart --}}
<script>
  var xValues = ["Members", "Non-members"];
  var yValues = [{{ $member }}, {{ $nonmember }}];
  var barColors = [
    "#00aba9",
    "#b91d47"
  ];
  
  new Chart("memberChart", {
    type: "doughnut",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
    options: {
      title: {
        display: false,
        text: "HUN Membership"
      }
    }
  });
</script>

@endsection