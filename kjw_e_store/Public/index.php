<?php
$title = "KJW_E_STORE";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

        <!-- ICONS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <title>
            <?PHP print $title; ?>
        </title>

        <!-- Custom CSS -->
        <link rel="stylesheet" href="./Static/CSS/style.css">
    </head>

    <body>
        <!-- Header -->
        <?php include "../Modules/topbar.php";
        include "../Modules/navbar.php" ?>


        <!--Main Page  -->
        <div class="container-fluid">
            <div class="row">
                <section id="home" class="col-10">
                    <!-- Cards -->
                    <?php include "../Modules/cards.php" ?>
                </section>

                <section class="col-2 bg-success">
                    <!-- Side Bar -->
                    <?php include "../Modules/sidebar.php" ?>

                </section>
            </div>
        </div>

        <!-- Featured Items & Shop Section -->
        <div class="container-fluid py-4 bg-light">
            <div class="row">

                <!-- Featured Items -->
                <section id="featured-items" class="col-9">
                    <?php include "../Modules/featured.php" ?>
                </section>

                <!-- Shop -->
                <section id="shop" class="col-3">
                    <?php include "../Modules/shop.php" ?>
                </section>
            </div>
        </div>
        <!-- About Us -->
        <section id="about-us">
            <?php include "../Modules/about.php" ?>
        </section>

        <!-- Contact Us -->
        <section id="contact-us">
            <?php include "../Modules/contact.php" ?>
        </section>

        <!-- Footer -->
        <section>
            <?php include "../Modules/footer.php" ?>
        </section>


        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>