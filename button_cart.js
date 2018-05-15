  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
        
               $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 320) { // check if user scrolled more than 50 from top of the browser window
          $(".fixed-top").css("background-color", "	 #99ccff"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        } else {
          $(".fixed-top").css("background-color", "transparent"); // if not, change it back to transparent
        }
      });
    });
             
             
function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}
   
    //alert(this.id); // or alert($(this).attr('id'));
            //console.log(Cart.name);
        </script>

$("button").click(function() {
                 var item=(this.id).split(" ");
                 document.getElementById("image").src=("pics/"+item[0]+".jpg");
                
    var a=document.getElementById("qty"+item[2]).value;
             document.getElementById("info").innerHTML=("Item-Name : "+item[0]);
                 
                 var amt=item[1]*a;
                 document.getElementById("rupe").innerHTML=("Rs. "+amt);
                 
                 document.getElementById("qtty").innerHTML=("Qty "+a);
                 
                 cart(item[0],amt,a);
                 
})    
             
             function cart(name,amt,a)
             {
                 var cart=new Object();
                 cart.name=name;
                 cart.amt=amt;
                 cart.qty=a;
             }
</script>