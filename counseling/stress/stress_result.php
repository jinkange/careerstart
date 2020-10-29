<?php

    $name = $member['mb_name'];
    $email = $member['mb_email'];
//직무요구 4 
if($name==null&&$name==null){
    return;
}else{
$sql = "select * from stress_psychological_a where name='".$name."' AND email = '".$email."' order by  psychological_num DESC limit 1";
$result = sql_query($sql);
$result_a = $result->fetch_row();
$a_sum =0;
$gender;
if($result_a[8]==1){
    $gender = '남자';
}else{
    $gender = '여자';
}
for($i=3;$i<count($result_a)-2;$i++){
    $a_sum +=$result_a[$i];
    //echo $result_a[$i];
}

//직무자율 4
$sql = "select b_question1,b_question2,b_question3,b_question4 from stress_psychological_b where psychological_num=".$result_a[0]." order by  psychological_num DESC limit 1";
$result = sql_query($sql);
$result_b = $result->fetch_row();
$b_sum =0;
for($i=0;$i<count($result_b);$i++){
    $b_sum +=$result_b[$i];
    //echo $result_a[$i];
}
//관계갈등 3
$sql = "select c_question1,c_question2,c_question3 from stress_psychological_c where psychological_num=".$result_a[0]." order by  psychological_num DESC limit 1";
$result = sql_query($sql);
$result_c = $result->fetch_row();
$c_sum =0;
for($i=0;$i<count($result_c);$i++){
    $c_sum +=$result_c[$i];
    //echo $result_a[$i];
}
//직무불안정 2
$sql = "select d_question1,d_question2 from stress_psychological_d where psychological_num=".$result_a[0]." order by  psychological_num DESC limit 1";
$result = sql_query($sql);
$result_d = $result->fetch_row();
$d_sum =0;
for($i=0;$i<count($result_d);$i++){
    $d_sum +=$result_d[$i];
    //echo $result_a[$i];
}

//조직체계 4
$sql = "select e_question1,e_question2,e_question3,e_question4 from stress_psychological_e where psychological_num=".$result_a[0]." order by  psychological_num DESC limit 1";
$result = sql_query($sql);
$result_e = $result->fetch_row();
$e_sum =0;
for($i=0;$i<count($result_e);$i++){
    $e_sum +=$result_e[$i];
    //echo $result_a[$i];
}
//보상부적절 3
$sql = "select f_question1,f_question2,f_question3 from stress_psychological_f where psychological_num=".$result_a[0]." order by  psychological_num DESC limit 1";
$result = sql_query($sql);
$result_f = $result->fetch_row();
$f_sum =0;
for($i=0;$i<count($result_f);$i++){
    $f_sum +=$result_f[$i];
    //echo $result_a[$i];
}
//직장문화 4
$sql = "select g_question1,g_question2,g_question3,g_question4 from stress_psychological_g where psychological_num=".$result_a[0]." order by  psychological_num DESC limit 1";
$result = sql_query($sql);
$result_g = $result->fetch_row();
$g_sum =0;
for($i=0;$i<count($result_g);$i++){
    $g_sum +=$result_g[$i];
    //echo $result_a[$i];
}

//근무환경 3
$sql = "select h_question1,h_question2,h_question3 from stress_psychological_h where psychological_num=".$result_a[0]." order by  psychological_num DESC limit 1";
$result = sql_query($sql);
$result_h = $result->fetch_row();
$h_sum =0;
for($i=0;$i<count($result_h);$i++){
    $h_sum +=$result_h[$i];
    //echo $result_a[$i];
}

$a_result = ($a_sum)*100/(3*4);
$b_result = ($b_sum)*100/(3*4);
$c_result = ($c_sum)*100/(3*3);
$d_result = ($d_sum)*100/(3*2);
$e_result = ($e_sum)*100/(3*4);
$f_result = ($f_sum)*100/(3*3);
$g_result = ($g_sum)*100/(3*4);
$h_result = ($h_sum)*100/(3*3);

if($gender =='남자'){
    $a_median = 50.1;
    $b_median = 53.4;
    $c_median = 33.4;
    $d_median = 50.1;
    $e_median = 52.4;
    $f_median = 66.7;
    $g_median = 41.7;
    $h_median = 44.5;
    
}else{
    $a_median = 54.2;
    $b_median = 60.1;
    $c_median = 33.4;
    $d_median = 50.1;
    $e_median = 52.4;
    $f_median = 66.7;
    $g_median = 41.7;
    $h_median = 44.5;
}
if($a_result >= $a_median){
    $a_desc = '직무요구은 직무에 대한 부담 정도(시간적 압박, 업무량 증가, 업무 중 중단, 책임감, 과도한 직 부담)를 의미하며 '.$name.'은 직무 요구도가 상대적으로 높습니다.';
}
else{
    $a_desc = '직무요구은 직무에 대한 부담 정도(시간적 압박, 업무량 증가, 업무 중 중단, 책임감, 과도한 직 부담)를 의미하며 '.$name.'은 직무 요구도가 상대적으로 낮습니다.';
}

if($b_result >= $b_median){
    $b_desc = '직무자율은 직무에 대한 의사결정의 권한과 자신의 직무에 대한 재량 활용성의 수준을 의미하며 '.$name.'은 직무자율성이 상대적으로 낮습니다.';
}
else{
    $b_desc = '직무자율은 직무에 대한 의사결정의 권한과 자신의 직무에 대한 재량 활용성의 수준을 의미하며 '.$name.'은 직무자율성이 상대적으로 높습니다.';
}
if($c_result >= $c_median){
  $c_desc = '관계갈등은 회사 내에서의 상사 및 동료 간의 도움 또는 지지 부족 등의 대인관계를 평가하는 것이며 '.$name.'은 관계갈등이 상대적으로 높습니다.';
}
else{
  $c_desc = '관계갈등은 회사 내에서의 상사 및 동료 간의 도움 또는 지지 부족 등의 대인관계를 평가하는 것이며 '.$name.'은 관계갈등이 상대적으로 낮습니다.';
}
if($d_result >= $d_median){
  $d_desc = '직무불안정은 자신의 직업 또는 직무에 대한 안정성의 정도(구직기회, 고용불안정성)으로 '.$name.'은 직업이 상대적으로 불안정적입니다.';
}
else{
  $d_desc = '직무불안정은 자신의 직업 또는 직무에 대한 안정성의 정도(구직기회, 고용불안정성)으로 '.$name.'은 직업이 상대적으로 안정적입니다.';
}
if($e_result >= $e_median){
  $e_desc = '조직체계은 조직의 운영체계 및 조직의 자원, 조직 내의 갈등, 합리적인 의사소통 등의 직무 스트레스 요인 평가 등이 여기에 속한 것으로 '.$name.'의 조직이 상대적으로 체계적이지 않습니다.';
}
else{
  $e_desc = '조직체계은 조직의 운영체계 및 조직의 자원, 조직 내의 갈등, 합리적인 의사소통 등의 직무 스트레스 요인 평가 등이 여기에 속한 것으로 '.$name.'의 조직이 상대적으로 체계적입니다.';
}
if($f_result >= $f_median){
  $f_desc = '보상부적절은 업무에 대하여 기대하고 있는 보상의 정도가 적절한지를 평가하는 것으로 '.$name.'은 상대적으로 보상체계가 부적절합니다.';
}
else{
  $f_desc = '보상부적절은 업무에 대하여 기대하고 있는 보상의 정도가 적절한지를 평가하는 것으로 '.$name.'은 상대적으로 보상체계가 적절합니다.';
}
if($g_result >= $g_median){
  $g_desc = '직장문화은 직장의 조직 문화(집단주위 문화, 의사소통 결여 등)를 말하며 조직 내의 의사소통과 직장의 특징적 개성이 스트레스를 유발하는 요인으로 작용하는 것 등이 여기에 속하는데 '.$name.'은 직장문화가 상대적으로 스트레스 요인으로 영향을 덜 받고 있습니다.';
}
else{
  $g_desc = '직장문화은 직장의 조직 문화(집단주위 문화, 의사소통 결여 등)를 말하며 조직 내의 의사소통과 직장의 특징적 개성이 스트레스를 유발하는 요인으로 작용하는 것 등이 여기에 속하는데 '.$name.'은 직장문화가 상대적으로 스트레스 요인입니다.';
}

if($h_result >= $h_median){
  $h_desc = '물리적 환경은 직무스트레스에 영향을 줄 수 있는 근로자가 처해 있는 일반적인 물리적 환경(작업방식 위험성, 신체 부담 등)을 말하는 것으로 '.$name.'은 상대적으로 개선이 필요하다고 느낍니다.';
}
else{
  $h_desc = '물리적 환경은 직무스트레스에 영향을 줄 수 있는 근로자가 처해 있는 일반적인 물리적 환경(작업방식 위험성, 신체 부담 등)을 말하는 것으로 '.$name.'은 상대적으로 환경이 나쁘지 않다고 느끼고 있습니다.';
}
//print_r($result_a);

//echo $result_a[0];
//echo $result_b[0];

///각 영역별 환산점수=(실제점수-문항수)*100/(예상 가능한 최고점수-문항수)
//(모든값-문항수)*100/(3*문항수-문항수)
/*


1.
직무요구은 직무에 대한 부담 정도(시간적 압박, 업무량 증가, 업무 중 중단, 책임감, 과도한 직 부담)를 의미하며 ○○은 직무요구도가 상대적으로 낮습니다.

직무요구은 직무에 대한 부담 정도(시간적 압박, 업무량 증가, 업무 중 중단, 책임감, 과도한 직 부담)를 의미하며 ○○은 직무 요구도가 상대적으로 높습니다.

2.
직무자율은 직무에 대한 의사결정의 권한과 자신의 직무에 대한 재량 활용성의 수준을 의미하며 ○○은 직무자율성이 상대적으로 낮습니다. (*역채점 문항으로 구성)

직무자율은 직무에 대한 의사결정의 권한과 자신의 직무에 대한 재량 활용성의 수준을 의미하며 ○○은 직무자율성이 상대적으로 높습니다. (*역채점 문항으로 구성)
3.
관계갈등은 회사 내에서의 상사 및 동료 간의 도움 또는 지지 부족 등의 대인관계를 평가하는 것이며 ○○은 관계갈등이 상대적으로 낮습니다. (*역채점 문항으로 구성)

관계갈등은 회사 내에서의 상사 및 동료 간의 도움 또는 지지 부족 등의 대인관계를 평가하는 것이며 ○○은 관계갈등이 상대적으로 높습니다. (*역채점 문항으로 구성)

4.
직무불안정은 자신의 직업 또는 직무에 대한 안정성의 정도(구직기회, 고용불안정성)으로 ○○은 직업이 상대적으로 안정적입니다.

직무불안정은 자신의 직업 또는 직무에 대한 안정성의 정도(구직기회, 고용불안정성)으로 ○○은 직업이 상대적으로 불안정적입니다.

5.
조직체계은 조직의 운영체계 및 조직의 자원, 조직 내의 갈등, 합리적인 의사소통 등의 직무 스트레스 요인 평가 등이 여기에 속한 것으로 ○○의 조직이 상대적으로 체계적입니다. 
(*역채점 문항으로 구성)

조직체계은 조직의 운영체계 및 조직의 자원, 조직 내의 갈등, 합리적인 의사소통 등의 직무 스트레스 요인 평가 등이 여기에 속한 것으로 ○○의 조직이 상대적으로 체계적이지 않습니다. 
(*역채점 문항으로 구성)

6.
보상부적절은 업무에 대하여 기대하고 있는 보상의 정도가 적절한지를 평가하는 것으로 ○○은 상대적으로 보상체계가 적절합니다.(*역채점 문항으로 구성)

보상부적절은 업무에 대하여 기대하고 있는 보상의 정도가 적절한지를 평가하는 것으로 ○○은 상대적으로 보상체계가 부적절합니다.(*역채점 문항으로 구성)

7.
직장문화은 직장의 조직 문화(집단주위 문화, 의사소통 결여 등)를 말하며 조직 내의 의사소통과 직장의 특징적 개성이 스트레스를 유발하는 요인으로 작용하는 것 등이 여기에 속하는데 ○○은 직장문화가 상대적으로 스트레스 요인입니다.

직장문화은 직장의 조직 문화(집단주위 문화, 의사소통 결여 등)를 말하며 조직 내의 의사소통과 직장의 특징적 개성이 스트레스를 유발하는 요인으로 작용하는 것 등이 여기에 속하는데 ○○은 직장문화가 상대적으로 스트레스 요인으로 영향을 덜 받고 있습니다.



8.
물리적 환경은 직무스트레스에 영향을 줄 수 있는 근로자가 처해 있는 일반적인 물리적 환경(작업방식 위험성, 신체 부담 등)을 말하는 것으로 ○○은 상대적으로 개선이 필요하다고 느낍니다.

물리적 환경은 직무스트레스에 영향을 줄 수 있는 근로자가 처해 있는 일반적인 물리적 환경(작업방식 위험성, 신체 부담 등)을 말하는 것으로 ○○은 상대적으로 환경이 나쁘지 않다고 느끼고 있습니다.
*/
}
?>
<div id="hpt">
<br>
< 직무스트레스 검사 결과 보고서 >
<br>
<br>직무스트레스란 직무요건이 근로자의 능력이나 자원, 바램과 일치하지 않을 때 생기는 유해한 신체적 ,정서적 반응이라고 정의할 수 있습니다. <br>

