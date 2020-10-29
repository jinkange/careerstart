
<?php
//순번생성
$email = $_POST['email'];
$name = $_POST['name'];
//$gender = $_POST['gender'];
if($email==null&&$name==null){
    return;
}
else{

$sql = "INSERT INTO representational_psychological_a (name,email,a_question1,a_question2,a_question3,a_question4) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['a1']."','".$_POST['a2']."','".$_POST['a3']."','".$_POST['a4']."')"; // 디비에 값 넣기 테스트
sql_query($sql);

$sql = "select psychological_num from representational_psychological_a where name='".$name."' AND email = '".$email."' order by psychological_num DESC limit 1";
$result = sql_query($sql);
$row = $result->fetch_row();
$num = (string)$row[0];

$sql = "INSERT INTO representational_psychological_b (psychological_num,b_question1,b_question2,b_question3,b_question4) VALUES ('$num','".$_POST['b1']."','".$_POST['b2']."','".$_POST['b3']."','".$_POST['b4']."')"; // 디비에 값 넣기 테스트
sql_query($sql);
$sql = "INSERT INTO representational_psychological_c (psychological_num,c_question1,c_question2,c_question3,c_question4) VALUES ('$num','".$_POST['c1']."','".$_POST['c2']."','".$_POST['c3']."','".$_POST['c4']."')"; // 디비에 값 넣기 테스트
sql_query($sql);
$sql = "INSERT INTO representational_psychological_d (psychological_num,d_question1,d_question2,d_question3,d_question4) VALUES ('$num','".$_POST['d1']."','".$_POST['d2']."','".$_POST['d3']."','".$_POST['d4']."')"; // 디비에 값 넣기 테스트
sql_query($sql);
$sql = "INSERT INTO representational_psychological_e (psychological_num,e_question1,e_question2,e_question3,e_question4) VALUES ('$num','".$_POST['e1']."','".$_POST['e2']."','".$_POST['e3']."','".$_POST['e4']."')"; // 디비에 값 넣기 테스트
sql_query($sql);
$sql = "INSERT INTO representational_psychological_f (psychological_num,f_question1,f_question2,f_question3,f_question4) VALUES ('$num','".$_POST['f1']."','".$_POST['f2']."','".$_POST['f3']."','".$_POST['f4']."')"; // 디비에 값 넣기 테스트
sql_query($sql);
$sql = "INSERT INTO representational_psychological_g (psychological_num,g_question1,g_question2,g_question3,g_question4) VALUES ('$num','".$_POST['g1']."','".$_POST['g2']."','".$_POST['g3']."','".$_POST['g4']."')"; // 디비에 값 넣기 테스트
sql_query($sql);
$sql = "INSERT INTO representational_psychological_h (psychological_num,h_question1,h_question2,h_question3,h_question4) VALUES ('$num','".$_POST['h1']."','".$_POST['h2']."','".$_POST['h3']."','".$_POST['h4']."')"; // 디비에 값 넣기 테스트
sql_query($sql);
$sql = "INSERT INTO representational_psychological_i (psychological_num,i_question1,i_question2,i_question3,i_question4) VALUES ('$num','".$_POST['i1']."','".$_POST['i2']."','".$_POST['i3']."','".$_POST['i4']."')"; // 디비에 값 넣기 테스트
sql_query($sql);
$sql = "INSERT INTO representational_psychological_j (psychological_num,j_question1,j_question2,j_question3,j_question4) VALUES ('$num','".$_POST['j1']."','".$_POST['j2']."','".$_POST['j3']."','".$_POST['j4']."')"; // 디비에 값 넣기 테스트
sql_query($sql);
//echo $result;
//전체 데이터 insert
//redirection ->
}
?>
<script>
window.location.href='/bbs/group.php?gr_id=repre_result';
</script>
