<?php
require_once "../App/database.php";
use App\Db;

$new_cat = new Db();

$cat_id = $_GET["cat_id"] ?? null;

if ($cat_id) {
    $new_cat->deleteCategory($cat_id);
} else {
    $new_cat = array();
}
header("Location: ./index.php?manage_category");
exit();
?>