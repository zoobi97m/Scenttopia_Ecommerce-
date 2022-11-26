<!-- this is the document for the cart section -->
<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


        <title> Cart</title>
        <link rel="stylesheet" href="main_styles.css" type="text/css" />
    </head>
    <body id = "main_page">


        <?php
            session_start();
            
            
            
             
                    if (!empty($_POST)) //if its add to cart request, repopulTE $_SESSION
                    {
                        foreach($_POST as $key => $value)//save data post from the product description section in the session superglobal array
                        {
                            $_SESSION[$key] = $value;
                        }
                
                     /*
                         $_SESSION['refresh'] = 1;
                         if($_SESSION['refresh'] ==1)
                         {
                            
                            header("Refresh:0; url=cart.php");
                            header( "Refresh: 0;" );
                            
                            header('Location: https://d0534406c38549afa294587cc6689066.vfs.cloud9.us-east-1.amazonaws.com/cart.php');
                            header('Location: cart.php');
                            $_SESSION['refresh'] = 0;
                         }
                         */
                    }
                    
                    
                    
                    
            
                    
            
        ?>
    
     <!--
        
        <script type="text/javascript">
           
              /*
                
                var link = document.createElement('a');
                link.href = "cart.php";
                document.body.appendChild(link);
                link.click();  
                */
                $('body').append('<a id="link" href = "cart.php" target = "_blank"></a>');
                $('#link')[0].click();
    
    
            
        </script>
        -->
    
    </body>
    </html>	
        
