<?php
    include "Database.php";

    if (isset($_POST['add'])) {
        $name = trim($_POST['name']);
        if (empty($name)){
            $error_message = "Please Enter Name.";
        } else {
            $name = mysqli_real_escape_string($conn, $name);

            $kiemTra = "SELECT * FROM Category WHERE name = '$name' LIMIT 1";
            $result  = mysqli_query($conn, $kiemTra);

            if ($result && mysqli_num_rows($result) > 0) {
                $error_message = "Name already exists.";
            } else {
                $sql = "INSERT INTO Category (name) VALUE ('$name')";
                if (mysqli_query ($conn, $sql)){
                    $error_message = "Insert successfully!";
                } else {
                    $error_message = "Insert failed!";
                }
            }
        }
    }

    if (isset($_POST['delete'])){
        $id = $_POST['delete'];
        $sql = "DELETE FROM Category WHERE id = $id";
        mysqli_query ($conn, $sql);
    }

    $result = mysqli_query($conn, "SELECT * FROM Category");
?>