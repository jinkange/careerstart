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
    vertical-align: middle;
}
.tg-fymr{
    background-color: #003366;
    color: white;
}
.tg-c3ow{
    text-align: center;
}
.tg-0pky{
    
}
td:nth-child(0){
 
}
.tg-svo0{
    text-align: center;
}
.tg-mide{
    background-color: #003366;
    color: white
}
input[type=radio] {
    display: block;
    margin: 0 auto;
    width: 20px;
    height: 20px;
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
                        <li class="breadcrumb-item active">의사 소통 검사</li>
                    </ul>
                </div>
            </div>
<div class="sub_title" style="
    margin-bottom: 100px;
">
			<h3 class="tit" style="text-align: center; "><span style="font-size: 36pt; font-family: Verdana;">의사 소통 검사</span></h3>
		</div>
<br>
<table class="tg" style="undefined;table-layout: fixed; ">
<colgroup>
<col style="width: 490px">
<col style="width: 101px">
<col style="width: 101px">
<col style="width: 101px">
<col style="width: 101px">
<col style="width: 101px">
</colgroup>
<thead>
  <tr>
    <th class="tg-svo0" rowspan="2"style="font-size: 35px;
    line-height: 2;width: 50%;">문항</th>
    <th class="tg-c3ow">전혀 <br>그렇지 않다</th>
    <th class="tg-c3ow">그렇지 않다</th>
    <th class="tg-c3ow">보통이다</th>
    <th class="tg-c3ow">그렇다</th>
    <th class="tg-c3ow">매우그렇다</th>
  </tr>
  <tr>
    <td class="tg-svo0">1</td>
    <td class="tg-svo0">2</td>
    <td class="tg-svo0">3</td>
    <td class="tg-svo0">4</td>
    <td class="tg-svo0">5</td>
  </tr>
</thead>
<form action="/bbs/group.php?gr_id=comm_submit" method="POST" onsubmit="return agree()">
<tbody>
  <tr>
      
    <td class="tg-0pky">1. 상대방이 불편하게 보이면 나보다 다른 사람들의 기분을 맞추려고 한다.</td>
    <td class="tg-phtq"><input type="radio" id="r1" name="a1" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r1" name="a1" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r1" name="a1" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r1" name="a1" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r1" name="a1" value="5"/></td>
    
  </tr>
  <tr>
    <td class="tg-0pky">2. 일이나 사람 관계에서 잘못 되었을 때 종종 나의 잘못으로 돌린다. </td>
    <td class="tg-phtq"><input type="radio" id="r2" name="a2" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r2" name="a2" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r2" name="a2" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r2" name="a2" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r2" name="a2" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">3. 지나치게 타인을 의식해서 나의 생각이나 감정을 표현하는 것을 어려워한다.</td>
    <td class="tg-phtq"><input type="radio" id="r3" name="a3" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r3" name="a3" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r3" name="a3" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r3" name="a3" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r3" name="a3" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">4. 타인의 말투나 얼굴 표정, 감정에 신경을 많이 쓴다.</td>
    <td class="tg-phtq"><input type="radio" id="r4" name="a4" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r4" name="a4" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r4" name="a4" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r4" name="a4" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r4" name="a4" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">5. 타인을 배려하고 잘 돌보아주는 편이다.</td>
    <td class="tg-phtq"><input type="radio" id="r5" name="a5" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r5" name="a5" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r5" name="a5" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r5" name="a5" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r5" name="a5" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">6. 상대방이 나를 싫어할까 봐 두려워서 불안하거나 위축감을 느낄 때가 많다.</td>
    <td class="tg-phtq"><input type="radio" id="r6" name="a6" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r6" name="a6" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r6" name="a6" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r6" name="a6" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r6" name="a6" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">7. 상대방이 부탁을 할 때 거절을 하지 못하는 편이다. </td>
    <td class="tg-phtq"><input type="radio" id="r7" name="a7" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r7" name="a7" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r7" name="a7" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r7" name="a7" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r7" name="a7" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">8. 내 자신이 가치가 없는 것 같아 우울함을 느낄 때가 많다. </td>
    <td class="tg-phtq"><input type="radio" id="r8" name="a8" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r8" name="a8" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r8" name="a8" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r8" name="a8" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r8" name="a8" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-mide" style="text-align: center;">A 문항 총점</td>
    <td class="tg-phtq"></td>
    <td class="tg-0pky"></td>
    <td class="tg-phtq"></td>
    <td class="tg-0pky"></td>
    <td class="tg-phtq"></td>
  </tr>
  <tr>
    <td class="tg-0pky">1. 일이 잘 못 되었을 때 자주 타인의 탓으로 돌린다.</td>
    <td class="tg-phtq"><input type="radio" id="r9" name="b1" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r9" name="b1" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r9" name="b1" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r9" name="b1" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r9" name="b1" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">2. 상대방의 의견을 무시하고 의견을 주장하는 편이다.  </td>
    <td class="tg-phtq"><input type="radio" id="r10" name="b2" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r10" name="b2" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r10" name="b2" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r10" name="b2" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r10" name="b2" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">3. 내 의견이 받아들여지지 않으면 화가 나서 언성을 높이게 된다.</td>
    <td class="tg-phtq"><input type="radio" id="r11" name="b3" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r11" name="b3" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r11" name="b3" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r11" name="b3" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r11" name="b3" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">4. 상대방의 결점이나 잘못을 찾아내어 비판한다.</td>
    <td class="tg-phtq"><input type="radio" id="r12" name="b4" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r12" name="b4" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r12" name="b4" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r12" name="b4" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r12" name="b4" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">5. 지시적이거나 명령적인 말투로 상대가 공격 받았다는 느낌을 줄 경우가 있다.</td>
    <td class="tg-phtq"><input type="radio" id="r13" name="b5" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r13" name="b5" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r13" name="b5" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r13" name="b5" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r13" name="b5" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">6. 작은 일에도 화를 내거나 잘 흥분한다.</td>
    <td class="tg-phtq"><input type="radio" id="r14" name="b6" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r14" name="b6" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r14" name="b6" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r14" name="b6" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r14" name="b6" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">7. 자주 근육이 긴장되므로 혈압이 오르거나 목이 뻣뻣함을 느끼곤 한다.</td>
    <td class="tg-phtq"><input type="radio" id="r15" name="b7" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r15" name="b7" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r15" name="b7" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r15" name="b7" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r15" name="b7" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">8. 상대방으로부터 비판적이거나 융통성이 없다는 말을 듣기도 한다.</td>
    <td class="tg-phtq"><input type="radio" id="r16" name="b8" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r16" name="b8" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r16" name="b8" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r16" name="b8" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r16" name="b8" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-mide" style="text-align: center;">B 문항 총점</td>
    <td class="tg-phtq"></td>
    <td class="tg-0pky"></td>
    <td class="tg-phtq"></td>
    <td class="tg-0pky"></td>
    <td class="tg-phtq"></td>
  </tr>
  <tr>
    <td class="tg-0pky">1. 무슨 일이든지 조목조목 따지는 편이다.</td>
    <td class="tg-phtq"><input type="radio" id="r17" name="c1" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r17" name="c1" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r17" name="c1" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r17" name="c1" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r17" name="c1" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">2. 차분하고 이성적이며 냉정하게 생각한다.</td>
    <td class="tg-phtq"><input type="radio" id="r18" name="c2" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r18" name="c2" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r18" name="c2" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r18" name="c2" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r18" name="c2" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">3. 나의 견해를 분명하게 표현하기 위해 객관적인 자료나 정보를 자주 인용한다.</td>
    <td class="tg-phtq"><input type="radio" id="r19" name="c3" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r19" name="c3" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r19" name="c3" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r19" name="c3" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r19" name="c3" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">4. 실수하지 않으려고 신경을 많이 쓰는 편이다.</td>
    <td class="tg-phtq"><input type="radio" id="r20" name="c4" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r20" name="c4" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r20" name="c4" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r20" name="c4" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r20" name="c4" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">5. 불편한 상황이 놓이면 그대로 넘기지 못하고 시시비비를 따지는 편이다.</td>
    <td class="tg-phtq"><input type="radio" id="r21" name="c5" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r21" name="c5" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r21" name="c5" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r21" name="c5" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r21" name="c5" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">6. 현명하고 침착하지만 주변에서 ‘냉정하다’ 라는 말을 자주 듣는다.</td>
    <td class="tg-phtq"><input type="radio" id="r22" name="c6" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r22" name="c6" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r22" name="c6" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r22" name="c6" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r22" name="c6" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">7. 나의 감정을 표현하는 것이 힘들고 혼자인 느낌이 들 때가 많다.</td>
    <td class="tg-phtq"><input type="radio" id="r23" name="c7" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r23" name="c7" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r23" name="c7" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r23" name="c7" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r23" name="c7" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">8. 목소리가 단조롭고 뻣뻣하고 경직된 자세를 취하는 편이다.</td>
    <td class="tg-phtq"><input type="radio" id="r24" name="c8" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r24" name="c8" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r24" name="c8" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r24" name="c8" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r24" name="c8" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-mide" style="text-align: center;">C 문항 총점</td>
    <td class="tg-phtq"></td>
    <td class="tg-0pky"></td>
    <td class="tg-phtq"></td>
    <td class="tg-0pky"></td>
    <td class="tg-phtq"></td>
  </tr>
  <tr>
    <td class="tg-0pky">1. 생각이 자주 바뀌고 동시에 여러 가지 행동을 하는 편이다.</td>
    <td class="tg-phtq"><input type="radio" id="r25" name="d1" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r25" name="d1" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r25" name="d1" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r25" name="d1" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r25" name="d1" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">2. 타인으로부터 정신이 없거나 ‘산만하다’라는 소리를 듣는다.</td>
    <td class="tg-phtq"><input type="radio" id="r26" name="d2" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r26" name="d2" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r26" name="d2" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r26" name="d2" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r26" name="d2" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">3. 상황에 적절하지 못한 말이나 행동을 종종하며 딴전을 피우는 편이다.</td>
    <td class="tg-phtq"><input type="radio" id="r27" name="d3" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r27" name="d3" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r27" name="d3" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r27" name="d3" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r27" name="d3" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">4. 난처하거나 곤란한 상황일 때는 농담이나 유머로 그 상황을 바꾸려는 편이다.</td>
    <td class="tg-phtq"><input type="radio" id="r28" name="d4" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r28" name="d4" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r28" name="d4" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r28" name="d4" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r28" name="d4" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">5. 불편한 상황에서는 안절 부절 못하거나 가만히 있지를 못한다.</td>
    <td class="tg-phtq"><input type="radio" id="r29" name="d5" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r29" name="d5" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r29" name="d5" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r29" name="d5" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r29" name="d5" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">6. 한 주제에 집중하기보다는 대화의 주제를 자주 바꾼다.</td>
    <td class="tg-phtq"><input type="radio" id="r30" name="d6" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r30" name="d6" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r30" name="d6" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r30" name="d6" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r30" name="d6" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">7. 분위기가 지루하거나 침체된 분위기를 바꾸려고 한다.</td>
    <td class="tg-phtq"><input type="radio" id="r31" name="d7" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r31" name="d7" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r31" name="d7" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r31" name="d7" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r31" name="d7" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">8. 불안하면 호흡이 고르지 못하고 머리가 어지러운 경험을 하기도 한다.</td>
    <td class="tg-phtq"><input type="radio" id="r32" name="d8" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r32" name="d8" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r32" name="d8" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r32" name="d8" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r32" name="d8" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-mide" style="text-align: center;">D 문항 총점</td>
    <td class="tg-phtq"></td>
    <td class="tg-0pky"></td>
    <td class="tg-phtq"></td>
    <td class="tg-0pky"></td>
    <td class="tg-phtq"></td>
  </tr>
  <tr>
    <td class="tg-0pky">1. 타인의 생각이나 평가에 구애받지 않고 내 의견을 전달할 수 있다.</td>
    <td class="tg-phtq"><input type="radio" id="r33" name="e1" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r33" name="e1" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r33" name="e1" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r33" name="e1" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r33" name="e1" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">2. 부정적인 감정도 나는 솔직하게 표현한다.</td>
    <td class="tg-phtq"><input type="radio" id="r34" name="e2" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r34" name="e2" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r34" name="e2" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r34" name="e2" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r34" name="e2" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">3. 타인이 나에게 부탁을 할 때 내가 원하지 않으면 거절한다. </td>
    <td class="tg-phtq"><input type="radio" id="r35" name="e3" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r35" name="e3" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r35" name="e3" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r35" name="e3" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r35" name="e3" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">4. 나 자신에 대해 편안하게 느낀다.</td>
    <td class="tg-phtq"><input type="radio" id="r36" name="e4" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r36" name="e4" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r36" name="e4" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r36" name="e4" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r36" name="e4" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">5. 모험하는 것을 나는 두려워하지 않는다.</td>
    <td class="tg-phtq"><input type="radio" id="r37" name="e5" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r37" name="e5" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r37" name="e5" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r37" name="e5" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r37" name="e5" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">6. 다양한 경험에 개방적이다.</td>
    <td class="tg-phtq"><input type="radio" id="r38" name="e6" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r38" name="e6" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r38" name="e6" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r38" name="e6" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r38" name="e6" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">7. 나만의 독특한 개성이 있음을 존중한다.</td>
    <td class="tg-phtq"><input type="radio" id="r39" name="e7" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r39" name="e7" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r39" name="e7" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r39" name="e7" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r39" name="e7" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">8. 타인이 나의 의견과 생각에 반대하여도 감정이 상하지 않는다.</td>
    <td class="tg-phtq"><input type="radio" id="r40" name="e8" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r40" name="e8" value="2"/></td>
    <td class="tg-phtq"><input type="radio" id="r40" name="e8" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r40" name="e8" value="4"/></td>
    <td class="tg-phtq"><input type="radio" id="r40" name="e8" value="5"/></td>
  </tr>
  <tr>
    <td class="tg-mide" style="text-align: center;">E 문항 총점</td>
    <td class="tg-phtq"></td>
    <td class="tg-0pky"></td>
    <td class="tg-phtq"></td>
    <td class="tg-0pky"></td>
    <td class="tg-phtq"></td>
  </tr>
</tbody>
</table>


<input type="hidden" name="name" value="<? echo $name;?>"/>
<input type="hidden" name="email" value="<? echo $email;?>"/>

<input type="submit" id="submit_comm" value="결과보기"/>
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