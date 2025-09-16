<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tính toán dãy số</title>
</head>

<body>
<?php
$so_dau = $so_cuoi = ""; 
$tong = $tich = $tong_chan = $tong_le = "";

if (isset($_POST["so_dau"]) && isset($_POST["so_cuoi"])) {
    $so_dau = (int)$_POST["so_dau"];
    $so_cuoi = (int)$_POST["so_cuoi"];
    $tong = 0;
    $tich = 1;
    $tong_chan = 0;
    $tong_le = 0;

    for ($i = $so_dau; $i <= $so_cuoi; $i++) {
        $tong += $i;
        $tich *= $i;
        if ($i % 2 == 0) {  
            $tong_chan += $i;
        } else {
            $tong_le += $i;
        }
    }
}
?>

<form action="Bai_4_Tong_for.php" method="post">
<table width="728" border="1" cellpadding="5" cellspacing="0">
<tr>
    <td width="122">&nbsp;</td>
    <td width="76">Số bắt đầu</td>
    <td width="169">
        <input type="text" name="so_dau" value="<?php echo $so_dau; ?>" />
    </td>
    <td width="152">Số kết thúc</td>
    <td width="175">
        <input type="text" name="so_cuoi" value="<?php echo $so_cuoi; ?>" />
    </td>
</tr>
<tr>
    <td colspan="5">Kết quả</td>
</tr>
<tr>
    <td>Tổng các số</td>
    <td colspan="4"><input type="text" value="<?php echo $tong; ?>" /></td>
</tr>
<tr>
    <td>Tích các số</td>
    <td colspan="4"><input type="text" value="<?php echo $tich; ?>" /></td>
</tr>
<tr>
    <td>Tổng các số chẵn</td>
    <td colspan="4"><input type="text" value="<?php echo $tong_chan; ?>" /></td>
</tr>
<tr>
    <td>Tổng các số lẻ</td>
    <td colspan="4"><input type="text" value="<?php echo $tong_le; ?>" /></td>
</tr>
<tr>
    <td colspan="5" align="left">
        <input type="submit" value="Tính toán" />
    </td>
</tr>
</table>
</form>
</body>
</html>
