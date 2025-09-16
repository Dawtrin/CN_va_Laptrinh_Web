<?php
    $product_description = $_POST['product_description'];
    $list_price = $_POST['list_price'];
    $discount_percent = $_POST['discount_percent'];

    $discount = $list_price * $discount_percent * 0.01;
    $discount_price = $list_price - $discount;

    $list_price_f = "$".number_format($list_price, 2);
    $discount_percent_f = $discount_percent."%";
    $discount_f = "$".number_format($discount, 2);
    $discount_price_f = "$".number_format($discount_price, 2);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Product Discount Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .content {
            width: 500px;
            margin: auto;
            border: 2px solid #000080;
            padding: 20px;
        }
        h1 {
            color: #000080;
            margin-bottom: 20px;
            text-align: center;
        }
        label {
            display: inline-block;
            width: 180px;
            margin-top: 10px;
        }
        p {
            margin: 8px 0;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Product Discount Calculator</h1>

        <p><label>Product Description:</label> <?php echo htmlspecialchars($product_description); ?></p>
        <p><label>List Price:</label> <?php echo $list_price_f; ?></p>
        <p><label>Standard Discount:</label> <?php echo $discount_percent_f; ?></p>
        <p><label>Discount Amount:</label> <?php echo $discount_f; ?></p>
        <p><label>Discount Price:</label> <?php echo $discount_price_f; ?></p>
    </div>
</body>
</html>
