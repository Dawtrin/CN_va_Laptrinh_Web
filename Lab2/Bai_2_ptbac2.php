<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<title>Giải phương trình bậc 1</title>
</head>
<body>
<?php 
$nghiem = "";
$a = "";
$b = "";

if (isset($_POST["a"]) && isset($_POST["b"])) {
    $a = $_POST["a"];
    $b = $_POST["b"];

    if ($a == 0) {
        if ($b == 0) {
            $nghiem = "Phương trình có vô số nghiệm";
        } else {
            $nghiem = "Phương trình vô nghiệm";
        }
    } else {
        $x = -($b / $a);
        $x = round($x, 2); // Làm tròn
        $nghiem = "x = $x";
    }
}
?>

<form action="Bai_2_ptbac2.php" method="post">
<table width="500" border="1" cellspacing="0" cellpadding="5">
<tr>
  <td colspan="3" bgcolor="#336699" style="color:white; font-weight:bold; text-align:center;">
    Giải phương trình bậc 1
  </td>
</tr>
<tr>
  <td width="120">Phương trình</td>
  <td width="180">
    <input name="a" type="text" value="<?php echo $a; ?>" /> X +
  </td>
  <td width="200">
    <input name="b" type="text" value="<?php echo $b; ?>" /> = 0
  </td>
</tr>
<tr>
  <td colspan="3">
    Nghiệm:
    <input name="kq" type="text" readonly 
           value="<?php echo $nghiem; ?>" />
  </td>
</tr>
<tr>
  <td colspan="3" align="center">
    <input type="submit" name="giai" value="Xuất" />
  </td>
</tr>
</table>
</form>
</body>
</html>
