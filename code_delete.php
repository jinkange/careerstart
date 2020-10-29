
<?php

$code_num = $_POST['code_num'];


$sql = "DELETE FROM login_code WHERE code_num =".$code_num;
//$sql = "select * from consulting_booking";
sql_query($sql);


?>


<script>
    alert("코드가 삭제 되었습니다.");
    window.location.href='/adm/company_code.php';
</script>

