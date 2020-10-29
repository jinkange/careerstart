<?php
$email = $_POST['email'];
$name = $_POST['name'];
$gender = $_POST['gender'];

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
                        <li class="breadcrumb-item active">직무 스트레스 검사</li>
                    </ul>
                </div>
            </div>
<div class="sub_title" style="
    margin-bottom: 100px;
">
			<h3 class="tit" style="text-align: center; "><span style="font-size: 36pt; font-family: Verdana;">직무 스트레스 검사</span></h3>
		</div>
<table class="tg" style="undefined;table-layout: fixed; ">
<colgroup>
<col style="width: 68px">
<col style="width: 394px">
<col style="width: 132px">
<col style="width: 132px">
<col style="width: 131px">
<col style="width: 131px">
</colgroup>
<thead>
  <tr>
    <th class="tg-0pky" rowspan="2"></th>
    <th class="tg-c3ow" rowspan="2" style="font-size: 35px;
    line-height: 2;width: 50%;"></br>문항</th>
    <th class="tg-c3ow">0</th>
    <th class="tg-c3ow">1</th>
    <th class="tg-c3ow">2</th>
    <th class="tg-c3ow">3</th>
  </tr>
  <tr>
    <td class="tg-c3ow">전혀 <br>그렇지 않다</td>
    <td class="tg-c3ow">그렇지 않다</td>
    <td class="tg-c3ow">그렇다</td>
    <td class="tg-c3ow">매우<br>그렇다</td>
  </tr>
