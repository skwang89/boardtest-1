<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>board_update.php</title>
        <link rel="stylesheet" href="/css/bootstrap.css">
        <!-- 테이블 크기 조절용 css -->
        <style>
            table {
                table-layout: fixed;
                word-wrap: break-word;
            }
        </style>
    </head>
    <body>
        <h1 class="display-4">board_update.php</h1>
        <?php
            //커넥션 객체 생성 (데이터 베이스 연결)
            $conn = mysqli_connect("127.0.0.1", "root", "1234","boardtest");

            //연결 성공 여부 확인
            if($conn) {
                echo "연결 성공<br>";
            } else {
                die("연결 실패 : " .mysqli_error());
            }
            $board_id = $_GET["board_id"];
            echo $board_id."번째 글 수정 페이지<br>";
            $sql = "SELECT board_id, subject, contents, user_name, reg_date FROM board WHERE board_id = '".$board_id."'";
            $result = mysqli_query($conn,$sql);
            if($row = mysqli_fetch_array($result)){
        ?>
        <br>
        <form action="/board_update_action.php" method="post">
            <table class="table table-bordered" style="width:30%">
                <tr>
                    <td style="width:10%">글 번호</td>
                    <td style="width:20%"><input type="text" name="board_id" value="<?php echo $row["board_id"]?>" readonly></td>
                </tr>
                <tr>
                    <td style="width:10%">글 제목</td>
                    <td style="width:20%"><input type="text" name="subject" value="<?php echo $row["subject"]?>"></td>
                </tr>
                <tr>
                    <td style="width:10%">글 내용</td>
                    <td style="width:20%"><input type="text" name="contents" value="<?php echo $row["contents"]?>"></td>
                </tr>
            </table>
            <br>
        <?php
            }
            //커넥션 객체 종료
            mysqli_close($conn);
        ?>
            &nbsp;&nbsp;&nbsp;
            <button class="btn btn-primary" type="submit">글 수정</button>
            &nbsp;&nbsp;
            <a class="btn btn-primary" href="/board_list.php"> 리스트로 돌아가기</a>
        </form>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>