<?echo $name;?>의 직무스트레스 검사에 대한 결과를 아래와 같이 안내를 드립니다.<br>
<style>
.grid line {
    stroke: lightgrey;
    stroke-opacity: 0.7;
}
.lineChart {
    fill: none;
    stroke: steelblue;
    stroke-width: 1.5px;
}
.lineChart:hover {
    stroke: black;
    stroke-width: 3px;
}
.toolTip {
    position: absolute;
    border: 1px solid;
    border-radius: 4px 4px 4px 4px;
    background: rgba(0, 0, 0, 0.8);
    color : white;
    padding: 5px;
    text-align: center;
    font-size: 12px;
    min-width: 30px;
}
</style>
<svg width="1000" height="320"></svg>
<script src="https://d3js.org/d3.v4.min.js"></script>
<script>
 
    var series = ["검사자값", "남성 참고값"];
 
    var dataset = [ 
        {'직무요구':<?echo $a_result;?>, '직무자율':<?echo $b_result;?>,'관계갈등':<?echo $c_result;?>,'직무불안정':<?echo $d_result;?>,'조직체계':<?echo $e_result;?>,'보상부적절':<?echo $f_result;?>,'직장문화':<?echo $g_result;?>,'직장문화':<?echo $h_result;?>},
        {'직무자율':<?echo $a_median;?>, '직무요구':<?echo $b_median;?>,'관계갈등':<?echo $c_median;?>,'직무불안정':<?echo $d_median;?>,'조직체계':<?echo $e_median;?>,'보상부적절':<?echo $f_median;?>,'직장문화':<?echo $g_median;?>,'직장문화':<?echo $h_median;?>}];
 
    var keys = d3.keys(dataset[0]);
    var data = [];
 
    dataset.forEach(function(d, i) {
    data[i] = keys.map(function(key) { return {x: key, y: d[key]}; })
    });
 
    var margin = {left: 20, top: 10, right: 10, bottom: 20};
    var svg = d3.select("svg");
    var width  = parseInt(svg.style("width"), 10) - margin.left - margin.right;
    var height = parseInt(svg.style("height"), 10)- margin.top  - margin.bottom;
    var svgG = svg.append("g")
        .attr("transform", "translate(" + margin.left + "," + margin.top + ")");
    var xScale = d3.scalePoint()//scaleBand() scaleOrdinal
        .domain(keys)
        .rangeRound([0, width]);
    var yScale = d3.scaleLinear()
        .domain([0, d3.max(dataset, function(d) { return d3.max(keys, function(key) { return d[key];});})])
        .nice()
        .range([height, 0]);
    var colors = d3.scaleOrdinal(d3.schemeCategory10);
 
    svgG.append("g")
        .attr("class", "grid")
        .attr("transform", "translate(0," + height + ")")
        .call(d3.axisBottom(xScale)
            .tickSize(-height)
        );
 
    svgG.append("g")
        .attr("class", "grid")
        .call(d3.axisLeft(yScale)
            .ticks(5)
            .tickSize(-width)
           );
 
    var line = d3.line()
        //.curve(d3.curveBasis)
        .x(function(d) { return xScale(d.x); })
        .y(function(d) { return yScale(d.y); });
    var lineG = svgG.append("g")
        .selectAll("g")
        .data(data)
           .enter().append("g");
 
    lineG.append("path")
        .attr("class", "lineChart")
        .style("stroke", function(d, i) { return colors( series[i]); })
        .attr("d", function(d, i) {return line(d); });
 
    lineG.selectAll("dot")
        .data(function(d) {return d })
        .enter().append("circle")
            .attr("r", 3)
            .attr("cx", function(d) { return xScale(d.x) })
            .attr("cy", function(d) { return yScale(d.y);})
            .on("mouseover", function() { tooltip.style("display", null); })
            .on("mouseout",  function() { tooltip.style("display", "none"); })
            .on("mousemove", function(d) {
                tooltip.style("left", (d3.event.pageX+10)+"px");
                tooltip.style("top",  (d3.event.pageY-10)+"px");
                tooltip.html("결과값. " + d.x + "<br/>" + "data value : " + d.y);
            });

    var tooltip = d3.select("body")
        .append("div")
        .attr("class", "toolTip")
        .style("display", "none");
 
    var legend = svgG.append("g")
        .attr("text-anchor", "end")
        .selectAll("g")
        .data(series)
        .enter().append("g")
        .attr("transform", function(d, i) { return "translate(0," + i * 20 + ")"; });
 
    legend.append("rect")
          .attr("x", width - 20)
          .attr("width", 19)
          .attr("height", 19)
          .attr("fill", colors);
 
      legend.append("text")
          .attr("x", width - 30)
          .attr("y", 9.5)
          .attr("dy", "0.32em")
          .text(function(d) { return d; });

</script>
<br>
각 직무스트레스에 대한 요소들 중 <br>
1.
<?echo $a_desc;?>
<br>
2.
<?echo $b_desc;?>
<br>
3.
<?echo $c_desc;?>
<br>
4.
<?echo $d_desc;?>
<br>
5.
<?echo $e_desc;?>
<br>
6.
<?echo $f_desc;?>
<br>
7.
<?echo $g_desc;?>
<br>
8.
<?echo $h_desc;?>
<br>
</div>
<input type="button" id="print" value="프린트">
<script>
$(document).ready(function () {
$("#print").click(function () {
    let $container = $("#hpt").clone()    // 프린트 할 특정 영역 복사
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
<input type="button" value="상담신청" onClick="location.href=\'/bbs/group.php?gr_id=booking\'">