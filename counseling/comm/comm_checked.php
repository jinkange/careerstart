<?php
$num = $_POST['psychological_num'];

if($num!=null){
    $sql = "UPDATE communication_psychological_a SET psychological_state = '1' WHERE psychological_num =".$num;
    sql_query($sql);
}else{
    return;
}
?>
<script>
history.go(-1);
</script>