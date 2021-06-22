<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<?
$page = $_REQUEST['page'];
if($page == "") $page = 1;
$from = ($page-1)*10;
$conn = mysqli_connect("127.0.0.1", "root", "1234","boardtest");


$sql = "select * from board order by board_id limit $from, 10";
// $res = mysql_query($sql);

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
usleep(300000);
?>

<body>
<table width="400" border="0" cellspacing="1" bgcolor="#999999">
  <tr bgcolor="white">
    <th width="70" scope="col">번호</th>
    <th width="171" scope="col">제목</th>
    <th width="111" scope="col">글쓴이</th>
    <th width="130" scope="col">작성일</th>
  </tr>
<?
while($row = mysql_fetch_array($res)) {
?>
  <tr bgcolor="white" onclick="get_content('<?=$row['board_id']?>')">
    <td align="center"><?=$row['board_id']?></td>
    <td align="left"><?=$row['subject']?></td>
    <td align="center"><?=$row['user_name']?></td>
    <td align="center"><?=$row['reg_date']?></td>
  </tr>
<?
}
?>
</table>
<table width="400" border="0">
<tr bgcolor="white">
<td align="center">[<span style="cursor:pointer;" onclick="get_page('1')">1</span>] [<span style="cursor:pointer;" onclick="get_page('2')">2</span>] [<span style="cursor:pointer;" onclick="get_page('3')">3</span>]</td>
</tr>
</table>
</body>
</html>