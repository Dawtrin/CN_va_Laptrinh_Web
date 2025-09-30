<?php
    include "Add Product_XuLy.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Css/Category List.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h1>My Guitar Shop</h1>
            <hr>
            <div class="table-container">
                <h3>Add Product</h3>
                <table border="0" cellpadding="5" cellspacing="0">
                    <tr>
                        <td>Category:</td>
                        <td>
                            <select name="category_id" id="category_id">
                                <option value="">-- Chọn danh mục --</option>
                                <?php while ($row = mysqli_fetch_assoc($result1)): ?>
                                <option value="<?= $row['id'] ?>"><?= htmlspecialchars($row['name']) ?></option>
                                <?php endwhile; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Code:</td>
                        <td>
                            <input type="text" name="code" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td>
                            <input type="text" name="name" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>List Price:</td>
                        <td>
                            <input type="text" name="list_price" id="">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <?php 
                                if (!empty($error_message)) {
                                    echo "<strong style='color:red'>$error_message</strong>";
                                }
                                if (!empty($success_message)) {
                                    echo "<strong style='color:green'>$success_message</strong>";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="submit" name="addProduct" value="Add Product">
                        </td>
                    </tr>
                </table>
                <p><a href="Product List.php">View Product List</a></p>
            </div>
        </form>
    </div>
</body>
</html>