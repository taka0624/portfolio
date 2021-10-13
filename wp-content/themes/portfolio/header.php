<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>
	<header class="header js-header headerColorScroll">
		<div class="inner">
			<nav id="headerNav">
<?php wp_nav_menu(
  array (
    "theme_location" => "global-menu",
    "menu_class" => "globalMenu",
    "container" => "false",
    'add_li_class' => "item",
  )
); ?>
			</nav>
      <button class="spMenu" id="spMenu">
        <span class="bar barTop"></span>
        <span class="bar barMid"></span>
        <span class="bar barBottom"></span>
      </button>
		</div>
	</header>