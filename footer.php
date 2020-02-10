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
                <div class="col-lg-4 col-md-4">
                    <div class="footer-left">
                        <div class="footer-img">
                            <a title="New York City Hospitality Group" href="/"><img src="https://nychg.org/wp-content/uploads/sites/114/2019/09/nychg-logo-footer.png" class="img-fluid"> </a>
                        </div>
                        <ul>
                            <li><a href="https://www.facebook.com/NYCHG/" target="_blank" title="NYCHG Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/nychg" target="_blank" title="NYCHG Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/nychg/" target="_blank" title="NYCHG Instagram"><i class="fab fa-instagram"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
				 <div class="col-lg-4 col-md-4">
					 <p style="color: #ccc;">About NYCHG</p>
                    <p style="color: #fff;">Established in 2009, The New York City Hospitality Group ("NYCHG") is a New York City-centric organization dedicated to serving the restaurant and hospitality industry. NYCHG is comprised of the best in class professionals that act as a resource to each other and the hospitality community.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="footer-right">
                        <div class="subscribe">
                            <h5>Subscribe</h5>
                           <?php echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
                        </div>
                        <div class="contact">
                            <span>Contact</span>
                            <a title="Contact NYCHG" href="mail: info@nychg.com">info@nychg.com</a>
                        </div>
                        <p>2019 nychg.org | <a href="/apply" style="color: #ccc;" title="Apply for Membership NYCHG">Apply for Membership</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-area end -->    

<?php wp_footer(); ?>



</body>
</html>