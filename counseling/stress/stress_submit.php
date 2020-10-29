
<?php
//순번생성
$email = $_POST['email'];
$name = $_POST['name'];
$gender = $_POST['gender'];

if($email==null&&$name==null){
    return;
}
else{
$sql = "INSERT INTO stress_psychological_a (name,email,a_question1,a_question2,a_question3,a_question4,gender) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['1']."','".$_POST['2']."','".$_POST['3']."','".$_POST['4']."','".$_POST['gender']."')"; // 디비에 값 넣기 테스트

sql_query($sql);

$sql = "select psychological_num from stress_psychological_a where name='".$name."' AND email = '".$email."' order by psychological_num DESC limit 1";
$result = sql_query($sql);
$row = $result->fetch_row();
$num = (string)$row[0];

$sql = "INSERT INTO stress_psychological_b (psychological_num,b_question1,b_question2,b_question3,b_question4) VALUES ('$num','".$_POST['5']."','".$_POST['6']."','".$_POST['7']."','".$_POST['8']."')"; // 디비에 값 넣기 테스트
sql_query($sql);

$sql = "INSERT INTO stress_psychological_c (psychological_num,c_question1,c_question2,c_question3) VALUES ('$num','".$_POST['9']."','".$_POST['10']."','".$_POST['11']."')"; // 디비에 값 넣기 테스트
sql_query($sql);

$sql = "INSERT INTO stress_psychological_d (psychological_num,d_question1,d_question2) VALUES ('$num','".$_POST['12']."','".$_POST['13']."')"; // 디비에 값 넣기 테스트
sql_query($sql);

$sql = "INSERT INTO stress_psychological_e (psychological_num,e_question1,e_question2,e_question3,e_question4) VALUES ('$num','".$_POST['14']."','".$_POST['15']."','".$_POST['16']."','".$_POST['17']."')"; // 디비에 값 넣기 테스트
sql_query($sql);

$sql = "INSERT INTO stress_psychological_f (psychological_num,f_question1,f_question2,f_question3) VALUES ('$num','".$_POST['18']."','".$_POST['19']."','".$_POST['20']."')"; // 디비에 값 넣기 테스트
sql_query($sql);

$sql = "INSERT INTO stress_psychological_g (psychological_num,g_question1,g_question2,g_question3,g_question4) VALUES ('$num','".$_POST['21']."','".$_POST['22']."','".$_POST['23']."','".$_POST['24']."')"; // 디비에 값 넣기 테스트
sql_query($sql);

$sql = "INSERT INTO stress_psychological_h (psychological_num,h_question1,h_question2,h_question3) VALUES ('$num','".$_POST['25']."','".$_POST['26']."','".$_POST['27']."')"; // 디비에 값 넣기 테스트
sql_query($sql);
}
//echo $result;
//전체 데이터 insert
//redirection ->
?>
<script>
window.location.href='/bbs/group.php?gr_id=stress_result';
</script>
