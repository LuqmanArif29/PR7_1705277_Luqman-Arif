$('.xyz').addClass('collapse');
$('#wasd').change(function(){
    var selector = '.abcd' + $(this).val();
    $('.xyz').collapse('hide');
    $(selector).collapse('show');
});
