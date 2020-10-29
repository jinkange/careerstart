<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.php');

if(is_file(G5_PATH.'/main.php'))
{
	include G5_PATH.'/main.php';
}else{
?>

<!----------------------------------------------------------------------------->

<!--========================== About Us Section ============================-->
<section id="about">
    <div class="container">
        <header class="section-header">

            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb" style="    background-color: #e9ecef30;">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <!-- <li class="breadcrumb-item active">Link</li> <li class="breadcrumb-item
                        active">Link</li> -->
                    </ul>
                </div>
            </div>
        </header>
        <div class="row about-container">
            <div class="text-center" style="width:100%">
                <div class="container">
                    <div class="row pt-4">
                    <div class="col-md-3">
                            <div class="card mb-4 box-shadow">
                                <div
                                    class="card-body"
                                    style=" cursor: pointer;"
                                    onclick="location.href='/bbs/content.php?co_id=about'">
                                    <img src="<?php echo G5_THEME_IMG_URL ?>/about0.png" style="width: 100px;" >
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>연구소 소개</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-4 box-shadow">
                                <div
                                    class="card-body"
                                    style=" cursor: pointer;"
                                    onclick="location.href='/bbs/content.php?co_id=eap'">
                                    <img src="<?php echo G5_THEME_IMG_URL ?>/eap.png" style="width: 100px;" >
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>프로그램 안내<br></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-4 box-shadow">
                                <div
                                    class="card-body"
                                    style=" cursor: pointer;"
                                    onclick="location.href='/bbs/group.php?gr_id=booking'">
                                    <img src="<?php echo G5_THEME_IMG_URL ?>/booking.png" style="width: 100px;" >
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>상담신청<br></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-4 box-shadow">
                                <div
                                    class="card-body"
                                    style=" cursor: pointer;"
                                    onclick="location.href='/bbs/group.php?gr_id=counseling'">
                                    <img src="<?php echo G5_THEME_IMG_URL ?>/coinseling.png" style="width: 100px;" >
                                    <ul class="list-unstyled mt-3 mb-4">
                                    
                                        <li>심리검사</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</section>
<!-- #about -->

<!----------------------------------------------------------------------------->

<?php
}

include_once(G5_THEME_PATH.'/tail.php');
?>