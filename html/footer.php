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
                        <div class="modal-body mb-1">
                            <div class="md-form form-sm mb-5">
                                <i class="fas fa-envelope prefix"></i>
                                <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fas fa-lock prefix"></i>
                                <input type="password" id="modalLRInput11"
                                    class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput11">Your
                                    password</label>
                            </div>
                            <div class="text-center mt-2">
                                <button class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
                            </div>
                        </div>
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
                        <div class="modal-body">
                            <div class="md-form form-sm mb-5">
                                <i class="fas fa-envelope prefix"></i>
                                <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
                            </div>

                            <div class="md-form form-sm mb-5">
                                <i class="fas fa-lock prefix"></i>
                                <input type="password" id="modalLRInput13"
                                    class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput13">Your
                                    password</label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fas fa-lock prefix"></i>
                                <input type="password" id="modalLRInput14"
                                    class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat
                                    password</label>
                            </div>

                            <div class="text-center form-sm mt-2">
                                <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
                            </div>

                        </div>
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


<div id="extraLargeModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Đăng Bài Mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form id="form-post">
                    <div class="form-group">
                        <label for="title">Tiêu Đề</label>
                        <input type="text" class="form-control" id="title" >
                        
                    </div>
                    <div class="form-group">
                        <label for="content">Nội dung</label>
                        <textarea class="form-control" id="content" rows="3"></textarea>
                    </div>
                   
                    <div class="form-group ">
                    <label for="anh">Ảnh</label>
                    <input type="file" class="" id="anh">
                        
                    </div>
                  <div class="text-center">
                      <button class="btn btn-success" type="submit">đănng bài</button>
                  </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>