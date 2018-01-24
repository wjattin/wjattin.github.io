  $(document).ready(function(){
    $("#click").click(function(){
       $("#clickBox").hide();
       //$("#clickBox").toggle(1000);
    });

    $( "#hover" )
     .mouseenter(function() {
       $("#hoverBox").show();
     })
     .mouseleave(function() {
       $("#hoverBox").hide();
     });

     var r = Math.floor(Math.random()*256);
     var g = Math.floor(Math.random()*256);
     var b = Math.floor(Math.random()*256);

     var rgb = "rgb(" + r + "," + g + "," + b + ")";
     console.log(rgb);

     //hex color
        var color = "#";
        for (k = 0; k < 3; k++) {
          //you add the zero so you can account for single hex numbers
           color += ("0" + (Math.random()*256|0).toString(16)).substr(-2);
        }

        $("body").css("background-color", color);
        console.log(color);

        $(".box").css("background-color", rgb);
        console.log(color);


  });
