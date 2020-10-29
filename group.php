<?php
/*
error_reporting(E_ALL);

ini_set("display_errors", 1);
*/
?>
<?php

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/group.php');
    return;
}

if(!$is_admin && $group['gr_device'] == 'mobile')
    alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = $group['gr_subject'];
include_once(G5_THEME_PATH.'/head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>
<?php
///////////////////////////////////////////////////////////////////////////
////////////////////////////// 상담신청 페이지 /////////////////////////////
///////////////////////////////////////////////////////////////////////////

if($group['gr_subject']=='상담예약'){ // 상담 예약 페이지
  //상담 전송 폼
  //상담 안내, 날짜, 시간, 상담 내용등 상담정보 기록
  // 상담 예약 페이지불러오기
include_once(G5_THEME_PATH.'/booking/booking_info.php');
}

if($gr_id=='booking_submit'){ // 상담 예약 완료 후 뜨는 페이지
//db에 상담신청 전송 밑 전송 완료 표시
include_once(G5_THEME_PATH.'/booking/booking_submit.php');
}
if($gr_id=='booking_result'){ // 상담 예약 완료 후 뜨는 페이지
    //db에 상담신청 전송 밑 전송 완료 표시
    include_once(G5_THEME_PATH.'/booking/booking_result.php');
    }
if($gr_id=='consulting_confirm'){ // 상담 예약 완료 후 뜨는 페이지
        //db에 상담신청 전송 밑 전송 완료 표시
        include_once(G5_THEME_PATH.'/booking/consulting_confirm.php');
}
///////////////////////////////////////////////////////////////////////////
/////////////////////////// 상담 검사 페이지 ///////////////////////////////
///////////////////////////////////////////////////////////////////////////
if($group['gr_subject']=='상담&검사'){
//삼담 메인페이지
include_once(G5_THEME_PATH.'/counseling/index.php');
  }

//////////////////직무 스트레스///////////////////////
if($gr_id=='stress_verification'){
    // 로그인 검증 및 회사 코드 검증 

    include_once(G5_THEME_PATH.'/counseling/stress/stress_verification.php');
}
if($gr_id=='stress_submit'){
    // 로그인 검증 및 회사 코드 검증 
      include_once(G5_THEME_PATH.'/counseling/stress/stress_submit.php');
}
if($gr_id=='stress1'){
    // 로그인 검증 및 회사 코드 검증 

    include_once(G5_THEME_PATH.'/counseling/stress/stress1.php');
}
if($gr_id=='stress_confirm'){
    // 로그인 검증 및 회사 코드 검증 

    include_once(G5_THEME_PATH.'/counseling/stress/stress_confirm.php');
}
if($gr_id=='stress_result'){
    // 로그인 검증 및 회사 코드 검증 

    include_once(G5_THEME_PATH.'/counseling/stress/stress_result.php');
}
if($gr_id=='stress_checked'){
    // 로그인 검증 및 회사 코드 검증 

    include_once(G5_THEME_PATH.'/counseling/stress/stress_checked.php');
}
    

/////////////////////선호감각////////////////////////////
if($gr_id=='repre_verification'){
    // 로그인 검증 및 회사 코드 검증 

    include_once(G5_THEME_PATH.'/counseling/repre/repre_verification.php');
}
if($gr_id=='repre_submit'){
    // 로그인 검증 및 회사 코드 검증 
      include_once(G5_THEME_PATH.'/counseling/repre/repre_submit.php');
}
if($gr_id=='repre1'){
    // 로그인 검증 및 회사 코드 검증 

    include_once(G5_THEME_PATH.'/counseling/repre/repre1.php');
}
if($gr_id=='repre_confirm'){
    // 로그인 검증 및 회사 코드 검증 

    include_once(G5_THEME_PATH.'/counseling/repre/repre_confirm.php');
}
if($gr_id=='repre_result'){
    // 로그인 검증 및 회사 코드 검증 

    include_once(G5_THEME_PATH.'/counseling/repre/repre_result.php');
}
if($gr_id=='repre_checked'){
    // 로그인 검증 및 회사 코드 검증 

    include_once(G5_THEME_PATH.'/counseling/repre/repre_checked.php');
}

/////////////////////의사 소통///////////////////////////

if($gr_id=='comm_verification'){
    // 로그인 검증 및 회사 코드 검증 

    include_once(G5_THEME_PATH.'/counseling/comm/comm_verification.php');
}
if($gr_id=='comm_submit'){
    // 로그인 검증 및 회사 코드 검증 
      include_once(G5_THEME_PATH.'/counseling/comm/comm_submit.php');
}
if($gr_id=='comm1'){
    // 로그인 검증 및 회사 코드 검증 

    include_once(G5_THEME_PATH.'/counseling/comm/comm1.php');
}
if($gr_id=='comm_confirm'){
    // 로그인 검증 및 회사 코드 검증 

    include_once(G5_THEME_PATH.'/counseling/comm/comm_confirm.php');
}
if($gr_id=='comm_result'){
    // 로그인 검증 및 회사 코드 검증 

    include_once(G5_THEME_PATH.'/counseling/comm/comm_result.php');
}
if($gr_id=='comm_checked'){
    // 로그인 검증 및 회사 코드 검증 
 
    include_once(G5_THEME_PATH.'/counseling/comm/comm_checked.php');
}

// 코드 입력
if($gr_id=='code_submit'){
    // 로그인 검증 및 회사 코드 검증 

    include_once(G5_THEME_PATH.'/code_submit.php');
}
if($gr_id=='code_delete'){
    // 로그인 검증 및 회사 코드 검증 
    include_once(G5_THEME_PATH.'/code_delete.php');
}
?>
<div class="latest_wr">

    <!-- 메인화면 최신글 시작 -->
<?php
//  최신글
$sql = " select bo_table, bo_subject
            from {$g5['board_table']}
            where gr_id = '{$gr_id}'
              and bo_list_level <= '{$member['mb_level']}'
              and bo_device <> 'mobile' ";
if(!$is_admin)
    $sql .= " and bo_use_cert = '' ";
$sql .= " order by bo_order ";
$result = sql_query($sql);
for ($i=0; $row=sql_fetch_array($result); $i++) {
    $lt_style = "";
    if ($i%2==1) $lt_style = "margin-left:2%";
    else $lt_style = "";
?>
    <div style="float:left;<?php echo $lt_style ?>" class="lt_wr">
        <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    echo latest('theme/basic', $row['bo_table'], 6, 25);
    ?>
    </div>
    <?php
}
?>
    <!-- 메인화면 최신글 끝 -->
</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>