<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>board_update.php</title>
    </head>
    <body>
        <h1>board_update_action.php</h1>
        <?php
            //board_update_form.php에서 POST 방식으로 넘어온 값 저장 및 출력
            $board_id = $_POST["board_id"];
            $subject = $_POST["subject"];
            $contents = $_POST["contents"];
            echo "board_id : " . $board_id . "<br>";
            echo "subject : " . $subject . "<br>";
            echo "contents : " . $contents . "<br>";
            //커넥션 객체 생성 및 연결 여부 확인하기
            $conn = mysqli_connect("127.0.0.1", "root", "1234","boardtest");

            if($conn) {
                echo "연결 성공<br>";
            } else {
                die("연결 실패 : " .mysqli_error());
            }
            //board 테이블의 board_no값이 일치하는 행의 board_title,board_content 값을 입력한 값으로,board_date값을 현재 시간으로 수정하는 쿼리
            $sql = "UPDATE board SET subject='".$subject."',contents='".$contents."',reg_date=now() WHERE board_id=".$board_id."";
            $result = mysqli_query($conn,$sql);
            //수정 작업의 성공 여부 확인하기
            if($result) {
                echo "수정 성공: ".$result;
            } else {
                echo "수정 실패: ".mysqli_error($conn);
            }

            mysqli_close($conn);
            //헤더를 이용한 리다이렉션 구현
            header("Location: http://board.local/board_list.php");
        ?>
    </body
</html>