$(document).ready(() => {
    $('form#login').submit(function(e) {
        e.preventDefault()
        var user = $('#user_login')
        var pass = $('#pass_login')
        var formData = new FormData()
        if (user.val() == "") {
            swall('Tên tài khoản không được bỏ trống', 'error')
        } else if (pass.val() == "") {
            swall('mật khẩu không được bỏ trống', 'error')
        } else {
            formData.append("user", user.val())
            formData.append("pass", pass.val())
            $.ajax({
                url: 'ajax/login.php',
                type: 'post',
                data: formData,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: () => {
                    $('#btn-login').html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading...`)
                },
                success: (res) => {
                    if (res.status == 0) {
                        swall(res.messages, 'success')
                        loadpage()
                    } else if (res.status == 1) {
                        swall(res.messages, 'error')
                        loadpage()
                    }
                }
            })
        }
    })
    $('form#reg').submit(function(e) {
        e.preventDefault()
        var user = $('#user_reg')
        var pass = $('#pass_reg')
        var rp_pass = $('#rp_pass')
        var gender = $("input[name='gender']:checked").val()
        var formData = new FormData()
        if (user.val() == "") {
            swall('Tên tài khoản không được bỏ trống', 'error')
        } else if (pass.val() == "") {
            swall('mật khẩu không được bỏ trống', 'error')

        } else if (rp_pass.val() != pass.val()) {
            swall('Mật khẩu không trùng', 'error')

        } else if (!gender) {
            swall('Vui lòng chọn giới tính', 'error')

        } else if (user.val().length < 6 && pass.val().length < 6) {
            swall('Tên tài khoản không được bỏ trống', 'error')
        } else {
            gender = parseInt(gender);
            formData.append("user", user.val())
            formData.append("pass", pass.val())
            formData.append('rp_pass', rp_pass.val())
            formData.append('gender', gender);
            $.ajax({
                url: 'ajax/register.php',
                type: 'post',
                data: formData,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: () => {
                    $('#btn-reg').html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading...`)
                },
                success: (res) => {
                    if (res.status == 0) {
                        swall(res.messages, 'success')
                        loadpage()
                    } else if (res.status == 1) {
                        swall(res.messages, 'error')
                        loadpage()
                    }
                }
            })
        }
    })
})