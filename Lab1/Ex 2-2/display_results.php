<?php
$investment   = $_POST['investment'];
$interest_rate = $_POST['interest_rate'];
$years        = $_POST['years'];
if (!is_numeric($investment)) {
    header("Location: index.php?error=Investment must be a valid number.");
    exit();
}
if (!is_numeric($interest_rate)) {
    header("Location: index.php?error=Interest rate must be a valid number.");
    exit();
}
if (!is_numeric($years)) {
    header("Location: index.php?error=Years must be a valid number.");
    exit();
}

$future_value = $investment * pow((1 + $interest_rate / 100), $years);

$investment_f   = "$" . number_format($investment, 2);
$interest_rate_f = $interest_rate . "%";
$future_value_f  = "$" . number_format($future_value, 2);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Future Value Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .content {
            width: 400px;
            margin: auto;
            border: 2px solid #000080;
            padding: 20px;
        }
        h1 {
            color: #000080;
            margin-bottom: 20px;
        }
        label {
            display: inline-block;
            width: 150px;
            margin-top: 10px;
        }
        span {
            display: inline-block;
            width: 200px;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Future Value Calculator</h1>

        <label>Investment Amount:</label>
        <span><?php echo $investment_f; ?></span><br>

        <label>Yearly Interest Rate:</label>
        <span><?php echo $interest_rate_f; ?></span><br>

        <label>Number of Years:</label>
        <span><?php echo $years; ?></span><br>

        <label>Future Value:</label>
        <span><?php echo $future_value_f; ?></span><br>
    </div>
</body>
</html>
