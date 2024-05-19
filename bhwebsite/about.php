<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boarding House Finder - ABOUT US</title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <?php  require('inc/links.php'); ?>
    
        <style>
              
        </style>
    </head>
    
    <body>
            <!-- NAV -->
        <?php require('inc/header.php');?>
  
        <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center" style="color: orange;">ABOUT US</h2>
            <div class="h-line bg-dark"></div>
            <p class="text-center mt-3">
                ibutang ang ABOUT US. ilis ni ang text unya
                sample text sample text sample text
            </p>
        </div> 

        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                    <h3 class="mb-3">Lorem ipsim dolor sit</h3>
                    <p>
                        lorem2aaaaaaaaaaaaaaaaaaaaaaaaaa
                        iawuhdiaubsadwbudawdasdawdawdasd
                        awiudaiwubdaiwudbawiawdasdwdasdaw
                        awdasdawdasd.
                    </p>
                </div>
                <div class="col-lg-5 col-md-5 mb-4 order-lg-1 order-md-2 order-1">
                    <div>
                        <img src="images/about/about.jpg" class="100">
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 align-items-center">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-light rounded shadow p-4 border-top border-orange border-4 text-center box">
                        <img src="images/about/door.svg" width="70px">
                        <h4 class="mt-3">100+ ROOMS</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-light rounded shadow p-4 border-top border-orange border-4 text-center box">
                        <img src="images/about/person.svg" width="70px">
                        <h4 class="mt-3">200+ CUSTOMERS</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-light rounded shadow p-4 border-top border-orange border-4 text-center box">
                        <img src="images/about/like.svg" width="70px">
                        <h4 class="mt-3">100+ REVIEWS</h4>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="my-5 rw-bold h-fron text-center">MANAGEMENT TEAM</h3>
            <div class="container px-4">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper mb-5">
                        <div class="swiper-slide bg-light text-center overflow-hidden rounded">
                            <img src="images/about/mar.jpg" class="w-100">
                            <h5 class="mt-2">Mar Vincent Villacarlos</h5>
                        </div>
                        <div class="swiper-slide bg-light text-center overflow-hidden rounded">
                            <img src="images/about/mar.jpg" class="w-100">
                            <h5 class="mt-2">Gilbert Gerondio</h5>
                        </div>
                        <div class="swiper-slide bg-light text-center overflow-hidden rounded">
                            <img src="images/about/mar.jpg" class="w-100">
                            <h5 class="mt-2">Jerkhim Remando</h5>
                        </div>
                        <div class="swiper-slide bg-light text-center overflow-hidden rounded">
                            <img src="images/about/mar.jpg" class="w-100">
                            <h5 class="mt-2">John Lloyd Pepino</h5>
                        </div>
                        <div class="swiper-slide bg-light text-center overflow-hidden rounded">
                            <img src="images/about/mar.jpg" class="w-100">
                            <h5 class="mt-2">Kenneth Andre Lazo</h5>
                        </div>
                        <div class="swiper-slide bg-light text-center overflow-hidden rounded">
                            <img src="images/about/mar.jpg" class="w-100">
                            <h5 class="mt-2">Victor Manuel Lucero</h5>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 40,
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

        <br><br><br>
        <!-- FOOTER -->
        <?php require('inc/footer.php'); ?>

    </body>
</html>
