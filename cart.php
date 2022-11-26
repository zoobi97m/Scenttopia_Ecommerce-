
<!-- this is the document for the cart section -->
<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


        <title> Cart</title>
        <link rel="stylesheet" href="main_styles.css" type="text/css" />
    </head>
    <body id = "main_page">
        
        <!-- header section -->
    <header>
        <section class = header>
           
            <img id = "home_page" class = "header_icons_2" src = "candle_products/home_page.svg" alt = "Failed to load image" align = 'right' ></img>
            <img id = "home_page" class = "header_icons_2" src = "candle_products/email.svg" alt = "Failed to load image" align = 'right' ></img>
            
                <!--<img id = "logo" src = "hugo.svg" alt = "Failed to load image" align = 'left' > -->
        </section>
       
    </header>
    <!-- end of header section -->
        
   
    <div class = spacer_div ></div> <!-- object created for padding -->
  
    
    <div class = "main_section_product" >
    <section class = "product_description">
        
        
    <?php
        session_start();
        //variables to connect to database
        $host = "awseb-e-entndptgsn-stack-awsebrdsdatabase-ykgywbp8tnwh.c4kd3wyzxsf5.us-east-1.rds.amazonaws.com";
        $database = "scenttopia_candles";
        $user  = "uts";
        $pass = "internet";
            
    ?>
    
    
    
    
    
    <?php
            //check if it is a first time attempt, if not register the request in the PHPSESSID cookie 
           
            
                /*
                if($_SESSION['refresher'])
                {
                    header("Refresh:0; url=cart.php");
                    header( "Refresh: 0;" );
                    
                    header('Location: https://d0534406c38549afa294587cc6689066.vfs.cloud9.us-east-1.amazonaws.com/cart.php');
                    header('Location: cart.php');
                    $_SESSION['refresher'] = false;
                    
                      
                }*/
    

        //product description data from javascript file 
        $names = $_SESSION['name'];
        $sizes = $_SESSION['size'];
    
        $amount = $_SESSION['amounts'];
        $identifier = $_SESSION['name'];
       
        $connection = mysqli_connect($host,$user,$pass,$database) or die("Could not connect to server");

        $query_string = " select * from products WHERE (product_name = '$names') AND (unit_size = '$sizes')";

    
        $result = mysqli_query($connection, $query_string);//the result variable contains a mysqli_result object
    
        $num_rows = mysqli_num_rows($result); //returns the number of rows as a variable
        
     ?>
     
     
     <!-- 
     <?php
        
            if(empty($_SESSION["table_data"])  )//first time
            {
                $_SESSION['tester'] = "first ";
               $_SESSION['counter'] = 0;
             //  $_SESSION['checkout_default'] = "\n"."<tr>"."<td class = 'top_checkout'>"."Product Name"."</td>"."<td class = 'top_checkout'>"."Unit Price"."</td>"."<td class = 'top_checkout' >"."Amount"."</td>"."</tr>";//checkout table, not cart
               //$_SESSION['default'] = "\n"."<tr>"."<td class = 'top'>"."Product Name"."</td>"."<td class = 'top'>"."Unit Price"."</td>"."<td class = 'top'>"."Unit quantity"."</td>"."<td class = 'top'>"."Unit stock"."</td>"."<td class = 'top' >"."Amount"."</td>"."</tr>";//cart table, unnecessary
               $_SESSION['total_price'] = 0;
                if($num_rows > 0)
                {
        
                   while($a_row = mysqli_fetch_assoc($result))
                   {
                      // $_SESSION['latter_sub_checkout'][ $_SESSION['counter']]= "\n"."<tr>"."<td class = 'bottom_checkout'>". $a_row["product_name"]."</td>"."<td class = 'bottom_checkout'>"."$". $a_row["unit_price"]."</td>"."<td class = 'bottom_checkout' >";//for checkout, not cart
        
                        $_SESSION['unit_price'][ $_SESSION['counter']] = $a_row["unit_price"];
                        $_SESSION['latter_sub'][ $_SESSION['counter']]= "\n"."<tr>"."<td class = 'bottom'>". $a_row["product_name"]."</td>"."<td class = 'bottom'>". $a_row["unit_size"]."</td>"."<td class = 'bottom'>". $a_row["unit_weight"]."</td>"."<td class = 'bottom'>". $_SESSION['scent']."</td>"."<td class = 'bottom'>". "$".$a_row["unit_price"]."</td>"."<td class = 'bottom' id = $identifier>";
                        $_SESSION['amount_sub'][ $_SESSION['counter']] = $amount."</td>"."</tr>";
                   }
        
        
                }
        
        
                $_SESSION["table_data"] = $_SESSION['latter_sub'][ $_SESSION['counter']].$_SESSION['amount_sub'][ $_SESSION['counter']]; //final row to be added
        
        
                
                $_SESSION['pid'][$_SESSION['counter']]= $identifier;// first elelemt in the pid array, which is used to recognise same input 
                
                $_SESSION['amount'][$_SESSION['counter']] = $amount;//string
                $_SESSION['sizer'][$_SESSION['counter']] = $sizes;//string
                
                
                $_SESSION['total_price'] = $_SESSION['amount'][$_SESSION['counter']] * $_SESSION['unit_price'][ $_SESSION['counter']];
                //$_SESSION["table_data_checkout"] = $_SESSION['checkout_default'].$_SESSION['latter_sub_checkout'][ $_SESSION['counter']].$_SESSION['amount_sub'][ $_SESSION['counter']]; check out data, furure use
        
            }
            
            
            
            else
        
            {
                
                for($i=0;$i<=$_SESSION['counter'];$i++)
                {
        
        
        
                        if( $identifier == $_SESSION['pid'][$i] && $sizes == $_SESSION['sizer'][$i])//if he's ordering the same product
                        {
                              $_SESSION['tester'] = "second";
                            $t = $_SESSION['amount'][$i];
                            $s =  $_SESSION['pid'][$i];
        
                            $_SESSION['total_price'] = $_SESSION['total_price'] +($amount * $_SESSION['unit_price'][ $_SESSION['counter']]);
        
        
                            $temp = $_SESSION['amount'][$i] +  $amount;
        
                            $_SESSION['amount'][$i] = $temp;
                            //$_SESSION['pid'] [$i]= $piid[1];//string
                            $_SESSION['amount_sub'][$i]= str_replace("$t","$temp",$_SESSION['amount_sub'][$i]);
                            
                            
                            //echo "<h3 id = 'unit_amount' >$temp</h3>";
                            //echo "<h6 id = 'unit_identification' >$s</h6>";
        
        
        
                              unset($_SESSION["table_data"]);
                                //$_SESSION["table_data"] = $_SESSION['default'];//may not be necessary
                                
                                //unset($_SESSION["table_data_checkout"]);//checkout data, will  be used later
                                //$_SESSION["table_data_checkout"] = $_SESSION['checkout_default'];//checkout data, will  be used later
        
                            for($j=0;$j<=$_SESSION['counter']+1;$j++)
                            {
                                $_SESSION["table_data"] = $_SESSION["table_data"]. $_SESSION['latter_sub'][$j].$_SESSION['amount_sub'][$j];//may need to delete $_SESSION["table_data"]
                                
                               // $_SESSION["table_data_checkout"] = $_SESSION["table_data_checkout"].$_SESSION['latter_sub_checkout'][ $j].$_SESSION['amount_sub'][$j];
        
        
                            }
                           break;
        
                        }
                        
                        else//if hes ordering a different product
                        {
                              $_SESSION['tester'] = "third ";
                            if($i == $_SESSION['counter'])//none so far, make a new row and record it
                            {
                                $index = $_SESSION['counter']+1;
                                $_SESSION['pid'] [$i+1] = $identifier;//string
                                $_SESSION['amount'][$i+1] = $amount;//string
                                $_SESSION['sizer'][$i+1] = $sizes;//string

                                $holder = $identifier;//potential trouble
                                
                                while($a_row = mysqli_fetch_assoc($result))
                                {
                                    //$_SESSION['latter_sub_checkout'][ $i+1]= "\n"."<tr>"."<td class = 'bottom_checkout'>". $a_row["product_name"]."</td>"."<td class = 'bottom_checkout'>"."$". $a_row["unit_price"]."</td>"."<td class = 'bottom_checkout' id = $a>";
                                    $_SESSION['unit_price'][ $i+1] = $a_row["unit_price"];
                                    $_SESSION['latter_sub'][$i+1] = "\n"."<tr>"."<td class = 'bottom'>". $a_row["product_name"]."</td>"."<td class = 'bottom'>". $a_row["unit_size"]."</td>"."<td class = 'bottom'>". $a_row["unit_weight"]."</td>"."<td class = 'bottom'>". $_SESSION['scent']."</td>"."<td class = 'bottom'>". "$".$a_row["unit_price"]."</td>"."<td class = 'bottom' id = $holder>";
                                    $_SESSION['amount_sub'][$i+1] = $amount."</td>"."</tr>";
                                }
                                $_SESSION['total_price'] = $_SESSION['total_price'] +($amount * $_SESSION['unit_price'][ $i+1]);
                                
        
                                unset($_SESSION["table_data"]);
                              //  unset($_SESSION["table_data_checkout"]);
                                //$_SESSION["table_data"] = $_SESSION['default'];//may not be necessary
                              //  $_SESSION["table_data_checkout"] = $_SESSION['checkout_default'];
        
                                for($j=0;$j<=$index;$j++)
                                {
                                    $_SESSION["table_data"] =  $_SESSION["table_data"].$_SESSION['latter_sub'][$j].$_SESSION['amount_sub'][$j];//may need to delete $_SESSION["table_data"]
                                   // $_SESSION["table_data_checkout"] = $_SESSION["table_data_checkout"].$_SESSION['latter_sub_checkout'][ $j].$_SESSION['amount_sub'][$j];
            
                                }
                                $_SESSION['flag'] =  $_SESSION['counter']+1;
                            }
        
                        }
        
        
        
                }
        
                   //$_SESSION['table_data'] =   "<tr><td>NA</td><td>NA</td><td>NA</td><td>NA</td><td>NA</td><td>NA</td></tr>";

                if(isset($_SESSION['flag']))
                {
                    $_SESSION['counter'] = $_SESSION['flag'];
                    unset($_SESSION['flag']);
                }
        
        
            }
            
        
           $_SESSION['count']+=1;
        
            if( $_SESSION['count'] >= 7 )
            {
               session_regenerate_id(false);
                session_unset();

            }
            
            
             
            mysqli_close($connection);
        
        /*
          echo $_SESSION["table_data"];
          echo "Total Price: $".$_SESSION["total_price"];
        
       
*/
?>
-->
     
    <!-- <script type="text/javascript" >window.location.reload();

