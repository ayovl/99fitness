$(document).ready(function()
{
    //Top bar animation
    $(window).scroll(function()
    {
        if(window.matchMedia("(max-width: 700px)").matches)
        {
            $("#topbar2").css("display", "none");
        }

        else if(Math.round(window.pageYOffset) > 400)
        {
            $("#topbar2").css("height", "60px");
        }
        
        else if(Math.round(window.pageYOffset) < 400)
        {
            $("#topbar2").css("height", "0");
        }

    });
    
    //Join button animation and function
    $("#join-button").click(function()
    {
        $("#pop-up").css({"opacity":"0.98", "width":"100%", "height": "500px"});
    });
    
    $("#cancel-button").click(function()
    {
        $("#pop-up").css({"opacity":"0", "width":"0", "height": "0"});
    });

    //Adding header to pages
    $(".header-html").attr("src", "header.html");
    console.log("I loaded");

    //header text animation
    function changeHeaderText()
    {
        $("#header-text2").animate({opacity: '0', left: '52%'},function()
        {
            $("#header-text2").text("Inspire Yourself");
            $("#header-text2").css("left","48%");
        });
        $("#header-text2").animate({opacity: '1', left: '50%'});

        setTimeout(function()
        {
            $("#header-text2").animate({opacity: '0', left: '52%'},function()
            {
                $("#header-text2").text("Big Ideas Great Results");
                $("#header-text2").css("left","48%");
            });
            $("#header-text2").animate({opacity: '1', left: '50%'});

        },2500);
        
    }
    changeHeaderText();
    setInterval(changeHeaderText,5000 );

    //Menue Opener for Mobile
   
    
    $("#manue-bar").click(function()
    {
        $("#topbar").css({"display": "block", "width":"70%"});
        $("#cross-icon").css("display", "block");
    });
    $("#cross-icon").click(function()
    {
        $("#topbar").css({"width":"0"});
    });        
    
    //Header background animation
    $("#header").on()

   
});