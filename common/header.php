<?php $URI = $_SERVER["REQUEST_URI"]; ?>
<header class="header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
<div class="header__upper">
<h1 class="header__title"><small>京都大学高等研究院 ヒト生物学高等研究拠点（WPI-ASHBi）</small>雨森グループ</h1>

<ul class="header__link">
<li class="header__link__item"><a href="<?php echo $base_url . '/'; ?>en/" class="-en">ENGLISH SITE</a></li>
<li class="header__link__item"><a href="<?php echo $base_url . '/'; ?>contact/" class="-contact">お問い合わせ</a></li>
</ul>
</div>

<div class="header__lower">
<nav class="header__nav">
<ul class="header__nav__list">
<li class="header__nav__item<?php if($_SERVER["REQUEST_URI"] == '/' || $_SERVER["REQUEST_URI"] == '/site/ashbi/') {echo ' -is-active'; } ?>"><a href="<?php echo $base_url . '/'; ?>">ホーム</a></li>
<li class="header__nav__item<?php if(strpos($URI,'/member/') !== false) {echo ' -is-active'; } ?>"><a href="<?php echo $base_url . '/'; ?>member/">メンバー</a></li>
<li class="header__nav__item<?php if(strpos($URI,'/research/') !== false) {echo ' -is-active'; } ?>"><a href="<?php echo $base_url . '/'; ?>research/">研究概要</a></li>
<li class="header__nav__item<?php if(strpos($URI,'/publications/') !== false) {echo ' -is-active'; } ?>"><a href="<?php echo $base_url . '/'; ?>publications/">論文・出版物</a></li>
<li class="header__nav__item<?php if(strpos($URI,'/news/') !== false) {echo ' -is-active'; } ?>"><a href="<?php echo $base_url . '/'; ?>news/">ニュース</a></li>
<li class="header__nav__item<?php if(strpos($URI,'/technology/') !== false) {echo ' -is-active'; } ?>"><a href="<?php echo $base_url . '/'; ?>technology/">技術開発</a></li>
<li class="header__nav__item<?php if(strpos($URI,'/link/') !== false) {echo ' -is-active'; } ?>"><a href="<?php echo $base_url . '/'; ?>link/">リンク</a></li>
</ul>
</nav>
</div>
</header>