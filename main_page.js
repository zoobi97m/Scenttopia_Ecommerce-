 var d = document.getElementById("t");
 var f = document.getElementById("s");
 
 var reciever = window.document.contentWindow;
 
 var products = $("table img"); //products array containing information about all the products displayed on main page 



 products.click(handleClick);
 products.on('mouseover',handleHover);
 products.on('mouseout',handleOut);
 
 function handleClick(event)
 {
    var formm = document.getElementById("addProductForm");
    var image_tf = document.createElement('input');
    var name_tf = document.createElement('input');
    var scent_tf = document.createElement('input');

    image_tf.setAttribute("type", "text");
    image_tf.setAttribute("name", "imagee");
    image_tf.setAttribute("id", "imageTextField");
    
    name_tf.setAttribute("type", "text");
    name_tf.setAttribute("name", "namee");
    name_tf.setAttribute("id", "nameTextField");
    
    scent_tf.setAttribute("type", "text");
    scent_tf.setAttribute("name", "scentee");
    scent_tf.setAttribute("id", "scentTextField");
    
   image_tf.value = event.target.src;
   name_tf.value = event.target.id;
   scent_tf.value = event.target.dataset.scent;
   
   console.log(event.target.dataset.scent);
    //image_tf.value = "bazzoona";
   formm.appendChild(image_tf);
   formm.appendChild(name_tf);
   formm.appendChild(scent_tf);
   console.log(formm);
   console.log(image_tf.value);
    formm.submit();
     //console.log(event.target.src);
 }
 
 
 function handleHover(event)
 {
    var source_image = event.target;
    source_image.style.cursor = 'pointer';
  source_image.style.opacity=  .5;
  //source_image: opacity .25s ease-in-out;
 }
 
 function handleOut(event)
 {
    var source_image = event.target;
  source_image.style.opacity= 1;
 }
 
 //document.getElementById("amz_grp_cdl").addEventListener('click',handleClick);
 
 /*
 function add_product(event)
        {
            var message;
            
            var id_array = {1002:"patties", 1003:"prawn", 1000:"fishf_500_g", 1001:"fishf_1_kg", 1004:"ice_cream_1l", 1005:"ice_cream_2l",
            3002:"steak", 3003:"orange", 3004:"banana", 3006:"grapes", 3007:"apples", 3005:"peaches", 3000:"cheese500g", 3001:"cheese1kg", 4000:"tea25", 
            4001:"tea100", 4002:"tea200", 4003:"coffee200g", 4004:"coffee500g", 4005:"chocolate", 2002:"soap", 2005:"wash", 2006:"bleach", 2000:"panadol24pack",
            2001:"panadol50g", 2003:"rubbish_pack10", 2004:"rubbish_pack50", 5002:"bird", 5003:"cat", 5004:"fish", 5001:"dog_1kg", 5000:"dog_5kg"};
        
            for (const [key, value] of Object.entries(id_array)) 
            {
                 if (event.target.id == value)
                    message = key;
            }
            

            reciever.postMessage(message, "*");
        }
        function handleClick(event)
        {
            var message;
            
            var id_array = {1002:"patties", 1003:"prawn", 1000:"fishf_500_g", 1001:"fishf_1_kg", 1004:"ice_cream_1l", 1005:"ice_cream_2l",
            3002:"steak", 3003:"orange", 3004:"banana", 3006:"grapes", 3007:"apples", 3005:"peaches", 3000:"cheese500g", 3001:"cheese1kg", 4000:"tea25", 
            4001:"tea100", 4002:"tea200", 4003:"coffee200g", 4004:"coffee500g", 4005:"chocolate", 2002:"soap", 2005:"wash", 2006:"bleach", 2000:"panadol24pack",
            2001:"panadol50g", 2003:"rubbish_pack10", 2004:"rubbish_pack50", 5002:"bird", 5003:"cat", 5004:"fish", 5001:"dog_1kg", 5000:"dog_5kg"};
        
            for (const [key, value] of Object.entries(id_array)) 
            {
                 if (event.target.id == value)
                    message = key;
            }
            

            reciever.postMessage(message, "*");
        }
        */
      