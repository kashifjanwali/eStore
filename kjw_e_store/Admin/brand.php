<!-- Bootstrap@5.3 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<?php
require_once "../App/database.php";
use App\Db;

$new_brand = new Db();

if (isset($_POST['insert_brand'])) {
    $brandID = $_POST['b_id'];
    $brand = $_POST['b_title'];
    $new_brand->addBrand($brand);
    // header("Location: ./manage_brands.php");

    $bID = $_GET['b_id'] ?? null;
    if ($bID) {
        $new_brand->getBrandID($brandID);
    } 
    else {
        array();
    }
}

?>
<div class="w-50 mx-auto">
    <form method="post" class="form">
        <p class="text-center pt-3 lead fs-3">Add / Edit Brand</p>
        <div class="px-5 pb-3">
            <label for="b_title" class="form-label">Brand Name</label>
            <input type="text" id="b_title" name="b_title" placeholder="Apple" class="form-control">
        </div>
        <input type="hidden" name="b_id" value="<?php echo $bID ?>">
        <button type="submit" name="insert_brand" class="my-3 ms-5 btn btn-success">Submit</button>
        <a href="index.php" class="btn btn-danger">Cancel</a>
    </form>
</div>