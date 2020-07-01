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
        var first_name = $('#first_name')
        var last_name = $('#last_name')
        var gender = $("input[name='gender']:checked").val()
        var formData = new FormData()
        if (user.val().trim() == "") {
            swall('Tên tài khoản không được bỏ trống', 'error')
        } else if (pass.val().trim() == "") {
            swall('mật khẩu không được bỏ trống', 'error')

        } else if (rp_pass.val().trim() != pass.val()) {
            swall('Mật khẩu không trùng', 'error')

        } else if (!gender) {
            swall('Vui lòng chọn giới tính', 'error')

        } else if (first_name.val().trim() == "" && last_name.val().trim()) {
            swall('Họ tên không được bỏ trống')
        } else if (user.val().trim().length < 6 && pass.val().trim().length < 6) {
            swall('Tên tài khoản không được bỏ trống', 'error')
        } else {
            gender = parseInt(gender);
            formData.append("user", user.val())
            formData.append("pass", pass.val())
            formData.append('first_name', first_name.val())
            formData.append('last_name', last_name.val())
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
    $('#logout').click(() => {
        Swal.fire({
            title: 'Thông báo',
            text: "bạn có muốn đăng xuất",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Có , tôi muốn đăng xuất!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "ajax/logout.php",
                    dataType: 'json',
                    beforeSend: () => {
                        $('.swal2-confirm').html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
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
    $('#post').click(() => {
        $.ajax({
            url: 'ajax/post.php',
            type: 'post',
            dataType: 'json',
            beforeSend: () => {
                $(this).html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...`)
            },
            success: (res) => {
                if (res.status == 0) {
                    $('#post_modal').modal('show')

                } else if (res.status == 1) {


                    swall('Bạn hãy đăng nhập để đăng bài', 'error')
                }
            }
        })
    })
    $('#save_profile').click(() => {
        var formData = new FormData()
        var files = $('#file')[0].files[0]
        var first_name = $('#first_name')
        var last_name = $('#last_name')
        var pass_profile = $('#pass_frofile')
        var rp_pass = $('#rp_pass_profile')
        var check = 0;
        if (files) {
            formData.append('file', files)

        } else {
            check++;
        }
        if (first_name.val().trim() != "") {
            formData.append('first_name', first_name.val())

        } else {
            check++
        }
        if (last_name.val().trim() != "") {
            formData.append('last_name', last_name.val())
        } else {
            check++
        }
        if (pass_profile.val().trim() != rp_pass.val().trim()) {
            swall('Mật khẩu không trùng khớp', 'error')
        } else {
            formData.append('pass_profile', pass_profile.val())
            formData.append('rp_pass_profile', rp_pass.val())
        }
        if (check >= 3) {
            swall('Bạn không có thay đổi nào', 'success');

        } else {
            $.ajax({
                url: 'ajax/changer_profile.php',
                type: 'post',
                data: formData,

                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: () => {
                    $(this).html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
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
    $('#post_new').click(() => {
        var formData = new FormData()
        var content = $('#content').val()
        var files = $('#img')[0].files[0]
        formData.append('img', files);
        formData.append('content', content);
        if (content.trim() !== "" && !files) {
            Swal.fire({
                title: 'Thông báo',
                text: "Bạn đăng bài viết nhưng không dùng ảnh",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Có , tôi muốn đăng bài!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "ajax/new_post.php",
                        type: 'post',
                        data: formData,
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                        beforeSend: () => {
                            $(this).html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
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
        } else if (files && content.trim() == "") {
            Swal.fire({
                title: 'Thông báo',
                text: "Bạn đăng bài viết nhưng không có nội dung",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Có , tôi muốn đăng bài!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "ajax/new_post.php",
                        type: 'post',
                        data: formData,
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                        beforeSend: () => {
                            $(this).html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
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

        } else if (files && content.trim() !== "") {

            $.ajax({
                url: "ajax/new_post.php",
                type: 'post',
                data: formData,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: () => {
                    $(this).html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
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


        } else if (content.trim() == "" && !files) {
            swall('Không có nội dung và ảnh không thể đăng bài', 'error')
        }

    })
    var limit = 1000;
    var action = 'inactive'
    var start = 0

    function load_post(limit, start) {
        $.ajax({
            url: 'ajax/load_post.php',
            method: 'post',
            data: { limit: limit, start: start },
            cache: false,
            success: function(data) {
                $('#load_data').append(data)
                if (data == "") {
                    $('#load_data_messages').html(`<button class='form-control btn btn_warning'> Đang tải bài viết </button>`)
                    action = 'active'
                } else {
                    $('#load_data_messages').html(`<button class=' btn btn-danger form-control'> Hết Bài viết rồi</button>`)
                    action = 'inactive'
                }
            }
        })

    }

    if (action == 'inactive') {
        action = 'active'
        load_post(limit, start)
    }
    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() > $('#load_data').height() && action == 'inactive') {
            action = 'active'
            start = start + limit
            setTimeout(function() {
                load_post(limit, start)
            }, 1000)
        }

    })
    $(document).on('click', 'a.like', function() {
        $.ajax({
            url: 'ajax/post.php',
            type: 'post',
            dataType: 'json',
            beforeSend: () => {

            },
            success: (res) => {
                if (res.status == 0) {
                    var data = $(this).parent().parent()
                    var post = data.children().attr('data')
                    post = parseInt(post)

                    var id_thanhvien = $('a.id_thanhvien').attr('data')
                    $.ajax({
                        url: 'ajax/like.php',
                        type: 'post',
                        data: { post: post, id_thanhvien: id_thanhvien },
                        dataType: 'json',
                        success: (like) => {
                            if (like.status == 0) {
                                swall(like.messages, 'success');
                                $(this).html('&nbsp;' + like.num_likes)
                                if (like.check_like == 0) {
                                    $(this).addClass('text-danger')

                                } else if (like.check_like == 1) {
                                    $(this).removeClass('text-danger')

                                }


                            } else if (like.status == 1) {
                                swall(like.messages, 'error')

                            }
                        }
                    })

                } else if (res.status == 1) {


                    swall('Bạn hãy đăng nhập để like', 'error')
                }
            }
        })
    });

})