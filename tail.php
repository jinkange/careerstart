<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$admin = get_admin("super"); 

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

switch(substr($_SERVER['SCRIPT_FILENAME'], strlen(G5_PATH)))
{
	case '/bbs/register.php':
	case '/bbs/register_form.php':
	case '/bbs/register_result.php':
	case '/plugin/social/register_member.php':
		include_once(G5_THEME_PATH."/tail.sub.php");
		return;
		break;
}
?>
<?php if($g5['sidebar']['right']) { ?>
</div>

<div class="col-lg-3 mt-lg-0">
<?php @include G5_PATH.'/sidebar.right.php'; ?>
</div>
<?php } ?>

</main>

<!--========================== Footer ============================-->
<footer id="footer">
<div class="footer-top">
<div class="container">
    <div class="row">
    <div class="container padding-top-40 padding-bottom-40"   style="color: black;">
        <!-- 하단 업체정보 -->
        <div class="info">
          <span><strong>(주)커리어스타</strong></span> <span>대표자: 이영옥</span> <span>사업자 등록번호 안내: 504-86-16823</span><br>
          <span>복현점: 대구광역시 북구 공항로 3(복현동, 5층) | TEL: 053-384-8842</span><br> <span>달서점: 대구광역시 달서구 월배로 203(상인동, 4층) | TEL: 053-628-8842</span><br>
          <span>달성점: 대구광역시 달성군 현풍면 테크노상업로 48, 5F 505호 | TEL: 053-641-8842</span><br>
        </div>
      </div>
    </div>
</div>
</div>

<div class="container">
<div class="copyright">
    &copy; Copyright
    <strong>(주)커리어스타</strong>. All Rights Reserved
</div>
<div class="credits"></div>
</div>
</footer>
<!-- #footer -->

<a href="#" class="back-to-top">
<i class="fa fa-chevron-up"></i>
</a>

<!-- JavaScript Libraries -->
<script src="<?php echo G5_THEME_URL ?>/lib/jquery/jquery.min.js"></script>
<script src="<?php echo G5_THEME_URL ?>/lib/jquery/jquery-migrate.min.js"></script>
<script
src="<?php echo G5_THEME_URL ?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo G5_THEME_URL ?>/lib/easing/easing.min.js"></script>
<script src="<?php echo G5_THEME_URL ?>/lib/mobile-nav/mobile-nav.js"></script>
<script src="<?php echo G5_THEME_URL ?>/lib/wow/wow.min.js"></script>
<script src="<?php echo G5_THEME_URL ?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo G5_THEME_URL ?>/lib/counterup/counterup.min.js"></script>
<script src="<?php echo G5_THEME_URL ?>/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo G5_THEME_URL ?>/lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo G5_THEME_URL ?>/lib/lightbox/js/lightbox.min.js"></script>
<script src="<?php echo G5_THEME_URL ?>/lib/contactform/contactform.js"></script>
<script src="<?php echo G5_THEME_URL ?>/js/main.js"></script>

<?php
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>