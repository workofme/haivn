var count = 1;
$('.setting').click(function() {

    $('.thietlap').css('display', 'block');



})
$('#save').click(() => {
    $('.thietlap').css('display', 'none');
})
$('#input').click(() => {
    var stt = $('#input').attr('data')
    count++;
    if (count % 2 == 0) {
        stt = "on"
    } else {
        stt = "off"
    }
    if (stt == 'on') {
        $('.img-post').css('height', '200px');
    } else {
        $('.img-post').css('height', 'auto');
    }
})
$('a.like').click(function(e) {
    e.preventDefault();
    alert($(this).html())
})