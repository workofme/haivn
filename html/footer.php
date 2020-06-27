<button onclick="topFunction()" id="myBtn" title="Go to top"> <i class="fas fa-arrow-up"></i></button>
<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i
                                class="fas fa-user mr-1"></i>
                            Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i
                                class="fas fa-user-plus mr-1"></i>
                            Register</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                        <!--Body-->
                        <form id="login">
                            <div class="modal-body mb-1">
                                <div class="md-form form-sm mb-5">
                                    <i class="fas fa-envelope prefix"></i>
                                    <input type="text" id="user_login" require
                                        class="form-control form-control-sm validate" placeholder="Tên tài khoản">
                                    
                                </div>

                                <div class="md-form form-sm mb-4">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" id="pass_login"
                                        class="form-control form-control-sm validate" placeholder="Mật khẩu">
                                    
                                </div>
                                <div class="text-center mt-2">
                                    <button class="btn btn-info" type="submit" id="btn-login">Đăng nhập </button>
                                </div>
                            </div>
                        </form>
                        <!--Footer-->
                        <div class="modal-footer">

                            <button type="button" class="btn btn-outline-info waves-effect ml-auto"
                                data-dismiss="modal">Close</button>
                        </div>

                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">

                        <!--Body-->
                        <form id="reg">
                            <div class="modal-body">
                                <div class="md-form form-sm mb-2">
                                    <i class="fas fa-envelope prefix"></i>
                                    <input type="text" id="user_reg" class="form-control form-control-sm validate" placeholder="Tên tài khoản">
                                    
                                </div>
                                <div class="row">
                                    <div class="md-form form-sm mb-3 col">
                                      <input type="text" class="form-control" placeholder="Họ" id="first_name">
                                    </div>
                                    <div class="md-form form-sm mb-3 col">
                                      <input type="text" class="form-control" placeholder="Tên" id="last_name">
                                    </div>
                                </div>
                                <div class="md-form form-sm mb-3">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" id="pass_reg" class="form-control form-control-sm validate" placeholder="Mật khẩu">
                                   
                                </div>

                                <div class="form-check form-check-inline">

                                    <input class="form-check-input" type="radio" name="gender" id="nam" value="1">
                                    <label class="form-check-label" for="nam">Nam</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="nu" value="2">
                                    <label class="form-check-label" for="nu">Nữ</label>
                                </div>

                                <div class="md-form form-sm mb-3">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" id="rp_pass" class="form-control form-control-sm validate" placeholder="Nhập lại mật khẩu">
                                    
                                </div>

                                <div class="text-center form-sm mt-2">
                                    <button class="btn btn-info" id="reg" type="submit" id="btn-reg">Đăng Kí </button>
                                </div>

                            </div>
                        </form>
                        <!--Footer-->
                        <div class="modal-footer">

                            <button type="button" class="btn btn-outline-info waves-effect ml-auto"
                                data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->




<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>

<script src="assets/js/ajax.js"></script>
</body>

</html>