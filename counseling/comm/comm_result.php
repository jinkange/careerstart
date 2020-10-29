<?php
if($_POST['name']&&$_POST['email']){
    $name = $_POST['name'];
    $email = $_POST['email'];
}else{
    $name = $member['mb_name'];
    $email = $member['mb_email'];
}
if($email==null&&$name==null){
    return;
}
else{
$sql = "select * from communication_psychological_a where name='".$name."' AND email = '".$email."' order by  psychological_num DESC limit 1";
$result = sql_query($sql);
$result_a = $result->fetch_row();
$a_sum =0;

for($i=3;$i<count($result_a)-1;$i++){
    $a_sum +=$result_a[$i];
    //echo $result_a[$i];
}
if($_POST['psychological_num']){
    $num = $_POST['psychological_num'];
}else{
    $num =$result_a[0];
}



$sql = "select b_question1,b_question2,b_question3,b_question4,b_question5,b_question6,b_question7,b_question8 from communication_psychological_b where psychological_num=".$num." order by  psychological_num DESC limit 1";
$result = sql_query($sql);
$result_b = $result->fetch_row();
$b_sum =0;
for($i=0;$i<count($result_b);$i++){
    $b_sum +=$result_b[$i];
    //echo $result_a[$i];
}

$sql = "select c_question1,c_question2,c_question3,c_question4,c_question5,c_question6,c_question7,c_question8 from communication_psychological_c where psychological_num=".$num." order by  psychological_num DESC limit 1";
$result = sql_query($sql);
$result_c = $result->fetch_row();
$c_sum =0;
for($i=0;$i<count($result_c);$i++){
    $c_sum +=$result_c[$i];
    //echo $result_a[$i];
}

$sql = "select d_question1,d_question2,d_question3,d_question4,d_question5,d_question6,d_question7,d_question8 from communication_psychological_d where psychological_num=".$num." order by  psychological_num DESC limit 1";
$result = sql_query($sql);
$result_d = $result->fetch_row();
$d_sum =0;
for($i=0;$i<count($result_d);$i++){
    $d_sum +=$result_d[$i];
    //echo $result_a[$i];
}


$sql = "select e_question1,e_question2,e_question3,e_question4,e_question5,e_question6,e_question7,e_question8 from communication_psychological_e where psychological_num=".$num." order by  psychological_num DESC limit 1";
$result = sql_query($sql);
$result_e = $result->fetch_row();
$e_sum =0;
for($i=0;$i<count($result_e);$i++){
    $e_sum +=$result_e[$i];
    //echo $result_a[$i];
}

$a_result = $a_sum;
$b_result = $b_sum;
$c_result = $c_sum;
$d_result = $d_sum;
$e_result = $e_sum;

$max = [$a_result,$b_result,$c_result,$d_result,$e_result];

//최고 점수 찾기
$max2 = max($a_result,$b_result,$c_result,$d_result,$e_result);


// 최고 점수가 중복인지 확인
//print_r(array_keys($max, $max2));

//만약 이값이 2보다 크면
if(count(array_keys($max, $max2)) == 1){ // 중복이 없으면
    $resutl_type = array_keys($max, $max2)[0];

    if($resutl_type==0){//a 항목이 최고점 일 때
        include_once(G5_THEME_PATH.'/counseling/comm/result/a_type.php');
        //a 항목 결과페이지 inclued
    } else if($resutl_type==1){ //b 항목 최고점 일 때
        include_once(G5_THEME_PATH.'/counseling/comm/result/b_type.php');
        //b 항목 결과페이지 inclued
    } else if($resutl_type==2){ //c 항목 최고점 일 때
        include_once(G5_THEME_PATH.'/counseling/comm/result/c_type.php');
        //c 항목 결과페이지 inclued
    } else if($resutl_type==3){ //d 항목 최고점 일 때
        include_once(G5_THEME_PATH.'/counseling/comm/result/d_type.php');
        //d 항목 결과페이지 inclued
    } else if($resutl_type==4){ //e 항목 최고점 일 때
        include_once(G5_THEME_PATH.'/counseling/comm/result/e_type.php');
        //e 항목 결과페이지 inclued
    }
}else if(count(array_keys($max, $max2)) == 2){ // 중복 2개 있다면
    //중복중 e(4) 가 있다면 그거 하나만 보여주면 됨 그게 아니면 2개다 보여주면됩니다
    if(array_keys($max, $max2)[0]==4||array_keys($max, $max2)[1]==4){
        if(array_keys($max, $max2)[1]==4){
            if(array_keys($max, $max2)[0]==0){//a 항목이 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/a_type.php');
                //a 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[0]==1){ //b 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/b_type.php');
                //b 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[0]==2){ //c 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/c_type.php');
                //c 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[0]==3){ //d 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/d_type.php');
                //d 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[0]==4){ //e 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/e_type.php');
                //e 항목 결과페이지 inclued
            }
        }else{
            if(array_keys($max, $max2)[1]==0){//a 항목이 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/a_type.php');
                //a 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[1]==1){ //b 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/b_type.php');
                //b 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[1]==2){ //c 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/c_type.php');
                //c 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[1]==3){ //d 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/d_type.php');
                //d 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[1]==4){ //e 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/e_type.php');
                //e 항목 결과페이지 inclued
            }
        }
    }else{
        if(array_keys($max, $max2)[0]==0){//a 항목이 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/a_type.php');
            //a 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[0]==1){ //b 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/b_type.php');
            //b 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[0]==2){ //c 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/c_type.php');
            //c 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[0]==3){ //d 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/d_type.php');
            //d 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[0]==4){ //e 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/e_type.php');
            //e 항목 결과페이지 inclued
        }
        if(array_keys($max, $max2)[1]==0){//a 항목이 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/a_type.php');
            //a 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[1]==1){ //b 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/b_type.php');
            //b 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[1]==2){ //c 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/c_type.php');
            //c 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[1]==3){ //d 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/d_type.php');
            //d 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[1]==4){ //e 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/e_type.php');
            //e 항목 결과페이지 inclued
        }
    }

}else if(count(array_keys($max, $max2)) >= 3){ // 중복 3개 있다면
    if(array_keys($max, $max2)[0]==4||array_keys($max, $max2)[1]==4){
        if(array_keys($max, $max2)[1]==4){
            if(array_keys($max, $max2)[0]==0){//a 항목이 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/a_type.php');
                //a 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[0]==1){ //b 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/b_type.php');
                //b 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[0]==2){ //c 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/c_type.php');
                //c 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[0]==3){ //d 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/d_type.php');
                //d 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[0]==4){ //e 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/e_type.php');
                //e 항목 결과페이지 inclued
            }
        }else{
            if(array_keys($max, $max2)[1]==0){//a 항목이 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/a_type.php');
                //a 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[1]==1){ //b 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/b_type.php');
                //b 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[1]==2){ //c 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/c_type.php');
                //c 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[1]==3){ //d 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/d_type.php');
                //d 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[1]==4){ //e 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/e_type.php');
                //e 항목 결과페이지 inclued
            }
        }
    }else{
        if(array_keys($max, $max2)[0]==0){//a 항목이 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/a_type.php');
            //a 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[0]==1){ //b 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/b_type.php');
            //b 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[0]==2){ //c 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/c_type.php');
            //c 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[0]==3){ //d 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/d_type.php');
            //d 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[0]==4){ //e 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/e_type.php');
            //e 항목 결과페이지 inclued
        }
        if(array_keys($max, $max2)[1]==0){//a 항목이 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/a_type.php');
            //a 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[1]==1){ //b 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/b_type.php');
            //b 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[1]==2){ //c 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/c_type.php');
            //c 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[1]==3){ //d 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/d_type.php');
            //d 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[1]==4){ //e 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/e_type.php');
            //e 항목 결과페이지 inclued
        }
    }
}else if(count(array_keys($max, $max2)) == 4){ // 중복 4개 있다면
    if(array_keys($max, $max2)[0]==4||array_keys($max, $max2)[1]==4){
        if(array_keys($max, $max2)[1]==4){
            if(array_keys($max, $max2)[0]==0){//a 항목이 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/a_type.php');
                //a 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[0]==1){ //b 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/b_type.php');
                //b 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[0]==2){ //c 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/c_type.php');
                //c 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[0]==3){ //d 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/d_type.php');
                //d 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[0]==4){ //e 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/e_type.php');
                //e 항목 결과페이지 inclued
            }
        }else{
            if(array_keys($max, $max2)[1]==0){//a 항목이 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/a_type.php');
                //a 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[1]==1){ //b 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/b_type.php');
                //b 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[1]==2){ //c 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/c_type.php');
                //c 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[1]==3){ //d 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/d_type.php');
                //d 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[1]==4){ //e 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/e_type.php');
                //e 항목 결과페이지 inclued
            }
        }
    }else{
        if(array_keys($max, $max2)[0]==0){//a 항목이 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/a_type.php');
            //a 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[0]==1){ //b 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/b_type.php');
            //b 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[0]==2){ //c 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/c_type.php');
            //c 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[0]==3){ //d 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/d_type.php');
            //d 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[0]==4){ //e 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/e_type.php');
            //e 항목 결과페이지 inclued
        }
        if(array_keys($max, $max2)[1]==0){//a 항목이 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/a_type.php');
            //a 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[1]==1){ //b 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/b_type.php');
            //b 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[1]==2){ //c 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/c_type.php');
            //c 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[1]==3){ //d 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/d_type.php');
            //d 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[1]==4){ //e 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/e_type.php');
            //e 항목 결과페이지 inclued
        }
    }

}else if(count(array_keys($max, $max2)) == 5){ // 중복이 모두 있다면
    if(array_keys($max, $max2)[0]==4||array_keys($max, $max2)[1]==4){
        if(array_keys($max, $max2)[1]==4){
            if(array_keys($max, $max2)[0]==0){//a 항목이 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/a_type.php');
                //a 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[0]==1){ //b 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/b_type.php');
                //b 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[0]==2){ //c 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/c_type.php');
                //c 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[0]==3){ //d 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/d_type.php');
                //d 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[0]==4){ //e 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/e_type.php');
                //e 항목 결과페이지 inclued
            }
        }else{
            if(array_keys($max, $max2)[1]==0){//a 항목이 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/a_type.php');
                //a 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[1]==1){ //b 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/b_type.php');
                //b 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[1]==2){ //c 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/c_type.php');
                //c 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[1]==3){ //d 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/d_type.php');
                //d 항목 결과페이지 inclued
            } else if(array_keys($max, $max2)[1]==4){ //e 항목 최고점 일 때
                include_once(G5_THEME_PATH.'/counseling/comm/result/e_type.php');
                //e 항목 결과페이지 inclued
            }
        }
    }else{
        if(array_keys($max, $max2)[0]==0){//a 항목이 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/a_type.php');
            //a 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[0]==1){ //b 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/b_type.php');
            //b 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[0]==2){ //c 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/c_type.php');
            //c 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[0]==3){ //d 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/d_type.php');
            //d 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[0]==4){ //e 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/e_type.php');
            //e 항목 결과페이지 inclued
        }
        if(array_keys($max, $max2)[1]==0){//a 항목이 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/a_type.php');
            //a 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[1]==1){ //b 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/b_type.php');
            //b 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[1]==2){ //c 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/c_type.php');
            //c 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[1]==3){ //d 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/d_type.php');
            //d 항목 결과페이지 inclued
        } else if(array_keys($max, $max2)[1]==4){ //e 항목 최고점 일 때
            include_once(G5_THEME_PATH.'/counseling/comm/result/e_type.php');
            //e 항목 결과페이지 inclued
        }
    }
}
}
?>
<input type="button" id="print" value="프린트">
<script>
$(document).ready(function () {
$("#print").click(function () {
    let $container = $(".hpa").clone()    // 프린트 할 특정 영역 복사
    let cssText = ""                            // 스타일 복사
    for (const node of $("style")) {
        cssText += node.innerHTML
    }
    /** 팝업 */
    let innerHtml = $container[0].innerHTML
    let popupWindow = window.open("", "_blank", "width=700,height=800")
    popupWindow.document.write("<!DOCTYPE html>"+
      "<html>"+
        "<head>"+
        "<style>"+cssText+"</style>"+
        "</head>"+
        "<body>"+innerHtml+"</body>"+
      "</html>")
   
    popupWindow.document.close()
    popupWindow.focus()

    /** 1초 지연 */
    setTimeout(() => {
        popupWindow.print()         // 팝업의 프린트 도구 시작
        popupWindow.close()         // 프린트 도구 닫혔을 경우 팝업 닫기
    }, 1000)
})
})
</script>


<input type="button" value="상담신청" onClick="location.href='/bbs/group.php?gr_id=booking'">