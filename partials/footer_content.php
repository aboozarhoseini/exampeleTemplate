<footer id="colorlib-footer">
    <div class="container">
        <div class="row row-pb-md">
            <!--start about-->
            <div class="col-md-3 colorlib-widget">
                <h4>About unapp</h4>
                <p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                <p>
                <ul class="colorlib-social-icons">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                </ul>
                </p>
            </div>
            <!--end about-->
            <!--start widget-->
            <div class="col-md-3 colorlib-widget">
                <h4>Information</h4>
                <p>
                <ul class="colorlib-footer-links">
                    <!--                      <li><a href="#"><i class="icon-check"></i> Home</a></li>-->
                    <!--                      <li><a href="#"><i class="icon-check"></i> Gallery</a></li>-->
                    <!--                      <li><a href="#"><i class="icon-check"></i> About</a></li>-->
                    <!--                      <li><a href="#"><i class="icon-check"></i> Blog</a></li>-->
                    <!--                      <li><a href="#"><i class="icon-check"></i> Contact</a></li>-->
                    <!--                      <li><a href="#"><i class="icon-check"></i> Privacy</a></li>-->


                    <?php if (has_nav_menu('footer-menu')): ?>
                        <?php wp_nav_menu(array('theme_location' => 'footer-menu')) ?>
                    <?php else: ?>
                        <div class="footer-menu-empty">لطفا یک منو برای این قسمت انتخاب کنید</div>
                    <?php endif; ?>
                </ul>


                </p>
            </div>
            <!--end widget-->
            <!--start blog-->
            <div class="col-md-3 colorlib-widget">
                <h4>Recent Blog</h4>
                <?php include_once get_template_directory() . '/loop/blog-loop.php' ?>
            </div>
            <!--end  blog-->

            <div class="col-md-3 colorlib-widget">
                <h4>Contact Info</h4>
                <ul class="colorlib-footer-links">
                    <li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
                    <li><a href="tel://1234567920"><i class="icon-phone"></i> + 1235 2355 98</a></li>
                    <li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@yoursite.com</a></li>
                    <li><a href="#"><i class="icon-location4"></i> yourwebsite.com</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><br>
                        Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>, <a href="http://pexels.com/" target="_blank">Pexels</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>
