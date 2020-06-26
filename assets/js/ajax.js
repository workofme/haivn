$(document).ready(() => {
    $('form#login').submit(function(e) {
        e.preventDefault();
        var user = $('#user_login');
        var pass = $('#pass_login');

        if (user.val() == "") {
            swal('Tên tài khoản không được bỏ trống', 'error');


        }
    })
})