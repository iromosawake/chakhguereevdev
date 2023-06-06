/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function(){
    init = function() {
        $('#photo_persso').hide();
        $('#symfony_progress').animate({width:"65%"},5500);
        $('#jee_progress').animate({width:"35%"},5500);
        $('#bootstrap_progress').animate({width:"75%"},5500);
        $('#jquery_progress').animate({width:"85%"},5500);
        $('#mysql_progress').animate({width:"75%"},5500);
        $('#vbnet_progress').animate({width:"25%"},5500);
        $('#android_progress').animate({width:"80%"},5500);
        $('#photo_persso').fadeIn(5000); 
        
    };
    init();
    /* $("#carre").animate({left:'50px', opacity:'1'},500);*/
    
});