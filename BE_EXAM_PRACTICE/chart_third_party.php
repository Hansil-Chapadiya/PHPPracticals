<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart.js Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<h2>Sales Data Over Months</h2>
<canvas id="myChart" width="400" height="200"></canvas>

<script>
   var ctx = document.getElementById('myChart').getContext('2d');

   var myChart = new Chart(ctx, {
       type: 'bar',
       data: {
           labels: ['January', 'February', 'March', 'April', 'May', 'June'],
           datasets: [{
               label: 'Sales Over Months',
               data: [12, 19, 3, 5, 2, 3],
               backgroundColor: 'rgba(54, 162, 235, 0.2)',
               borderColor: 'rgba(54, 162, 235, 1)',
               borderWidth: 1
           }]
       },
       options: {
           scales: {
               y: {
                   beginAtZero: true
               }
           }
       }
   });
</script>

</body>
</html>
