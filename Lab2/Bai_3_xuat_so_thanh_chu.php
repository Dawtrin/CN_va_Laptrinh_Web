<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xuất số thành chữ</title>
</head>

<body>
<?php
$chu = "";
$so = "";

if (isset($_POST["so"])) {
    $so = $_POST["so"];
    if (is_numeric($so)) {
        switch ($so) {
            case 0: $chu = "Không"; break;
            case 1: $chu = "Một"; break;
            case 2: $chu = "Hai"; break;
            case 3: $chu = "Ba"; break;
            case 4: $chu = "Bốn"; break;
            case 5: $chu = "Năm"; break;
            case 6: $chu = "Sáu"; break;
            case 7: $chu = "Bảy"; break;
            case 8: $chu = "Tám"; break;
            case 9: $chu = "Chín"; break;
            default: $chu = "Không hợp lệ"; break;
        }
    } else {
        $chu = "Vui lòng nhập số";
    }
}
?>

<form action="Bai_3_xuat_so_thanh_chu.php" method="POST">
<table width="569" border="1">
<tr>
    <td colspan="3" style="text-align:left;">Đọc số</td>
</tr>
<tr>
    <td>Nhập số (0-9)</td>
    <td width="69" rowspan="2" style="text-align:center;">
        <input type="submit" name="button" id="button" value="Submit" />
    </td>
    <td>Bằng chữ</td>
</tr>
<tr>
    <td width="179">
        <input type="text" name="so" id="textfield" value="<?php echo $so; ?>" />
    </td>
    <td width="270">
        <input type="text" name="chu" id="textfield2" value="<?php echo $chu; ?>" />
    </td>
</tr>
</table>
</form>
</body>
</html>
