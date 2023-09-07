<?php
$t = "Manage Categories";
require_once(__DIR__ . '/../App/database.php');
use App\Db;

$new_cat = new Db();

$all_cat = $new_cat->getCategory();
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
                        <th>Category Title</th>
                        <th>Edit / Delete</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($all_cat as $cat): ?>
                        <tr>
                            <td>
                                <?php echo $cat['cat_title']; ?>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="../category.php">Edit</a>
                                <a class="btn btn-danger" href="./delete_cat.php?cat_id=<?php echo $cat['cat_id']; ?>">Delete</a>
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