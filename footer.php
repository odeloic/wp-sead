
</main>
<footer class="footer ">
        <div class="container is-padded pd-top--big pd-bottom--big">
            <div class="columns is-centered ">
                <div class="column footer__column is-two-thirds">
                    <!-- Twitter Feed-->
                    <h3 class="footer__heading">Stay Connected</h3>
                </div>
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
            </div>
        </div>
        <div class="footer__copyright is-padded">
            <p>
                <strong>SEAD RWANDA</strong>. ALL RIGHTS RESERVED 2019
            </p>
        </div>

    </footer>
    <?php wp_footer();?>
</body>
</html>
