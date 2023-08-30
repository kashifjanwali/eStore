<?php
require_once (__DIR__ . '/../App/database.php');
use App\Db;

$new_cat = new Db();

if($_POST){
    $cat_title = $_POST['cat_title'];
    $new_cat->addCat($cat_title);
    header("Location: ../Public/index.php");
    exit();
}
?>

<form method="post" class="form">
    <p class="text-center pt-3 lead fs-3">Add / Edit Categories</p>
    <div class="px-5 pb-3">
        <label for="cat_title" class="form-label">Category Name</label>
        <input type="text" id="cat_title" name="cat_title" placeholder="Electronics" class="form-control" >
        <button type="submit" class="my-3 btn btn-success">Submit</button>
    </div>
</form>