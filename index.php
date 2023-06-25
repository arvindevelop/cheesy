<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
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
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
                        <a class="nav-link nav-text" href="#franchise">FRANCHAISE PARTNER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text" href="#menu">MENU</a>
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
                    <img src="assets/burger.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/burger.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/burger.jpg" class="d-block w-100" alt="...">
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
                <div class="py-1 d-flex justify-content-center">
                    <p class="para-above">hot dishes</p>
                </div>
                <div class="py-1 d-flex justify-content-center">
                    <h2>TODAY'S SPECIALITY</h2>
                </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="assets/burger.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="assets/burger.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="assets/burger.jpg" class="d-block w-100" alt="...">
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
        <!-- Today's speciality end -->

        <!-- Menu start -->
        <section class="my-5" id="menu">
            <div class="menu-container py-4">
                <div class="py-1 d-flex justify-content-center">
                    <p class="para-above">discover our</p>
                </div>
                <div class="py-1 d-flex justify-content-center">
                    <h2>TASTY MENU</h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-pull-6 vertical-middle">
                        <img src="assets/pizza.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-pull-6 vertical-middle list-container">
                        <div>
                            <h4>Italian Salsa Verde-----------------------------<span class="cost">18.5 $</span></h4>
                            <p>Three Italian Favorites: Baked Clams, Fried Calamari and Stuffed Shrimp</p>
                        </div>
                        <div>
                            <h4>Party Platter Wings---------------------------<span class="cost">10.3 $</span></h4>
                            <p>Three Italian Favorites: Baked Clams, Fried Calamari and Stuffed Shrimp</p>
                        </div>
                        <div>
                            <h4>Chicken Liver Parfait--------------------------<span class="cost">11.8 $</span></h4>
                            <p>Chicken, onion, vegetable oil, Sour cream sauce, pepper, salt</p>
                        </div>
                        <div>
                            <h4>Crab Congee-----------------------------------<span class="cost">17.4 $</span></h4>
                            <p>Biscuits with fresh sausage patties & country gravy</p>
                        </div>
                        <div>
                            <h4>Salt And Pepper Calamari--------------------<span class="cost">20.0 $</span></h4>
                            <p>Rocket, lime, chipotle aioli</p>
                        </div>
                        <div>
                            <h4>Western Sunrise-------------------------------<span class="cost">10.0 $</span></h4>
                            <p>Cornish mackerel, marinated tomatoes, fragrant curry, tamarillo</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Menu end -->

        <!-- Image gallery start -->
        <section class="my-5" id="image-gallery">
            <div class="image-gallery-container py-4">
                <div class="py-1 d-flex justify-content-center">
                    <h2>Image GALLERY</h2>
                </div>
            </div>
            <div class="container">
                <div class="row py-1">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/samosa.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/samosa.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/samosa.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/samosa.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <div class="row py-1">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/samosa.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/samosa.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/samosa.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/samosa.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </section>
        <!-- Image gallery end -->

        <!-- Video gallery start -->
        <section class="my-5" id="video-gallery">
            <div class="video-gallery-container py-4">
                <div class="py-1 d-flex justify-content-center">
                    <h2>VIDEO GALLERY</h2>
                </div>
            </div>
            <div class="container">
                <div class="row py-1">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/pizza.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/pizza.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/pizza.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/pizza.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <div class="row py-1">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/pizza.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/pizza.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/pizza.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/pizza.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </section>
        <!-- Video gallery end -->

        <!-- About start -->
        <section class="my-5" id="about">
            <div class="video-gallery-container py-4">
                <div class="py-1 d-flex justify-content-center">
                    <h2>ABOUT US</h2>
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
                <div class="py-1 d-flex justify-content-center">
                    <p class="para-above">Partner</p>
                </div>
                <div class="py-1 d-flex justify-content-center">
                    <h2>FRANCHISE PARTNER</h2>
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

        <!-- Dishes start -->
        <section class="my-5 bg-dark" id="dishes">
            <div class="video-gallery-container py-4">
                <div class="py-1 d-flex justify-content-center">
                    <p class="para-above">Restaurant dishes</p>
                </div>
                <div class="py-1 d-flex justify-content-center">
                    <h2 class="text-white">CHEF RECIPES</h2>
                </div>
            </div>
            <div class="container">
                <div class="row py-1">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/pizza.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/pizza.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/pizza.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/pizza.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <div class="row py-1">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/pizza.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/pizza.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/pizza.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-3 vertical-middle p-3">
                        <img src="assets/pizza.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <div class="py-4">
                    <div class="py-1 d-flex justify-content-center">
                        <button class="bg-danger py-2 px-2">
                            VIEW ALL
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dishes end -->

    </main>

    <!-- Footer start -->
    <div class="px-5 bg-light w-100" id="contact">
        <footer class="py-5">
            <div class="row">
            <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col-md-5 offset-md-1">
                <form>
                <h5>Subscribe to our newsletter</h5>
                <p>Monthly digest of what's new and exciting from us.</p>
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                    <label for="newsletter1" class="visually-hidden">Email address</label>
                    <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                    <button class="btn btn-primary" type="button">Subscribe</button>
                </div>
                </form>
            </div>
            </div>
        </footer>
    </div>  
    <div class="d-flex flex-column flex-sm-row justify-content-between border-top bg-danger py-3 px-5">
            <p>&copy; 2023 Cheesy Hunger, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
            </ul>
    </div> 
    <!-- Footer end-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>