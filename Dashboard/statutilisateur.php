<?php  
 $connect = mysqli_connect("localhost:3307", "root", "", "evenement");  
 $query = "SELECT ecole, count(*) as number FROM utilisateur GROUP BY ecole";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Make Simple Pie Chart by Google Chart API with PHP Mysql</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['ecole', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["ecole"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Pourcentage des utilisateur par école',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
               
                <br />  
                <div id="columnchart_values" classe='1' style="width: 900px; height: 500px;margin-left:400px"></div> 
               
           </div>  
      </body>  
 </html>  