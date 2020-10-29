<!-- <link rel="stylesheet" type="text/css" href="<?php echo G5_THEME_URL
?>/booking/jquery.datetimepicker.css"/> <script src="<?php echo G5_JS_URL
?>/jquery.datetimepicker.full.min.js"></script> <script src="<?php echo
G5_JS_URL ?>/jquery.js"></script> -->
<style>
    table {
        border: 1px solid #BDBDBD;
        text-align: center;
        width: 30%;
    }
</style>
<style>
    body,
    html {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    *,
    *:after,
    *:before {
        box-sizing: inherit;
    }
    .clearfix:after {
        content: '';
        display: block;
        clear: both;
        float: none;
    }
</style>
<script>

    $(document).ready(function () {

        var tDate = new Date();
        //tDate.setHours(tDate.getHours() + 9);
        tDate.setDate(tDate.getDate() + 1);
        //console.log(tDate);

        document
            .getElementById('date')
            .value = tDate
            .toISOString()
            .slice(0, 10);
        document
            .getElementById('date')
            .min = tDate
            .toISOString()
            .slice(0, 10);
            /*
        document
            .getElementById('time')
            .value = tDate
            .toISOString()
            .slice(11, 16);
        document
            .getElementById('time')
            .min = tDate
            .toISOString()
            .slice(11, 16);
        console.log(tDate.toISOString().slice(11, 16));
*/
    });
</script>

<div class="row">
    <div class="col-md-12">
        <ul class="breadcrumb" style="    background-color: #e9ecef30;">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active">상담 신청</li>
            
        </ul>
    </div>
</div>
<div class="sub_title" style="
    margin-bottom: 100px;
">
    <h3 class="tit" style="text-align: center; ">
        <span style="font-size: 36pt; font-family: Verdana;">상담 신청</span></h3>
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

        <li style="color:#eb7588">예약안내</li>
        <li style="color:#eb7588">예약안내</li>
        <li>예약안내예약안내예약안내</li>
        <li>예약안내예약안내예약안내</li>
        <li>예약안내예약안내예약안내</li>
    </ul>
</div>

<div class="booking_step1">
    <div>
        <div class="py-5 text-center">
            <div class="container">
                <div class="row" style="">

                    <div class="mx-auto col-lg-6 col-10">

                        <form
                            class="text-left"
                            method="post"
                            onsubmit="return agree()"
                            action="/bbs/group.php?gr_id=booking_submit">
                            <div style="overflow:hidden;">
                                <div class="form-group">
                                    <label for="date">날짜</label>
                                    <input
                                        type="date"
                                        value=""
                                        min=""
                                        class="form-control"
                                        id="date"
                                        name="date"
                                        required="required">
                                </div>
                                <div class="form-group">
                                    <label for="time">시간</label><input
                                        type="number"
                                        value="09:00"
                                        min="09:00"
                                        max="18:00"
                                        class="form-control"
                                        id="time"
                                        name="time"
                                        required="required">
                                </div>
                                <div class="form-group">
                                    <label for="name">이름</label>
                                    <input type="text" class="form-control" id="name" name="name" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="phone">전화번호<br></label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="phone"
                                        name="phone"
                                        required="required">
                                </div>
                                <!--
                                <div class="form-group">
                                    <label for="birth">생년월일<br></label>
                                    <input
                                        type="date"
                                        class="form-control"
                                        id="birth"
                                        name="birth"
                                        required="required">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">이메일<br></label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        required="required">
                                </div>
                                -->
                                <div class="form-group">
                                    <label for="company">기업<br></label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="company"
                                        name="company"
                                        required="required">
                                </div>
                                <!--
                                <div class="form-group">
                                    <label for="gender">성별<br></label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="gender"
                                        name="gender"
                                        required="required">
                                </div>
                                -->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="form21" value="on">
                                        <label class="form-check-label" for="form7">
                                            
                                            <a href="#">[개인정보수집및이용]</a>
                                            에 동의합니다.
                                        </label>
                                    </div>
                                </div>
                                <input
                                    type="submit"
                                    class="btn btn-primary"
                                    style="width : 100%; background-color: #5379cb;" value="신청">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function agree() {
        var checked = document.querySelectorAll("input[type='checkbox']:checked");
        if (checked.length == 1) {
            if (confirm("제출하시겠습니까?") == true) {
                /*
                if(<?echo $is_member;?>==false){
                    alert("회원가입 후 이용 가능합니다.");
                    window.location.href = '/bbs/login.php';
                    return false;
                } else{
                    return true;
                }
                */
                return true;
            } else{
                return false;
            }
        }else{
            alert("모든항목을 체크해주세요.")
            return false;
        }
    }
</script>