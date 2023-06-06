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