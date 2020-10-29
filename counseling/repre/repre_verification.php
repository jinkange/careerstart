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
            <li class="breadcrumb-item active">선호표상체계 검사</li>
        </ul>
    </div>
</div>
<div class="sub_title" style="
    margin-bottom: 100px;
">
    <h3 class="tit" style="text-align: center; ">
        <span style="font-size: 36pt; font-family: Verdana;">선호표상체계 검사</span></h3>
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


        <li >우리는 세상을 살아가면서 무수히 많은 정보를 오감을 통해 받아들이는데 사람마다 외부의 정보를 받아들일 때 자신만의 감각을 사용해서 선택적으로 받아들이는 부분이 있습니다. </li>
        <li> 선호표상체계란 특정한 감각에 집중하는 일종의 필터라고 할 수 있습니다.</li>
        <li>자신만의 선호표상체계를 파악하여 스트레스에 대해 효과적으로 대처할 수 있는 자신만의 방법을 찾고자 합니다.</li>
        <li> 제시된 문항을 읽고 자신에게 해당하는 정도에 따라 번호를 작성하면 됩니다.</li>
        <li> 문항은 총 10문항이며 평소 자신의 모습을 생각하면서 빠진 문항 없이 체크를 해야 결과 도출이 가능합니다.</li>
        
    </ul>
</div>
  

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form
                    class="form-inline"
                    method="post"
                    action="/bbs/group.php?gr_id=repre_confirm"
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