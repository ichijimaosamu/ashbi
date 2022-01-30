<?php include_once '../common/base_url.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<link rel="icon" type="<?php echo $base_url . '/'; ?>favicon.ico" href="https://ashbi.kyoto-u.ac.jp/favicon.ico">
<title>Amemori Group - Technology (日本語)</title>
<meta name="description" content="Our Mission">
<?php include_once '../common/common_head.php'; ?>
<link rel="stylesheet" href="<?php echo $base_url . '/'; ?>lightbox.css" />
</head>
<body id="technology" class="lower" itemscope="itemscope" itemtype="http://schema.org/WebPage">

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
<h1 class="main__fv__title -lower">技術開発</h1>
<p class="main__fv__bg -lower"><img src="<?php echo $base_url . '/'; ?>img/technology_main_fv_bg.jpg" class="sp_none" alt=""><img src="<?php echo $base_url . '/'; ?>img/technology_main_fv_bg_sp.jpg" class="pc_none" alt=""></p>
</div>
</div>

<div class="main__inner -technology">

<ol class="breadcrumb-list" itemscope="" itemtype="https://schema.org/BreadcrumbList">
<li class="breadcrumb-list__item breadcrumb-list__item--home" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="" itemprop="item"><i class="fas fa-fw fa-home"></i><span itemprop="name">HOME</span></a><meta itemprop="position" content="1"></li>
<li class="breadcrumb-list__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="" itemprop="item"><span itemprop="name">技術開発</span></a><meta itemprop="position" content="2"></li>
</ol>

<section class="block">
<h2 class="block__title">私たちの技術開発について</h2>

<p>
●タンパク質解析前処理<br>
培養した細胞や組織からタンパク質を抽出し、主に酵素を用いてタンパク質を消化します（タンパク質をペプチドにします）。<br>
<br>
●消化したタンパク質の測定<br>
液体クロマトグラフィーで消化したタンパク質を分離しながら、質量分析計で測定します。この時、エレクトロスプレイイオン化法と呼ばれる手法を用いてペプチドをイオン化しています。この手法の開発者のジョン・フェン博士は2002年にノーベル化学賞を受賞されました。<br>
<br>
●タンパク質の解析と検証<br>
質量分析計でとったデータをもとに、MascotやProteinPilotなどのデータベース解析ソフトを用いてタンパク質を同定します。この時、定量精度を高めたり、より良い解析結果を得るために、様々な解析ツールを使用・開発します。さらに、ウェスタンブロッティングや免疫染色などを行ってデータの検証をします。<br>
<span class="pic"><img src="<?php echo $base_url . '/'; ?>img/technology_about_pic.jpg" alt=""></span>
</p>

</section>

<section class="block">
<h2 class="block__title">実験装置</h2>

<ul class="photo__list">
<li class="photo__item">
<a href="<?php echo $base_url . '/'; ?>img/photo_item1_b.jpg" data-lightbox="photo" data-title="">
<img src="<?php echo $base_url . '/'; ?>img/photo_item1_m.jpg" alt="">
<dl>
<dt class="photo__item__term">nanoLC-MS/MSシステム (TripleTOF 5600 (Sciex))</dt>
<dd class="photo__item__description">ナノ液体クロマトグラフィー(Dionex)とオートサンプラー(PAL)に質量分析計をつなげています。</dd>
</dl>
</a>
</li>
<li class="photo__item">
<a href="<?php echo $base_url . '/'; ?>img/photo_item2_b.jpg" data-lightbox="photo" data-title="">
<img src="<?php echo $base_url . '/'; ?>img/photo_item2_m.jpg" alt="">
<dl>
<dt class="photo__item__term">プラー-顕微鏡-金コート用機器</dt>
<dd class="photo__item__description">内径75-100umのガラス配管に熱を当てながら引っ張り、スプレイヤーチップを作る機械です。さらに、それを金コートして伝導性を高めます。</dd>
</dl>
</a>
</li>
<li class="photo__item">
<a href="<?php echo $base_url . '/'; ?>img/photo_item3_b.jpg" data-lightbox="photo" data-title="">
<img src="<?php echo $base_url . '/'; ?>img/photo_item3_m.jpg" alt="">
<dl>
<dt class="photo__item__term">カラムローダー</dt>
<dd class="photo__item__description">内径75-100umのガラス配管に3um程度のC18粒子を詰めて、分析用のカラムを作ります。</dd>
</dl>
</a>
</li>
</ul>
</section>

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
<script src="<?php echo $base_url . '/'; ?>js/lightbox.min.js"></script>

<!--sp_menu-->
<?php include_once '../common/sp_menu.php'; ?>
<!--/sp_menu-->

</body>
</html>