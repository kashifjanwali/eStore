<?php
namespace App;
class Db
{
    private $con;
    function __construct() {
        $this->con = mysqli_connect("localhost", "root", "", "kjw_e_store");
    }

    function getData() {
        $query = "SELECT * FROM categories";
        // $result = 
        return mysqli_query($this->con, $query);
        // $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // return $data;
    }

    function addCat($cat_title) {
        $query = "INSERT INTO categories(cat_title) 
        VALUES('$cat_title')";
        mysqli_query($this->con, $query);
    }
}
?>