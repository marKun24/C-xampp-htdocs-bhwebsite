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
            <div class="card">
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
                                    <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none">
                                </div>
                                <div class="mb-3">
                                    <label for="site_about_inp" class="form-label">About us</label>
                                    <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="document.getElementById('site_title_inp').value = general_data.site_title; document.getElementById('site_about_inp').value = general_data.site_about" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                <button type="button" onclick="upd_general(document.getElementById('site_title_inp').value, document.getElementById('site_about_inp').value)" class="btn bg-orange text-white shadow-none">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Shutdown Modal -->
            <div class="card mt-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Shutdown</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#shutdown-s">
                            <i class="bi bi-power"></i> Shutdown
                        </button>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="shutdown-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="shutdownLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Shutdown System</h5>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to shut down the system?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                <button type="button" onclick="shutdownSystem()" class="btn btn-danger shadow-none">SHUTDOWN</button>
                            </div>
                        </div>
                    </form>
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
        };

        xhr.onerror = function() {
            console.error("Request failed");
        };

        xhr.send('get_general=true');
    }

    function upd_general(site_title_val, site_about_val) {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function() {
            var myModal = document.getElementById('general-s');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();

            console.log('Response:', this.responseText);

            if (this.responseText == 1) {
                alert('Success','Changes saved!');
                get_general();
            } else {
                alert('Error','No changes made!');
            }
        };

        xhr.onerror = function() {
            console.error("Request failed");
        };

        xhr.send('site_title=' + encodeURIComponent(site_title_val) + '&site_about=' + encodeURIComponent(site_about_val) + '&upd_general=true');
    }

    window.onload = function() {
        get_general();
    };
</script>

</body>
</html>
