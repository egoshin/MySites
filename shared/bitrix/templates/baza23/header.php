<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?
	if($section_php = $APPLICATION->GetFileRecursive(".section.php")) {
		@include($_SERVER['DOCUMENT_ROOT'].$section_php);
		$title = $sSectionName;
	}
	$APPLICATION->SetTitle($title);
	?>
	<title><?$APPLICATION->ShowTitle($title);?></title>
	<?$APPLICATION->ShowHead();?>
	<link rel="apple-touch-icon" sizes="57x57" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?=SITE_TEMPLATE_PATH?>/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?=SITE_TEMPLATE_PATH?>/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?=SITE_TEMPLATE_PATH?>/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<?$APPLICATION->ShowHeadScripts()?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.min.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/bootstrap.min.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jasny-bootstrap.min.js');?>
	<?/*$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/media.match.min.js');*/?><!--
	--><?/*$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/enquire.min.js');*/?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/script.js');?>
	<!--[if lt IE 9]>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/ie9/html5shiv.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/ie9/html5shiv-printshiv.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/ie9/respond.js"></script>
	<![endif]-->
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/style.css');?>
</head>
<body>
    <div class="main">
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
		<header role="banner">
			<div class="navmenu navmenu-default navmenu-fixed-left offcanvas-sm">
				<a class="navmenu-brand visible-md visible-lg text-center" href="<?=SITE_DIR?>">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/logotype.png" alt="Храм Крестовоздвижения"><br>
					<span class="">
						Храм Крестовоздвижения <br>
						Московская область <br>
						Истринский район <br>
						село Дарна
					</span>
				</a>
				<hr>
				<ul class="nav navmenu-nav">
					<li class="active"><a href="#">Наш храм</a></li>
					<li><a href="#">События</a></li>
					<li><a href="#">Воскресные листки</a></li>
					<li><a href="#">Фотогалерея</a></li>
					<li><a href="#">Видеоматериалы</a></li>
					<li><a href="#">Азбука веры</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
				<hr>
				<div class="menu-item-sheduler text-center">
					<a class="btn btn-danger" href="<?=SITE_DIR?>raspisanie/" role="button"><?=GetMessage("BTN_SHEDULE_SERVICE")?></a>
				</div>
				<div class="contactR-block visible-md visible-lg">
					<div class="phone-mail">
						<?$phone = '+7 495 994-56-29';?>
						<a href="tel:+<?=preg_replace("#[^\d]#", "", $phone)?>"><?=$phone?></a><br>
						<a href="mailto:info@darnahram.ru">info@darnahram.ru</a>
					</div>
					<ul class="list-inline social">
						<li><a href="https://www.facebook.com/darnahram/" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
						<li><a href="https://twitter.com/darnahram" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UCx8M8UNI6MBUZsAYCTCXzww" target="_blank"><i class="fa fa-youtube fa-lg"></i></a></li>
					</ul>
				</div>
				<div id="baza23Top" class="hidden-xs hidden-sm">
					<hr>
					<div class="baza23 text-center">
						<a href='http://www.baza23.ru' target='_blank'><?=GetMessage("FOOTER_CREATOR_TEXT")?>&nbsp;<?=GetMessage("FOOTER_CREATOR_HREF")?></a>
					</div>
				</div>
			</div>
			<div class="navbar navbar-default navbar-fixed-top hidden-md hidden-lg">
				<button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?=SITE_DIR?>">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/logotype.png" alt="Храм Крестовоздвижения">
                    Храм Крестовоздвижения
                </a>
			</div>
			<div class="navbar-fixed-bottom visible-md visible-lg">
				<div id="baza23Bottom">
					<hr>
					<div class="baza23 text-center">
						<a href='http://www.baza23.ru' target='_blank'><?=GetMessage("FOOTER_CREATOR_TEXT")?>&nbsp;<?=GetMessage("FOOTER_CREATOR_HREF")?></a>
					</div>
				</div>
			</div>
		</header>
		<div class="context">
			<div class="container">