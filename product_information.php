<?php

    //product description data from javascript file 
    $names = $_POST["name"];
    $sizes = $_POST["size"];
    
  
    
    //mysql connection variables
    $host = "awseb-e-entndptgsn-stack-awsebrdsdatabase-ykgywbp8tnwh.c4kd3wyzxsf5.us-east-1.rds.amazonaws.com";
    $database = "scenttopia_candles";
    $user  = "uts";
    $pass = "internet";
    
    //establish a connection
    $connection = mysqli_connect($host,$user,$pass,$database) or die("Could not connect to server");
   
    
    
    //select matched products from database
    $query_string = " select * from products WHERE (product_name = '$names') AND (unit_size = '$sizes')";
  
    $result = mysqli_query($connection, $query_string);//the result variable contains a mysqli_result object
    
    $num_rows = mysqli_num_rows($result); //returns the number of rows as a variable
    
    
    
    $resultss;
    if($num_rows > 0)
    {
    
       while($a_row = mysqli_fetch_assoc($result))
       {
          $resultss = "\n"."<tr>"."<td class = 'lefters'>"."Product Name "."</td>"."<td class = 'righters'>". $a_row["product_name"]."</td>"."</tr>".
           "\n"."<tr>"."<td class = 'lefters'>"."Size "."</td>"."<td class = 'righters' id = 'size_chosen'>". $a_row["unit_size"]."</td>"."</tr>".
           "\n"."<tr>"."<td class = 'lefters'>"."weight "."</td>"."<td class = 'righters'>". $a_row["unit_weight"]."</td>"."</tr>".
           "\n"."<tr>"."<td class = 'lefters'>"."Unit Price "."</td>"."<td class = 'righters'>"."$". $a_row["unit_price"]."</td>"."</tr>";

       }
    }
    
    
  
    mysqli_close($connection);
    
    echo $resultss;
   

  
    
    
?>