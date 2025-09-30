<?php 
    include "Database.php";

    $sql = "SELECT id, name FROM Category ORDER BY id ASC";
    $result1 = mysqli_query($conn,$sql);

    if (isset($_POST['addProduct'])){
        $category_id = (int)$_POST['category_id'];
        $code = trim($_POST['code']);
        $name = trim($_POST['name']);
        $list_price = trim($_POST['list_price']);

        if (empty($category_id) || empty($code) || empty($name) || !is_numeric($list_price)){
            $error_message = "Please Enter Full Information.";
        } else {
            $code = mysqli_real_escape_string($conn, $code);
            $name = mysqli_real_escape_string($conn, $name);
            $list_price = mysqli_real_escape_string($conn, $list_price);

            $kiemTra = "SELECT * FROM Product WHERE Code = '$code' LIMIT 1";
            $result2  = mysqli_query($conn, $kiemTra);

            if ($result2 && mysqli_num_rows($result2) > 0) {
                $error_message = "Code already exists.";
            } else {
                $catRes = mysqli_query($conn, "SELECT name FROM Category WHERE id = $category_id");
                $catRow = mysqli_fetch_assoc($catRes);
                $category_name = mysqli_real_escape_string($conn, $catRow['name']);

                $sql = "INSERT INTO Product (Category, Code, Name, Price) VALUES ('$category_name', '$code', '$name', '$list_price')";
                if (mysqli_query ($conn, $sql)){
                    $success_message = "Insert successfully!";
                } else {
                    $error_message = "Insert failed!";
                }
            }
        }
    }
?>