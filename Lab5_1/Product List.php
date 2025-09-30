<?php
    include "Product List_XuLy.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product_manager</title>
    <link rel="stylesheet" href="Css/Category List.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h1>My Guitar Shop</h1>
            <hr>
            <div class="table-container">
                <h3>Product List</h3>
                <div class="hai_cot">
                    <div>
                        <h3>Categories</h3>
                        <table border="0">
                            <?php if ($result && mysqli_num_rows($result) > 0); ?>
                                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td>
                                    <a href="Product List.php?category_id=<?= (int)$row['id'] ?>"><?=htmlspecialchars($row['name']) ?></a>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </table>
                    </div>
                    <div>
                        <h3>Guitars</h3>
                        <table border="1" cellspacing="0" cellpadding="5" class="table1">
                            <tr>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                            <?php if ($result2 && mysqli_num_rows($result2) > 0); ?>
                                <?php while ($row = mysqli_fetch_assoc($result2)): ?>
                            <tr>
                                <td><?= htmlspecialchars($row['Code']) ?></td>
                                <td><?= htmlspecialchars($row['Name']) ?></td>
                                <td><?= htmlspecialchars($row['Price']) ?></td>
                                <td><button type="submit" name="delete" value="<?php echo $row['id'] ?>"">Delete</button></td>
                            </tr>
                            <?php endwhile; ?>
                        </table>
                        <p class="links">
                            <a href="Add Product.php">Add Product</a>
                            <br>
                            <a href="Category List.php">List Categories</a>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>