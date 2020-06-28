<?php 
if(isset($username)){
    $get_user = $db->total("SELECT * FROM `users` WHERE `user` = '$username' ");
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />



    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
        integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/mdb.min.css">

    <link rel="stylesheet" href="assets/css/sweetalert2.css">
    <script src="assets/js/sweetalert2.all.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div id="loader-wrapper">

        <div id="loader">
            <p>LOADING</p>
            <div class="circ-one"></div>
            <div class="circ-two"></div>
        </div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" tabindex="-1">Hot <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1">Mới</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clip hài </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#" tabindex="-1">Action</a>
                                <a class="dropdown-item" href="#" tabindex="-1">Another action</a>

                                <a class="dropdown-item" href="#" tabindex="-1">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#" tabindex="-1">Ảnh động</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#" tabindex="-1">Link hay</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#" tabindex="-1">Chuyện cười</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#" tabindex="-1">Chuyện chế</a>
                        </li>
                    </ul>
                    <button type="button" id="post" class="btn btn-danger mx-2">Đăng bài</button>
                    <?php if(!isset($username)){ ?>
                    <button type="button" id="login" class="btn btn-primary" data-toggle="modal"
                        data-target="#modalLRForm">login / regis</button>
                    <?php }  else {?>


                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <?php echo $get_user['ho'] . " " . $get_user['ten']; ?>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" id="logout"> <i class="fas fa-sign-out-alt text-danger"></i> Đăng
                                xuất</a>
                            <a class="dropdown-item" href="?views=profile"> <i
                                    class="fas fa-user-alt text-success"></i>Thay đổi trang cá nhân</a>
                            <a class="dropdown-item" href="?views=profileview"> <i
                                    class="fas fa-user-alt text-success"></i>Trang cá nhân</a>
                        </div>
                    </div>
                    <?php if($get_user['avatar'] == ""){ ?>
                    <img alt="" src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/theme/team-4.jpg"
                        class="rounded-circle avatar">
                    <?php } else { ?>
                    <img alt="" src="assets/img/avatar/<?php echo $get_user['avatar'] ?>" class="rounded-circle avatar">
                    <?php } ?>
                    <?php } ?>

                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row head py-3">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 ">
                    <p>HaiVN.com - Cộng Đồng Mạng Việt Nam</p>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <i class="fas fa-cog " data-toggle="modal" data-target="#exampleModal"></i>
                    <i class="fas fa-mobile-alt phone"></i>
                </div>
            </div>
        </div>
    </header>