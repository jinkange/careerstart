<?php 
//로그인 검증
//로그인 사용자 정보 얼마나 알수 있는지?
//로그인한 사람의 이름, 이메일?, 번호 ?
    if ($is_member) {  

        $is_member = 'true';
    }else{
        $is_member = 'false';
    }
?><br>
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
    <h3 class="tit" style="text-align: center; ">
        <span style="font-size: 36pt; font-family: Verdana;">직무 스트레스 검사</span></h3>
</div>
<div
    class="intro"
    style="
    border: 1px solid #ddd;
    padding: 10px;
    word-break: keep-all;
    text-align: left;
">
    <ul
        class="dot_list"
        style="
    /* border: 1px solid #ddd; */
    /* padding: 10px; */
    /* word-break: keep-all; */
    /* text-align: left; */

">


        <li >여러분이 직장생활에서 경험하는 다양한 상황 속에서 주된 스트레스의 원인을 알아 볼 수 있도록 구성이 되어 있습니다. </li>
        <li> 자신의 스트레스를 알고 대처할 수 있는 전략을 세울 수 있도록 도와주는 검사입니다.</li>
        <li> 제시된 문항을 읽고, 자신과 가장 일치하는 정도에 체크를 하면 됩니다.</li>
        <li> 문항은 총 27문항이며 자신의 상태를 스스로 점검해 볼 수 있도록 제공된 것입니다.</li>
        <li> 마음이 편안한 상태에서 빠진 문항 없이 체크를 해야 결과 도출이 가능합니다.</li>
    </ul>
</div>


<br>
<br>
<br>
<br>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form
                    class="form-inline"
                    method="post"
                    action="/bbs/group.php?gr_id=stress_confirm"
                    onsubmit="return agree()">
                    <div class="input-group">
                        <input type="hidden" name="name" value="<? echo $member['mb_name'];?>">
                        <input type="hidden" name="email" value="<? echo $member['mb_email'];?>">
                        <td class="tg-0pky"><input type="radio" id="gender" name="gender" value="1"/>남자</td>
                        <td class="tg-0pky"><input type="radio" id="gender" name="gender" value="2"/>여자</td>
                        <input type="text" class="form-control" name="code" placeholder="CODE">
                        <div class="input-group-append"><input type="submit" value="확인"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function agree() {
        var checked = document.querySelectorAll("input[type='radio']:checked");
        if (checked.length == 1) {
            if (confirm("제출하시겠습니까?") == true) {

                if(<?echo $is_member;?>==false){
                    alert("회원가입 후 이용 가능합니다.");
                    window.location.href = '/bbs/login.php';
                    return false;
                } else{
                    return true;
                }
                
            } else{
                return false;
            }
        }else{
            alert("모든항목을 체크해주세요.")
            return false;
        }
    }
    //$("#r2:checked").val();
    $(document).ready(function () {});
</script>