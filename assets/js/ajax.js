$(document).ready(() => {
    $('form#login').submit(function(e) {
        e.preventDefault();
        var user = $('#user_login');
        var pass = $('#pass_login');

        if (user.val() == "") {
            swall('Tên tài khoản không được bỏ trống', 'error');
        } else if (pass.val() == "") {
            swall('mật khẩu không được bỏ trống', 'error');
        }
    })
})