<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Questrial">
<?php $url = $_SERVER['REQUEST_URI'];?>
<!-- swiper.js CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>

<?php if ($url == '/product-introduction/'): ?>
    <link rel="stylesheet" href="/wp-content/themes/blankslate/css/tailwind.prod.css">
    <link rel="stylesheet" href="/wp-content/themes/blankslate/src/css/style.css">
<?php endif; ?>
</head>
<body>
    <?php wp_body_open(); ?>
        <header>
            <div class="l-header">
                <div class="l-header__container">
                    <div class="l-header__inner">
                        <div class="l-header__flex">
                            <div class="">
                                <a href="/">
                                    <img
                                    src="<?php echo get_template_directory_uri() . '/src/images/company_logo_pc.svg' ;?>"
                                    alt="Global Innovation Handle"
                                    class=""
                                    >
                                </a>
                            </div>
                            <div class="l-header__contact">
                                <a href="mailto:info@test.com" target="_blank" class="l-header__contact__button">
                                    <span>ご相談・お問い合わせ</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>