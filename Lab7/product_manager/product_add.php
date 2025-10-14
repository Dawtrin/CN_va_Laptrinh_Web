<?php
require('../model/database.php');
require('../model/category_db.php');
require('../model/product_db.php');
require('../model/product.php');

$categories = CategoryDB::getCategories();
$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category_id = $_POST['category_id'];
    $code = trim($_POST['code']);
    $name = trim($_POST['name']);
    $price = trim($_POST['price']);

   
    if (empty($code) || empty($name) || empty($price)) {
        $error_message = "Vui lòng nhập đầy đủ thông tin sản phẩm.";
    } elseif (!is_numeric($price) || $price <= 0) {
        $error_message = "Giá sản phẩm phải là số dương.";
    } else {
        
        $category = CategoryDB::getCategory($category_id);
        $product = new Product($category, $code, $name, $price);
        ProductDB::addProduct($product);

        header("Location: .?category_id=$category_id");
        exit();
    }
}
include('../view/header.php');
?>

<main>
    <h1>Thêm sản phẩm mới</h1>

    <?php if ($error_message != '') : ?>
        <p style="color:red;"><?= $error_message ?></p>
    <?php endif; ?>

    <form action="product_add.php" method="post">
        <label>Danh mục:</label>
        <select name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?= $category->getID(); ?>">
                    <?= htmlspecialchars($category->getName()); ?>
                </option>
            <?php endforeach; ?>
        </select><br>

        <label>Mã sản phẩm:</label>
        <input type="text" name="code"><br>

        <label>Tên sản phẩm:</label>
        <input type="text" name="name"><br>

        <label>Giá sản phẩm:</label>
        <input type="text" name="price"><br>

        <input type="submit" value="Thêm sản phẩm">
    </form>

    <p><a href="index.php">Quay lại danh sách sản phẩm</a></p>
</main>

<?php include('../view/footer.php'); ?>
