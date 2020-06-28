<?php
    if(isset($_REQUEST['views'])){
        $page = $_REQUEST['views'] . '.php';
        include "page/".$page;
    }
    else {
?>
<?php
    // $post = $db->total("SELECT * FROM `post`");
    $num_post = $db->countTable('post' , array('active' => 0));
    $query = $db->query("SELECT * FROM  `post`");
?>
<main class="container">

    <div class="row">
        <div class="col-12 col-sm-12 col-md-8 col-xl-8 col-lg-8">
            <h5 class="title py-2">New Images</h5>
            <div class="alert alert-warning" role="alert">
                bài viết có lượng dislike nhiều sẽ không được hiển thị &nbsp;<i class="fas fa-thumbs-down"></i>
                <br> Chú ý : HaiVN đang trong giai đoạn thử nghiệm
            </div>
            <?php if($num_post > 0){
                
                while($row = mysqli_fetch_array($query)):
              ?>
            <div class="row post py-3">
            
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                <?php if($row['img'] !== ""){ ?>
                    <img src="assets/img/post/<?php echo $row['img']; ?>" alt="" class="img-fluid img-post">
                <?php } else { ?>
                    <img src="assets/img/anh.jpg" alt="" class="img-fluid img-post">
             <?php } ?>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                    <div class="view">
                        <h5 class="title "><?php echo $row['content']; ?></h5>
                        <p>
                            <a class="far fa-eye views" href="">&nbsp;200</a>
                            <a class="fas fa-comments commnets" href=""> &nbsp; 22 &nbsp;</a>
                            <a class="fas fa-thumbs-down dislike" href="">&nbsp;10</a>
                            <a class="far fa-heart like" href=""> &nbsp; 100</a></p>
                    </div>
                </div>
            </div>
              <?php endwhile; ?>
            <?php } ?>

        </div>
        <div class="col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">thiết lập nhanh</h5>

                        </div>
                        <div class="modal-body">
                            <div class="row ">
                                <div class="col">
                                    tự động thu gọn ảnh
                                </div>
                                <div class="col">
                                    <label class="switch">
                                        <input type="checkbox" data="off" id="input">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="save">Save
                                changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="title py-2">Xu huong</h5>
            <ul class="list-group">
                <li class="list-group-item ">
                    <h5> <i class="fab fa-hotjar text-danger"></i> &nbsp; clip Hot</h5>
                    <ul>
                        <li><a href=""> Việt Nam Sắp Có Nhật Thực Cực Đẹp....</a></li>
                        <li><a href=""> Việt Nam Sắp Có Nhật Thực Cực Đẹp....</a></li>
                        <li><a href=""> Việt Nam Sắp Có Nhật Thực Cực Đẹp....</a></li>
                        <li><a href=""> Việt Nam Sắp Có Nhật Thực Cực Đẹp....</a></li>
                    </ul>
                </li>
                <li class="list-group-item ">
                    <h5> <i class="fab fa-hotjar text-danger"></i> &nbsp; clip Hot</h5>
                    <ul>
                        <li><a href=""> Việt Nam Sắp Có Nhật Thực Cực Đẹp....</a></li>
                        <li><a href=""> Việt Nam Sắp Có Nhật Thực Cực Đẹp....</a></li>
                        <li><a href=""> Việt Nam Sắp Có Nhật Thực Cực Đẹp....</a></li>
                        <li><a href=""> Việt Nam Sắp Có Nhật Thực Cực Đẹp....</a></li>
                    </ul>
                </li>
                <li class="list-group-item ">
                    <h5> <i class="fab fa-hotjar text-danger"></i> &nbsp; clip Hot</h5>
                    <ul>
                        <li><a href=""> Việt Nam Sắp Có Nhật Thực Cực Đẹp....</a></li>
                        <li><a href=""> Việt Nam Sắp Có Nhật Thực Cực Đẹp....</a></li>
                        <li><a href=""> Việt Nam Sắp Có Nhật Thực Cực Đẹp....</a></li>
                        <li><a href=""> Việt Nam Sắp Có Nhật Thực Cực Đẹp....</a></li>
                    </ul>
                </li>

            </ul>
        </div>


    </div>

</main>
<?php } ?>