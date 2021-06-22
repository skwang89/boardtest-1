<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<?
$no = $_REQUEST['no'];
$conn = mysqli_connect("127.0.0.1", "root", "1234","boardtest");

// mysql_select_db("boardtest", $conn);


$sql = "select * from board where board_id='$board_id'";
// $res = mysql_query($sql);
// $row = mysql_fetch_array($res);

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);


usleep(300000);
?>

<body>

<table width="380" border="0" cellspacing="1" bgcolor="#999999">
<tr bgcolor="white">
<td align="center" width="100">제목</td>
<td align="left" valign="top" width="280"><?=$row['subject']?></td>
</tr>
<tr bgcolor="white">
<td align="center" width="100">내용</td>
<td align="left" valign="top" width="280" height="200"><?=nl2br(stripslashes($row['contents']))?></td>
</tr>
</table>

</body>
</html>