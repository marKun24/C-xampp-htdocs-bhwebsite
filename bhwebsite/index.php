<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boarding House Finder - HOME</title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <?php  require('inc/links.php'); ?>
        <style>
            /* availability-form EP-2 */
            .pop:hover {
                transform: scale(1.03);
                transition: transform 0.3s ease;
            }
        </style>

    </head>
    <body>
            <!-- NAV -->
        <?php require('inc/header.php');?>
        
        <!-- FADE2 NGA PICTURE SA HOME-->
        <div class="container-fluid p-0">
            <div class="swiper swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/thumbnail/thumbnail-4.png" class="w-100 d-block">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/thumbnail/thumbnail-5.png" class="w-100 d-block">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/thumbnail/thumbnail-6.png" class="w-100 d-block">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- SEARCH BAR -->
        <br>
        <div class="container-fluid p-0">
            <div class="row mx-2 align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="d-flex align-items-center">
                        <label class="form-label me-2">Search</label>
                        <input class="form-control me-2" type="search" placeholder="Search anything!" aria-label="Search">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-center">
                        <label class="form-label me-2">Price</label>
                        <input class="form-control shadow-none" type="number" placeholder="min - max" style="flex: 1;">
                        <div class="dropdown border border-dark">
                            <button class="btn dropdown-toggle bg-light" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">P5000 - P10,000</a></li>
                                <li><a class="dropdown-item" href="#">P10,000 - 20,000</a></li>
                                <li><a class="dropdown-item" href="#">P20,000 - P30,000</a></li>
                                <li><a class="dropdown-item" href="#">Other</a></li>
                            </ul>
                        </div>
                        <button class="btn btn-outline text-dark bg-orange text-white ms-2" type="submit">Search</button>
                        <button class="btn btn-outline text-dark bg-orange text-white ms-2" type="submit"><i class="bi bi-funnel"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ROOMS -->

        <br><br>
        <div>
            <h1 style="margin-left: 20px; color: orange; font-weight: bold;">FEATURED ROOMS</h1>
        </div>
        <br>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 my-3 pop">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/rooms/1/441877361_10168853735085165_5223745531865780054_n - thumbnail.jpg" class="card-img-top" alt="...">
                        
                        <div class="card-body">
                            <h5>Apartment for Rent</h5>
                            <h6 class="mb-4">₱10,000 per month</h6>
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded bg-light text-dark text-wrap">
                                    1 room
                                </span>
                                <span class="badge rounded bg-light text-dark text-wrap">
                                    1 Own CR & sink
                                </span>
                                <span class="badge rounded bg-light text-dark text-wrap">
                                    2 Persons maximum
                                </span>
                                <span class="badge rounded bg-light text-dark text-wrap">
                                    1 Metered electric & water
                                </span>
                            </div>
                            <br>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                            </div>
                            <br>
                            <div class="rating mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <span class="badge rounded bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-dark"></i>
                                </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-primary text-white bg-orange shadow-none btn-dark-hover" style="border: none;">Book Now</a>
                                <a href="#" class="btn btn-primary text-dark bg-white shadow-none btn-orange-hover" style="border: 2px solid #333;">More details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-3 pop">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/rooms/1/441877361_10168853735085165_5223745531865780054_n - thumbnail.jpg" class="card-img-top" alt="...">
                        
                        <div class="card-body">
                            <h5>Apartment for Rent</h5>
                            <h6 class="mb-4">₱10,000 per month</h6>
                            <div class="features mb-1">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded bg-light text-dark text-wrap">
                                    1 room
                                </span>
                                <span class="badge rounded bg-light text-dark text-wrap">
                                    1 Own CR & sink
                                </span>
                                <span class="badge rounded bg-light text-dark text-wrap">
                                    2 Persons maximum
                                </span>
                                <span class="badge rounded bg-light text-dark text-wrap">
                                    1 Metered electric & water
                                </span>
                            </div>
                            <br>
                            <div class="facilities mb-1">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                            </div>
                            <br>
                            <div class="rating mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <span class="badge rounded bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-dark"></i>
                                </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-primary text-white bg-orange shadow-none btn-dark-hover" style="border: none;">Book Now</a>
                                <a href="#" class="btn btn-primary text-dark bg-white shadow-none btn-orange-hover" style="border: 2px solid #333;">More details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-3 pop">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img src="images/rooms/1/441877361_10168853735085165_5223745531865780054_n - thumbnail.jpg" class="card-img-top" alt="...">
                        
                        <div class="card-body">
                            <h5>Apartment for Rent</h5>
                            <h6 class="mb-4">₱10,000 per month</h6>
                            <div class="features mb-1">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded bg-light text-dark text-wrap">
                                    1 room
                                </span>
                                <span class="badge rounded bg-light text-dark text-wrap">
                                    1 Own CR & sink
                                </span>
                                <span class="badge rounded bg-light text-dark text-wrap">
                                    2 Persons maximum
                                </span>
                                <span class="badge rounded bg-light text-dark text-wrap">
                                    1 Metered electric & water
                                </span>
                            </div>
                            <br>
                            <div class="facilities mb-1">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded bg-light text-dark text-wrap">
                                    Wifi
                                </span>
                            </div>
                            <br>
                            <div class="rating mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <span class="badge rounded bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-dark"></i>
                                </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-primary text-white bg-orange shadow-none btn-dark-hover" style="border: none;">Book Now</a>
                                <a href="#" class="btn btn-primary text-dark bg-white shadow-none btn-orange-hover" style="border: 2px solid #333;">More details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-outline text-white btn-orange-hover me-lg-3 me-3" style="background-color: #404040;">More Rooms >>></a>
                </div>
            </div>
        </div>

        <!-- FACILITIES -->

        <br><br>
        <div>
            <h1 style="margin-left: 20px; color: orange; font-weight: bold;">FACILITIES</h1>
        </div>
        <br>

        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 pop">
                    <img src="images/features/wifi.svg" width="80px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 pop">
                    <img src="images/features/wifi.svg" width="80px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 pop">
                    <img src="images/features/wifi.svg" width="80px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 pop">
                    <img src="images/features/wifi.svg" width="80px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 pop">
                    <img src="images/features/wifi.svg" width="80px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-outline text-white btn-orange-hover me-lg-3 me-3" style="background-color: #404040;">More Facilities >>></a>
                </div>
            </div>
        </div>

        
        <!-- //FACILITIES -->

        <br><br>
        <div>
            <h1 style="margin-left: 20px; color: orange; font-weight: bold;">TESTIMONIALS</h1>
        </div>
        <br>
        <div class="container-fluid p-0">
            <div class="swiper swiper-testimonials">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-light p-4">
                        <div class="profile d-flex align-items-center justify-content-center p-4">
                            <img src="images/sample_profile/profile_1.png" width="50px">
                            <h6 class="m-0 ms-2">Yen G****</h6>
                        </div>
                        <p>
                            Nice clean rooms they've got!
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    
                    <div class="swiper-slide bg-light p-4">
                        <div class="profile d-flex align-items-center justify-content-center p-4">
                            <img src="images/sample_profile/profile_1.png" width="50px">
                            <h6 class="m-0 ms-2">Yen G****</h6>
                        </div>
                        <p>
                            Nice clean rooms they've got!
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <div class="swiper-slide bg-light p-4">
                        <div class="profile d-flex align-items-center justify-content-center p-4">
                            <img src="images/sample_profile/profile_1.png" width="50px">
                            <h6 class="m-0 ms-2">Yen G****</h6>
                        </div>
                        <p>
                            Nice clean rooms they've got!
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
            </div>          
            <div class="swiper-pagination"></div>
            
        </div>

      
        <!-- FOOTER -->
        <?php require('inc/footer.php'); ?>
    
        <!-- SCRIPT -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
            });

            var swiper = new Swiper(".swiper-testimonials", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                slidesPerView: "3",
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1
                    },
                    640: {
                        slidesPerView: 1
                    },
                    768: {
                        slidesPerView: 2
                    },
                    1024: {
                        slidesPerView: 3
                    },
                }
            });
        </script>
    </body>
</html>
