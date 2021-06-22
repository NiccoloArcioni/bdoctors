@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-around flex-wrap">
  <div class="card">
    <canvas id="messaggi-mese" width="200" height="200"></canvas>
  </div>
  <div class="card">
    <canvas id="messaggi-anno" width="200" height="200"></canvas>
  </div>
  <div class="card">
    <canvas id="recensioni-mese" width="200" height="200"></canvas>
  </div>
  <div class="card">
    <canvas id="recensioni-anno" width="200" height="200"></canvas>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script>
  var data = {!! json_encode($messFirst) !!};
  var labels = {!! json_encode($labelFirst) !!};
  var ctx = document.getElementById('messaggi-mese');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: labels,
          datasets: [{
            label: 'Messaggi al mese',
            data: data,
            fill: false,
            borderColor: 'rgba(0, 195, 165, 1)',
            backgroundColor: 'rgba(70, 204, 183)',
            borderWidth: 2
          }]
      }
  });
  </script>
  <script>
  var data = {!! json_encode($messSecond) !!};
  var labels = {!! json_encode($labelSecond) !!};
  var ctx = document.getElementById('messaggi-anno');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: labels,
          datasets: [{
            label: 'Messaggi per anno',
            data: data,
            fill: false,
            borderColor: 'rgba(0, 195, 165, 1)',
            backgroundColor: 'rgba(70, 204, 183)',
            borderWidth: 2
          }]
      }
  });
  </script>
  <script>
  var data = {!! json_encode($revFirst) !!};
  var labels = {!! json_encode($labelFirst) !!};
  var ctx = document.getElementById('recensioni-mese');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: labels,
          datasets: [{
            label: 'Recensioni al mese',
            data: data,
            backgroundColor: 'rgba(12, 186, 239, 1)',
            borderColor: 'rgba(22, 138, 173, 1)',
            borderWidth: 1
          }]
      }
  });
  </script>
  <script>
  var data = {!! json_encode($revSecond) !!};
  var labels = {!! json_encode($labelSecond) !!};
  var ctx = document.getElementById('recensioni-anno');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: labels,
          datasets: [{
            label: 'Recensioni per anno',
            data: data,
            backgroundColor: 'rgba(12, 186, 239, 1)',
            borderColor: 'rgba(22, 138, 173, 1)',
            borderWidth: 1
          }]
      }
  });
  </script>

@endsection
