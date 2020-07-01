<?php 
session_start();
include "../Database.php";
include "../Function.php";
$db = new Database;



if(isset($_POST['limit'])  && isset($_POST['start'])){
    $num_post = $db->num_row('SELECT * FROM `post` WHERE "active" = 0');
    if($num_post > 0){
    $query = $db->query("SELECT * FROM `post` ORDER BY `id` DESC LIMIT {$_POST['start']} , {$_POST['limit']}" );
    
    // $query = $db->query("SELECT * FROM `post` " );
    
        while($row = mysqli_fetch_array($query)):
            $user_post = $db->fetchID('users' , $row['id_thanhvien']);
            $first_name = $user_post['ho'];
            $last_name = $user_post['ten'];
?>

<div class="row post py-3">
            
    <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
        <?php if($row['img'] !== ""){ ?>
        <img src="assets/img/post/<?php echo $row['img']; ?>" alt="" class="img-fluid img-post">
        <?php } else { ?>  
            <img src="assets/img/avatar/anh.jpg" alt="" class="img-fluid img-post">
        <?php } ?>
         
    </div>
    <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
        <div class="view">
            <h5 class="title id" data= "<?php echo $row['id']; ?>" >
            
            <?php 
            if($row['content'] !== "") {
                echo $row['content'];  
            }
            else {
                echo "Bài viết không có nội dung";
            }
            ?>
            </h5>
            <p>
                <a class="far fa-eye views" href="">&nbsp;200</a>
                <a class="fas fa-comments commnets" href=""> &nbsp; 22 &nbsp;</a>
                <a class="fas fa-thumbs-down dislike " href="">&nbsp;10</a>
                <?php
                // $check_like = $db->num_row("SELECT * FROM `likes` WHERE `post` = '{$row['id']}' AND `id_thanhvien_like` = '{$get_user['id']}' AND `id_thanhvien_post` = '{$row['id_thanhvien']}'");
                if(isset($username)){
                 $get_user = $db->total("SELECT * FROM `users` WHERE `user` = '$username' ");

                $check_like = $db->countTable('likes' , array('post' => $row['id'] , 'id_thanhvien_like' => $get_user['id'] , 'id_thanhvien_post' => $row['id_thanhvien'])); 
                if($check_like > 0){
                    $get_like = $db->total("SELECT * FROM `likes` WHERE `id_thanhvien_like` = '{$get_user['id']}'  AND `id_thanhvien_post` = '{$row['id_thanhvien']}' ");
                    $like = $get_like['status'];
                }
                else{
                    $like = 1;
                }
                 ?>
                <?php if($like == 0){ ?>
                <a class=" far fa-heart like   text-danger " >&nbsp;  <?php echo $row['num_likes']; ?></a>
                <?php } elseif($like == 1) { ?>
                    <a class="far fa-heart like" > &nbsp;  <?php echo $row['num_likes']; ?> </a>
                <?php } ?>
                <?php } else { ?>
                    <a class="far fa-heart like" > &nbsp;  <?php echo $row['num_likes']; ?> </a>
                <?php } ?>
            </p>
            <p><a class="id_thanhvien" data="<?php echo $row['id_thanhvien']; ?>">Tác giả <b class="btn-primary"><?php echo $first_name . " " . $last_name; ?></b></a></p>
            <p><a href="">Thời gian <b class="btn-success"><?php echo $row['date']; ?></b></a></p>
         </div>
    </div>
</div>
        <?php endwhile; ?>
                
        <?php } ?>
<?php } ?>
