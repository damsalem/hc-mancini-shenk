<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hudson.social
 */

?>
 <!-- footer-area start -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-4 col-lg-2 order-1">
                    <div class="footer-left">
                        <div class="footer-img">
                            <a title="Manchini Shenk" href="/"><img src="http://a.lex45.com/mancinishenk/wp-content/themes/mancinishenk.com/img/ms-final-logo-transparent.png" class="img-fluid"> </a>
                        </div>
                    </div>
                </div>
				 <div class="col-4 col-lg-3 order-2">
                     <div class="biz-info">
                        <p>1925 Century Park East, Suite 1700, <br>Los Angeles, CA 90067</p>
                        <p>(424) 652-4009 <br>email@address.com</p>
                     </div>
                </div>
                <div class="col-lg-4 order-4 order-lg-3">
                    <strong><p>Navigation</p></strong>
                    <div class="footer-nav">
                    <?php wp_nav_menu( array(
                        'menu'              => "Footer Menu",
                        'theme_location'    => 'menu-1',
                        'depth'             => 3,
                        'container'         => false,
                        'menu_class'        => 'nav navbar-nav',
                        'menu_id'           => 'footer-menu',
                        'link_class'        => '',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    ); ?>
                    </div>
                </div>
                <div class="col-4 col-lg-3 order-3 order-lg-4">
                    <ul class="legal-nav">
                        <li><a href="#">Website Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Attorney Advertising</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="container">
                <div class="row">
                    <div class="col">
                    <p class="text-center">&copy;Copyright 2020, Mancini Shenk LLP. All rights reserved. All use subject to Terms and Conditions of Use.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-area end -->    

<?php wp_footer(); ?>



</body>
</html>