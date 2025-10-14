<?php
require('../model/database.php');
require('../model/category_db.php');
require('../model/product_db.php');
require('../model/product.php');

$category_id = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
if ($category_id == NULL || $category_id == FALSE) {
    $category_id = 1;
}

$categories = CategoryDB::getCategories();
$category = CategoryDB::getCategory($category_id);
$products = ProductDB::getProductsByCategory($category_id);

include('../view/header.php');
?>

<main>
    <h1>Danh sách sản phẩm</h1>

    <aside>
        <h2>Danh mục</h2>
        <ul>
            <?php foreach ($categories as $c) : ?>
                <li>
                    <a href="?category_id=<?= $c->getID(); ?>">
                        <?= htmlspecialchars($c->getName()); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </aside>

    <section>
        <h2><?= htmlspecialchars($category->getName()); ?></h2>
        <table>
            <tr>
                <th>Mã</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Xóa</th>
            </tr>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?= htmlspecialchars($product->getCode()); ?></td>
                    <td><?= htmlspecialchars($product->getName()); ?></td>
                    <td><?= number_format($product->getPrice(), 2) . ' $'; ?></td>
                    <td>
                        <form action="." method="post">
                            <input type="hidden" name="action" value="delete_product">
                            <input type="hidden" name="product_id" value="<?= $product->getID(); ?>">
                            <input type="hidden" name="category_id" value="<?= $category_id; ?>">
                            <input type="submit" value="Xóa">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <p><a href="product_add.php">Thêm sản phẩm mới</a></p>
    </section>
</main>

<?php include('../view/footer.php'); ?>
