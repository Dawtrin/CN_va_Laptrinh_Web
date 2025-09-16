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
        input[type="text"] {
            width: 200px;
            padding: 5px;
        }
        input[type="submit"] {
            margin-top: 15px;
            padding: 8px 16px;
            background-color: #000080; 
            color: #fff;              
            border: none;             
            border-radius: 4px;        
            cursor: pointer;
            display: block;            
            margin-left: auto;        
            margin-right: auto;      
        }
        input[type="submit"]:hover {
            background-color: #0000cd; 
        }
        .error {
            color: red;
            font-weight: bold;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Future Value Calculator</h1>

        <?php if (!empty($_GET['error'])): ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php endif; ?>

        <form action="display_results.php" method="post">
            <label>Investment Amount:</label>
            <input type="text" name="investment"><br>

            <label>Yearly Interest Rate:</label>
            <input type="text" name="interest_rate"><br>

            <label>Number of Years:</label>
            <input type="text" name="years"><br>

            <input type="submit" value="Calculate">
        </form>
    </div>
</body>
</html>
