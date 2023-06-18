</main>
<?php get_sidebar(); ?>
</div>
<footer id="footer" role="contentinfo">
<div id="copyright">
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
</div>
</footer>
</div>

<?php
    $defaultFlg = null;
    if (isPageProductIntroduction()) {
        $defaultFlg = false;
        get_template_part('/app/Views/FooterLandingPage');

    } else {
        $defaultFlg = true;
    }
?>
<?php wp_footer(); ?>
<?php if ($defaultFlg): ?>
<div class="footer-section">
  <div class="footer-content">
    <div class="footer-left-container">
      <div class="footer-content-left">
        <img class="footer-logo-image" src="https://global-ih.com/wp-content/uploads/2022/08/logo.png"><br>
        <span lang="jp" class="footer-address">〒150-0002<br>
東京都渋谷区渋谷3-9-10　KDC渋谷ビル2F</span><br>
        <img class="footer-phone-image" src="https://global-ih.com/wp-content/uploads/2022/09/シェイプ-7.svg">
        <span lang="en" class="footer-phone">03-6820-8442</span>
      </div>
    </div>
    <div class="footer-content-right">
      <div class="footer-contact">
        <span lang="en">CONTACT</span>
      </div>
      <div class="footer-phone">
        <img class="footer-phone-image" src="https://global-ih.com/wp-content/uploads/2022/09/シェイプ-7.svg">
        <span lang="en" class="footer-phone-span">03-6820-8442</span>
      </div>
      <div class="footer-email">
		<a href="https://global-ih.com/contact/">
          <button class="footer-email-button">
            <img class="footer-email-image" src="https://global-ih.com/wp-content/uploads/2022/09/シェイプ-6.svg">
            <span lang="en" class="footer-email-span">E-MAIL</span>
            <img class="footer-button-arrow" src="https://global-ih.com/wp-content/uploads/2022/09/シェイプ-2.svg">
          </button>
		 </a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <span  lang="en" class="copyright-span">Copyright © 2022 Global Innovation Handle Co.,Ltd. All rights reserved.</span>
  </div>
</div>
<?php endif; ?>
</body>
<script type="text/javascript">
		

  let isOnDiv = false;
	
  document.getElementById("menu-content-div").onmouseenter = () => {
    isOnDiv = true
  }
  
  document.getElementById("menu-content-div").onmouseout = () => {
    isOnDiv = false
  }
  
  document.getElementById("service-list-li").addEventListener("mouseover", function() {
  	document.getElementById("menu-content-div").classList.remove("hidden");
	isOnDiv = true
  });
	
  document.getElementById("vision-li").addEventListener("mouseover", function() {
  	document.getElementById("menu-content-div").classList.add("hidden");
	isOnDiv = true
  });
	
	/*
  document.getElementById("menu-div").addEventListener("mouseleave", function() {
	 document.getElementById("menu-content-div").classList.add("hidden");
  });
  */
  
  document.getElementById("service-list-li").addEventListener("mouseleave", function() {
	document.getElementById("menu-content-div").classList.add("hidden");
  });
	
  document.getElementById("hamburger-menu").addEventListener("click", function() {
	if (document.getElementById("mobile-menu-div").classList.contains("hidden")) {
		document.getElementById("mobile-menu-div").classList.remove("hidden");
	} else {
		document.getElementById("mobile-menu-div").classList.add("hidden");
	}
  });
  document.getElementById("mobile-menu-service-li").addEventListener("click", function() {
	if (document.getElementById("mobile-menu-content-div").classList.contains("hidden")) {
		document.getElementById("mobile-menu-content-div").classList.remove("hidden");
	} else {
		document.getElementById("mobile-menu-content-div").classList.add("hidden");
	}
  });	
	
  document.getElementById("top-link").addEventListener('click', function() { 
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  });
	
  window.addEventListener('scroll', e => {
    document.getElementById("top-link").style.display = window.scrollY > 300 ? 'block' : 'none';
  });
	
  var qnaButtons = document.getElementsByClassName('qna-button');
  Array.from(qnaButtons).forEach((el, ind) => {
	 el.onclick = function () {
		console.log('el clicked', el, ind); 
		var neighbor = el.parentElement.querySelector('.hidden');
		neighbor.classList.remove('hidden');
		el.classList.add('hidden');
		el.parent.parent.nextSibling.classList.remove('hidden');
	 }
  });
	
</script>
</html>