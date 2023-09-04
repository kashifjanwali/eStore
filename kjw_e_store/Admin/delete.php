<?php
require_once "../App/database.php";
use App\Db;

$new_cat = new Db();

$cat_id = $_GET["cat_id"] ?? null;

if ($cat_id) {
    $new_cat->deleteData($cat_id);
} else {
    $new_cat = array();
}
header("Location: ./manage_cat.php");
exit();
?>