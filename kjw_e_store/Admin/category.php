<!-- Bootstrap@5.3 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<?php
require_once "../App/database.php";
use App\Db;

$new_cat = new Db();

if (isset($_POST['insert_cat'])) {
    $category = $_POST['cat_title'];
    $new_cat->addData($category);

}

?>
<div class="col-8">
    <form method="post" class="form">
        <p class="text-center pt-3 lead fs-3">Add / Edit Categories</p>
        <div class="px-5 pb-3">
            <label for="cat_title" class="form-label">Category Name</label>
            <input type="text" id="cat_title" name="cat_title" placeholder="Electronics" class="form-control">
            <button type="submit" name="insert_cat" class="my-3 btn btn-success">Submit</button>
        </div>
    </form>
</div>