</thead>
<form action="/bbs/group.php?gr_id=stress_submit" method="POST" onsubmit="return agree()">
<tbody>
  <tr>
    <td class="tg-c3ow" rowspan="4">직무<br>요구</td>
    <td class="tg-0pky"> 1. 나는 업무량이 많아 시간에 쫒기며 일한다.</td>
    <td class="tg-0pky"><input type="radio" id="r1" name="1" value="0"/></td>
    <td class="tg-0pky"><input type="radio" id="r1" name="1" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r1" name="1" value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r1" name="1" value="3"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">2. 해결해야 하는 업무량이 최근에 계속 늘어나고 있다.</td>
    <td class="tg-0pky"><input type="radio" id="r2" name="2" value="0"/></td>
    <td class="tg-0pky"><input type="radio" id="r2" name="2" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r2" name="2" value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r2" name="2" value="3"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">3 업무 처리하는 중에 충분히 쉬는 시간이 주어진다. </td>
    <td class="tg-0pky"><input type="radio" id="r3" name="3" value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r3" name="3" value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r3" name="3" value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r3" name="3" value="0"/></td>
  </tr>
 
  <tr>
    <td class="tg-0pky">4. 동시에 여러 가지 일을 처리해야 한다.</td>
    <td class="tg-0pky"><input type="radio" id="r4" name="4"  value="0"/></td>
    <td class="tg-0pky"><input type="radio" id="r4" name="4"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r4" name="4"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r4" name="4"  value="3"/></td>
  </tr>

  <tr>
    <td class="tg-c3ow" rowspan="4">직무<br>자율</td>
    <td class="tg-0pky">5. 나의 업무는 새로운 생각이나 아이디어를 필요로 한다.</td>
    <td class="tg-0pky"><input type="radio" id="r5" name="5"  value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r5" name="5"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r5" name="5"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r5" name="5"  value="0"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">6. 나의 업무를 해나가기 위해서는 높은 수준의 지식, 기술을 필요로 한다.</td>
    <td class="tg-0pky"><input type="radio" id="r6" name="6"  value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r6" name="6"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r6" name="6"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r6" name="6"  value="0"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">7. 맡겨진 일을 진행하는 과정에서 나에게 영향력을 행사하고 결정할 권한이 주어진다.</td>
    <td class="tg-0pky"><input type="radio" id="r7" name="7"  value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r7" name="7"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r7" name="7"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r7" name="7"  value="0"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">8. 나의 처리할 업무량과 일정표는 스스로 조절할 수 있다.</td>
    <td class="tg-0pky"><input type="radio" id="r8" name="8"  value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r8" name="8"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r8" name="8"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r8" name="8"  value="0"/></td>
  </tr>
     
  <tr>
    <td class="tg-c3ow" rowspan="3">관계<br>갈등</td>
    <td class="tg-0pky">9. 업무를 완료하는데 상사가 도움을 준다.</td>
    <td class="tg-0pky"><input type="radio" id="r9" name="9"  value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r9" name="9"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r9" name="9"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r9" name="9"  value="0"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">10. 업무를 완료하는데 동료가 도움을 준다.</td>
    <td class="tg-0pky"><input type="radio" id="r10" name="10"  value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r10" name="10"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r10" name="10"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r10" name="10"  value="0"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">11. 직장에서 업무로 힘들 때 힘들다는 것을 알아주고 이해해 주는 동료들이 있다.</td>
    <td class="tg-0pky"><input type="radio" id="r11" name="11"  value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r11" name="11"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r11" name="11"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r11" name="11"  value="0"/></td>
  </tr>
  <tr>
    <td class="tg-c3ow" rowspan="2">직무<br>불안정</td>
    <td class="tg-0pky">12. 회사 사정이 불안정하여 나의 미래가 불확실하다. </td>
    <td class="tg-0pky"><input type="radio" id="r12" name="12"  value="0"/></td>
    <td class="tg-0pky"><input type="radio" id="r12" name="12"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r12" name="12"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r12" name="12"  value="3"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">13. 향후 나의 근무조건이나 상황에 바람직하지 못한 변화가 있거나 있을 것으로 예상된다.</td>
    <td class="tg-0pky"><input type="radio" id="r13" name="13"  value="0"/></td>
    <td class="tg-0pky"><input type="radio" id="r13" name="13"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r13" name="13"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r13" name="13"  value="3"/></td>
  </tr>
  <tr>
    <td class="tg-c3ow" rowspan="4">조직<br>체계</td>
    <td class="tg-0pky">14. 우리 회사는 근무평가 및 인사제도가 합리적이고 공정하다.</td>
    <td class="tg-0pky"><input type="radio" id="r14" name="14"  value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r14" name="14"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r14" name="14"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r14" name="14"  value="0"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">15. 직무를 수행함에 있어서 필요한 인력이나 훈련, 장비, 공간, 시설에 대한 지원이 잘 이루어지지 않고 있다.</td>
    <td class="tg-0pky"><input type="radio" id="r15" name="15"  value="0"/></td>
    <td class="tg-0pky"><input type="radio" id="r15" name="15"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r15" name="15"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r15" name="15"  value="3"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">16. 타부서와 우리 부서간에 마찰이 없고 업무 혐조 시 잘 이루어지고 있다.</td>
    <td class="tg-0pky"><input type="radio" id="r16" name="16"  value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r16" name="16"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r16" name="16"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r16" name="16"  value="0"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">17. 나의 생각을 일에 반영할 수 있는 기회와 통로가 있다.</td>
    <td class="tg-0pky"><input type="radio" id="r17" name="17"  value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r17" name="17"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r17" name="17"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r17" name="17"  value="0"/></td>
  </tr>
  <tr>
    <td class="tg-c3ow" rowspan="3">보상<br>부적절</td>
    <td class="tg-0pky">18. 모든 노력과 성과를 고려할 때 나는 직장에서 제대로 신임과 존중을 받는다.</td>
    <td class="tg-0pky"><input type="radio" id="r18" name="18"  value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r18" name="18"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r18" name="18"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r18" name="18"  value="0"/></td>
  </tr>
  <tr>
    <td class="tg-0pky">19. 내 사정이 앞으로 더 좋아질 것을 생각하면 힘든 줄 모르고 
