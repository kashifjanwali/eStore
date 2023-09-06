<?php
$t = "Manage Brands";
require_once(__DIR__ . '/../App/database.php');
use App\Db;

$new_brand = new Db();

$all_brands = $new_brand->getBrand();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

        <title>
            <?php echo $t; ?>
        </title>
    </head>

    <body>
        <div class="container-fluid">
            <p class="text-center fw-bold fs-3 text-danger py-2">
                <?php echo $t; ?>
            </p>
            <table class="table w-50 mx-auto lead">
                <thead class="table-danger sticky-top">
                    <tr>
                        <th>Brand Title</th>
                        <th>Edit / Delete</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($all_brands as $brand): ?>
                        <tr>
                            <td>
                                <?php echo $brand['b_title']; ?>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="./brand.php">Edit</a>
                                <a class="btn btn-danger"
                                    href="./delete_brand.php?b_id=<?php echo $brand['b_id']; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- <a style="margin-left: 315px; margin-top: 18px" href="index.php" class="btn btn-secondary">Main Page</a> -->
        </div>


        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>