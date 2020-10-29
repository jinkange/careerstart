
<?php
//순번생성
$email = $_POST['email'];
$name = $_POST['name'];
//$gender = $_POST['gender'];
if($email==null&&$name==null){
    return;
}
else{
    $sql = "INSERT INTO communication_psychological_a (name,email,a_question1,a_question2,a_question3,a_question4,a_question5,a_question6,a_question7,a_question8) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['a1']."','".$_POST['a2']."','".$_POST['a3']."','".$_POST['a4']."','".$_POST['a5']."','".$_POST['a6']."','".$_POST['a7']."','".$_POST['a8']."')"; // 디비에 값 넣기 테스트
    sql_query($sql);
    
    $sql = "select psychological_num from communication_psychological_a where name='".$name."' AND email = '".$email."' order by psychological_num DESC limit 1";
    $result = sql_query($sql);
    $row = $result->fetch_row();
    $num = (string)$row[0];
    
    $sql = "INSERT INTO communication_psychological_b (psychological_num,b_question1,b_question2,b_question3,b_question4,b_question5,b_question6,b_question7,b_question8) VALUES ('$num','".$_POST['b1']."','".$_POST['b2']."','".$_POST['b3']."','".$_POST['b4']."','".$_POST['b5']."','".$_POST['b6']."','".$_POST['b7']."','".$_POST['b8']."')"; // 디비에 값 넣기 테스트
    sql_query($sql);
    
    $sql = "INSERT INTO communication_psychological_c (psychological_num,c_question1,c_question2,c_question3,c_question4,c_question5,c_question6,c_question7,c_question8) VALUES ('$num','".$_POST['c1']."','".$_POST['c2']."','".$_POST['c3']."','".$_POST['c4']."','".$_POST['c5']."','".$_POST['c6']."','".$_POST['c7']."','".$_POST['c8']."')"; // 디비에 값 넣기 테스트
    sql_query($sql);
    
    $sql = "INSERT INTO communication_psychological_d (psychological_num,d_question1,d_question2,d_question3,d_question4,d_question5,d_question6,d_question7,d_question8) VALUES ('$num','".$_POST['d1']."','".$_POST['d2']."','".$_POST['d3']."','".$_POST['d4']."','".$_POST['d5']."','".$_POST['d6']."','".$_POST['d7']."','".$_POST['d8']."')"; // 디비에 값 넣기 테스트
    sql_query($sql);
    
    $sql = "INSERT INTO communication_psychological_e (psychological_num,e_question1,e_question2,e_question3,e_question4,e_question5,e_question6,e_question7,e_question8) VALUES ('$num','".$_POST['e1']."','".$_POST['e2']."','".$_POST['e3']."','".$_POST['e4']."','".$_POST['e5']."','".$_POST['e6']."','".$_POST['e7']."','".$_POST['e8']."')"; // 디비에 값 넣기 테스트
    sql_query($sql);
    
}


//echo $result;
//전체 데이터 insert
//redirection ->
?>
<script>
window.location.href='/bbs/group.php?gr_id=comm_result';
</script>
