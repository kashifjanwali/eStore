<?php
require_once "../App/database.php";
use App\Db;
$new_cat = new Db();


if (isset($_POST['insert_cat'])) 
{
    $cat_id = $_POST['cat_id'];
    $category = $_POST['cat_title'];
    $new_cat->addCategory($category);
    // header("Location: ./index.php?manage_category");

    $cat_id = $_GET['cat_id'] ?? null;
    if ($cat_id) {
        $new_cat->getCategoryID($cat_id);
    } else {
        array();
    }
}

?>
<div class="w-50 mx-auto">
    <p class="text-center pt-3 lead fs-3">Add / Edit Categories</p>

    <form method="post" class="form">
        <div class="px-5 pb-3">
            <label for="cat_title" class="form-label lead">Category Name</label>
            <input type="text" id="cat_title" name="cat_title" placeholder="Electronics" class="form-control">
        </div>
        <input type="hidden" name="cat_id" value="<?php echo $cat_id ?>">
        <button type="submit" name="insert_cat" class="my-3 ms-5 btn btn-success">Submit</button>
        <a href="index.php?manage_category" class="btn btn-danger">Cancel</a>
    </form>
</div>