<nav class="navbar navbar-expand-lg navbar-light px-lg-3 py-lg-2 shadow-sm sticky-top" style="background-color: #404040;">
    <div class="container-fluid">
        <a href="index.php"><img src="images/icons/navLogo.png" width="240" height="80" class="me-5"></a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="images/icons/burgerIcon.png" width="40" height="40" class="bg-orange">
        </button>
        <div class="collapse navbar-collapse"  id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active me-2 text-white" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2 text-white" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2 text-white" href="facilities.php">Facilities</a>
                </li>
                <li class="nav-item">
                <a class="nav-link me-2 text-white" href="about.php">About</a>
                </li>
                <li class="nav-item me-2 text-white">
                <a class="nav-link text-white" href="contact.php">Contact us</a>
                </li>
            </ul>
            <div class="d-flex">
                <button class="btn btn-outline text-white bg-orange btn-dark-hover me-lg-3 me-3" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login
                </button>
                <button class="btn btn-outline text-dark bg-light btn-orange-hover me-lg-3 me-3" type="button" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Register
                </button>
            </div> 
        </div>
    </div>
</nav>
            <!-- /NAV -->

            <!-- MODAL -->
        <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                                <h5 class="modal-title d-flex align-items-center">
                                    <i class="bi bi-person-circle fs-3 me-2"></i>User Login
                                </h5>
                                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control shadow-none">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <button type="submit" class="btn btn-outline text-white bg-success btn-orange-hover shadow-none">LOGIN</button>
                                    <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                                <h5 class="modal-title d-flex align-items-center">
                                    <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                                    User Registration
                                </h5>
                                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                                Note: Your details must match with your ID (Student ID, National ID, Passport, Driving license, etc.)
                                that will be required during check-in.
                            </span>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control shadow-none">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control shadow-none">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control shadow-none">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Phone Number</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Picture</label>
                                        <input type="file" class="form-control shadow-none">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Address</label>
                                        <textarea class="form-control shhadow-none" rows="1"></textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Pincode</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control shadow-none">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control shadow-none">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control shadow-none">
                                    </div>
                                </div>
                            <div class="text-center my-1">
                            <button type="submit" class="btn btn-outline text-white bg-success btn-orange-hover shadow-none">Register</button>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>