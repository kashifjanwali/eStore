<?php ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap@5.3 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

        <title>Admin Panel</title>
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../Static/Stylesheets/style.css">
    </head>

    <body>
        <!-- Top Bar -->
        <div class="container-fluid bg-light sticky-top">
            <?php include "./Modules/topbar.php" ?>
        </div>

        <!-- Nav Bar -->
        <div class="container-fluid bg-dark text-light">
            <?php include "./Modules/navbar.php" ?>
        </div>

        <!-- Main Section / Admin Actions -->
        <div class="container-fluid">
            <div class="row">
                <!-- Side Bar -->
                <?php require_once "./Modules/sidebar.php" ?>

                <!-- Center Section -->
                <div class="col-10">
                    <p class="text-center pt-2 lead fs-2 text-secondary">Click on the links of side bar to perform specific tasks</p>
                    <!-- <center><video src="./Static/Videos/e-store.mp4" width="700" controls></video></center>` -->
                    <?php
                    if (isset($_GET['add_category'])) {
                        require_once "./category.php";
                    } else if (isset($_GET['manage_category'])) {
                        require_once "./manage_cat.php";
                    } else if (isset($_GET['add_brand'])) {
                        require_once "./brand.php";
                    } else if (isset($_GET['manage_brand'])) {
                        require_once "./manage_brands.php";
                    } else if (isset($_GET['add_product'])) {
                        require_once "./add_products.php";
                    } else if (isset($_GET['manage_products'])) {
                        require_once "./manage_products.php";
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="container-fluid">
            <?php include "./Modules/footer.php" ?>
        </div>


        <!-- Bootstrap@5.5 JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
    </body>

</html>