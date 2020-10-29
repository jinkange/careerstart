<?php
//순번생성
$code = $_POST['code'];
$email = $_POST['email'];
$name = $_POST['name'];
$gender = $_POST['gender'];
if($email==null&&$name==null){
    return;
}else{
$sql = "select * from login_code where code='".$code."'";
$result = sql_query($sql);
$row = $result->fetch_row();
$num = (string)$row[0];
if($num){?>
<script>
    alert("코드 확인 완료");
</script>
<form method="post" name="form" action="/bbs/group.php?gr_id=comm1">
    <input type="hidden" name="name" value="<? echo $name;?>">
    <input type="hidden" name="email" value="<? echo $email;?>">
    <input type="hidden" name="gender" value="<? echo $gender;?>">
    <script>
        document
            .form
            .submit();
    </script>
</form>

<?php
}else{
    ?>

<script>
    alert("코드가 일치 하지 않습니다.");

    history.go(-1);
</script>
<?php

}
}
?>