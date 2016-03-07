
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
	$page_title       = "Naoko's Parts for Web development"; // ページタイトル
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
	<main>
		<section id="layout">
			<div class="section-wrap">
				<h3>Layout</h3>
				<ul>
				         	<li>
		 				<a href="/layout/layout1"><div class="article-img" style="background-image:url('/assets/img/common/dummy.png');"></div></a>
	              				<h4><a href="javascript:void(0);">Basic</a></h4>
					</li>
					 <li>
						<a href="/layout/layout2"><div class="article-img" style="background-image:url('/assets/img/common/dummy.png');"></div></a>
	              				<h4><a href="javascript:void(0);">Stylish</a></h4>
					</li>
					<li>
						<a href="/layout/layout3"><div class="article-img" style="background-image:url('/assets/img/common/dummy.png');"></div></a>
	              				<h4><a href="/layout/layout3">Formal</a></h4>
					</li>
					<li>
						<a href="/layout/layout4"><div class="article-img" style="background-image:url('/assets/img/common/dummy.png');"></div></a>
	              				<h4><a href="/layout/layout4">Formal</a></h4>
					</li>
					<li>
						<a href="/layout/layout5"><div class="article-img" style="background-image:url('/assets/img/common/dummy.png');"></div></a>
	              				<h4><a href="/layout/layout5">Formal</a></h4>
					</li>
					<li>
						<a href="/layout/layout6"><div class="article-img" style="background-image:url('/assets/img/common/dummy.png');"></div></a>
	              				<h4><a href="/layout/layout6">Formal</a></h4>
					</li>

				</ul>
			</div>
		</section>
		<section id="parts">
			<div class="section-wrap">
				<h3>Parts</h3>
				<ul>
				         	<li>
		 				<a href="javascript:void(0);"><div class="article-img" style="background-image:url('/assets/img/common/dummy.png');"></div></a>
	              				<h4><a href="javascript:void(0);">Mobile Menu (Flex) </a></h4>
					</li>
					 <li>
						<a href="javascript:void(0);"><div class="article-img" style="background-image:url('/assets/img/common/dummy.png');"></div></a>
	              				<h4><a href="javascript:void(0);">Mobile Menu (100%)</a></h4>
					</li>
					<li>
						<a href="javascript:void(0);"><div class="article-img" style="background-image:url('/assets/img/common/dummy.png');">Main Slider</div></a>
	              				<h4><a href="javascript:void(0);"></a></h4>
					</li>
					<li>
						<a href="javascript:void(0);"><div class="article-img" style="background-image:url('/assets/img/common/dummy.png');"></div></a>
	              				<h4><a href="javascript:void(0);">Three column footer</a></h4>
					</li>
					<li>
						<a href="javascript:void(0);"><div class="article-img" style="background-image:url('/assets/img/common/dummy.png');"></div></a>
	              				<h4><a href="javascript:void(0);">Html strip Php</a></h4>
					</li>
					<li>
						<a href="javascript:void(0);"><div class="article-img" style="background-image:url('/assets/img/common/dummy.png');"></div></a>
	              				<h4><a href="javascript:void(0);">Formal</a></h4>
					</li>

				</ul>
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
<script src="<?php echo $local_path; ?>/js/top.js"></script>


</body>
</html>