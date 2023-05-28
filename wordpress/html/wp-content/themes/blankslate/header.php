<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Questrial">
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php /* body_class(); */?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
	
<header id="header" role="banner">
<!--<div id="branding">
<!--<div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
<?php /*
if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
?>
</div>
<div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div>
</div>
<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
<!--<div id="search"><?php /*get_search_form();*/ ?><!--</div>
</nav>-->
  <div class="header">
  <div class="header-bar">
    <div class="logo-div">
      <a href="https://global-ih.com"><img class="logo" src="https://global-ih.com/wp-content/uploads/2022/08/logo.png"></a>
    </div>
    <div class="menu-div" id="menu-div">
      <ul class="menu-ul">
        <li class="menu-li main-menu" id="service-list-li"><span lang="ja">サービス一覧</span>
		  <div class="menu-content-div hidden" id="menu-content-div">
		  	<div class="menu-content-container">
				<h5 class="menu-content-title"><span lang="en">SNS</span><span lang="ja">運用サービス</span></h5>
			  <ul class="menu-content-list">
				<li class="menu-content-item"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/"><span lang="ja">YouTube・TikTok・Instagram・facebook運用サービス</span></a></li>
			  </ul>
			  <h5 class="menu-content-title"><span lang="ja">インフルエンサーマーケティング</span></h5>
			  <ul class="menu-content-list">
				<li class="menu-content-item"><span lang="ja"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">マッチングサイト型
 インフルエンサーマーケティング</a></span></li>
				<li class="menu-content-item"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/"><span lang="ja">インフルエンサー
アフィリエイト マーケティング</span></a></li>
				<li class="menu-content-item"><span lang="ja"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">メガインフルエンサー 
マーケティング</a></span></li>
			  </ul>
			</div>
			<div class="menu-content-container">
			  <h5 class="menu-content-title"><span lang="en">WEB</span><span lang="ja">広告</span></h5>
			  <ul class="menu-content-list">
				<li class="menu-content-item"><span lang="ja"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">リスティング広告</a></span></li>
				<li class="menu-content-item"><span lang="ja"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">アフィリエイト広告</a></span></li>
				<li class="menu-content-item"><span lang="ja"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">ディスプレイ広告</a></span></li>
				<li class="menu-content-item"><span lang="ja"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">ネイティブ広告</a></span></li>
				<li class="menu-content-item"><span lang="ja"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">純広告</a></span></li>
				<li class="menu-content-item"><span lang="ja"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">リターゲティング広告</a></span></li>
			  </ul>
			  <h5 class="menu-content-title"><span lang="ja">デジタルマーケティングサービス</span></h5>
			  <ul class="menu-content-list">
				<li class="menu-content-item"><span lang="ja"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">ターゲット最適化マーケティング</a></span></li>
				<li class="menu-content-item"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/"><span lang="ja">富裕層マーケティング
		</span></a></li>
			  </ul>
			</div>
<div class="menu-content-container">
<h5 class="menu-content-title"><span lang="ja">SNS広告</span></h5>
	<ul class="menu-content-list">
	<li class="menu-content-item"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/"><span lang="ja">Instgram
Facebook広告</span></a></li>
				<li class="menu-content-item"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/"><span lang="ja">Twitter広告</span></a></li>
				 <li class="menu-content-item"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/"><span lang="ja">LINE広告</span></a></li>
				<li class="menu-content-item"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/"><span lang="ja">YouTube広告・TikTok広告
（動画広告）／動画制作</span></a></li>
			  </ul>
			  <h5 class="menu-content-title"><span lang="ja">フルフィルメントサービス</span></h5>
			  <ul class="menu-content-list">
				<li class="menu-content-item"><span lang="ja"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">CSなどの
バックヤード業務</a></span></li>
				<li class="menu-content-item"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/"><span lang="ja">物流・ささげ</span></a></li>
			  </ul>
		      <h5 class="menu-content-title"><span lang="en">GIH</span><span lang="ja">運営サイト</span></h5>
			</div>
		  </div>
		</li>
        <li class="menu-li main-menu" id="vision-li"><a href="https://global-ih.com/%e4%bc%81%e6%a5%ad%e7%90%86%e5%bf%b5/"><span lang="ja">企業理念</span></a></li>
        <li class="menu-li main-menu"><a href="https://global-ih.com/%e4%bc%9a%e7%a4%be%e6%83%85%e5%a0%b1/"><span lang="ja">会社情報</span></a></li>
        <li class="menu-li main-menu"><a href="https://global-ih.com/%e3%82%b0%e3%83%ab%e3%83%bc%e3%83%97%e6%a6%82%e8%a6%81/"><span lang="ja">グループ概要</span></a></li>
      </ul>
    </div>
    <div class="contact-button-div">
      <a href="<?php echo get_template_directory() . '/contact/' ;?>"><button class="contact-button"><span lang="en">CONTACT</span><img class="header-button-arrow" src="https://global-ih.com/wp-content/uploads/2022/09/シェイプ-2.svg"></button></a>
    </div>
    <div class="hamburger-menu" id="hamburger-menu">
      <img src="https://global-ih.com/wp-content/uploads/2023/04/hamburger.svg">
    </div>
  </div>
  <div class="mobile-menu-div hidden" id="mobile-menu-div">
    <ul class="mobile-menu-ul" id="mobile-menu">
      <li class="menu-li main-menu" id="mobile-menu-service-li"><span lang="ja">サービス一覧</span></li>
      <li class="menu-li hidden" id="mobile-menu-content-div">
        <div class="mobile-menu-content-div" id="menu-content-div">
          <div class="menu-content-container">
				<h5 class="menu-content-title"><span lang="en">SNS</span><span lang="ja">運用サービス</span></h5>
				<ul class="menu-content-list">
				<li class="menu-content-item"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/"><span lang="en">YouTube・TikTok・Instagram・facebook運用サービス</span><span lang="ja">運用サービス</span></a></li>
            </ul>
            <h5 class="menu-content-title" lang="ja">インフルエンサーマーケティング</h5>
            <ul class="menu-content-list">
              <li class="menu-content-item"><span><a lang="ja" href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">マッチングサイト型
 インフルエンサーマーケティング</a></span></li>
              <li class="menu-content-item"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/"><span lang="ja">インフルエンサー
