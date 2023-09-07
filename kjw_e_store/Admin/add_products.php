<?php
$title = "Add Products";
require_once "../App/database.php";
use App\Db;

$new = new Db();

$all_cats = $new->getCategory();
$all_brands = $new->getBrand();


// Adding products
if (isset($_POST['add_products'])) {

    $p_title = $_POST['product_title'];
    $p_desc = $_POST['product_desc'];
    $p_keywords = $_POST['product_keywords'];
    $c_id = $_POST['cat_title'];
    $b_id = $_POST['b_title'];
    $p_price = $_POST['product_price'];
    $status = 'Under Process';

    // Accessing images is a bit different compared to normal form fields
    $p_img1 = $_FILES['product_image1']['name'];
    $p_img2 = $_FILES['product_image2']['name'];
    $p_img3 = $_FILES['product_image3']['name'];

    // accessing images via image temporary name
    $temp_img1 = $_FILES['product_image1']['temp_name'];
    $temp_img2 = $_FILES['product_image2']['temp_name'];
    $temp_img3 = $_FILES['product_image3']['temp_name'];

    // Now we have to move the images file to the temporary folder we created inside our admin section.
    move_uploaded_file($temp_img1, "../Admin/Static/Product_Images/$p_img1");
    move_uploaded_file($temp_img2, "../Admin/Static/Product_Images/$p_img2");
    move_uploaded_file($temp_img3, "../Admin/Static/Product_Images/$p_img3");

    $new->addProduct($p_title, $p_desc, $p_keywords, $c_id, $b_id, $p_img1, $p_img2, $p_img3, $p_price, $status);
    header("Location: index.php?add_products");
    exit();

}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap@5.3 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <title>
            <?php echo $title ?>
        </title>
    </head>

    <body>
        <div class="container w-50 mt-5">
            <p class="my-4 text-center lead fs-3">
                <?php echo $title; ?>
            </p>

            <form action="" method="post" enctype="multipart/form-data" class="form">
                <div class="form-outline mb-4">

                    <!-- Product Name -->
                    <div class="mb-5">
                        <label for="prod_title" class="form-label lead">Product Title <sup class="text-danger fw-bold">*</sup></label>
                        <input type="text" name="product_title" id="prod_title" class="form-control"
                            placeholder="Enter your product name" autocomplete="off" required>
                    </div>

                    <!-- Product Description -->
                    <div class="mb-5">
                        <label for="prod_desc" class="form-label lead">Product Description <sup class="text-danger fw-bold">*</sup></label>
                        <textarea type="text" name="product_desc" id="prod_desc" class="form-control"
                            placeholder="Enter your product description here..." autocomplete="off" required cols="30"
                            rows="5"></textarea>
                    </div>

                    <!-- Product Keywords -->
                    <div class="mb-5">
                        <label for="prod_keywords" class="form-label lead"> Product Keywords <sup class="text-danger fw-bold">*</sup></label>
                        <textarea type="text" name="product_keywords" id="prod_keywords" class="form-control txt-area"
                            placeholder="Enter your product keywords here... press (,) after each keyword"
                            autocomplete="off" required cols="30" rows="5"></textarea>
                    </div>

                    <!-- Categories -->
                    <div class="mb-5">
                        <select name="cat_title" class="form-select">
                            <option selected>Select a Category of Your Product <sup class="text-danger fw-bold">*</sup></option>
                            <?php foreach ($all_cats as $cat): ?>
                                <option value="<?php echo $cat['cat_id'] ?>" required><?php echo $cat['cat_title'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Categories -->
                    <div class="mb-5">
                        <select name="b_title" class="form-select">
                            <option selected>Select a Brand of Your Product <sup class="text-danger fw-bold">*</sup></option>
                            <?php foreach ($all_brands as $brand): ?>
                                <option value="<?php echo $brand['b_id'] ?>" required><?php echo $brand['b_title'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Image - 1 -->
                    <div class="mb-5">
                        <label for="prod_img1" class="form-label lead"> Product Image 1 <sup class="text-danger fw-bold">*</sup></label>
                        <input type="file" name="product_image1" id="prod_img1" class="form-control" required>
                    </div>


                    <!-- Image - 2 -->
                    <div class="mb-5">
                        <label for="prod_img2" class="form-label lead"> Product Image 2 <span class="">(Optional)</span></label>
                        <input type="file" name="product_image2" id="prod_img2" class="form-control">
                    </div>


                    <!-- Image - 3 -->
                    <div class="mb-5">
                        <label for="prod_img3" class="form-label lead"> Product Image 2 <span class="">(Optional)</span></label>
                        <input type="file" name="product_image3" id="prod_img3" class="form-control">
                    </div>


                    <!-- Product Price -->
                    <div class="mb-5">
                        <label for="prod_price" class="form-label lead"> Product Price <sup class="text-danger fw-bold">*</sup></label>
                        <input type="number" name="product_price" id="prod_price" class="form-control txt-area"
                            placeholder="Enter The Product's Price" autocomplete="off" required>
                    </div>

                    <!-- Add Products Button -->
                    <input type="submit" class="btn btn-success w-25" name="add_products" value="Add Products">

                </div>
            </form>
        </div>

        <!-- <a style="margin-left: 330px" href="index.php" class="btn btn-secondary mb-3 w-25">Main Page</a> -->
    </body>

</html>