
<?php

	/////////////////////////////////////////////////////////////////////////////////////////////////////
	//
	// ページ設定
	//
	/////////////////////////////////////////////////////////////////////////////////////////////////////

	// ルートパス設定
	//DOCUMENT_ROOT=serverのトップ、下層ディレクトリは$local_pathで指定
	$local_path       = "/"; // ルート以外にある場合パスを記述(/から記述)
	$root_path        = $_SERVER['DOCUMENT_ROOT'].$local_path;
	// 共通設定読み込み
	include ($root_path."/assets/inc/setting.php");

	// 個別設定
	$page_class       = "page-home"; // ページクラスが必要な場合
	$page_title       = "テンプレート"; // ページタイトル
	$page_keywords    = ""; // ページ特有のキーワードがある場合
	$page_description = ""; // ページ特有のdescriptionがある場合

	// OGP 
	$page_type        = "website"; // website or blog *トップページのみ記述
	$page_ogimage     = ""; // og:imageを個別に設定する場合パスを記述
?>
<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<?php include ($root_path."/assets/inc/meta.php");	?>
</head>
<body<?php if ($page_class): ?> class="<?php echo $page_class ?>"<?php endif;?>>
	<?php 
		/////////////////////////////////////////////////////////////////////////////////////////////////////
		// ページ内容ここから
		/////////////////////////////////////////////////////////////////////////////////////////////////////
	?>
	<div id="wrapAll">
	<?php include ($root_path."/assets/inc/header.php"); ?>

	<main>
		<section id="Mainpic">
			<div class="section-wrap">
				表示テスト成功
			</div>
		</section>
	</main>

	<?php include ($root_path."/assets/inc/footer.php"); ?>
	</div>
	<?php 
		/////////////////////////////////////////////////////////////////////////////////////////////////////
		// ページ内容ここまで
		/////////////////////////////////////////////////////////////////////////////////////////////////////
	?>
<?php if(is_mobile()):  /////////// SPのみ?>
<?php else:  /////////// PCのみ?>
<?php include ($root_path."/assets/inc/script.php"); ?>
<?php endif;  /////////// PC・SP振り分け完了?>
<script src="<?php echo $local_path; ?>/js/library/jquery.flexslider-min.js"></script>
<script src="<?php echo $local_path; ?>/js/top.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$('.flexslider').flexslider({
		animation: "slide",
		controlsContainer: $(".ctrl"),
	    	customDirectionNav: $("a.arr"),
	    	easing:"easeInOutSine",
	    	slideshowSpeed:10000,
	    	animationSpeed:500
	});
	//スライドが一枚の時はDirection ArrowをRemove
	if($("ul.slides li:not(.clone)").length==1){
		$(".flex-direction-nav").remove();
	}
	//load時にずれるのでスタイル設定、-768pxにwidthを入れる
	$("ul.slides").css("transform","translate3d(-768px, 0px, 0px)");
});	
</script>

</body>
</html>