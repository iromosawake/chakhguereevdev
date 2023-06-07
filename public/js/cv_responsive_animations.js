/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function () {
    $(".navbar a,footer a").on("click",function(event) {
        event.preventDefault();
        var hash = this.hash;
        $('body,html').animate({scrollTop: $(hash).offset().top}, 900, function (){
            window.location.hash = hash;
        });
        
    });
});

function initial_view(){
      $("#about").hide();    
      $("#skills").hide();
      $("#experience").hide();
      $("#education").hide();
      $("#portfolio").hide();
      $("#about").fadeIn();
};


$(document).ready(function(){
    initial_view();
    $("#about_butt").click(function(){
        $("#about").fadeIn();
      $("#skills").hide();
      $("#experience").hide();
      $("#education").hide();
      $("#portfolio").hide();
    });

    $("#skills_butt").click(function(){
        $("#skills").fadeIn();
        $("#about").hide();
        $("#experience").hide();
        $("#education").hide();
        $("#portfolio").hide();
    });

    $("#experience_butt").click(function(){
        $("#experience").fadeIn();
        $("#about").hide();
        $("#skills").hide();
        $("#education").hide();
        $("#portfolio").hide();
    });

    $("#education_butt").click(function(){
        $("#education").fadeIn();
        $("#about").hide();
        $("#skills").hide();
        $("#experience").hide();
        $("#portfolio").hide();
    });

    $("#portfolio_butt").click(function(){
        $("#portfolio").fadeIn();
        $("#about").hide();
        $("#skills").hide();
        $("#experience").hide();
        $("#education").hide();
    });
  });