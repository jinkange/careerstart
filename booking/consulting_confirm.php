<?php
$num = $_POST['consulting_num'];

if($num!=null){
    $sql = "UPDATE consulting_booking SET state = '1' WHERE consulting_num =".$num;
    sql_query($sql);
}else{
    return;
}
?>
<script>
history.go(-1);
</script>