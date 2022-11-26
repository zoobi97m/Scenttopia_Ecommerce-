<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script><!-- include jquery library-->


        <title> Product Description </title>
        <link rel="stylesheet" href="main_styles.css" type="text/css" /><!-- include css file -->
    </head>
    <body>
	<!-- header section -->
    <header>
        <section class = header>
            <a id = "cartLink" href = "cart.php" target = "_self">
                <img id = "cart" class = "header_icons_2" src = "candle_products/cart_icon.svg" alt = "Failed to load image" align = 'right' ></img>
            </a>
            <img id = "home_page" class = "header_icons_2" src = "candle_products/home_page.svg" alt = "Failed to load image" align = 'right' ></img>
            <img id = "home_page" class = "header_icons_2" src = "candle_products/email.svg" alt = "Failed to load image" align = 'right' ></img>
            
                <!--<img id = "logo" src = "hugo.svg" alt = "Failed to load image" align = 'left' > -->
        </section>
        <script type="text/javascript">
        /*
        
            function handleCartClick(e)
            {
                //e.preventDefault();
                
               
                $.post('cart.php', function(data, status, xhr)
                {
                    var root = document.implementation.createHTMLDocument("cart");
                    var p = root.createElement("p");
                    p.innerHTML = data;
                    root.body.appendChild(p);
                    console.log(root.body.innerHTML);
                    
                    // root.window.location.href = '_blank';
                    
                    console.log(root.URL);
                   // console.log(root.location.href);
                    root.open(root.URL,'_blank');
                    
                   
                    
                }
                );
                
                     
               // $("body").load("cart.php");
            
            }
                    //console.log($("#scent_sel").html());
                    


            $("#cart").click(handleCartClick);//get add to cart button variable 
*/
    
        </script>
    </header>
    <!-- end of header section -->
    
    
    
	<div class = spacer_div ></div> <!-- object created for padding -->
	
	
	
	
        <!--  main section div includes all the elemtns except for header and footer and some spacer divs -->
	<div id = main_section_product>
	    
	   
            <!-- left side, image and product name div -->
        <section id= product_display>
            
            <div id = image_and_name>
                <?php
                   // echo $_GET['imagee'];
                     $main_image = $_GET['imagee']."'";
                     $name = $_GET['namee'];
                     echo "<div id = 'divDesc'><img id = 'df'"." src = '".$main_image." alt = 'Failed to load image' align = 'center'"."height = 350 width = 300 >
                     </img></div><br>"; //the main image 
                     echo"<div id =namest><p id = 'chosen_name'>".$name."</p></div><br>";//product name 
                ?>
            </div>
        </section>
        <!-- end of left side, image and product name div -->

        <!-- right side, order details, scent details, and addition to cart  -->

         <section id="product_description">
             
            <h1 class = headings >Product Details</h1><!-- product details heading -->
            <h1 id = "noSize" class = "product_description_body"  >Please select size</h1><!-- heading displayed incase user hasnt chosen product yet  -->
            
            <!-- product description table, gets populated from product_information.php -->
            <table id = "pro_desc_table" class = "product_description_body" cellspacing = "10" width = "500" border=1 frame=void rules=rows>
            </table>
            <!-- end of product description table, gets populated from product_information.php -->

            <hr class = 'breakers'></hr> <!-- break line for semantics -->
            
            <!-- scent description menu, gets populated from the following php code, unless the chosen 
            product is not scent indicative, ie: bubble candles -->

            <div id = "scents_menu">
            <?php
                if(isset($_GET['scentee']) &&$_GET['scentee'] != 'undefined') //check if the data-scent attribute from main_page.js & ecommerce_Store.html
                // has been scent, if so proceed 
                {
                   
                   $scent_chosen =  $_GET['scentee'];  //grab the chosen scent
              
            

                   $scents = file_get_contents('scents.json');//get the json obejct 
                   $json_val = json_decode($scents,true);//decode the json object 
                   
                   //check if the decodig process was successful
                   if ($json_val === null)
                   {
                       echo "null value";
                   }
                  
                  else //if the decode operation was successful proceed
                  {
                  echo "<div class = 'scents_profile'>";
                  echo"<h1 style = ' color: rgb(125, 99, 88);font-style: oblique;font-size: x-large;' id = 'scent_sel'>$scent_chosen</h1>";
                   echo "<br>"."<p1 class= 'lefters_2'>" .$json_val['scenttopia'][$scent_chosen]['scent_description'][0]."</p1>";
                
                   echo "<p1 id = 'scent_summary'>" .$json_val['scenttopia'][$scent_chosen]['scent_description'][1]."</p1>";
                
                   echo"<ul id = 'notes'>";
                   echo "<li>"."<p1 class = 'lefters'>".$json_val['scenttopia'][$scent_chosen]['Top_notes'][0]."</p1>";
                   echo "<p1 class= 'righters'>" .$json_val['scenttopia'][$scent_chosen]['Top_notes'][1]."</p1>"."</li>";
                   
                   echo "<li>"."<p1 class = 'lefters'>".$json_val['scenttopia'][$scent_chosen]['middle_notes'][0]."</p1>";
                   echo "<p1 class= 'righters'>" .$json_val['scenttopia'][$scent_chosen]['middle_notes'][1]."</p1>"."</li>";
                   
                   echo "<li>"."<p1 class = 'lefters'>".$json_val['scenttopia'][$scent_chosen]['Base_notes'][0]."</p1>";
                   echo "<p1 class= 'righters'>" .$json_val['scenttopia'][$scent_chosen]['Base_notes'][1]."</p1>"."</li>";
                  echo "</div>";
                    echo"<hr class = 'breakers'></hr>";
                 
                  }   
               }
            
              
            ?>
            
            </div>
            	<div class = spacer_div ></div> <!-- general spacer div -->

            <div id = "sizes_menu" > <!-- sizes menu division, if size is not chosen, product information will not be displayed
            as the each each size has different pricing -->
                
                <!-- table used to display the scent data -->
                <table cellspacing = 10>
                    <tr>
                        <td id = "Please_Choose_Scent"class = "candle_sizes">  <!-- this is here incase the product is not scent 
                        indicative and the user needs to choose,  it gets populated if this condition is true -->

                        </td>
                        
                        <!-- choose scent table, displayed using the following php code -->
                        <td>
                             <?php
                                $scent_chosen =  $_GET['scentee'];  
                                
                               if($scent_chosen == 'undefined')//if no scent data was sent from ecommece_Store.html and main_page.js, ask user to choose scent
                               {   
                                   echo "<select id = 'dropDown_scents'name='scents' class = 'candle_sizes'>".
                                   "<option value='' selected disabled hidden></option>".
                                   "<option class = 'selection' value='Japanese Honey Suckle'>Japanese Honey Suckle</option>".
                                   "<option class = 'selection' value='Amazonian Grape'>Amazonian Grape</option>".
                                   "<option class = 'selection' value='Ms Dior'>Ms Dior</option>".
                                   "<option class = 'selection' value='Frankincense and Myrrh'>Frankincense and Myrrh</option>".
                                   "<option class = 'selection' value='Cinnamon Apple'>Cinnamon Apple</option>".
                                   "<option class = 'selection' value='Lady Pink'>Lady Pink</option>"
                                   ;
                                   //echo 'var s = $("#dropDown_scents option:selected").text();';
                                   
                                 
                               }
                            ?>
                        </td>
                        <!-- end of scent choosing table-->
                    </tr>
                    <tr>
                        <td class = "candle_sizes"> Please choose product size</td> <!-- heading displayed next to sizes drop down menu -->
                        <td id = "selector"> <!-- selection menu, depending on the chosen product-->
                            
                            <script type="text/javascript" >
                            //the following code is unnecessary, left here for future use, it is just a json object 
                                                                document.implementation.createHTMLDocument("fizza");

                            const scenttopia = [
                                
                                    {
                                        "scentname": "Japanese Honey Suckle",
                                        "scent_description": ["Scent description: ","A sweet flowering vine with one of the most loved floral scents"],
                                        "Top_notes": ["Top notes: ","Mandarin, Pine needle"],
                                        "middle_notes" : ["Middle notes: ","Grape, Neroli" ],
                                        "Base_notes": ["Base notes:","Vanilla, malt, jasmine and cedar wood"]
                                    },
                                    
                                    {
                                        
                                        "scentname": "Amazonian Grape",
                                        "scent_description": ["Scent description: ","Ripe red grape is blended with tart blood plum notes and a hint of sweet strawberry to create this enticing fruit fragrance"],
                                        "Top_notes": ["Top notes: ","Red Grape, Blood Plum"],
                                        "middle_notes": ["Middle notes: ", "Strawberry, Jasmine" ],
                                        "Base_notes": ["Base notes: ","Vanilla, Malt"]
                                        
                                    },
                                    
                                    {
                                        
                                        "scentname": "Ms Dior",
                                        "scent_description": ["Scent description: ","Bursting with floral and citrus notes, this alluring scent is highlighted by mandarin and bergamot with classic florals rose and jasmine and finished with sensual musk and patchouli"],
                                        "Top_notes": ["Top notes: ","Mandarin, Bergamot"],
                                        "middle_notes": ["Middle notes: ", "Jasmine, Rose" ],
                                        "Base_notes": ["Base notes: ","Musk, Patchouli"]
                                        
                                    },
                                    
                                    {
                                        
                                        "scentname": "Frankincense and Myrrh",
                                        "scent_description": ["Scent description: ","Enchanting, aromatic blend of frankincense and myrrh with balsam, spice, patchouli and sandalwood."],
                                        "Top_notes": ["Top notes: ","Cinnamon, Nutmeg"],
                                        "middle_notes": ["Middle notes: ", "Balsam, Frankincense" ],
                                        "Base_notes": ["Base notes: ","Patchouli, Sandalwood"]
                                        
                                    },
                                    
                                    {
                                        
                                        "scentname": "Cinnamon Apple",
                                        "scent_description": ["Scent description: ","This fruity, spicy blend is boosted with essential oils of cinnamon bark, clove leaf and nutmeg combined with tangy apple and a light citrus top note"],
                                        "Top_notes": ["Top notes: ","Mandarin, Lemon"],
                                        "middle_notes": ["Middle notes: ", "Tangy Apple, Nutmeg" ],
                                        "Base_notes": ["Base notes: ","Cinnamon Bark, Vanilla"]
                                        
                                    },
                                    
                                    {
                                        
                                        "scentname": "Lady Pink",
                                        "scent_description": ["Scent description: ","A sassy & fabulous sweet pink apple aroma infused with zesty mimosa fragrance. A scent to freshen any room."],
                                        "Top_notes": ["Top notes: ","Blackcurrent , Raspberry"],
                                        "middle_notes": ["Middle notes: ", "Mandarin, Turkish Rose" ],
                                        "Base_notes": ["Base notes: ","Musk, SandalWood, Amber"]
                                        
                                    },
                                    
                                    
                                    
                                
                            ];
                            //end of json object //
                            
                            //debugging data
                               // var mydata = JSON.parse(scenttopia);
                                console.log(scenttopia[0].scentname);
                                console.log(scenttopia[0].scent_description[1]);
                            // end of debugging data // 
                            
                            //event callback function called incase the user changes SIZE selection //
                            
                            /*********************************function gets the name of the selected product as well as the 
                             size chosen, then sends this data to the server via an ajax call 
                             it retrieves the info from the server and populates the product description table accordingly 
                            **********************************************************************************************/
                                function handleSelectChange(e)
                                {
                                    // getting the values to be prepapred for an AJAX request 
                                    var name = $("#chosen_name").html(); //chosen_name is the name displayed under image in left side section 
                                    var size = e.target.value;//size chosen by user from sizes drop down list 
                                    
                                    $.post('product_information.php', {name: name, size: size}, function(data, status, xhr)
                                    {
                                        $("#pro_desc_table").html(data);
                                        
                                    }
                                    );
                                    
                                    
                                    
                                    $("#noSize").html("");
                                   
                                }
                                //end of event callback function for SIZE //
                                

                                //event callback function called incase the user changes SCENT selection //
                                /*********************************function gets the scent of the selected productthen sends 
                                this data to the server via an ajax call it retrieves the info from the server and populates 
                                the product description table accordingly 
                                **********************************************************************************************/

                                 function handleSelectChange_Scents(e)
                                {
                                    //var name = $("#chosen_name").html();
                                    var scent = e.target.value;
                                    console.log(scent);
                                    $.post('bubbleScent.php', {scent: scent}, function(data, status, xhr)
                                    {
                                        //$("#pro_desc_table").html(data);
                                         $("#scents_menu").html(data);
                                        
                                    }
                                    );
                                    
                                    //$("#noSize").html("");
                                   
                                }
                                //end of scent selection callback function // 
                                
                                
                                /********************* size selection code ***************************/
                                
                                var product_name = $("#chosen_name").html(); //chosen product name 
                                //display the sizes drop down menu according to the product chosen
                                if (product_name == "Japanese Honey Suckle Diffuser" || product_name =="Ms Dior Diffuser" || product_name == "Oriental Blossom Diffuser")
                                {
                                    var s =  $("<select id = 'dropDown'name='sizes' class = 'candle_sizes'>");
                                    s.append("<option value='' selected disabled hidden></option>");
                                    s.append("<option class = 'selection' value='Large'>Large</option>");
                                    s.append("<option class = 'selection' value='Small'>Small</option>");
                                    
                                    $("#selector").append(s);
                                 
                                   
                                }
                                else if (product_name == "Pink Cloud Bubble Candle" || product_name =="White Cloud Bubble Candle")
                                {
                                    var s =  $("<select id = 'dropDown'name='sizes' class = 'candle_sizes'>");
                                    s.append("<option value='' selected disabled hidden></option>");
                                    s.append("<option class = 'selection' value='Large'>Large</option>");
                                    s.append("<option class = 'selection' value='Small'>Small</option>");
                                    
                                    $("#selector").append(s);
                                    
                                    $("#Please_Choose_Scent").html("Please Choose Scent");

                                 
                                   
                                }
                                else 
                                {

                                    var s =  $("<select id = 'dropDown'name='sizes' class = 'candle_sizes'>");
                                    s.append("<option value='' selected disabled hidden></option>");
                                    s.append("<option class = 'selection' value='X-Large'>X-Large</option>");
                                    s.append("<option class = 'selection' value='Large'>Large</option>");
                                    
                                    s.append("<option class = 'selection' value='Medium'>Medium</option>");
                                    s.append("<option class = 'selection' value='Small'>Small</option>");
                                    $("#selector").append(s);
                                    
                         
                                }
                                    var f = $("#dropDown option:selected").text(); //get the selected size value from the size-dropdown list.
                                    var e = $("#dropDown_scents option:selected").text();
                                    console.log(e);
                            /********************* end of size selection code ***************************/

                                    $("#dropDown").change(handleSelectChange);//adding an event listener if the chosen value in the size list changes 
                                    $("#dropDown_scents").change(handleSelectChange_Scents);//adding an event listener if the chosen value in the scents list changes 
                                    

                               
                            </script>
                            
                        </td>
                    </tr>
                    <!-- final steps before adding to cart -->
                    <tr>
                        <td class = "candle_sizes"> Please choose amount wanted</td>
                        <td><input id = "amount_wanted" type="text" class = "candle_sizes"name="product_amount" placeholder = "Amount wanted"/></td>
                    </tr>
                     <tr>
                        
                        <td><input id = "addToCart" type="submit" name = "cart_adder" class = "buttons" value = "Add to Cart"/></td>
                        <script type="text/javascript" src="Add_to_cart_code.js"></script> <!-- includes external js code to handle cart submission -->
                    </tr>
                </table>
                <!-- this code was replaced by css alternative, hence it was commented out, but left for future use 
                
                <script type="text/javascript" >
                                     var products = $(".buttons"); //products array containing information about all the products displayed on main page 

                    function handleHover(event)
                     {
                        products.style.backgroundColor = "rgb(204, 90, 65)";
                        products.style.backgroundColor = "red";
                            $(".buttons").css('cursor','pointer');


                     }
                     
                     function handleOut(event)
                     {
                        products.style.backgroundColor= 'rgb(214, 149, 134)';
                     }



                    // products.click(handleClick);
                     products.on('mouseover',handleHover);
                     products.on('mouseout',handleOut);
                </script>
                -->
            </div>
        </section>
        <!-- end of right side, order details, scent details, and addition to cart  -->

    
    </div>
    <!--  end of main section div -->
    
                	<div class = spacer_div ></div> <!--  general spacer div-->
                	<div class = spacer_div ></div> <!--  general spacer div-->

   <div ><!-- footer section div-->
            <section class = footer>
                
            </section>
    </div>
    <!-- end of footer section div-->

	</body>
</html>	