<?php include '../view/header.php'; ?>
<main>
    <h1>Shopping Cart</h1>

    <?php if (!empty($_SESSION['cart'])) : ?>
        <table>
            <tr>
                <th>Product</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            <?php $cart_total = 0; ?>
            <?php foreach ($_SESSION['cart'] as $item) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['name']); ?></td>
                    <td>$<?php echo $item['cost']; ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td>$<?php echo $item['total']; ?></td>
                </tr>
                <?php $cart_total += $item['total']; ?>
            <?php endforeach; ?>
            <tr>
                <td colspan="3"><b>Cart Total</b></td>
                <td><b>$<?php echo number_format($cart_total, 2); ?></b></td>
            </tr>
        </table>
        <form action="." method="post">
            <input type="hidden" name="action" value="empty_cart">
            <input type="submit" value="Empty Cart">
        </form>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>
</main>
<?php include '../view/footer.php'; ?>
