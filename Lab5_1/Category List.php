<?php
include "Category List_XuLy.php"
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Category List</title>
</head>
<link rel="stylesheet" href="Css/Category List.css">

<body>
    <div class="container">
        <h1>Product Manager</h1>
        <hr />
        <div class="table-container">
            <h3>Category List</h3>

            <table class="table1" border="1 cellspacing=" 0" cellpadding="10"">
            <tr>
                <th>name</th>
                <th></th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['Name']) ?></td>
                    <td>
                        <form method="post">
                    <button type="submit" name="delete" value="<?php echo $row['id'] ?>">Delete</button>
                    </form>
                    </td>
                    </tr>
                <?php } ?>
            </table>
            <h3>Add Category</h3>
            <form method="post">
                <table border="0" cellspacing=" 0" cellpadding="5"">
        <tr>
            <td>Name:</td>
            <td>
                <input type=" text" name="name">
                    </td>
                    <td>
                        <input type="submit" name="add" value="Add">
                    </td>
                    </tr>
                </table>
            </form>
            <?php
                if (!empty($error_message)) {
                    echo "<strong style='color:red'>$error_message</strong>";
                }

                if (!empty($success_message)) {
                    echo "<strong style='color:green'>$success_message</strong>";
                }
            ?>
            <a href="Product List.php">
                <p>List Products</p>
            </a>
        </div>
    </div>
</body>

</html>