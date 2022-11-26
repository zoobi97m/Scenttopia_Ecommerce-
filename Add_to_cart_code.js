// this code is used to handle the submit event of a button 
//it chekcs that all the required fields have been filled before sending information 




/*************** function to format the quantity filed ********************/


function formatQuan(input)
{
    if(! isNaN(input))
    {

        if(input < 0)
        {
            alert("negative amount enterd");
            return false;
        }
        else if(input == 0 || input == "")
        {
            alert("please enter amount wanted");
            return false;
        }
        else if(input >=31)
        {
            alert("amount too large, please try again");
            return false;
        }
        else
            return true;



    }
    else
    {
        alert("Invalid input, please enter a Numeric value");
        return false;

    }
}
/************************************ end of formatquan fucntion ********************/

/********************** size getter fnction *************************/
function sizeGetter()
{
    if($("#size_chosen").html())
    {
        console.log($("#size_chosen").html());
        return true;
    }
    else 
    {
        console.log("no size selected yet");
        alert("no size selected yet");
        return false;
    }
        
}

/********************** end of size getter fnction *************************/

/********************** scent getter fnction *************************/
function scentGettter()
{
    if($("#scent_sel").html())
    {
        console.log($("#scent_sel").html());
        return true;
    }
    else 
    {
        console.log("no scent selected yet");
        alert("no scent selected yet");
        return false;
    }
        
}

/********************** end of scent getter fnction *************************/




var quan = $("#addToCart");


function handleCartClick(e)
{
   // e.preventDefault();
   if (formatQuan($("#amount_wanted").val()))
   {
       if(sizeGetter())
       {
           if(scentGettter())
           {
        
                $.post('populate_cart_table.php', { name:$("#chosen_name").html(),amounts: $("#amount_wanted").val(),scent: $("#scent_sel").html(), size:$("#size_chosen").html()}, function(data, status, xhr)
                {
                    
                    //$("#pro_desc_table").html(data);
                  // $("#scents_menu").html(data);
                   // fetch('cart.html')
                     //   .then(res => console.log(res))
                       // .then(data => console.log(data))
                    
                    console.log( $("#chosen_name").html())
                    


                }
                );
           }
       }
        
   }
   // console.log($("#size_chosen").html());


}
        //console.log($("#scent_sel").html());
        


$("#addToCart").click(handleCartClick);//get add to cart button variable 
