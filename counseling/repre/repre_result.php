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
}else{

    $sql = "select * from representational_psychological_a where name='".$name."' AND email = '".$email."' order by  psychological_num DESC limit 1";
    $result = sql_query($sql);
    $result_a = $result->fetch_row();
    $a_sum =0;
    if($_POST['psychological_num']){
        $num = $_POST['psychological_num'];
    }else{
        $num =$result_a[0];
    }
    $sql = "select b_question1,b_question2,b_question3,b_question4 from representational_psychological_b where psychological_num=".$num." order by  psychological_num DESC limit 1";
    $result = sql_query($sql);
    $result_b = $result->fetch_row();

    $sql = "select c_question1,c_question2,c_question3,c_question4 from representational_psychological_c where psychological_num=".$num." order by  psychological_num DESC limit 1";
    $result = sql_query($sql);
    $result_c = $result->fetch_row();

    $sql = "select d_question1,d_question2,d_question3,d_question4 from representational_psychological_d where psychological_num=".$num." order by  psychological_num DESC limit 1";
    $result = sql_query($sql);
    $result_d = $result->fetch_row();

    $sql = "select e_question1,e_question2,e_question3,e_question4 from representational_psychological_e where psychological_num=".$num." order by  psychological_num DESC limit 1";
    $result = sql_query($sql);
    $result_e = $result->fetch_row();

    $sql = "select f_question1,f_question2,f_question3,f_question4 from representational_psychological_f where psychological_num=".$num." order by  psychological_num DESC limit 1";
    $result = sql_query($sql);
    $result_f = $result->fetch_row();

    $sql = "select g_question1,g_question2,g_question3,g_question4 from representational_psychological_g where psychological_num=".$num." order by  psychological_num DESC limit 1";
    $result = sql_query($sql);
    $result_g = $result->fetch_row();

    $sql = "select h_question1,h_question2,h_question3,h_question4 from representational_psychological_h where psychological_num=".$num." order by  psychological_num DESC limit 1";
    $result = sql_query($sql);
    $result_h = $result->fetch_row();

    $sql = "select i_question1,i_question2,i_question3,i_question4 from representational_psychological_i where psychological_num=".$num." order by  psychological_num DESC limit 1";
    $result = sql_query($sql);
    $result_i = $result->fetch_row();

    $sql = "select j_question1,j_question2,j_question3,j_question4 from representational_psychological_j where psychological_num=".$num." order by  psychological_num DESC limit 1";
    $result = sql_query($sql);
    $result_j = $result->fetch_row();
    // a는 a[3]이 첫번째 질문
    $K = $result_a[3]+$result_b[3]+$result_c[1]+$result_d[2]+$result_e[2]+$result_f[0]+$result_g[3]+$result_h[2]+$result_i[2]+$result_j[2];
    $A = $result_a[4]+$result_b[0]+$result_c[3]+$result_d[0]+$result_e[0]+$result_f[2]+$result_g[0]+$result_h[1]+$result_i[0]+$result_j[1]; //4030020101
    $V = $result_a[5]+$result_b[1]+$result_c[0]+$result_d[3]+$result_e[3]+$result_f[1]+$result_g[1]+$result_h[0]+$result_i[3]+$result_j[0]; //5103311030
    $D = $result_a[6]+$result_b[2]+$result_c[2]+$result_d[1]+$result_e[1]+$result_f[3]+$result_g[2]+$result_h[3]+$result_i[1]+$result_j[3]; //6221132313
}
?>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/0.2.0/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<canvas id="myChart" width="400" height="500"></canvas>
<script>
    var ctx = document
        .getElementById('myChart')
        .getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                'K', 'A', 'V', 'D'
            ],
            datasets: [
                {
                    label: '결과값',
                    data: [
                        <?echo $K;?>,
                        <?echo $A;?>,
                        <?echo $V;?>,
                        <?echo $D;?>], backgroundColor: [ 'rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', ], borderColor: [
                            'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)', ], borderWidth: 2 }] }, options: {
                            responsive: false,
                            layout: {
                                padding: {
                                    left: 50,
                                    right: 50,
                                    top: 50,
                                    bottom: 50
                                }
                            },
                            scales: {
                                yAxes: [
                                    {
                                        ticks: {
                                            min: 0,
                                            max: 50,
                                            beginAtZero: false
                                        }
                                    }
                                ]
                            }
                        }

                        });
</script>
<?php
include_once(G5_THEME_PATH.'/counseling/repre/result.html');
?>
<input type="button" id="print" value="프린트">
<script>
    $(document).ready(function () {
        $("#print").click(function () {
            let $container = $(".hpa").clone() // 프린트 할 특정 영역 복사
            let cssText = "" // 스타일 복사
            for (const node of $("style")) {
                cssText += node.innerHTML
            }
            /** 팝업 */
            let innerHtml = $container[0].innerHTML
            let popupWindow = window.open("", "_blank", "width=700,height=800")
            popupWindow
                .document
                .write(
                    "<!DOCTYPE html><html><head><style>" + cssText + "</style></head><body>" +
                    innerHtml + "</body></html>"
                )

            popupWindow
                .document
                .close()
            popupWindow.focus()

            /** 1초 지연 */
            setTimeout(() => {
                popupWindow.print() // 팝업의 프린트 도구 시작
                popupWindow.close() // 프린트 도구 닫혔을 경우 팝업 닫기
            }, 1000)
        })
    })
</script>
<input
    type="button"
    value="상담신청"
    onclick="location.href='/bbs/group.php?gr_id=booking'">