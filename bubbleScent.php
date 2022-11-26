<?php
    //this file recieves AJAX requests from the scent select file in the product_description file 
    //and process's the request accordingly
    
            if(isset($_POST['scent']))
            {
               $scent_chosen =  $_POST['scent'];  
               

               
                   $scents = file_get_contents('scents.json');
                   $json_val = json_decode($scents,true);
                   if ($json_val === null)
                   {
                       echo "null value";
                      // echo $scents;
                   }
                  // echo $json_val;
                  
                  echo "<div class = 'scents_profile'>".
                  "<h1  id = 'scent_sel' style = ' color: rgb(125, 99, 88);font-style: oblique;font-size: x-large;' >$scent_chosen</h1>".
                    "<br>"."<p1 class= 'lefters_2'>" .$json_val['scenttopia'][$scent_chosen]['scent_description'][0]."</p1>".
                
                    "<p1 id = 'scent_summary'>" .$json_val['scenttopia'][$scent_chosen]['scent_description'][1]."</p1>".
                
                   "<ul id = 'notes'>".
                    "<li>"."<p1 class = 'lefters'>".$json_val['scenttopia'][$scent_chosen]['Top_notes'][0]."</p1>".
                   "<p1 class= 'righters'>" .$json_val['scenttopia'][$scent_chosen]['Top_notes'][1]."</p1>"."</li>".
                   
                    "<li>"."<p1 class = 'lefters'>".$json_val['scenttopia'][$scent_chosen]['middle_notes'][0]."</p1>".
                   "<p1 class= 'righters'>" .$json_val['scenttopia'][$scent_chosen]['middle_notes'][1]."</p1>"."</li>".
                   
                   "<li>"."<p1 class = 'lefters'>".$json_val['scenttopia'][$scent_chosen]['Base_notes'][0]."</p1>".
                   "<p1 class= 'righters'>" .$json_val['scenttopia'][$scent_chosen]['Base_notes'][1]."</p1>"."</li>".
                  "</div>".
                    "<hr class = 'breakers'></hr>";
                   // $scent_chosen = file_get_contents('fs.txt');
                   // echo $_GET['scentee'] ;  
                    //echo " hello ".$scent_chosen;
              
            }
            else 
            {echo "not found";}
?>
