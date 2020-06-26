<?php 

include "html/header.php";


?>
<div class="container py-3">
    <div class="fb-profile">
        <img align="left" class="fb-image-lg" src="http://lorempixel.com/850/280/nightlife/5/" alt="Profile image example"/>
        <img align="left" class="fb-image-profile thumbnail img-fluid " src="assets/img/anh.jpg" alt="Profile image example" style="width: 16%"/>
        <div class="fb-profile-text">
            <h1>Eli Macy</h1>
            <p>Girls just wanna go fun.</p>
			<p><a href="" class="text-primary"> <i class="fas fa-wifi"></i>  Fllowing </a>  <b class="text-success">1000</b> <a href="" class="text-primary"> <i class="fas fa-wifi"></i>  like </a>  <b class="text-success">1000</b></p>
        </div>
    </div>



    <div class="container-fluid gedf-wrapper py-3">
        <div class="row">
            <div class="col-md-4 py-3">
                <div class="card">
                    <div class="card-body">
                        <div class="h5">@LeeCross</div>
                        <div class="h7 text-muted">Fullname : Miracles Lee Cross</div>
                        <div class="h7">Developer of web applications, JavaScript, PHP, Java, Python, Ruby, Java, Node.js,
                            etc.
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="h6 text-muted"><i class="fa fa-gittip text-danger"></i>  like</div>
                            <div class="h5">5.2342</div>
                        </li>
                        <li class="list-group-item">
                            <div class="h6 text-muted"> <i class="fas fa-wifi text-success"></i>  Following</div>
                            <div class="h5">6758</div>
                        </li>
                        <li class="list-group-item">
						<div class="h6 text-muted"> <i class="fas fa-venus text-danger"></i> <i class="fas fa-mars-stroke text-primary"></i> Giới Tính</div>
                            <div class="h5">Nữ</div>
						</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 gedf-main py-3">

                <!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Make
                                    a publication</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Images</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <div class="form-group">
                                    <label class="sr-only" for="message">post</label>
                                    <textarea class="form-control" id="message" rows="3" placeholder="What are you thinking?"></textarea>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Upload image</label>
                                    </div>
                                </div>
                                <div class="py-4"></div>
                            </div>
                        </div>
                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary">share</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- Post /////-->

                <!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">@LeeCross</div>
                                    <div class="h7 text-muted">Miracles Lee Cross</div>
                                </div>
                            </div>
                            <div>
                                
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
                        <a class="card-link" href="#">
							
                            <h5 class="card-title py-2">Lorem ipsum dolor sit amet, consectetur adip.</h5>
                        </a>

                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium esse magnam nemo dolor
                            sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
                        </p>
						<img src="assets/img/anh.jpg" alt="" class="img-fluid">
						
                    </div>
                    <div class="card-footer text-center">
					<p class="pt-3 px-2">Có <b class="text-danger">50</b> like và <b class="text-success">30</b> bình luận	</p>
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                    </div>
                </div>
                <!-- Post /////-->


                <!--- \\\\\\\Post-->
                
                <!-- Post /////-->



            </div>
           
        </div>
    </div>
</div> <!-- /container --> 

<?php include "html/footer.php"; ?>