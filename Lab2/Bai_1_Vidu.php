<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chào các bạn</title>
</head>

<body>
<?php 

$xuat_ten = "";
$ten = "";

if (isset($_POST["ten"])) {
    $ten = $_POST["ten"];
    $xuat_ten = "Chào bạn " . $ten;
}
?>

<form action="Bai_1_Vidu.php" method="post">
<table width="271" border="1" cellspacing="0" cellpadding="5">
<tr>
  <td colspan="2" bgcolor="#2d95dbff" style="color:black; font-weight:bold; text-align:center;">
    In lời chào
  </td>
</tr>
<tr>
  <td width="91">Họ tên bạn</td>
  <td width="170">
    <input type="text" name="ten" id="chao3" value="<?php echo $ten; ?>" />
  </td>
</tr>
<tr>
  <td colspan="2" style="text-align:center; color:black;">
    <?php echo $xuat_ten; ?>
  </td>
</tr>
<tr>
  <td colspan="2" align="center" valign="middle">
    <input type="submit" name="chao" id="chao" value="Xuất" />
  </td>
</tr>
</table>
</form>
</body>
</html>
