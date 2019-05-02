</main>
<footer class="footer ">

    <div class="container is-padded pd-top--big pd-bottom--big">
        <div class="columns is-centered ">
            <div class="column footer__column">
                <!-- Twitter Feed-->
                <h3 class="footer__heading">Stay Connected</h3>
                <ul class="social-icons">
                    <li class="social-icons__icon">
                        <a href="#" title="Twiiter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li><!-- icon -->

                    <li class="social-icons__icon">
                        <a href="#" title="Facebook">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li><!-- icon -->

                    <li class="social-icons__icon">
                        <a href="#" title="Flickr">
                            <i class="fab fa-flickr"></i>
                        </a>
                    </li><!-- icon -->
                </ul>
            </div>
            <!-- column -->

            <div class=" column footer__column">
                <h3 class="footer__heading">Additional Resources</h3>
                <!-- Footer Nav -->
                <?php
                wp_nav_menu(array(
                    'menu' => 'footer-menu',
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'menu',
                    'container' => 'nav',
                    'container_class' => 'footer__nav',
                ));
                ?>
            </div>
            <!-- column -->

            <div class=" column footer__column footer__address">
                <h3 class="footer__heading">Where to find us</h3>
                <div class="address">
                    <p>Kigali, Rwanda</p>
                    <p>Commercial Building, Lot. No 144</p>
                    <p>+250 66889999</p>
                    <div class="social-icons">
                        <span class="social-icons__icon"></span>
                        <span class="social-icons__icon"></span>
                        <span class="social-icons__icon"></span>
                    </div>
                </div>
            </div>
            <!-- column -->
            <div class="column footer__column is-one-third">
                <a class="twitter-timeline" data-height="300" data-theme="dark" data-link-color="#FFF46B" data-chrome="transparent nofooter noborders noscrollbar" href="https://twitter.com/SEAD_Rwanda?ref_src=twsrc%5Etfw">Tweets by
                    SEAD_Rwanda</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

            </div>
        </div>
        <!-- footer column -->


    </div>

    <div class="footer__copyright is-padded">
        <p>
            <strong>SEAD RWANDA</strong>. ALL RIGHTS RESERVED 2019
        </p>
    </div>

</footer>
<?php wp_footer(); ?>
</body>

</html>