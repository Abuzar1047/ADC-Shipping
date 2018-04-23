$(document).ready(function(){
    $(".sub").hover(function(){
            $(this).find('#submenu').fadeToggle("fast");
    },function(){
            $(this).find('#submenu').hide();
    });
});