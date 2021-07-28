<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<?php use Bitrix\Main\Page\Asset; ?>
<?php \Bitrix\Main\Page\Asset::getInstance()->addCss($relativePathToCssFile); \Bitrix\Main\Page\Asset::getInstance()->addJs($relativePathToJsFile);?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $APPLICATION -> ShowHead() ?>
	   <?php $APPLICATION->ShowCSS()  ?>

    <title><?php  $APPLICATION->ShowTitle()?></title>
	  <?php 
       Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/all.min.css');
	   //Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/all.min.css');
	   Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css');
	   Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/magnific-popup.css');
	   Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/templatemo-dream-pulse.css');
	   Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/slick/slick.css');
       Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/slick/slick-theme.css');
       Asset::getInstance()->addString("<meta name=viewport' content='width=device-width, initial-scale=1.0'>"); 
	   Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="ie=edge" />'); 
       Asset::getInstance()->addString("<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600'>");
	   Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.min.js');
       Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.singlePageNav.min.js');
       Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/parallax.min.js');
       Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/slick/slick.min.js');
       Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.magnific-popup.min.js');
       Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/templatemo-scripts.js');

    ?>

   </head>
  <body>
  <div id="panel"><?php $APPLICATION-> ShowPanel(); ?> </div>

    <main class="container-fluid">
      <div class="row">        
          <nav id="tmSidebar" class="tm-bg-black-transparent tm-sidebar">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="tm-sidebar-sticky">
              <div class="tm-brand-box">
                <div class="tm-double-border-1">
                  <div class="tm-double-border-2">
                    <h1 class="tm-brand text-uppercase">Dream Pulse</h1>
                  </div>
                </div>
              </div>
<?$APPLICATION->SetTitle("dream");?><?$APPLICATION->IncludeComponent("bitrix:menu", "menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => "catalog_horizontal",
		"MENU_THEME" => "site",	// Тема меню
	),
	false
);?>
<!--<ul id="tmMainNav" class="nav flex-column text-uppercase text-right tm-main-nav">
		
               <li class="nav-item">
                  <a href="#intro" class="nav-link active">
                    <span class="d-inline-block mr-3">Intro</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#about" class="nav-link">
                    <span class="d-inline-block mr-3">About</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#work" class="nav-link">
                    <span class="d-inline-block mr-3">Work</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
	 -->
       
			 