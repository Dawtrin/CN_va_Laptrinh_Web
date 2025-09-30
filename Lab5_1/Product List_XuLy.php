<?php
    include "Database.php";

    $sql = "SELECT id, name FROM Category ORDER BY id ASC";
    $result = mysqli_query($conn, $sql);

    $sql2 = "SELECT id, Code, Name, Price FROM Product ORDER BY id ASC";
    $result2 = mysqli_query($conn, $sql2);

    if (isset($_POST['delete'])) {
        $id = (int)$_POST['delete'];
        $sql = "DELETE FROM Product WHERE id = $id";
        mysqli_query ($conn, $sql);
        header("Location: Product List.php");
        exit();
    }
?>