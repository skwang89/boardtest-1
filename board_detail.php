<!-- </<!DOCTYPE html> -->
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>board_detail.php</title>
        <link rel="stylesheet" href="/css/bootstrap.css">
        <style>
            table {
                table-layout: fixed;
                word-wrap: break-word;
            }
        </style>
    </head>
    <body>
        <h1 class="display-4">board_detail.php</h1>
        <?php
            //mysql 커넥션 객체 생성
            $conn = mysqli_connect("127.0.0.1", "root", "1234","boardtest");
            //커넥션 객체 생성 여부 확인
            if($conn) {
                echo "연결 성공<br>";
            } else {
                die("연결 실패 : " .mysqli_error());
            }
            //board_list.php 에서 넘어온 글 번호 저장 및 출력
            $board_id = $_GET["board_id"];
            echo $board_id."번째 글 내용<br>";
            //board 테이블에서 board_no값이 일치하는 board_no, board_title, board_content, board_user, board_date 필드 값 조회 쿼리
            // $sql = "SELECT board_no, board_title, board_content, board_user, board_date FROM board WHERE board_no = '".$board_no."'";
            $sql = "SELECT board_id, subject, contents, user_name, reg_date FROM board WHERE board_id = '".$board_id."'";

            $result = mysqli_query($conn,$sql);
            //조회 성공 여부 확인
            if($result) {
                echo "조회 성공";
            } else {
                echo "결과 없음: ".mysqli_error($conn);
            }
        ?>
        <table class="table table-bordered" style="width:50%">
            <?php
                //result 변수에 담긴 값을 row 변수에 저장하여 테이블에 출력
                if($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td style="width:15%">작성자</td>
                <td style="width:35%">
                    <?php
                        echo $row["user_name"];
                    ?>
                </td>
            </tr>
            <tr>
                <td style="width:10%">글 제목</td>
                <td style="width:15%">
                    <?php
                        echo $row["subject"];
                    ?>
                </td>
                <td style="width:5%">글 번호</td>
                <td style="width:3%">
                        <?php
                            echo $row["board_id"];
                        ?>
                </td>
                <td  style="width:5%">작성 일자</td>
                <td  style="width:3%">
                    <?php
                        echo $row["reg_date"];
                    ?>
                </td>

            </tr>
            <tr>
                <td colspan="6">
                    <?php
                        echo $row["contents"];
                    ?>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
        <br>
        &nbsp;&nbsp;&nbsp;
        <a class="btn btn-primary" href="/board_list.php"> 리스트로 돌아가기</a>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>