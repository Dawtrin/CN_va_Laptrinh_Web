<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Giải phương trình bậc 2</title>
</head>

<body>
<?php
// Pt bậc 1: ax + b = 0
function giai_pt_bac_1($a, $b) {
    if ($a == 0) {
        if ($b == 0)
            return "Phương trình có vô số nghiệm";
        else
            return "Phương trình vô nghiệm";
    } else {
        $x = round(-$b / $a, 2);
        return "Phương trình có nghiệm x = " . $x;
    }
}

// Pt bậc 2: ax^2 + bx + c = 0
function giai_pt_bac_2($a, $b, $c) {
    if ($a == 0) {
        // a = 0 => Pt bậc 1
        return giai_pt_bac_1($b, $c);
    } else {
        $delta = pow($b, 2) - 4 * $a * $c;
        if ($delta < 0) {
            return "Phương trình vô nghiệm";
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            return "Phương trình có nghiệm kép x1 = x2 = " . round($x, 2);
        } else {
            $can = sqrt($delta);
            $x1 = (-$b + $can) / (2 * $a);
            $x2 = (-$b - $can) / (2 * $a);
            return "Phương trình có 2 nghiệm phân biệt: x1 = " . round($x1, 2) . ", x2 = " . round($x2, 2);
        }
    }
}

$nghiem = "";
if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])) {
    $a = (float)$_POST["a"];
    $b = (float)$_POST["b"];
    $c = (float)$_POST["c"];
    $nghiem = giai_pt_bac_2($a, $b, $c);
}
?>

<form action="Bai_5_giai_pt_bac_2.php" method="post">
<table width="836" border="1" cellpadding="5" cellspacing="0">
<tr>
    <td colspan="4" bgcolor="#336699" align="left"><strong style="color:black;">Giải phương trình bậc 2</strong></td>
</tr>
<tr>
    <td width="83">Phương trình</td>
    <td width="236">
        <input name="a" type="text" value="<?php if (isset($_POST['a'])) echo $_POST['a']; ?>" /> X^2 +
    </td>
    <td width="218">
        <input type="text" name="b" value="<?php if (isset($_POST['b'])) echo $_POST['b']; ?>" /> X +
    </td>
    <td width="241">
        <input type="text" name="c" value="<?php if (isset($_POST['c'])) echo $_POST['c']; ?>" /> = 0
    </td>
</tr>
<tr>
    <td colspan="4">
        Nghiệm
        <input type="text" size="100" value="<?php echo $nghiem; ?>" readonly />
    </td>
</tr>
<tr>
    <td colspan="4" align="center">
        <input type="submit" value="Xuất" />
    </td>
</tr>
</table>
</form>
</body>
</html>
