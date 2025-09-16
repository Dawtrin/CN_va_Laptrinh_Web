<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 6.3</title>
    <style>
        body {
            display: flex;
            justify-content: center; 
            margin-top: auto;      
            font-family: Arial, sans-serif;
        }
        table {
            width: 400px;
            border: 2px solid #000; 
            border-collapse: collapse;
        }
        td {
            padding: 8px;
            border: 1px solid #000; 
        }
        input[type="text"] {
            padding: 4px;
        }
        input[type="submit"] {
            padding: 6px;
            background-color: aqua;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background-color: #00cccc;
        }
    </style>
</head>
<body>
<?php
    $soMang = $soMangDuyNhat = $soLan = [];
    $ketQuaDem ="";
    $ketQuaDuyNhat ="";
    if(isset($_POST["submit"])){
        $soMang = explode(",", $_POST['nhapMang']);

        foreach ($soMang as &$v) {
           $v = trim($v); 
        }

        $soMangDuyNhat = array_unique($soMang);
        $soLan = array_count_values($soMang);

        foreach ($soLan as $key => $value) {
            $ketQuaDem .= "$key:$value  ";
        }

        $ketQuaDuyNhat = implode(", ", $soMangDuyNhat);
    }
?>
    <form action="Bai_6.3.php" method="post">
        <table>
            <tr>
                <td colspan="2" style="height: 35px; background-color: cyan; text-align: center;">
                    <strong>ĐẾM SỐ XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</strong>
                </td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td>
                    <input type="text" name="nhapMang" value="<?php echo isset($_POST['nhapMang']) ? ($_POST['nhapMang']) : '';?>" style="width: 97%;">
                </td>
            </tr>
            <tr>
                <td>Số lần xuất hiện:</td>
                <td>
                    <input type="text" value="<?php echo $ketQuaDem ?>" disabled="disabled" style="width: 97%;">
                </td>
            </tr>
            <tr>
                <td>Mảng duy nhất:</td>
                <td>
                    <input type="text" value="<?php echo $ketQuaDuyNhat ?>" disabled="disabled" style="width: 97%;">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Thực hiện" name="submit" style="width: 100%;">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
