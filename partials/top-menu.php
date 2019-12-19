<nav class="colorlib-nav " role="navigation">
    <div class="top-menu ">
        <div class="container  ">
            <div class="row ">
                <div class="col-md-2  ">
                    <div id="colorlib-logo"><a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?>"><?php echo TEST_THEME_NAME; ?></a></div>
                </div>
                <div class="col-md-10 menu-1 ">


                    <!--                     <ul  >-->
                    <!--                         <li class="active"><a href="index.html">Home</a></li>-->
                    <!--                         <li class="has-dropdown">-->
                    <!--                             <a href="work.html">Works</a>-->
                    <!--                             <ul class="dropdown">-->
                    <!--                                 <li><a href="work-grid.html">Works grid with text</a></li>-->
                    <!--                                 <li><a href="work-grid-without-text.html">Works grid w/o text</a></li>-->
                    <!--                             </ul>-->
                    <!--                         </li>-->
                    <!--                         <li><a href="services.html">Services</a></li>-->
                    <!--                         <li><a href="blog.html">Blog</a></li>-->
                    <!--                         <li><a href="about.html">About</a></li>-->
                    <!--                         <li><a href="shop.html">Shop</a></li>-->
                    <!--                         <li><a href="contact.html">Contact</a></li>-->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!--                     </ul>-->


                    <?php



                    ?>


                    <?php if (has_nav_menu('top-menu')): ?>
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'top-menu',
                                'container_class' => 'fff'

                            )
                        ) ?>
                    <?php else: ?>
                        <div class="footer-menu-empty">لطفا یک منو برای این قسمت انتخاب کنید</div>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </div>
</nav>

