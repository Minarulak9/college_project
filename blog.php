<?php include('./config/db_con.php'); ?>
<?php $page='blog'; require './components/head.php'?>
<title>Blogs</title>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <?php require './components/top_nav.php' ?>
    <!-- Topbar End -->
    
    <!-- Navbar Start -->
    <?php require './components/navbar.php' ?>
    <!-- Navbar End -->
    
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Blog Post</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Blog Post</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Blog</h5>
                <h1 class="display-5">Latest Blog & News</h1>
            </div>
            <div class="wow row gy-4" data-wow-delay=".5s">
                <?php 
                        $sql="SELECT * FROM `blog` WHERE status='On' order by id desc";
                        $data=mysqli_query($conn,$sql);
                        $i=1;
                        while($result=mysqli_fetch_assoc($data))
                        {
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <img src="Admin/<?php echo $result['blog_image'] ?>" class="img-fluid w-100 rounded-top" alt="">
                            <div class="rounded-bottom bg-light">
                            <div class="d-flex justify-content-between p-4 pb-2">
                                <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>By Admin</span>
                                <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i><?php echo $result['publish_date'] ?></span>
                            </div>
                            <div class="px-4 pb-0">
                                <h4><?php echo $result['blog_title'] ?></h4>
                                <p><?php echo $result['blog_content'] ?></p>
                            </div>
                            <div class="p-4 py-2 d-flex justify-content-between bg-light rounded-bottom blog-btn">
                                <a href="./blog_view.php?id=<?php echo $result['id']?>" type="button" class="btn btn-primary border-0">Read More</a>
                                <a href="#" class="my-auto text-dark"><i class="fa fa-comments me-2"></i>23 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php
            }
            ?>
                

            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay=".3s">
        <div class="container py-5">
            <div class="row g-4 footer-inner">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-white fw-bold mb-4">About Blog</h4>
                        <p>The interface of blogs has changed significantly over time. Bloggers can now integrate various widgets and plugins into their platforms, such as a social media feed, a contact form, or an author profile.</p>
                        <p class="mb-0"><a class="" href="blog.php">Blog </a> &copy; 2023 All Blog Available.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-white fw-bold mb-4">Usefull Link</h4>
                        <div class="d-flex flex-column align-items-start">
                            <a class="btn btn-link ps-0" href="about.php"><i class="fa fa-check me-2"></i>About Us</a>
                            <a class="btn btn-link ps-0" href="contact.php"><i class="fa fa-check me-2"></i>Contact Us</a>
                            <a class="btn btn-link ps-0" href="service.php"><i class="fa fa-check me-2"></i>Our Services</a>
                            <a class="btn btn-link ps-0" href="index.php"><i class="fa fa-check me-2"></i>Terms & Condition</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-white fw-bold mb-4">Services Link</h4>
                        <div class="d-flex flex-column align-items-start">
                            <a class="btn btn-link ps-0" href="service.php"><i class="fa fa-check me-2"></i>Teacher</a>
                            <a class="btn btn-link ps-0" href="service.php"><i class="fa fa-check me-2"></i>Bridal Makeup</a>
                            <a class="btn btn-link ps-0" href="service.php"><i class="fa fa-check me-2"></i>Website Developer</a>
                            <a class="btn btn-link ps-0" href="service.php"><i class="fa fa-check me-2"></i>Artist</a>
                            <a class="btn btn-link ps-0" href="service.php"><i class="fa fa-check me-2"></i>Doctor</a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-white fw-bold mb-4">Contact Us</h4>
                        <a href="" class="btn btn-link w-100 text-start ps-0 pb-3 border-bottom rounded-0"><i class="fa fa-map-marker-alt me-3"></i>Kolkata, India</a>
                        <a href="" class="btn btn-link w-100 text-start ps-0 py-3 border-bottom rounded-0"><i class="fa fa-phone-alt me-3"></i>+9641657727</a>
                        <a href="" class="btn btn-link w-100 text-start ps-0 py-3 border-bottom rounded-0"><i class="fa fa-envelope me-3"></i>Onestepsolution@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                    <!-- <a href="#" class="text-primary mb-0 display-6">Pest<span class="text-white">Kit</span><i class="fa fa-spider text-primary ms-2"></i></a> -->
                </div>
                <!-- <div class="col-md-4 copyright-btn text-center text-md-start mb-3 mb-md-0 flex-shrink-0">
                    <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i class="fab fa-linkedin-in"></i></a>
                </div> -->
                <div class="col-md-4 my-auto text-center text-md-end text-white">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    <!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br>Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>s -->
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->
    

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

    
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>