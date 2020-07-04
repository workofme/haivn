<?php

    $id_post = $_REQUEST['query'];
    echo $id_post;
    $get_post = $db->total("SELECT * FROM `post` WHERE `id` = '$id_post' " );
    
 ?>
<main class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
                <h5 class="title py-2">New Images</h5>
                <div class="alert alert-warning" role="alert">
                    ban la nguoi quyet dinh bai viet co duoc hien thi hay khong, bai viet co luong dislike tren 10 thi se bi loai bo click nut dislike &nbsp;<i class="fas fa-thumbs-down"></i>
                    <br> Chú ý : HaiVN đang trong giai đoạn thử nghiệm
                </div>
                <div class=" post py-3">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <img src="assets/img/post/<?php echo $get_post['img'];   ?>" alt="" class="img-fluid img-post">
                    </div>
                   
                </div>

                <div class="row bootstrap snippets">
                    <div class="col-md-6 col-md-offset-2 col-sm-12">
                        <div class="comment-wrapper">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    Viết bình luận
                                </div>
                                <div class="panel-body">
                                    <form id="form-comment"></form>
                                    <textarea class="form-control" placeholder="write a comment..." rows="3" id="comment"></textarea>
                                    <br>
                                    <button type="submit" class="btn btn-info pull-right" id="btn-comment" data= "<?php echo $id_post; ?>">Post</button>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <ul class="media-list">
                                    <div id="load_comment"></div>
                                    <div id="load_data_comment"></div>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            


        </div>

    </main>