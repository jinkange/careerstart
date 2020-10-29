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
                <a href="/">Home</a>
            </li>
            <li class="breadcrumb-item active">심리 검사</li>
            <li class="breadcrumb-item active">의사소통 검사</li>
        </ul>
    </div>
</div>
<div class="sub_title" style="
    margin-bottom: 100px;
">
    <h3 class="tit" style="text-align: center; ">
        <span style="font-size: 36pt; font-family: Verdana;">의사소통 검사</span></h3>
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


        <li >의사소통은 사람들이 상호 간에 정보를 전달하는 모든 방식입니다. </li>
        <li> 먼저 소통 유형을 살펴보고 유형 중에서 갈등상황 에서의 본인의 의사소통유형을 찾아보고 그렇게 생각하는 이유를 알아봄으로써 관계 속에서 원활한 소통을 할 수 있도록 돕고자 합니다. </li>
        <li>개인의 비일치적인 의사소통 방식을 찾는 검사입니다.</li>
        <li> 제시된 문항을 읽고, 자신과 가장 일치하는 정도에 체크를 해 주시면 됩니다.</li>
        <li> 문항은 총 40문항이며 빠진 문항 없이 체크를 하면 됩니다.</li>
        
    </ul>
</div>
 

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form
                    class="form-inline"
                    method="post"
                    action="/bbs/group.php?gr_id=comm_confirm"
                    onsubmit="return agree()">
                    <div class="input-group">
                        <input type="hidden" name="name" value="<? echo $member['mb_name'];?>">
                        <input type="hidden" name="email" value="<? echo $member['mb_email'];?>">
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
        if (checked.length == 0) {
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