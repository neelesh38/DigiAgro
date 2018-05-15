
             var ans;
               $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 320) { // check if user scrolled more than 50 from top of the browser window
          $(".fixed-top").css("background-color", "	 #007192"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
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
     document.getElementById('jsform').submit();
}
             function closed() {
    document.getElementById("overlay").style.display = "none";

}

             $("button").click(function() {
                 var item=(this.id).split(" ");
                 document.getElementById("image").src=("pics/"+item[0]+".jpg");

    var a=document.getElementById("qty"+item[2]).value;
             document.getElementById("info").innerHTML=("Item-Name : "+item[0]);

                 var amt=item[1]*a;
                 document.getElementById("rupe").innerHTML=("Rs. "+amt);

                 document.getElementById("qtty").innerHTML=("Qty "+a);

                 document.getElementById("text1").value=a+" "+item[0]+" "+item[1];

                 cart(item[0],amt,a);
})

             function cart(name,amt,a)
             {

                 var cart=new Object();
                 cart.name=name;
                 cart.amt=amt;
                 cart.qty=a;

             }

             $(".shooping").click(function()
                                 {
                 alert("he"); document.getElementById('jsform').submit();
             });