일에 집중하게 된다.</td>
    <td class="tg-0pky"><input type="radio" id="r19" name="19"  value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r19" name="19"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r19" name="19"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r19" name="19"  value="0"/></td>
  </tr>
  <tr>
    <td class="tg-0lax">20. 일하면서 나의 능력을 개발하고 발휘할 수 있는 기회가 주어진다.</td>
    <td class="tg-0pky"><input type="radio" id="r20" name="20"  value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r20" name="20"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r20" name="20"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r20" name="20"  value="0"/></td>
  </tr>
  <tr>
    <td class="tg-c3ow" rowspan="4">직장<br>문화</td>
    <td class="tg-0lax">21. 회식 자리가 불편하다.</td>
    <td class="tg-0pky"><input type="radio" id="r21" name="21"  value="0"/></td>
    <td class="tg-0pky"><input type="radio" id="r21" name="21"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r21" name="21"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r21" name="21"  value="3"/></td>
  </tr>
  <tr>
    <td class="tg-0lax">22. 기존에 사용하던 방식이 아니거나 일관성이 없는 상태로 업무 지시를 받는다.</td>
    <td class="tg-0pky"><input type="radio" id="r22" name="22"  value="0"/></td>
    <td class="tg-0pky"><input type="radio" id="r22" name="22"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r22" name="22"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r22" name="22"  value="3"/></td>
  </tr>
  <tr>
    <td class="tg-0lax">23. 직장 내 분위기가 수직적이고 권위적이다.</td>
    <td class="tg-0pky"><input type="radio" id="r23" name="23"  value="0"/></td>
    <td class="tg-0pky"><input type="radio" id="r23" name="23"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r23" name="23"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r23" name="23"  value="3"/></td>
  </tr>
  <tr>
    <td class="tg-0lax">24. 성적인 차이(남성, 여성) 때문에 불이익을 받는다.</td>
    <td class="tg-0pky"><input type="radio" id="r24" name="24"  value="0"/></td>
    <td class="tg-0pky"><input type="radio" id="r24" name="24"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r24" name="24"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r24" name="24"  value="3"/></td>
  </tr>
  <tr>
    <td class="tg-c3ow" rowspan="3">근무<br>환경</td>
    <td class="tg-0lax">25. 깨끗하고 쾌적한 근무 장소에서 일을 한다.</td>
    <td class="tg-0pky"><input type="radio" id="r25" name="25"  value="3"/></td>
    <td class="tg-0pky"><input type="radio" id="r25" name="25"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r25" name="25"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r25" name="25"  value="0"/></td>
  </tr>
  <tr>
    <td class="tg-0lax">26. 내가 하는 일은 위험하고 사고를 당할 가능성이 있다.</td>
    <td class="tg-0pky"><input type="radio" id="r26" name="26"  value="0"/></td>
    <td class="tg-0pky"><input type="radio" id="r26" name="26"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r26" name="26"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r26" name="26"  value="3"/></td>
  </tr>
  <tr>
    <td class="tg-0lax">27. 나는 오랫동안 불편한 자세로 일을 해야 한다. </td>
    <td class="tg-0pky"><input type="radio" id="r27" name="27"  value="0"/></td>
    <td class="tg-0pky"><input type="radio" id="r27" name="27"  value="1"/></td>
    <td class="tg-0pky"><input type="radio" id="r27" name="27"  value="2"/></td>
    <td class="tg-0pky"><input type="radio" id="r27" name="27"  value="3"/></td>
  </tr>
  
</tbody>
</table>


<input type="hidden" name="name" value="<? echo $name;?>"/>
<input type="hidden" name="email" value="<? echo $email;?>"/>
<input type="hidden" name="gender" value="<? echo $gender;?>"/>
<input type="submit" id="submit_stress" value="결과보기"/>
</form>
<sctipt>
<!-- 모든 항목이 체크 되어있는지 검사 -> 체크 완료 되었으면 해당 값들을 디비에 전송 -> 그 이후 결과페이지로 전송하여 값을 불러온뒤 결과페이지에서 결과값에 맞는 데이터를 보여줌. -->

</sctipt>
<script type="text/javascript"> 
function agree() { 
    var checked = document.querySelectorAll("input[type='radio']:checked");
    if(checked.length == 27){
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