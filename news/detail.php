<?php include_once '../common/base_url.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<link rel="icon" type="<?php echo $base_url . '/'; ?>favicon.ico" href="https://ashbi.kyoto-u.ac.jp/favicon.ico">
<title>Amemori Group - News (日本語)</title>
<meta name="description" content="Our Mission">
<?php include_once '../common/common_head.php'; ?>
</head>
<body id="news" class="lower" itemscope="itemscope" itemtype="http://schema.org/WebPage">

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
<h1 class="main__fv__title -lower">ニュース</h1>
<p class="main__fv__bg -lower"><img src="<?php echo $base_url . '/'; ?>img/news_main_fv_bg.jpg" alt=""></p>
</div>
</div>

<div class="main__inner">

<ol class="breadcrumb-list" itemscope="" itemtype="https://schema.org/BreadcrumbList">
<li class="breadcrumb-list__item breadcrumb-list__item--home" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="" itemprop="item"><i class="fas fa-fw fa-home"></i><span itemprop="name">HOME</span></a><meta itemprop="position" content="1"></li>
<li class="breadcrumb-list__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="" itemprop="item"><span itemprop="name">ニュース</span></a><meta itemprop="position" content="2"></li>
<li class="breadcrumb-list__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="" itemprop="item"><span itemprop="name">マカクザルモデルを用いた盲視研究に関する総説をNeuroscience誌に発表しました</span></a><meta itemprop="position" content="3"></li>
</ol>

<section class="news__detail">
<h1 class="news__detail__title">マカクザルモデルを用いた盲視研究に関する総説をNeuroscience誌に発表しました</h1>

<div class="news__detail__info">
<p class="news__detail__date">2021.06.19</p>
<p class="news__detail__cate">News</p>
</div>

<div class="news__detail__content">
<div class="news__detail__mainpic"><img src="<?php echo $base_url . '/'; ?>img/news_detail_pic1.jpg" alt=""></div>
<p class="news__detail__text">Isa T, Yoshida M (2021) Neural mechanism of blindsight in a macaque model. Neuroscience, (Forefront review), <a href="https://doi.org/10.1016/j.neuroscience.2021.06.022" target="_blank" rel="noopener">https://doi.org/10.1016/j.neuroscience.2021.06.022</a>
<br>
最近blindsight関係の論文をある程度まとめて出すことができたので、Neuroscience誌からForefront reviewの執筆依頼を受けたのを機に、北大に移った吉田さんと一緒に総説を書きました。ページ数に制限がないのをいいことに全部で図が１８枚という大部の総説を書きました。もともと今から２５年前に生理研に移った時からサルを使って盲視の研究をしたかったのですが、なかなか始められないでいたところに、今から１７－１８年前くらいに、吉田さんが加わってくれて本格的に始動しました。一次視覚野損傷サルについての研究はそれまでにもいろいろあったのですが今一つ突っ込んだ研究がなされていないと考え、より現代的な神経生理学と認知神経科学研究の手法を組み合わせて、盲視のことをより深く知ろうと考えて始めたプロジェクトでした。研究は大きく分けて、回路に関する研究と認知機能に関する研究があります。まとめて読んでいただけると、我々が他の追随を許さないところまで深く掘り下げていることをお判りいただけると思います。</p>
<p class="news__detail__pic"><img src="<?php echo $base_url . '/'; ?>img/news_detail_pic2.jpg" alt=""></p>
<p class="news__detail__caption">（図）行動解析、電気生理学、脳機能イメージング、心理物理、計算論、可逆的機能阻害法、経路選択的機能阻害法などを組み合わせて盲視のメカニズムを解析してきました。</p>
</div>

<ul class="news__detail__pagenation">
<li class="news__detail__pagenation__item -prev"><a href=""><i class="fas fa-angle-double-left"></i>BACK</a></li>
<li class="news__detail__pagenation__item -list"><a href="">一覧へ戻る</a></li>
<li class="news__detail__pagenation__item -next"><a href="">NEXT<i class="fas fa-angle-double-right"></i></a></li>
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

<?php if(false) { ?>
<!--sp_menu-->
<?php include_once '../common/sp_menu.php'; ?>
<!--/sp_menu-->
<?php } ?>

</body>
</html>