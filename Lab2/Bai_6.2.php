<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 6.2</title>
    <style>
        body {
            justify-items: center;
        }
        table {
            inline-size: 500px;
            border: 1px solid black;  
            border-collapse: collapse; 
            margin: 0 auto;          
        }
        td {
            border: 1px solid black;  
            padding: 5px;
        }
    </style>
</head>
<body>
<?php 
    $max = $min = $tong = "";
    $arr = [];
    if (isset($_POST["submit"])){
        $soMang = (int)$_POST["soPhanTu"];
        for ($i = 0; $i < $soMang; $i++){
            $arr[] = rand(0, 20);
        }
        if (!empty($arr)) {
            $max = $min = $arr[0];
            $tong = $arr[0];

            for ($i = 1; $i < $soMang; $i++){
                if ($arr[$i] > $max){
                    $max = $arr[$i];
                }
                if($arr[$i] < $min){
                    $min = $arr[$i];
                }
                $tong += $arr[$i];
            }
        }
    }
?>

    <form action="Bai_6.2.php" method="post">
        <table>
            <tr>
                <td colspan="2" style="height: 35px; text-align: center; background-color: aqua;">
                    <strong>Phát Sinh Mảng Và Tính Toán</strong>
                </td>
            </tr>
            <tr>
                <td>Nhập Số Phần Tử:</td>
                <td>
                    <input type="text" name="soPhanTu" size="35" value="<?php echo isset($_POST["soPhanTu"]) ?  ($_POST["soPhanTu"]) : '';?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Phát sinh và tính toán" style="height: 25px;">
                </td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td>
                    <input type="text" size="35" disabled="disabled" value="<?php echo implode(", ", $arr) ?>">
                </td>
            </tr>
            <tr>
                <td>GTLN (MAX) trong mảng:</td>
                <td>
                    <input type="text" value="<?php echo $max ?>" size="35" disabled="disabled">
                </td>
            </tr>
            <tr>
                <td>GTNN (MIN) trong mảng:</td>
                <td>
                    <input type="text" value="<?php echo $min ?>" size="35" disabled="disabled">
                </td>
            </tr>
            <tr>
                <td>Tổng Mảng:</td>
                <td>
                    <input type="text" value="<?php echo $tong ?>" size="35" disabled="disabled">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
