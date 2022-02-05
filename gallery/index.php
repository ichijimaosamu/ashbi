<?php include_once '../common/base_url.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<link rel="icon" type="<?php echo $base_url . '/'; ?>favicon.ico" href="https://ashbi.kyoto-u.ac.jp/favicon.ico">
<title>Amemori Group - Gallery (日本語)</title>
<meta name="description" content="Our Mission">
<?php include_once '../common/common_head.php'; ?>
</head>
<body id="gallery" class="lower" itemscope="itemscope" itemtype="http://schema.org/WebPage">

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
<h1 class="main__fv__title -lower">ギャラリー</h1>
<p class="main__fv__bg -lower"><img src="<?php echo $base_url . '/'; ?>img/gallery_main_fv_bg.jpg" class="sp_none" alt=""><img src="<?php echo $base_url . '/'; ?>img/gallery_main_fv_bg_sp.jpg" class="pc_none" alt=""></p>
</div>
</div>

<div class="main__inner">

<ol class="breadcrumb-list" itemscope="" itemtype="https://schema.org/BreadcrumbList">
<li class="breadcrumb-list__item breadcrumb-list__item--home" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="" itemprop="item"><i class="fas fa-fw fa-home"></i><span itemprop="name">HOME</span></a><meta itemprop="position" content="1"></li>
<li class="breadcrumb-list__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="" itemprop="item"><span itemprop="name">ギャラリー</span></a><meta itemprop="position" content="2"></li>
</ol>

<figure class="wp-block-gallery has-nested-images columns-default is-cropped">
<figure class="wp-block-image size-medium"><img width="300" height="225" data-id="549" src="https://trais-out4.sakura.ne.jp/inoue_kenkyushitsu/wp-content/uploads/2022/02/gallery_1-300x225.jpg" alt="" class="wp-image-549" srcset="https://trais-out4.sakura.ne.jp/inoue_kenkyushitsu/wp-content/uploads/2022/02/gallery_1-300x225.jpg 300w, https://trais-out4.sakura.ne.jp/inoue_kenkyushitsu/wp-content/uploads/2022/02/gallery_1-1024x768.jpg 1024w, https://trais-out4.sakura.ne.jp/inoue_kenkyushitsu/wp-content/uploads/2022/02/gallery_1-768x576.jpg 768w, https://trais-out4.sakura.ne.jp/inoue_kenkyushitsu/wp-content/uploads/2022/02/gallery_1.jpg 1299w" sizes="(max-width: 300px) 100vw, 300px"></figure>

<figure class="wp-block-image size-medium"><img loading="lazy" width="300" height="225" data-id="548" src="https://trais-out4.sakura.ne.jp/inoue_kenkyushitsu/wp-content/uploads/2022/02/gallery_2-300x225.jpg" alt="" class="wp-image-548" srcset="https://trais-out4.sakura.ne.jp/inoue_kenkyushitsu/wp-content/uploads/2022/02/gallery_2-300x225.jpg 300w, https://trais-out4.sakura.ne.jp/inoue_kenkyushitsu/wp-content/uploads/2022/02/gallery_2-1024x768.jpg 1024w, https://trais-out4.sakura.ne.jp/inoue_kenkyushitsu/wp-content/uploads/2022/02/gallery_2-768x576.jpg 768w, https://trais-out4.sakura.ne.jp/inoue_kenkyushitsu/wp-content/uploads/2022/02/gallery_2.jpg 1299w" sizes="(max-width: 300px) 100vw, 300px"></figure>
</figure>

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

<!--sp_menu-->
<?php include_once '../common/sp_menu.php'; ?>
<!--/sp_menu-->

</body>
</html>