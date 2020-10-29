
<?php

$company = $_POST['company'];
$code = $_POST['code'];

$sql = "INSERT INTO login_code (code_company,code) VALUES ('$company','$code')";
//$sql = "select * from consulting_booking";
sql_query($sql);


?>


<script>
    alert("코드가 추가되었습니다.");
    window.location.href='/adm/company_code.php';
</script>

