<?php include_once '../common/base_url.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<link rel="icon" type="<?php echo $base_url . '/'; ?>favicon.ico" href="https://ashbi.kyoto-u.ac.jp/favicon.ico">
<title>Amemori Group - Link (日本語)</title>
<meta name="description" content="Our Mission">
<?php include_once '../common/common_head.php'; ?>
</head>
<body id="link" class="lower" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<div id="container">
<!--container-->

<?php include_once '../common/header.php'; ?>

<div id="content">
<!--content-->

<main role="main">

<article class="main">
<!--main-->

<div class="main__fv -lower">
<div class="main__fv__inner -lower">
<h1 class="main__fv__title -lower">リンク</h1>
<p class="main__fv__bg -lower"><img src="<?php echo $base_url . '/'; ?>img/link_main_fv_bg.jpg" alt=""></p>
</div>
</div>

<div class="main__inner">

<ol class="breadcrumb-list" itemscope="" itemtype="https://schema.org/BreadcrumbList">
<li class="breadcrumb-list__item breadcrumb-list__item--home" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="" itemprop="item"><i class="fas fa-fw fa-home"></i><span itemprop="name">HOME</span></a><meta itemprop="position" content="1"></li>
<li class="breadcrumb-list__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="" itemprop="item"><span itemprop="name">リンク</span></a><meta itemprop="position" content="2"></li>
</ol>

<ul class="link__list">
<li class="link__item"><a href="" target="_blank" rel="noopener">京都大学大学院医学研究科・医学部</a></li>
<li class="link__item"><a href="" target="_blank" rel="noopener">京都大学高等研究院ヒト生物学高等研究拠点</a></li>
<li class="link__item"><a href="" target="_blank" rel="noopener">京都大学大学院医学研究科・脳機能総合研究センター</a></li>
<li class="link__item"><a href="" target="_blank" rel="noopener">日本神経科学学会</a></li>
<li class="link__item"><a href="" target="_blank" rel="noopener">日本生理学会</a></li>
<li class="link__item"><a href="" target="_blank" rel="noopener">日本脳科学関連学会連合</a></li>
<li class="link__item"><a href="" target="_blank" rel="noopener">北米神経科学会</a></li>
<li class="link__item"><a href="" target="_blank" rel="noopener">Society for the Neural Control of Movement</a></li>
<li class="link__item"><a href="" target="_blank" rel="noopener">日本マーモセット研究会</a></li>
<li class="link__item"><a href="" target="_blank" rel="noopener">脳科学研究戦略推進プログラム（脳プロ）</a></li>
</ul>

</div>

<!--/main-->
</article>

</main>

<!--/content-->
</div>

<?php include_once '../common/footer.php'; ?>

<!--/container-->
</div>

<?php include_once '../common/common_script.php'; ?>

<?php if(false) { ?>
<!--sp_menu-->
<?php include_once '../common/sp_menu.php'; ?>
<!--/sp_menu-->
<?php } ?>

</body>
</html>