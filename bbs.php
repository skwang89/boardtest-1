<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- <meta http-equiv="Content-Type" content="text/html; charset=euc-kr" /> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>AJAX 게시판 예정</title>
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var url = "bbslist.php";
    $.get(url, {page:1}, function(args) {
        $("#bbslist").html(args);
    });
});
function get_page(no) {
	$("#bbslist").html("<img src='indicator.gif'>");
    var url = "bbslist.php";
    $.get(url, {page:no}, function(args) {
        $("#bbslist").html(args);
    });
}
function get_content(no) {
	$("#bbsview").html("<img src='indicator.gif'>");
    var url = "bbsview.php";
    $.get(url, {no:no}, function(args) {
        $("#bbsview").html(args);
    });
}
</script>
<style>
body, td, table {font-size:9pt;font-family:나눔고딕,맑은 고딕,고딕,돋움,굴림;}
</style>
</head>

<body>

<table width="800" border="0">
<tr bgcolor="white">
<td valign="top" width="400">
	<div id="bbsview"><font color="red">AJAX 게시판 내용이 들어가는 곳<p>오른쪽 목록의 있는 게시물을 클릭하면 내용이 이곳에 보여집니다.</font></div>
</td>
<td valign="top" width="400">
	<div id="bbslist">AJAX 게시판 목록이 들어가는 곳</div>
</td>
</tr>
</table>
</body>
</html>