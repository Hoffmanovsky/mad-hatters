<footer class="footer">
    <div class="container">
        <div class="left-section">
            <header class="header">
                <div class="header-heading">
                    <div class="decoration">
                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3">
                                <circle cx="1.5" cy="1.5" r="1.5" fill="#fff" />
                                <circle cx="1.5" cy="7.5" r="1.5" fill="#fff" />
                                <circle cx="7.5" cy="1.5" r="1.5" fill="#fff" />
                                <circle cx="7.5" cy="7.5" r="1.5" fill="#fff" />
                            </g>
                        </svg>
                    </div>
                    <h3 class="heading">mad hatters</h3>
                </div>
                <p class="heading-sm">Be better, be cooler, be a Mad Hatter and sustainably matter.</p>
            </header>
            <p class="copyright">Copyright <?php echo date('Y'); ?> Mad Hatters, Inc. Terms & Privacy</p>
        </div>
        <div class="right-section">
            <div class="listing list-one">
                <div class="list-header">
                    <div class="decoration">
                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3">
                                <circle cx="1.5" cy="1.5" r="1.5" fill="#fff" />
                                <circle cx="1.5" cy="7.5" r="1.5" fill="#fff" />
                                <circle cx="7.5" cy="1.5" r="1.5" fill="#fff" />
                                <circle cx="7.5" cy="7.5" r="1.5" fill="#fff" />
                            </g>
                        </svg>
                    </div>
                    <h4 class="list-heading">
                        Shop here
                    </h4>
                </div>

                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'headerMenuLocation',
                        'menu_class' => 'list',
                        'link_class' => 'link'
                    ));
                ?>

            </div>
            <div class="listing list-two">
                <div class="list-header">
                    <div class="decoration">
                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.3">
                                <circle cx="1.5" cy="1.5" r="1.5" fill="#fff" />
                                <circle cx="1.5" cy="7.5" r="1.5" fill="#fff" />
                                <circle cx="7.5" cy="1.5" r="1.5" fill="#fff" />
                                <circle cx="7.5" cy="7.5" r="1.5" fill="#fff" />
                            </g>
                        </svg>
                    </div>
                    <h4 class="list-heading">
                        The legals
                    </h4>
                </div>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footerAdditionalLocation',
                        'menu_class' => 'list',
                        'link_class' => 'link'
                    ));
                ?>
            </div>
        </div>
    </div>
</footer>

</main>
<?php wp_footer(); ?>
</body>

</html>