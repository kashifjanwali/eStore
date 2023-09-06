<?php
$t = "Manage Products";
require_once(__DIR__ . '/../App/database.php');
use App\Db;

$new_prod = new Db();

$all_products = $new_prod->getProducts();
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
        <div class="container-fluid table-responsive">
            <p class="text-center fw-bold fs-3 text-danger py-2">
                <?php echo $t; ?>
            </p>
            <table class="table table-sm table-bordered">
                <thead class="table-danger sticky-top">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Keywords</th>
                        <th>C_ID</th>
                        <th>B_ID</th>
                        <th>Image1</th>
                        <th>Image2</th>
                        <th>Image3</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody class="table-group-divider">
                    <?php foreach ($all_products as $product): ?>
                        <tr>
                            <td>
                                <?php echo $product['product_title']; ?>
                            </td>

                            <td>
                                <?php echo $product['product_desc']; ?>
                            </td>

                            <td>
                                <?php echo $product['product_keywords']; ?>
                            </td>

                            <td>
                                <?php echo $product['cat_id']; ?>
                            </td>

                            <td>
                                <?php echo $product['brand_id']; ?>
                            </td>

                            <td>
                                <?php echo $product['product_image1']; ?>
                            </td>

                            <td>
                                <?php echo $product['product_image2']; ?>
                            </td>

                            <td>
                                <?php echo $product['product_image3']; ?>
                            </td>

                            <td>
                                <?php echo $product['product_price']; ?>
                            </td>

                            <td>
                                <a class="text-secondary fs-5 fw-bold" href="../category.php"><i
                                        class="bi bi-pencil-square"></i></a>
                                <a class="text-danger fs-5" href="./delete_cat.php?cat_id=<?php echo $cat['cat_id']; ?>"><i
                                        class="bi bi-trash"></i></a>
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