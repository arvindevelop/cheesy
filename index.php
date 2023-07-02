<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CHEESY HUNGER</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid nav-container">
            <a class="navbar-brand nav-text" href="#"><img src="assets/cheesy_hunger_logo.jpg" alt="logo" width="100" height="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active nav-text" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-text" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            GALLERY
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item nav-text" href="#video-gallery">VIDEO GALLERY</a></li>
                            <li><a class="dropdown-item nav-text" href="#image-gallery">IMAGE GALLERY</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text" href="#franchise">FRANCHAISE MODEL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text" href="menu.php">MENU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text" href="#dishes">RECEPIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text" href="#contact">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <div class="px-3 mb-2">
        <div class="franchise-div card px-3" style="float:left;">
            <p class="pb-0 mb-0 franchise-enq">Franchise Enquiry</p>
            <p class="text-center franchise-enq-no mb-0">9955002277</p>
        </div>

        <div style="float:right; padding-top:7px;">
            <div>
                <a href="https://www.instagram.com/your_username" target="_blank" class="social-icon">
                    <i class="fab fa-instagram" style="color: #833AB4;"></i>
                </a>
            </div>
            <div>
                <a href="https://twitter.com/your_username" target="_blank" class="social-icon">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>

    <main>
        <!-- slider section start -->
        <section class="slider-section">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="assets/photo/slider1.jpg" class="d-block w-100 slider-img" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/photo/slider2.jpg" class="d-block w-100 slider-img" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/photo/slider3.jpg" class="d-block w-100 slider-img" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- slider section end -->

        <!-- Today's speciality start -->
        <section class="my-5">
            <div class="todays-speciality-container py-4">
                <!-- <div class="py-1 d-flex justify-content-center">
                    <p class="para-above">Hot Dishes</p>
                </div> -->
                <div class="py-1 d-flex justify-content-center">
                    <p class="para-above">Let's Discover</p>
                </div>
                <!-- <div class="py-1 d-flex justify-content-center">
                    <h2>SPECIALITY</h2>
                </div> -->
            </div>
            <!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <video src="assets/video/video12.mp4" alt="..." autoplay loop muted class="d-block w-100" height="555"></video>
                        </div>
                        <div class="carousel-item">
                        <video src="assets/video/video10.mp4" alt="..." autoplay loop muted class="d-block w-100" height="555"></video>
                        </div>
                        <div class="carousel-item">
                        <video src="assets/video/video13.mp4" alt="..." autoplay loop muted class="d-block w-100" height="555"></video>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
            </div> -->
            <div class="container">
                <div class="row py-1">
                    <div class="col-4 px-1">
                    <video src="assets/video/video12.mp4" alt="..." autoplay loop muted class="d-block w-100"></video>
                    </div>
                    <div class="col-4 px-1">
                    <video src="assets/video/video10.mp4" alt="..." autoplay loop muted class="d-block w-100"></video>
                    </div>
                    <div class="col-4 px-1">
                    <video src="assets/video/video13.mp4" alt="..." autoplay loop muted class="d-block w-100"></video>
                    </div>
                </div>
        </section>
        <!-- Today's speciality end -->

        <!-- Menu start -->
        <section class="my-5" id="menu">
            <div class="menu-container py-4">
                <!-- <div class="py-1 d-flex justify-content-center">
                    <p class="para-above">Discover Our</p>
                </div> -->
                <div class="py-1 d-flex justify-content-center">
                    <p class="para-above">Tasty Menu</p>
                </div>
                <!-- <div class="py-1 d-flex justify-content-center">
                    <h2>TASTY MENU</h2>
                </div> -->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-pull-6 vertical-middle pb-2">
                        <img src="assets/photo/menu2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-pull-6 vertical-middle">
                        <img src="assets/photo/menu3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </section>
        <!-- Menu end -->

        <!-- Image gallery start -->
        <section class="my-5" id="image-gallery">
            <div class="image-gallery-container py-4">
                <div class="py-1 d-flex justify-content-center">
                    <h2 class="para-above">Image Gallery</h2>
                </div>
            </div>
            <div class="container">
                <div class="row py-1">
                    <div class="col-4 px-1">
                        <img src="assets/photo/outlet.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-4 px-1">
                        <img src="assets/photo/orgPhoto6.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-4 px-1">
                        <img src="assets/photo/orgPhoto7.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <div class="row py-1">
                    <div class="col-4 px-1">
                        <img src="assets/photo/orgPhoto3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-4 px-1">
                        <img src="assets/photo/orgPhoto1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-4 px-1">
                        <img src="assets/photo/orgPhoto4.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <div class="row py-1">
                    <div class="col-4 px-1">
                        <img src="assets/photo/orgPhoto5.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-4 px-1">
                        <img src="assets/photo/orgPhoto8.jpg" class="d-block w-100 rem-fig" alt="...">
                    </div>
                    <div class="col-4 px-1">
                        <img src="assets/photo/orgPhoto9.jpg" class="d-block w-100 rem-fig" alt="...">
                    </div>
                </div>
            </div>
        </section>
        <!-- Image gallery end -->

        <!-- Video gallery start -->
        <section class="my-5" id="video-gallery">
            <div class="video-gallery-container py-4">
                <div class="py-1 d-flex justify-content-center">
                    <h2 class="para-above">Video Gallery</h2>
                </div>
            </div>
            <div class="container">
                <div class="row py-1">
                    <div class="col-4 px-1">
                        <video src="assets/video/video1.mp4" alt="..." autoplay loop muted class="d-block w-100"></video>
                    </div>
                    <div class="col-4 px-1">
                        <video src="assets/video/video2.mp4" alt="..." autoplay loop muted class="d-block w-100"></video>
                    </div>
                    <div class="col-4 px-1">
                        <video src="assets/video/video3.mp4" alt="..." autoplay loop muted class="d-block w-100"></video>
                    </div>
                </div>
                <div class="row py-1">
                    <div class="col-4 px-1">
                        <video src="assets/video/video5.mp4" alt="..." autoplay loop muted class="d-block w-100"></video>
                    </div>
                    <div class="col-4 px-1">
                        <video src="assets/video/video6.mp4" alt="..." autoplay loop muted class="d-block w-100"></video>
                    </div>
                    <div class="col-4 px-1">
                        <video src="assets/video/video7.mp4" alt="..." autoplay loop muted class="d-block w-100"></video>
                    </div>
                </div>
                <div class="row py-1">
                    <div class="col-4 px-1">
                        <video src="assets/video/video4.mp4" alt="..." autoplay loop muted class="d-block w-100"></video>
                    </div>
                    <div class="col-4 px-1">
                        <video src="assets/video/video8.mp4" alt="..." autoplay loop muted class="d-block w-100"></video>
                    </div>
                </div>
            </div>
        </section>
        <!-- Video gallery end -->

        <!-- About start -->
        <section class="my-5" id="about">
            <div class="video-gallery-container py-4">
                <div class="py-1 d-flex justify-content-center">
                    <h2 class="para-above">About Us</h2>
                </div>
            </div>
            <div class="py-5">
                <img src="assets/about.jpeg" class="d-block w-100" alt="...">
            </div>
        </section>
        <!-- About end -->

        <!-- franchise-partner start -->
        <section class="my-5" id="franchise">
            <div class="franchise-partner-container py-4">
                <!-- <div class="py-1 d-flex justify-content-center">
                    <p class="para-above">Partner</p>
                </div>
                <div class="py-1 d-flex justify-content-center">
                    <h2>Franchise Partner</h2>
                </div> -->
                <div class="py-1 d-flex justify-content-center">
                    <p class="para-above">Franchise Partner</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-pull-6 vertical-middle p-3">
                        <img src="assets/pizza.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-pull-6 vertical-middle p-3">
                        <img src="assets/pizza.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </section>
        <!-- franchise-partner end -->

    </main>

    <!-- Footer start -->
    <div class="middle contact-div bg-light pt-2 pb-0" id="contact-1">
                <h3 class="middle-head" style="">Socila Media</h3>
                    <a href="https://twitter.com/your_username" target="_blank" class="social-icon">
                        <i class="fab fa-twitter">&nbsp;</i>
                    </a>
                    <a href="https://www.instagram.com/your_username" target="_blank" class="social-icon">
                        <i class="fab fa-instagram">&nbsp;</i>
                    </a>
                    <a href="https://www.facebook.com/your-page" target="_blank" style="color:blue;">
                        <i class="fab fa-facebook">&nbsp;</i>
                    </a>

                    <a href="https://wa.me/your-phone-number" target="_blank" style="color:#25D366;">
                        <i class="fab fa-whatsapp">&nbsp;</i>
                    </a>

                    <a href="https://www.youtube.com/your-channel" target="_blank" style="color:red;">
                        <i class="fab fa-youtube">&nbsp;</i>
                    </a>

                    <a href="https://www.linkedin.com/in/your-profile" target="_blank" style="color:#0072b1;">
                        <i class="fab fa-linkedin"></i>
                    </a>    
                </div>
    <div class="px-5 bg-light w-100" id="contact">
        <footer class="py-5 footer-div">
            <div class="container-div">
                <div class="left contact-div">
                    <h3 style="font-weight:bold;">Opening Hours</h3>
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa fa-calendar" aria-hidden="true"></i> Mon - Sun</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa">&#xf017;</i> 10 AM - 10 PM</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fa">&#xf3c5;</i> Bihar, India</a></li>
                    </ul>
                </div>
                <div class="middle contact-div" id="contact-2">
                <h3 class="middle-head" style="">Socila Media</h3>
                    <a href="https://twitter.com/your_username" target="_blank" class="social-icon">
                        <i class="fab fa-twitter">&nbsp;</i>
                    </a>
                    <a href="https://www.instagram.com/your_username" target="_blank" class="social-icon">
                        <i class="fab fa-instagram">&nbsp;</i>
                    </a>
                    <a href="https://www.facebook.com/your-page" target="_blank" style="color:blue;">
                        <i class="fab fa-facebook">&nbsp;</i>
                    </a>

                    <a href="https://wa.me/your-phone-number" target="_blank" style="color:#25D366;">
                        <i class="fab fa-whatsapp">&nbsp;</i>
                    </a>

                    <a href="https://www.youtube.com/your-channel" target="_blank" style="color:red;">
                        <i class="fab fa-youtube">&nbsp;</i>
                    </a>

                    <a href="https://www.linkedin.com/in/your-profile" target="_blank" style="color:#0072b1;">
                        <i class="fab fa-linkedin"></i>
                    </a>    
                </div>
                <div class="right contact-div">
                    <h3 class="right-head" style="font-weight:bold;">Contact Us</h3>
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">info@cheesyhunger.com <i class="fa">&#xf0e0;</i></a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Call us for franchise <i class="fa">&#xf095;</i></a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">+91-9955002277 <i class="fa">&#xf3cd;</i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>  
    <div class="d-flex flex-column flex-sm-row justify-content-between border-top bg-danger py-3 px-5">
            <p class="mx-auto">Copyright &copy; 2023 Cheesy Hunger, Inc. All rights reserved.</p>
    </div> 
    <!-- Footer end-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script> -->
</body>
</html>