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

mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

$('body').css('opacity', '0.5')
setTimeout(function() {
    $('body').addClass('loaded');
    $('body').css('opacity', '1')
}, 500);

var list_title = $('.list-group-item ul li a').text()
if (list_title.length > 5) {

}

function swall(text, icon) {
    Swal.fire(
        'Thông báo!',
        text,
        icon
    )
}

function dele(text, url, data) {
    return Swal.fire({
        title: 'Bạn có chắc',
        text: text,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                    url: url,
                    type: 'post',
                    data: { data },
                    dataType: 'json',

                })
                // swal("xóa thành công", 'success');
        }
    })
}

function loadpage() {
    setTimeout(function() {
        window.location.reload()
    }, 2000)
}

function wrong(text, icon) {
    Swal.fire({
        icon: icon,
        title: 'Thông báo',
        text: text

    })
}

function move_url(url) {
    setTimeout(function() {
        window.location.href = url;
    }, 2000)
}
var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('.avatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on('change', function() {
    readURL(this);
});