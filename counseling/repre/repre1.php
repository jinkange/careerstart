<?php
$email = $_POST['email'];
$name = $_POST['name'];
?>



<style type="text/css">

input[type=radio] {
    display: block;
    margin: 0 auto;
    width: 20px;
    height: 20px;
}

table.tg {
    border-collapse: collapse;
    text-align: left;
    line-height: 1.5;

}
table.tg thead th {
    width: 10%;
    padding: 10px;
    font-weight: bold;
    vertical-align: top;
    color: #369;
    border-bottom: 3px solid #036;
}
table.tg tbody th {
    width: 10%;
    padding: 10px;
    font-weight: bold;
    vertical-align: top;
    border-bottom: 1px solid #ccc;
    background: #f3f6f7;
}
table.tg td {
    width: 10%;
    padding: 10px;
    vertical-align: top;
    border-bottom: 1px solid #ccc;
    font-weight: bold;
}
.tg-fymr{
    background-color: #003366;
    color: white;
}
.tg-c3ow{
    text-align: center;
}
input[type=submit] {
    width: 20%;
    display: block;
    margin: auto;
    margin-top: 40px;
    margin-bottom: 50px;
    height: 50px;
    background-color: #4391ff;
    color: white;
    border-color: aliceblue;
}
</style>
<div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb" style="    background-color: #e9ecef30;">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">심리 검사</li>
                        <li class="breadcrumb-item active">선호감각(표상표계) 검사</li>
                    </ul>
                </div>
            </div>
<div class="sub_title" style="
    margin-bottom: 100px;
">
			<h3 class="tit" style="text-align: center; "><span style="font-size: 36pt; font-family: Verdana;">선호 감각(표상표계 검사)</span></h3>
		</div>
<div class="intro" style="
    border: 1px solid #ddd;
    padding: 10px;
    word-break: keep-all;
    text-align: left;
">
    <ul class="dot_list" >

      <li>다음 각 문항을 읽고 자신에게 해당하는 정도에 따라 4에서 1까지 보기와 같이 번호를 쓰시오.</li>
      <li>4 : 자기에게 가장 크게 해당하는 경우</li>
      <li>1 : 자기에게 가장 적게 해당하거나 관계없는 경우</li>
      <li>(각 문항 모든 빈칸에 1, 2, 3, 4 숫자를 관계가 많은 정도에 따라 쓰십시오.)</li>
      <li>예) a. 3   b. 2   c. 1  d. 4 </li>
    </ul>
  </div>







<style type="text/css">

</style>
<script type="text/javascript">

function checkTree(obj,type){
    //console.log($("input[name^='a']"));
    var tree = $("input[name^='a']"); //16개
    //tree[0].checked = true;     //1번을 체크 트루
    var tmp = 0;
    var tmp2 = 0;
    var i=0;
    var name = type;
    var point = new Array;

    for(i=0; i<tree.length; i++){
        if($("input[name^='"+name+"']")[i].checked == true){ 
            point.push($("input[name^='a']")[i].value);
        }
    }
    const set = new Set(point);
    if(point.length !== set.size) {
    alert("같은 점수를 사용할 수 없습니다.");
    $("input:radio[name='"+obj.name+"']").removeAttr("checked");
    }
} 

</script>
<form action="/bbs/group.php?gr_id=repre_submit" method="POST" onsubmit="return agree()">

