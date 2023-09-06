<?php
namespace App;

class Db
{
    private $con;

    function __construct()
    {
        $this->con = mysqli_connect("localhost", "root", "", "kjw_e_store");
    }

    // READ ALL CATEGORIES
    function getCategory()
    {
        $query = "SELECT * FROM categories";
        $result = mysqli_query($this->con, $query);
        $all_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $all_data;
    }

    // READ ALL BRANDS
    function getBrand()
    {
        $query = "SELECT * FROM brands";
        $result = mysqli_query($this->con, $query);
        $all_brands = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $all_brands;
    }



    // ADD CATEGORY
    function addCategory($category)
    {
        $query = "SELECT cat_title FROM categories WHERE cat_title = '$category'";
        $result = mysqli_query($this->con, $query);


        if ($result) {
            $total_records = mysqli_num_rows($result);

            if ($total_records > 0) {
                echo "<div class='alert alert-danger w-50 mx-auto my-3' role='alert'>
            Sorry! <strong>$category</strong> already exists in the database. Add another Category
            </div>";
            } else {
                // run orignal query to insert new data
                $query = "INSERT INTO `categories`(cat_title) 
            VALUES('$category')";
                $result = mysqli_query($this->con, $query);

                // Check either the query is executed successfully or not?
                if ($result) {
                    echo "<div class='alert alert-success w-50 mx-auto my-3' role='alert'>
                <strong>$category</strong> Added Successfully.
                </div>";
                } else {
                    echo "<div class='alert alert-danger w-50 mx-auto my-3' role='alert'>
        Error: " . mysqli_error($this->con) . "
        </div>";
                }
            }
        } else {
            echo "<div class='alert alert-danger w-50 mx-auto my-3' role='alert'>
        Error: " . mysqli_error($this->con) . "
        </div>";
        }
    }


    // ADD BRAND
    function addBrand($brand)
    {
        $query = "SELECT b_title FROM brands WHERE b_title = '$brand'";
        $result = mysqli_query($this->con, $query);

        if ($result) {
            $all_records = mysqli_num_rows($result);

            if ($all_records > 0) {
                echo "<div class='alert alert-danger w-50 mx-auto my-3' role='alert'>Sorry! <strong>$brand</strong> is already exists in the database. Add another Brand</div>";
            }

            #Run Original query to insert new brand
            else {
                $query = "INSERT INTO brands(b_title) 
            VALUES('$brand')";
                $result = mysqli_query($this->con, $query);

                // Check either the query is executed successfully or not?
                if ($result) {
                    echo "<div class='alert alert-success w-50 mx-auto my-3' role='alert'>
                <strong>$brand</strong> Added Successfully.
                </div>";
                } else {
                    echo "<div class='alert alert-danger w-50 mx-auto my-3' role='alert'>
        Error: " . mysqli_error($this->con) . "
        </div>";
                }

            }
        } else {
            echo "<div class='alert alert-danger w-50 mx-auto my-3' role='alert'>
        Error: " . mysqli_error($this->con) . "
        </div>";
        }
    }


    // GET CATEGORY ID
    function getCategoryID($cat_id)
    {
        $query = "SELECT * FROM categories WHERE cat_id= $cat_id";
        $result = mysqli_query($this->con, $query);
        $id_data = mysqli_fetch_assoc($result);
        return $id_data;
    }

    // GET CATEGORY ID
    function getBrandID($brandID)
    {
        $query = "SELECT * FROM brands WHERE b_id= $brandID";
        $result = mysqli_query($this->con, $query);
        $brandId = mysqli_fetch_assoc($result);
        return $brandId;
    }

    // Update Data
    // function updateCategory($id, $category)
    // {
    //     $query = "UPDATE categories 
    //         SET name = '$name',
    //         email = '$email',
    //         dob = '$dob' 
    //         WHERE id = $id";
    //     mysqli_query($this->con, $query);
    // }



    // DELETE CATEGORY
    function deleteCategory($cat_id)
    {
        $query = "DELETE FROM categories WHERE cat_id = $cat_id";
        mysqli_query($this->con, $query);
    }


    // DELETE BRAND
    function deleteBrand($brandID)
    {
        $query = "DELETE FROM brands WHERE b_id = $brandID";
        $result = mysqli_query($this->con, $query);

        if ($result) {
            echo "<div class='alert alert-success w-50 mx-auto my-3' role='alert'><strong>Brand</strong> deleted successfully</div>";
        } else {
            echo "<div class='alert alert-danger' role='alert'>Error: " . mysqli_error($this->con) . "</div>";
        }
    }


    function addProduct($p_title, $p_desc, $p_keywords, $c_id, $b_id, $p_img1, $p_img2, $p_img3, $p_price, $status)
    {
        if ($p_title === "" && $p_desc === "" && $p_keywords === "" && $p_price === "" && $c_id === "" && $b_id === "" && $p_price === "" && $p_img1 === "" && $p_img2 === "" && $p_img3 === "") {
            echo "<div class='alert alert-danger' role='alert'>
            Please Fill all the available fields. Some field was found missing.
            </div>";
        } else {
            // Now that we have given the path of our temp folder to store the images "prod_image", we have to write the insert the query to add the product details.
            $query = "INSERT INTO products (product_title, product_desc, product_keywords, cat_id, brand_id, product_image1, product_image2, product_image3, product_price, date, status) VALUES ('$p_title', '$p_desc', '$p_keywords', '$c_id', '$b_id', '$p_img1', '$p_img2', '$p_img3', $p_price, NOW(), '$status')";
            $result = mysqli_query($this->con, $query);
            if ($result) {
                echo "<div class='alert alert-success' role='alert'>
                Product Inserted Successfully.
                </div>";
            }
        }
    }


    // Selecting all the products available in "PRODUCTS TABLE"

    public function getProducts()
    {
        $query = "SELECT * FROM `products` order by rand() limit 0,9";
        $result = mysqli_query($this->con, $query);
        $all_products = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $all_products;

    }



    function closeConnection()
    {
        mysqli_close($this->con);
    }
}
?>