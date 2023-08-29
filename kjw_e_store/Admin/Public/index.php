<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap@5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Admin Panel</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../Static/Images/Stylesheets/style.css">
</head>

<body>
    <!-- Top Bar -->
    <div class="container-fluid bg-light">
        <?php include "../Modules/topbar.php" ?>
    </div>

    <!-- Nav Bar -->
    <div class="container-fluid bg-dark text-light sticky-top">
        <?php include "../Modules/navbar.php" ?>
    </div>

    <!-- Main Section -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <!-- Side Bar -->
                <?php include "../Modules/sidebar.php" ?>
            </div>


            <div class="col-10">
                <!-- Center Section -->

            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid">
        <?php include "../Modules/footer.php" ?>
    </div>


    <!-- Bootstrap@5.5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>