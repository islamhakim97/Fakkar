$(document).ready(function(){
  
  $(".btn").click(function(){
            var x=$(".btn").text();
            if (x=="Show")
            {  
                $("#inp").attr('type','text');
                $(".btn").text("Hide");
            }
            else
            {
                $("#inp").attr("type","password");
                $(".btn").text("Show");  
            }
             });
    $(".title").animate({opacity:"1",fontSize:"30px"},2000,function(){
        $(this).fadeOut(1000).fadeIn(1000);
    });
    $("#form")
});