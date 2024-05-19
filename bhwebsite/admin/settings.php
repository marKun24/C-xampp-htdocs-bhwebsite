<?php 
    require('inc/essentials.php');
    adminLogin();
    session_regenerate_id(true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>

<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto overflow-hidden">
            <h3 class="mb-4">SETTINGS</h3>

            <!-- General Settings -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">General Settings</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                            <i class="bi bi-pencil-square"></i>Edit
                        </button>
                    </div>
                    <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                    <p class="card-text" id="site_title"></p>
                    <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
                    <p class="card-text" id="site_about"></p>
                </div>
            </div>

            <!-- General Modal -->
            <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">General Settings</h5>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="site_title_inp" class="form-label">Site Title</label>
                                    <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                    <label for="site_about_inp" class="form-label">About us</label>
                                    <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="6" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="resetForm()" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                <button type="button" onclick="validateAndSubmit()" class="btn bg-orange text-white shadow-none">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Shutdown section  -->
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Shutdown Website</h5>
                        <div class="form-check form-switch">
                            <form>
                                <label class="form-check-label" for="shutdown-toggle">Enable Shutdown</label>
                                <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle" value="0">
                            </form>
                        </div>
                    </div>
                    <p class="card-text">
                        No customers will be allowed to book hotel room, when shutdown mode is enabled.
                    </p>
                </div>
            </div>
            
            <!-- Contact details section -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Contacts Settings</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                            <i class="bi bi-pencil-square"></i>Edit
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                <p class="card-text" id="address"></p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                <p class="card-text" id="gmap"></p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
                                <p class="card-text mb-1">
                                    <i class="bi bi-telephone-fill"></i>
                                    <span id="pn1"></span>
                                </p>
                                <p class="card-text">
                                    <i class="bi bi-telephone-fill"></i>
                                    <span id="pn2"></span>
                                </p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                                <p class="card-text" id="email"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                                <p class="card-text mb-1">
                                    <i class="bi bi-facebook me-1"></i>
                                    <span id="fb"></span>
                                </p>
                                <p class="card-text">
                                    <i class="bi bi-twitter-x me-1"></i>
                                    <span id="tw"></span>
                                </p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                                <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require('inc/scripts.php'); ?>
<script>
    let general_data;

    function get_general() {
        let site_title = document.getElementById('site_title'); 
        let site_about = document.getElementById('site_about');

        let shutdown_toggle = document.getElementById('shutdown-toggle');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 300) {
                try {
                    general_data = JSON.parse(this.responseText);
                    site_title.innerText = general_data.site_title;
                    site_about.innerText = general_data.site_about;

                    document.getElementById('site_title_inp').value = general_data.site_title;
                    document.getElementById('site_about_inp').value = general_data.site_about;
                } catch (error) {
                    console.error("Error parsing JSON:", error);
                }
            } else {
                console.error("Request failed with status:", xhr.status);
            }

            if(general_data.shutdown == 0){
                shutdown_toggle.checked = false;
                shutdown_toggle.value = 0;
            }
            else{
                shutdown_toggle.checked = true;
                shutdown_toggle.value = 1;
            }
        };

        xhr.onerror = function() {
            console.error("Request failed");
        };

        xhr.send('get_general=true');
    }

    function upd_general(site_title_val, site_about_val) {
        // Check if the fields are empty
        if (site_title_val.trim() === '' || site_about_val.trim() === '') {
            alert('Both "Site Title" and "About Us" fields cannot be empty!');
            return;
        }

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function() {
            var myModal = document.getElementById('general-s');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();

            console.log('Response:', this.responseText);

            if (this.responseText == 1) {
                alert('success', 'Changes saved!');
                get_general();
            } else {
                alert('danger', 'No changes made!');
            }
        };

        xhr.onerror = function() {
            console.error("Request failed");
        };

        xhr.send('site_title=' + encodeURIComponent(site_title_val) + '&site_about=' + encodeURIComponent(site_about_val) + '&upd_general=true');
    }

        function validateAndSubmit() {
        let site_title_inp = document.getElementById('site_title_inp');
        let site_about_inp = document.getElementById('site_about_inp');

        if (site_title_inp.checkValidity() && site_about_inp.checkValidity()) {
            upd_general(site_title_inp.value, site_about_inp.value);
        } else {
            site_title_inp.reportValidity();
            site_about_inp.reportValidity();
        }
    }

    function resetForm() {
        document.getElementById('site_title_inp').value = general_data.site_title;
        document.getElementById('site_about_inp').value = general_data.site_about;
    }

    function upd_shutdown(value) {
        let shutdown_toggle = document.getElementById('shutdown-toggle');
        let shutdown_value = shutdown_toggle.checked ? 1 : 0;

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 300) {
                console.log('Shutdown status updated successfully.');
                alert('success', 'Shutdown status updated successfully.');
            } else {
                console.error("Request failed with status:", xhr.status);
                alert('danger', 'Failed to update shutdown status.');
            }
        };

        xhr.onerror = function() {
            console.error("Request failed");
            alert('danger', 'Request failed');
        };

        xhr.send('upd_shutdown=' + shutdown_value);
    };



    window.onload = function() {
        get_general();
    };
</script>

</body>
</html>
