$(document).ready(function(){
    $("#scode").focus(function(){ 
     $("#panel").slideToggle("100");  
       $('#mDiv').animate({width: 'toggle'});
          $('#det').fadeOut(100);
        $('div.three.wide.column').fadeOut(500); 
          $('#iv').css("display", "inline");
   $("#gc").css("display", "inline").fadeOut(800);
    });
    
        $("#scode").focusout(function(){  
          $("#panel").slideToggle("100");  
       $('#mDiv').animate({width: 'toggle'});
            $('#det').fadeIn(100);
       $('#iv').css("display", "none");
        
           $('div.three.wide.column').fadeIn(1000);
    });
});
