<?php
include "connection.php";
?>
<html>
<head>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<?php   
        $conn= new mysqli('localhost','root','','saving_credit');

$query=mysqli_query($conn,"select  firstname, age
                        from registration" ) ;
                       
 foreach($query as $data){
    $fname[]=$data['firstname'];
    $age[]=$data['age'];
 }    
                    ?>
              <div style="width:900px;height:1000px; padding:200px">
                <canvas id="myChart"  style=></canvas>
              </div>

    <script>
        const labels = <?php  echo json_encode($fname)?>;
        const data = {
    labels: labels,
    datasets: [{
    label: 'My First Dataset',
    data: <?php  echo json_encode($age)?>,
    backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
    borderWidth: 1
    
  }]
};
const config = {
  type: 'bar',
  data: data,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  },
};
                const myChart = new Chart(
                  document.getElementById('myChart'),
                  config
                );
              </script>




</body>


</html>