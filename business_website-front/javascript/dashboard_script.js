//Display SIDEBAR MENU DROP DOWN
$('.menu_item').click(function(e){
    e.preventDefault();
    $(this).next().slideToggle('slow');
});