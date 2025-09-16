<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 6.1</title>
    <style>
        table {
            border: 2px solid navy;
            border-collapse: collapse;
        }
        td {
            border: 1px solid navy;
            padding: 5px;
        }
    </style>
</head>
<body>
<?php
    $arr = [];
    $tong = 0;
    if (isset($_POST["TongDaySo"])){
        $arr = explode(",", $_POST['NhapMang']);
        $n = count($arr);
        for ($i = 0; $i < $n; $i++){
            $tong += $arr[$i];
        }
    }
?>
    <form action="Bai_6.1.php" method="post">
        <table border="1" style="margin: 0 auto;">
            <tr>
                <td colspan="2" style="width: 340px; height: 50px; text-align: center; font-size: 27px; background-color: aqua;"><strong>Nhập Và Tính Trên Dãy Số</strong></td>
            </tr>
            <tr>
                <td>Nhập Dãy Số: </td>
                <td>
                    <input type="text" name="NhapMang" value="<?php echo isset($_POST["NhapMang"]) ? ($_POST["NhapMang"]) : ''; ?>" size="25">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center">
                    <input type="submit" name="TongDaySo" value="Tổng Dãy Số" style="width: 105px;">
                </td>
            </tr>
            <tr>
                <td>Tổng Dãy Số:</td>
                <td>
                    <input type="text" name="tong" value="<?php echo $tong ?>" size="25" disabled="disabled">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
