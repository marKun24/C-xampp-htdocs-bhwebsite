<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boarding House Finder - FACILITIES</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <?php  require('inc/links.php'); ?>
    </head>
    <body>
            <!-- NAV -->
        <?php require('inc/header.php');?>

        <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center" style="color: orange;">CONTACT US</h2>
            <div class="h-line bg-dark"></div>
            <p class="text-center mt-3">
                ibutang ang ABOUT US. ilis ni ang text unya
                sample text sample text sample text
            </p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-5 px-4">
                    <div class="bg-light rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="450" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d689.0450505663765!2d123.8641535407357!3d10.255776097000927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1715655062802!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/sGHJkssoqRxRaDBU9" target="_blank" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-geo-alt-fill"></i> Purok Kitong, Sawsawan, Talisay, 6045 Cebu
                    </a>

                    <h5 class="mt-4">Call us</h5>
                    <a href="tel: +9123456789" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +9123456789
                    </a>
                    <br>
                    <a href="tel: +9123456789" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +9987654321
                    </a>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: ismarkun23@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> BH.Finder@gmail.com
                    </a>
                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter-x"></i>
                    </a>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 px-4">
                    <div class="bg-light rounded shadow p-4">
                        <form>
                            <h5>Send me a message</h5>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight: 500;">Name</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight: 500;">Email</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight: 500;">Subject</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight: 500;">Message</label>
                                <textarea class="form-control shhadow-none" rows="5" style="resize: none;"></textarea>
                            </div>
                            <button type="submit" class="btn btn-outline text-white bg-success btn-orange-hover shadow-none mt-3">SEND</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php require('inc/footer.php'); ?>

    </body>
</html>
