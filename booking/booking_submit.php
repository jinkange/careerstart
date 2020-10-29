<?php
//순번생성
$name = $_POST['name'];
$phone = $_POST['phone'];
//$birth = $_POST['birth'];
$email = $member['mb_email'];
$date = $_POST['date'];
$time = $_POST['time'];
$company = $_POST['company'];
//$gender = $_POST['gender'];
if($email==null&&$name==null){
    return;
}
else{
$sql = "INSERT INTO consulting_booking (name,phone,email,date,time,company) VALUES ('$name','$phone','$email','$date','$time','$company')"; // 디비에 값 넣기 테스트

sql_query($sql);
}

?>
<script>
    
window.location.href='/bbs/group.php?gr_id=booking_result';

</script>