<table class="tg" style="undefined;table-layout: fixed;">
<colgroup>
<col style="width: 429px">
<col style="width: 101px">
<col style="width: 101px">
<col style="width: 101px">
<col style="width: 101px">
</colgroup>
<thead>
  <tr>
    <th class="tg-c3ow" rowspan="2" style="font-size: 35px;
    line-height: 2;width: 60%;">문항</th>
    <th class="tg-c3ow">전혀 <br>그렇지 않다</th>
    <th class="tg-c3ow">그렇지 않다</th>
    <th class="tg-c3ow">그렇다</th>
    <th class="tg-c3ow">매우 그렇다</th>
  </tr>
  <tr>
    <td class="tg-c3ow">1</td>
    <td class="tg-c3ow">2</td>
    <td class="tg-c3ow">3</td>
    <td class="tg-c3ow">4</td>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-fymr" colspan="5">1. 내가 중요한 결정을 할 때 나아게 가장 영향을 미치는 것은 다음과 같은 것이다.<br></td>
  </tr>
  <tr>
    <td class="tg-0pky">a. 자신의 직관적인 느낌</td>
    <td class="tg-phtq"><input type="radio" id="r1" name="a1" value="1" onclick="checkTree(this,'a')"/></td>
    <td class="tg-0pky"><input type="radio" id="r1" name="a1" value="2" onclick="checkTree(this,'a')"/></td>
    <td class="tg-phtq"><input type="radio" id="r1" name="a1" value="3" onclick="checkTree(this,'a')"/></td>
    <td class="tg-0pky"><input type="radio" id="r1" name="a1" value="4" onclick="checkTree(this,'a')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">b. 주위 사람들이 하는 말</td>
    <td class="tg-phtq"><input type="radio" id="r2" name="a2" value="1" onclick="checkTree(this,'a')"/></td>
    <td class="tg-0pky"><input type="radio" id="r2" name="a2" value="2" onclick="checkTree(this,'a')"/></td>
    <td class="tg-phtq"><input type="radio" id="r2" name="a2" value="3" onclick="checkTree(this,'a')"/></td>
    <td class="tg-0pky"><input type="radio" id="r2" name="a2" value="4" onclick="checkTree(this,'a')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">c. 일의 전체적인 모습과 조화</td>
    <td class="tg-phtq"><input type="radio" id="r3" name="a3" value="1" onclick="checkTree(this,'a')"/></td>
    <td class="tg-0pky"><input type="radio" id="r3" name="a3" value="2" onclick="checkTree(this,'a')"/></td>
    <td class="tg-phtq"><input type="radio" id="r3" name="a3" value="3" onclick="checkTree(this,'a')"/></td>
    <td class="tg-0pky"><input type="radio" id="r3" name="a3" value="4" onclick="checkTree(this,'a')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">d. 세심하고 면밀한 검토와 연구</td>
    <td class="tg-phtq"><input type="radio" id="r4" name="a4" value="1" onclick="checkTree(this,'a')"/></td>
    <td class="tg-0pky"><input type="radio" id="r4" name="a4" value="2" onclick="checkTree(this,'a')"/></td>
    <td class="tg-phtq"><input type="radio" id="r4" name="a4" value="3" onclick="checkTree(this,'a')"/></td>
    <td class="tg-0pky"><input type="radio" id="r4" name="a4" value="4" onclick="checkTree(this,'a')"/></td>
  </tr>
  <tr>
    <td class="tg-fymr" colspan="5">2. 다른 사람과 논쟁을 벌일 때 내가 가장 민감하게 반응하는 부분은 다음과 같다</td>
  </tr>
  <tr>
    <td class="tg-0pky">a.논쟁 대상의 목소리 톤</td>
    <td class="tg-phtq"><input type="radio" id="r5" name="b1" value="1" onclick="checkTree(this,'b')"/></td>
    <td class="tg-0pky"><input type="radio" id="r5" name="b1" value="2" onclick="checkTree(this,'b')"/></td>
    <td class="tg-phtq"><input type="radio" id="r5" name="b1" value="3" onclick="checkTree(this,'b')"/></td>
    <td class="tg-0pky"><input type="radio" id="r5" name="b1" value="4" onclick="checkTree(this,'b')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">b.논쟁 대상의 논쟁하는 모습</td>
    <td class="tg-phtq"><input type="radio" id="r6" name="b2" value="1" onclick="checkTree(this,'b')"/></td>
    <td class="tg-0pky"><input type="radio" id="r6" name="b2" value="2" onclick="checkTree(this,'b')"/></td>
    <td class="tg-phtq"><input type="radio" id="r6" name="b2" value="3" onclick="checkTree(this,'b')"/></td>
    <td class="tg-0pky"><input type="radio" id="r6" name="b2" value="4" onclick="checkTree(this,'b')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">c.논쟁의 주요 내용</td>
    <td class="tg-phtq"><input type="radio" id="r7" name="b3" value="1" onclick="checkTree(this,'b')"/></td>
    <td class="tg-0pky"><input type="radio" id="r7" name="b3" value="2" onclick="checkTree(this,'b')"/></td>
    <td class="tg-phtq"><input type="radio" id="r7" name="b3" value="3" onclick="checkTree(this,'b')"/></td>
    <td class="tg-0pky"><input type="radio" id="r7" name="b3" value="4" onclick="checkTree(this,'b')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">d.논쟁 대상의 진실한 감정</td>
    <td class="tg-phtq"><input type="radio" id="r8" name="b4" value="1" onclick="checkTree(this,'b')"/></td>
    <td class="tg-0pky"><input type="radio" id="r8" name="b4" value="2" onclick="checkTree(this,'b')"/></td>
    <td class="tg-phtq"><input type="radio" id="r8" name="b4" value="3" onclick="checkTree(this,'b')"/></td>
    <td class="tg-0pky"><input type="radio" id="r8" name="b4" value="4" onclick="checkTree(this,'b')"/></td>
  </tr>
  <tr>
    <td class="tg-fymr" colspan="5">3. 나는 평소와 다른 심리상태가 될 때 다음과 같은 것이 바뀌는 경향이 있다</td>
  </tr>
  <tr>
    <td class="tg-0pky">a.옷차림, 머리스타일, 화장</td>
    <td class="tg-phtq"><input type="radio" id="r9" name="c1" value="1" onclick="checkTree(this,'c')"/></td>
    <td class="tg-0pky"><input type="radio" id="r9" name="c1" value="2" onclick="checkTree(this,'c')"/></td>
    <td class="tg-phtq"><input type="radio" id="r9" name="c1" value="3" onclick="checkTree(this,'c')"/></td>
    <td class="tg-0pky"><input type="radio" id="r9" name="c1" value="4" onclick="checkTree(this,'c')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">b.자신의 감정의 표현</td>
    <td class="tg-phtq"><input type="radio" id="r10" name="c2" value="1" onclick="checkTree(this,'c')"/></td>
    <td class="tg-0pky"><input type="radio" id="r10" name="c2" value="2" onclick="checkTree(this,'c')"/></td>
    <td class="tg-phtq"><input type="radio" id="r10" name="c2" value="3" onclick="checkTree(this,'c')"/></td>
    <td class="tg-0pky"><input type="radio" id="r10" name="c2" value="4" onclick="checkTree(this,'c')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">c.언어나 용어</td>
    <td class="tg-phtq"><input type="radio" id="r11" name="c3" value="1" onclick="checkTree(this,'c')"/></td>
    <td class="tg-0pky"><input type="radio" id="r11" name="c3" value="2" onclick="checkTree(this,'c')"/></td>
    <td class="tg-phtq"><input type="radio" id="r11" name="c3" value="3" onclick="checkTree(this,'c')"/></td>
    <td class="tg-0pky"><input type="radio" id="r11" name="c3" value="4" onclick="checkTree(this,'c')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">d.목소리 상태</td>
    <td class="tg-phtq"><input type="radio" id="r12" name="c4" value="1" onclick="checkTree(this,'c')"/></td>
    <td class="tg-0pky"><input type="radio" id="r12" name="c4" value="2" onclick="checkTree(this,'c')"/></td>
    <td class="tg-phtq"><input type="radio" id="r12" name="c4" value="3" onclick="checkTree(this,'c')"/></td>
    <td class="tg-0pky"><input type="radio" id="r12" name="c4" value="4" onclick="checkTree(this,'c')"/></td>
  </tr>
  <tr>
    <td class="tg-fymr" colspan="5">4. 나는 다음과 같은 것을 하기가 가장 쉽다</td>
  </tr>
  <tr>
    <td class="tg-0pky">a.자신이 좋아하는 음악 듣기</td>
    <td class="tg-phtq"><input type="radio" id="r13" name="d1" value="1" onclick="checkTree(this,'d')"/></td>
    <td class="tg-0pky"><input type="radio" id="r13" name="d1" value="2" onclick="checkTree(this,'d')"/></td>
    <td class="tg-phtq"><input type="radio" id="r13" name="d1" value="3" onclick="checkTree(this,'d')"/></td>
    <td class="tg-0pky"><input type="radio" id="r13" name="d1" value="4" onclick="checkTree(this,'d')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">b.자신이 관심 있는 주제와 관련하여 논리적으로 생각하기</td>
    <td class="tg-phtq"><input type="radio" id="r14" name="d2" value="1" onclick="checkTree(this,'d')"/></td>
    <td class="tg-0pky"><input type="radio" id="r14" name="d2" value="2" onclick="checkTree(this,'d')"/></td>
    <td class="tg-phtq"><input type="radio" id="r14" name="d2" value="3" onclick="checkTree(this,'d')"/></td>
    <td class="tg-0pky"><input type="radio" id="r14" name="d2" value="4" onclick="checkTree(this,'d')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">c.가장 편하게 느껴지는 가구를 고르기</td>
    <td class="tg-phtq"><input type="radio" id="r15" name="d3" value="1" onclick="checkTree(this,'d')"/></td>
    <td class="tg-0pky"><input type="radio" id="r15" name="d3" value="2" onclick="checkTree(this,'d')"/></td>
    <td class="tg-phtq"><input type="radio" id="r15" name="d3" value="3" onclick="checkTree(this,'d')"/></td>
    <td class="tg-0pky"><input type="radio" id="r15" name="d3" value="4" onclick="checkTree(this,'d')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">d.색상이 잘 어울리는 디자인을 고르기</td>
    <td class="tg-phtq"><input type="radio" id="r16" name="d4" value="1" onclick="checkTree(this,'d')"/></td>
    <td class="tg-0pky"><input type="radio" id="r16" name="d4" value="2" onclick="checkTree(this,'d')"/></td>
    <td class="tg-phtq"><input type="radio" id="r16" name="d4" value="3" onclick="checkTree(this,'d')"/></td>
    <td class="tg-0pky"><input type="radio" id="r16" name="d4" value="4" onclick="checkTree(this,'d')"/></td>
  </tr>
  <tr>
    <td class="tg-fymr" colspan="5">5. 나를 가장 잘 나타내는 것은 다음과 같다</td>
  </tr>
  <tr>
    <td class="tg-0pky">a.주변의 소음에 민감하다</td>
    <td class="tg-phtq"><input type="radio" id="r17" name="e1" value="1" onclick="checkTree(this,'e')"/></td>
    <td class="tg-0pky"><input type="radio" id="r17" name="e1" value="2" onclick="checkTree(this,'e')"/></td>
    <td class="tg-phtq"><input type="radio" id="r17" name="e1" value="3" onclick="checkTree(this,'e')"/></td>
    <td class="tg-0pky"><input type="radio" id="r17" name="e1" value="4" onclick="checkTree(this,'e')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">b.어떤 사실이나 자료를 분석할 때 논리성을 따진다.</td>
    <td class="tg-phtq"><input type="radio" id="r18" name="e2" value="1" onclick="checkTree(this,'e')"/></td>
    <td class="tg-0pky"><input type="radio" id="r18" name="e2" value="2" onclick="checkTree(this,'e')"/></td>
    <td class="tg-phtq"><input type="radio" id="r18" name="e2" value="3" onclick="checkTree(this,'e')"/></td>
    <td class="tg-0pky"><input type="radio" id="r18" name="e2" value="4" onclick="checkTree(this,'e')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">c.옷의 촉감에 매우 민감한 편이다</td>
    <td class="tg-phtq"><input type="radio" id="r19" name="e3" value="1" onclick="checkTree(this,'e')"/></td>
    <td class="tg-0pky"><input type="radio" id="r19" name="e3" value="2" onclick="checkTree(this,'e')"/></td>
    <td class="tg-phtq"><input type="radio" id="r19" name="e3" value="3" onclick="checkTree(this,'e')"/></td>
    <td class="tg-0pky"><input type="radio" id="r19" name="e3" value="4" onclick="checkTree(this,'e')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">d.실내의 가구 배치나 색상에 민감한 편이다</td>
    <td class="tg-phtq"><input type="radio" id="r20" name="e4" value="1" onclick="checkTree(this,'e')"/></td>
    <td class="tg-0pky"><input type="radio" id="r20" name="e4" value="2" onclick="checkTree(this,'e')"/></td>
    <td class="tg-phtq"><input type="radio" id="r20" name="e4" value="3" onclick="checkTree(this,'e')"/></td>
    <td class="tg-0pky"><input type="radio" id="r20" name="e4" value="4" onclick="checkTree(this,'e')"/></td>
  </tr>
  <tr>
    <td class="tg-fymr" colspan="5">6. 나를 가장 잘 알기 위해서 주위 사람들은 다음과 같이 하는 것이 좋다</td>
  </tr>
  <tr>
    <td class="tg-0pky">a.내가 느끼는 것을 경험하기</td>
    <td class="tg-phtq"><input type="radio" id="r21" name="f1" value="1" onclick="checkTree(this,'f')"/></td>
    <td class="tg-0pky"><input type="radio" id="r21" name="f1" value="2" onclick="checkTree(this,'f')"/></td>
    <td class="tg-phtq"><input type="radio" id="r21" name="f1" value="3" onclick="checkTree(this,'f')"/></td>
    <td class="tg-0pky"><input type="radio" id="r21" name="f1" value="4" onclick="checkTree(this,'f')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">b.나의 관점과 함께 하면서 보기</td>
    <td class="tg-phtq"><input type="radio" id="r22" name="f2" value="1" onclick="checkTree(this,'f')"/></td>
    <td class="tg-0pky"><input type="radio" id="r22" name="f2" value="2" onclick="checkTree(this,'f')"/></td>
    <td class="tg-phtq"><input type="radio" id="r22" name="f2" value="3" onclick="checkTree(this,'f')"/></td>
    <td class="tg-0pky"><input type="radio" id="r22" name="f2" value="4" onclick="checkTree(this,'f')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">c.내가 무슨 말을 하며 또 표현을 어떻게 하는지 주의 깊게 들어보기</td>
    <td class="tg-phtq"><input type="radio" id="r23" name="f3" value="1" onclick="checkTree(this,'f')"/></td>
    <td class="tg-0pky"><input type="radio" id="r23" name="f3" value="2" onclick="checkTree(this,'f')"/></td>
    <td class="tg-phtq"><input type="radio" id="r23" name="f3" value="3" onclick="checkTree(this,'f')"/></td>
    <td class="tg-0pky"><input type="radio" id="r23" name="f3" value="4" onclick="checkTree(this,'f')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">d.내가 하고자 하거나 말하는 것의 의미에 관심 갖기</td>
    <td class="tg-phtq"><input type="radio" id="r24" name="f4" value="1" onclick="checkTree(this,'f')"/></td>
    <td class="tg-0pky"><input type="radio" id="r24" name="f4" value="2" onclick="checkTree(this,'f')"/></td>
    <td class="tg-phtq"><input type="radio" id="r24" name="f4" value="3" onclick="checkTree(this,'f')"/></td>
    <td class="tg-0pky"><input type="radio" id="r24" name="f4" value="4" onclick="checkTree(this,'f')"/></td>
  </tr>
  <tr>
    <td class="tg-fymr" colspan="5">7. 나는 다음과 같이 하는 것을 좋아 한다</td>
  </tr>
  <tr>
    <td class="tg-0pky">a.다른 사람들이 말하는 것을 듣기</td>
    <td class="tg-phtq"><input type="radio" id="r25" name="g1" value="1" onclick="checkTree(this,'g')"/></td>
    <td class="tg-0pky"><input type="radio" id="r25" name="g1" value="2" onclick="checkTree(this,'g')"/></td>
    <td class="tg-phtq"><input type="radio" id="r25" name="g1" value="3" onclick="checkTree(this,'g')"/></td>
    <td class="tg-0pky"><input type="radio" id="r25" name="g1" value="4" onclick="checkTree(this,'g')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">b.계획을 세울 때 전체적인 모습을 먼저 그려보기</td>
    <td class="tg-phtq"><input type="radio" id="r26" name="g2" value="1" onclick="checkTree(this,'g')"/></td>
    <td class="tg-0pky"><input type="radio" id="r26" name="g2" value="2" onclick="checkTree(this,'g')"/></td>
    <td class="tg-phtq"><input type="radio" id="r26" name="g2" value="3" onclick="checkTree(this,'g')"/></td>
    <td class="tg-0pky"><input type="radio" id="r26" name="g2" value="4" onclick="checkTree(this,'g')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">c.정보나 자료가 있을 때 논리적 체계를 세우고 정리하기</td>
    <td class="tg-phtq"><input type="radio" id="r27" name="g3" value="1" onclick="checkTree(this,'g')"/></td>
    <td class="tg-0pky"><input type="radio" id="r27" name="g3" value="2" onclick="checkTree(this,'g')"/></td>
    <td class="tg-phtq"><input type="radio" id="r27" name="g3" value="3" onclick="checkTree(this,'g')"/></td>
    <td class="tg-0pky"><input type="radio" id="r27" name="g3" value="4" onclick="checkTree(this,'g')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">d.사람들 처음 만날 때 그에 대한 느낌 충실하기</td>
    <td class="tg-phtq"><input type="radio" id="r28" name="g4" value="1" onclick="checkTree(this,'g')"/></td>
    <td class="tg-0pky"><input type="radio" id="r28" name="g4" value="2" onclick="checkTree(this,'g')"/></td>
    <td class="tg-phtq"><input type="radio" id="r28" name="g4" value="3" onclick="checkTree(this,'g')"/></td>
    <td class="tg-0pky"><input type="radio" id="r28" name="g4" value="4" onclick="checkTree(this,'g')"/></td>
  </tr>
  <tr>
    <td class="tg-fymr" colspan="5">8. 나는 다음과 같은 사람이다.</td>
  </tr>
  <tr>
    <td class="tg-0pky">a.내 눈으로 직접 확인하기 전에는 잘 믿지 않는 편이다.</td>
    <td class="tg-phtq"><input type="radio" id="r29" name="h1" value="1" onclick="checkTree(this,'h')"/></td>
    <td class="tg-0pky"><input type="radio" id="r29" name="h1" value="2" onclick="checkTree(this,'h')"/></td>
    <td class="tg-phtq"><input type="radio" id="r29" name="h1" value="3" onclick="checkTree(this,'h')"/></td>
    <td class="tg-0pky"><input type="radio" id="r29" name="h1" value="4" onclick="checkTree(this,'h')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">b.슬픈 목소리로 부탁을 해오면 잘 거절하지 못한다.</td>
    <td class="tg-phtq"><input type="radio" id="r30" name="h2" value="1" onclick="checkTree(this,'h')"/></td>
    <td class="tg-0pky"><input type="radio" id="r30" name="h2" value="2" onclick="checkTree(this,'h')"/></td>
    <td class="tg-phtq"><input type="radio" id="r30" name="h2" value="3" onclick="checkTree(this,'h')"/></td>
    <td class="tg-0pky"><input type="radio" id="r30" name="h2" value="4" onclick="checkTree(this,'h')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">c.나의 느낌이 옳다고 여기면 이유는 중요하지 않고 믿는 편이다.</td>
    <td class="tg-phtq"><input type="radio" id="r31" name="h3" value="1" onclick="checkTree(this,'h')"/></td>
    <td class="tg-0pky"><input type="radio" id="r31" name="h3" value="2" onclick="checkTree(this,'h')"/></td>
    <td class="tg-phtq"><input type="radio" id="r31" name="h3" value="3" onclick="checkTree(this,'h')"/></td>
    <td class="tg-0pky"><input type="radio" id="r31" name="h3" value="4" onclick="checkTree(this,'h')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">d.이치에 맞고 합리적이면 나는 받아들인다.</td>
    <td class="tg-phtq"><input type="radio" id="r32" name="h4" value="1" onclick="checkTree(this,'h')"/></td>
    <td class="tg-0pky"><input type="radio" id="r32" name="h4" value="2" onclick="checkTree(this,'h')"/></td>
    <td class="tg-phtq"><input type="radio" id="r32" name="h4" value="3" onclick="checkTree(this,'h')"/></td>
    <td class="tg-0pky"><input type="radio" id="r32" name="h4" value="4" onclick="checkTree(this,'h')"/></td>
  </tr>
  <tr>
    <td class="tg-fymr" colspan="5">9. 나는 스트레스가 쌓이면</td>
  </tr>
  <tr>
    <td class="tg-0pky">a.음악을 들으며 스트레스를 해소한다.</td>
    <td class="tg-phtq"><input type="radio" id="r33" name="i1" value="1" onclick="checkTree(this,'i')"/></td>
    <td class="tg-0pky"><input type="radio" id="r33" name="i1" value="2" onclick="checkTree(this,'i')"/></td>
    <td class="tg-phtq"><input type="radio" id="r33" name="i1" value="3" onclick="checkTree(this,'i')"/></td>
    <td class="tg-0pky"><input type="radio" id="r33" name="i1" value="4" onclick="checkTree(this,'i')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">b.독서를 하며 시간을 보낸다.</td>
    <td class="tg-phtq"><input type="radio" id="r34" name="i2" value="1" onclick="checkTree(this,'i')"/></td>
    <td class="tg-0pky"><input type="radio" id="r34" name="i2" value="2" onclick="checkTree(this,'i')"/></td>
    <td class="tg-phtq"><input type="radio" id="r34" name="i2" value="3" onclick="checkTree(this,'i')"/></td>
    <td class="tg-0pky"><input type="radio" id="r34" name="i2" value="4" onclick="checkTree(this,'i')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">c.편안한 자세로 누워 휴식을 취한다.</td>
    <td class="tg-phtq"><input type="radio" id="r35" name="i3" value="1" onclick="checkTree(this,'i')"/></td>
    <td class="tg-0pky"><input type="radio" id="r35" name="i3" value="2" onclick="checkTree(this,'i')"/></td>
    <td class="tg-phtq"><input type="radio" id="r35" name="i3" value="3" onclick="checkTree(this,'i')"/></td>
    <td class="tg-0pky"><input type="radio" id="r35" name="i3" value="4" onclick="checkTree(this,'i')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">d.영화나 미술작품 속의 경치나 배경을 보며 스트레스를 해소한다.</td>
    <td class="tg-phtq"><input type="radio" id="r36" name="i4" value="1" onclick="checkTree(this,'i')"/></td>
    <td class="tg-0pky"><input type="radio" id="r36" name="i4" value="2" onclick="checkTree(this,'i')"/></td>
    <td class="tg-phtq"><input type="radio" id="r36" name="i4" value="3" onclick="checkTree(this,'i')"/></td>
    <td class="tg-0pky"><input type="radio" id="r36" name="i4" value="4" onclick="checkTree(this,'i')"/></td>
  </tr>
  <tr>
    <td class="tg-fymr" colspan="5">10. 처음 만난 사람을 기억할 때 다음과 같은 식으로 그를 기억해 낼 수 있다</td>
  </tr>
  <tr>
    <td class="tg-0pky">a.상대방의 외모,옷스타일</td>
    <td class="tg-phtq"><input type="radio" id="r37" name="j1" value="1" onclick="checkTree(this,'j')"/></td>
    <td class="tg-0pky"><input type="radio" id="r37" name="j1" value="2" onclick="checkTree(this,'j')"/></td>
    <td class="tg-phtq"><input type="radio" id="r37" name="j1" value="3" onclick="checkTree(this,'j')"/></td>
    <td class="tg-0pky"><input type="radio" id="r37" name="j1" value="4" onclick="checkTree(this,'j')"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">b.상대방 목소리, 대화 내용</td>
    <td class="tg-phtq"><input type="radio" id="r38" name="j2" value="1" onclick="checkTree(this,'j')"/></td>
    <td class="tg-0pky"><input type="radio" id="r38" name="j2" value="2" onclick="checkTree(this,'j')"/></td>
    <td class="tg-phtq"><input type="radio" id="r38" name="j2" value="3" onclick="checkTree(this,'j')"/></td>
    <td class="tg-0pky"><input type="radio" id="r38" name="j2" value="4" onclick="checkTree(this,'j')"/></td>
  </tr>
  <tr>
    <td class="tg-0lax">c.상대방에 대한 느낌</td>
    <td class="tg-phtq"><input type="radio" id="r39" name="j3" value="1" onclick="checkTree(this,'j')"/></td>
    <td class="tg-0pky"><input type="radio" id="r39" name="j3" value="2" onclick="checkTree(this,'j')"/></td>
    <td class="tg-phtq"><input type="radio" id="r39" name="j3" value="3" onclick="checkTree(this,'j')"/></td>
    <td class="tg-0pky"><input type="radio" id="r39" name="j3" value="4" onclick="checkTree(this,'j')"/></td>
  </tr>
  <tr>
    <td class="tg-0lax">d.상대방 직업이나 하는 일이 무엇일까 생각해보고</td>
    <td class="tg-phtq"><input type="radio" id="r40" name="j4" value="1" onclick="checkTree(this,'j')"/></td>
    <td class="tg-0pky"><input type="radio" id="r40" name="j4" value="2" onclick="checkTree(this,'j')"/></td>
    <td class="tg-phtq"><input type="radio" id="r40" name="j4" value="3" onclick="checkTree(this,'j')"/></td>
    <td class="tg-0pky"><input type="radio" id="r40" name="j4" value="4" onclick="checkTree(this,'j')"/></td>
  </tr>
</tbody>
</table>

<input type="hidden" name="name" value="<? echo $name;?>"/>
<input type="hidden" name="email" value="<? echo $email;?>"/>

<input type="submit" id="submit_repre" value="결과보기"/>
</form>
<sctipt>
<!-- 모든 항목이 체크 되어있는지 검사 -> 체크 완료 되었으면 해당 값들을 디비에 전송 -> 그 이후 결과페이지로 전송하여 값을 불러온뒤 결과페이지에서 결과값에 맞는 데이터를 보여줌. -->

</sctipt>
<script type="text/javascript"> 
function agree() { 
    var checked = document.querySelectorAll("input[type='radio']:checked");
    if(checked.length == 40){
        if(confirm("제출하시겠습니까?")==true){
            return true;
        }else{
            return false;
        }
    }else{
        alert("모든항목을 체크해주세요.")
        return false;
    }
}
//$("#r2:checked").val();
$(document).ready(function () {

});
</script>