</script>
-->
     
       <table id = "cart_table" class = "product_description_body" cellspacing = "50" width = "100%" border=1 frame=void rules=rows>
            <tr>
                <td class = 'top'>Product name </td>
                <td class = 'top'>Size </td>
                <td class = 'top'>Weight </td>
                <td class = 'top'>Scent </td>
                <td class = 'top'>Unit Price </td>
                <td class = 'top'>Amount </td>
                
                
            </tr>
     
     <?php
        echo $_SESSION["table_data"];
        
        
     ?>
     
    </table>
            
             <hr class = 'breakers'></hr> <!-- break line for semantics -->
    <p1>
        <?php
            echo "Total price is: $";
            echo $_SESSION["total_price"];    
            echo "<br>";
        ?>

    

    </p1>
    
    
    <p1>
        <?php
            //echo "<br>"."Counter value:   ".$_SESSION["counter"];    
            //echo "<br>"."tester value:   ".$_SESSION["tester"];    

        ?>

    

    </p1>
    
     

    <!-- product description table, gets populated from product_information.php -->
          
            <!-- end of product description table, gets populated from product_information.php -->

           
            
    </section>


</div>


        
	<div class = spacer_div ></div> <!-- object created for padding -->
    <div>
        <section class = footer>
            
        </section>
    </div>
    <!-- end of footer section div-->

</body>


