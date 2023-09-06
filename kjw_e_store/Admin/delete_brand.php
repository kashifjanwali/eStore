<?php
require_once "../App/database.php";
use App\Db;

$new_brand = new Db();

$brandID = $_GET["b_id"] ?? null;

if ($brandID) {
    $new_brand->deleteBrand($brandID);
} else {
    $new_brand = array();
}
// header("Location: ./index.php?manage_brand");
exit();
?>