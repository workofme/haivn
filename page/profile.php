<?php 

if(isset($username)){
  $get_user = $db->total("SELECT * FROM `users` WHERE `user` = '$username'");
  $user = $get_user['user'];
  $like = $get_user['like'];

 ?>
 <div class="container bootstrap snippet py-3">
    <div class="row">
  		<div class="col-sm-10"><h3>Trang Cá Nhân <?php echo $username; ?></h3></div>
    	
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload">
      </div></hr><br>

               
          <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="http://bootnipets.com"><?php echo base_url() ?></a></div>
          </div>
          
          
          <ul class="list-group">
            
            
            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span><?php echo $get_user['like']; ?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> <?php echo $get_user['fllow']; ?></li>
          </ul> 
               
          
          
        </div><!--/col-3-->
        <div class="col"></div>
    	<div class="col-sm-8 py-2">
            <ul class="">
                <li class="active"><a>Thay đổi thông tin</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Tên hiển thị</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo $get_user['user']; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Đổi mật khẩu</h4></label>
                              <input type="password" class="form-control" id="pass_frofile" placeholder="*****" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Nhập lại mật khẩu</h4></label>
                              <input type="password" class="form-control"  id="rp_pass_profile" placeholder="*****" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn  btn-success" type="button" id="save_profile"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-danger" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div>
            
            

        </div>
    </div>

<?php } else { ?>
<div class="container py-2">
<div class="alert alert-warning" role="alert">
  Vui lòng đăng kí hoặc đăng nhập
</div>
</div>

<?php } ?>