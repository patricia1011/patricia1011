<?php
// Setting the Request URL
$url = "https://iptresources.ml/midterm/midterm_data.json";
// Initialize CURL Request
$jsonCURL = curl_init();
// Set the option on CURL that the request mnt return a value
curl_setopt ($jsonCURL,CURLOPT_RETURNTRANSFER,1);
 // Set the URL of the Request
curl_setopt ($jsonCURL,CURLOPT_URL,$url);
// Execute the CURL Request
$data = curl_exec ($jsonCURL);
// Convert 5ON String to PP Object
$array = json_decode($data);

?>


 <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-eder">
   <meta name="vievport" content="width device-width, initial-scale-1.8">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="index.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
   <title> Document</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <p style = "font-size:32pt;"> Statistical Report</p> 
                </div>
                <div class="col-md-3" id = "TR">
                    <p >Total Record</p>
                    <img src="total.png">
                    <?php 
                        echo count($array);
                    ?>
                </div>
                <div class="col-md-3"id = "TM">
                    <p class = "TM">Total Male</p>
                    <img src="boy.png">
                <?php 
                        $totalMale = 0;
                        foreach($array as $key => $value){
                            if($value->gender == 'Male'){
                                $totalMale++;
                            }
                        }
                        echo $totalMale;
                ?>
                </div>
                <div class="col-md-3" id = "FR">
                    <p class = "FR">Total Female</p>
                    <img src="girl.png">
                <?php 
                        $totalFemale = 0;
                        foreach($array as $key => $value){
                            if($value->gender == 'Female'){
                                $totalFemale++;
                            }
                        }
                        echo $totalFemale;
                ?>
                </div>
                 <?php 
                        
                $totalXS = 0;
                foreach($array as $key => $value){
                if($value->tshirt == 'XS'){
                $totalXS++;
            }
        }                      
    ?>
                 <?php         
                $totalS = 0;
                foreach($array as $key => $value){
                if($value->tshirt == 'S'){
                $totalS++;
            }
        }                      
    ?>
                 <?php 
                        
                $totalM = 0;
                foreach($array as $key => $value){
                if($value->tshirt == 'M'){
                $totalM++;
            }
        }                     
    ?>
                 <?php                        
                $totalL = 0;
                foreach($array as $key => $value){
                if($value->tshirt == 'L'){
                $totalL++;
            }
        }                     
    ?>
                <?php 
                        
                $totalXL = 0;
                foreach($array as $key => $value){
                if($value->tshirt == 'XL'){
                $totalXL++;
        }
    }
                      
    ?>

                <?php                         
                $total2XL = 0;
                foreach($array as $key => $value){
                if($value->tshirt == '2XL'){
                $total2XL++;
         }
     }
                      
     ?>
                
                <?php                        
                $total1XL = 0;
                foreach($array as $key => $value){
                if($value->tshirt == '1XL'){
                $total1XL++;
        }
    }      
     ?>
            <?php         
                $total3XL = 0;
                foreach($array as $key => $value){
                if($value->tshirt == '3XL'){
                $total3XL++;
         }
     }
                      
     ?>
                
                
                
                
                        

    </header>
    <div class="table-wrapper-scroll-y my-custom-scrollbar ">
        <table class = "table table - border" id = "report">
            <thead>
            <tr>
            <th>ID</th>
            <th>Image</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Language</th>
            <th>Shirt Size</th>
            <th>Marathon Category</th>
            </tr>
        </thead>
        
        <tbody>
        <?php
        foreach($array as $key => $value){
            echo'<tr>';
            echo '<td>' .$value->id. '</td>';
            echo '<td><img src="' .$value->image. '</td>';
            echo '<td>' .$value->first_name. '</td>';
            echo '<td>' .$value->last_name. '</td>';
            echo '<td>' .$value->email. '</td>';
            echo '<td>' .$value->gender. '</td>';
            echo '<td>' .$value->language. '</td>';
            echo '<td>' .$value->tshirt. '</td>';
            echo '<td>' .$value->marathon_category_km. '</td>';
            echo'</tr>' ;
        }

        
        ?>
        </tbody>

        </table>
    </div>
    <h1>Summary</h1>
    <table class = "table table-border" id = "summary" >
        <tbody >
            <tr>
                <td>Total Records</td>
               
               <td><?php 
                        echo count($array);
                    ?>
                </td>
            </tr>
            <tr>
                <td>Total Female</td>
                <?php echo '<td>'.$totalFemale.'</td>';?>
            </tr>
            <tr>
                <td>Total Male</td>
                <?php echo '<td>'.$totalMale.'</td>';?>
            </tr>
            <tr>
                <td>Total Shirt Size (Extra Small - XS)</td>
                <?php echo '<td>'.$totalXS.'</td>';?>
            </tr>
            <tr>
                <td>Total Shirt Size (Small - S)</td>
                <?php echo '<td>'.$totalS.'</td>';?>
            </tr>
            <tr>
                <td>Total Shirt Size (Meduim - M)</td>
                <?php echo '<td>'.$totalM.'</td>';?>
            </tr>
            <tr>
                <td>Total Shirt Size (Large - L)</td>
                <?php echo '<td>'.$totalL.'</td>';?>
            </tr>
            <tr>
                <td>Total Shirt Size (Extra Large - XL)</td>
                <?php echo '<td>'.$totalXL.'</td>';?>
            </tr>
            <tr>
                <td>Total Shirt Size (Extra Large 2 - 2XL)</td>
                <?php echo '<td>'.$total2XL.'</td>';?>
            </tr>
            <tr>
                <td>Total Shirt Size (Extra Large 1 - 3XL)</td>
                <?php echo '<td>'.$total3XL.'</td>';?>
            </tr>
        </tbody>
    </table>
    <h2>Statistical Graph</h2>

    <canvas id="myChart" style="width:50;max-width:300px;margin-left:738px;"></canvas>
    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["Total Record", "Total Male", "Total Female"];
var yValues = [55, 49, 44,];
var barColors = [
  "Yellow",
  "Blue",
  "Green",
  
  
];

new Chart("myChart", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
        backgroundColor: barColors,
        data: yValues
        }]
    },
    options: {
        legend: {display: false},
        title: {
        display: true,
        text: "Statistical Reports"
        }
    }
    });
    </script>
</body>
</html>