アフィリエイトマーケティング</span></a></li>
				<li class="menu-content-item"><span><a  lang="ja"href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">メガインフルエンサーマーケティング</a></span></li>
            </ul>
 				</div>
				<div class="menu-content-container">
			  <h5 class="menu-content-title"><span lang="en">WEB</span><span lang="ja">広告</span></h5>
            <ul class="menu-content-list">
              <li class="menu-content-item"><span><a lang="ja" href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">リスティング広告</a></span></li>
              <li class="menu-content-item"><span><a lang="ja" href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">アフィリエイト広告</a></span></li>
              <li class="menu-content-item"><span><a lang="ja" href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">ディスプレイ広告</a></span></li>
              <li class="menu-content-item"><span><a lang="ja" href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">ネイティブ広告</a></span></li>
              <li class="menu-content-item"><span><a lang="ja" href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">純広告</a></span></li>
              <li class="menu-content-item"><span><a lang="ja" href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">リターゲティング広告</a></span></li>
				</ul>
            <h5 class="menu-content-title"><a lang="ja" href="https://global-ih.com/2022/08/27/%e3%82%b5%e3%83%bc%e3%83%93%e3%82%b9%e4%b8%80%e8%a6%a7/">デジタルマーケティングサービス</a></h5>
					<ul class="menu-content-list">
					<li class="menu-content-item"><span><a lang="ja" href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">ターゲット最適化マーケティング</a></span></li>
					<li class="menu-content-item"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/"><span lang="ja">富裕層マーケティング</span></a></li>
            </ul>
          </div>
          <div class="menu-content-container">
            <h5 class="menu-content-title"><a href="https://global-ih.com/2022/08/27/%e3%82%b5%e3%83%bc%e3%83%93%e3%82%b9%e4%b8%80%e8%a6%a7/"><span lang="ja">SNS広告</span></a></h5>
			  <ul class="menu-content-list">
					<li class="menu-content-item"><span><a lang="ja" href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">Instgram
Facebook広告</a></span></li>
					<li class="menu-content-item"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/"><span lang="ja">Twitter広告</span></a></li>
					<li class="menu-content-item"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/"><span lang="ja">LINE広告</span></a></li>
					<li class="menu-content-item"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/"><span lang="ja">YouTube広告・TikTok広告（動画広告）／動画制作</span></a></li>				  
            </ul>
            <h5 class="menu-content-title"><a lang="ja" href="https://global-ih.com/2022/08/27/%e3%82%b5%e3%83%bc%e3%83%93%e3%82%b9%e4%b8%80%e8%a6%a7/">フルフィルメントサービス</a></h5>
<ul class="menu-content-list">
					<li class="menu-content-item"><span><a lang="ja" href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/">CSなどの
バックヤード業務</a></span></li>
					<li class="menu-content-item"><a href="https://global-ih.com/%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%E4%B8%80%E8%A6%A7/"><span lang="ja">物流・ささげ</span></a></li>
            </ul>
			  <h5 class="menu-content-title"><a lang="ja" href="https://global-ih.com/2022/08/27/%e3%82%b5%e3%83%bc%e3%83%93%e3%82%b9%e4%b8%80%e8%a6%a7/">GIH運営サイト</a></h5>
          </div>
        </div>
      </li>
      <li class="menu-li main-menu"><span><a lang="ja" href="https://global-ih.com/%e4%bc%81%e6%a5%ad%e7%90%86%e5%bf%b5/">企業理念</a></span></li>
      <li class="menu-li main-menu"><span><a lang="ja" href="https://global-ih.com/%e4%bc%9a%e7%a4%be%e6%83%85%e5%a0%b1/">会社情報</a></span></li>
      <li class="menu-li main-menu"><span><a lang="ja" href="https://global-ih.com/%e3%82%b0%e3%83%ab%e3%83%bc%e3%83%97%e6%a6%82%e8%a6%81/">グループ概要</a></span></li>
      <li class="menu-li button-li">
        <button class="contact-button" id="mobile-contact-button"><span lang="en"><a href="https://global-ih.com/contact/">CONTACT</a></span><img class="footer-button-arrow" src="https://global-ih.com/wp-content/uploads/2022/09/シェイプ-2.svg"></button>
      </li>
    </ul>
  </div>
</div>
</header>
<div id="container">
<main id="content" role="main">