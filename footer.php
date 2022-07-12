</div>

<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="site-footer__brand">
            <img id="logito" src="https://elspot.pe/wp-content/uploads/2022/01/logo-1.svg">
        </div>
        <div class="site-footer__links">
            <p class="title">SERVICIOS</p>
            <div class="group">
                <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
                </div>
        </div>
        <div class="site-footer__links">
            <p class="title">LEGAL</p>
            <div class="group">
                <?php $args = array(
                                        'theme_location' => 'legal',
                                        'container' => 'nav',
                                        'container_class' => 'site-footer__links-legal',
                                        'link_before' => '<span class="sr-text">',
                                        'link_after' => '</span>'
                                );
                                wp_nav_menu($args); ?>

            </div>

        </div>
        <div class="site-footer__address">
            <p class="title">SÍGUENOS</p>
            <div class="group">
                <center>
  <a href="https://www.tiktok.com/@elspot.pe"><img id="logos-redes" src="https://elspot.pe/wp-content/uploads/2022/06/tiktok-logo.png"></a>
  <a href="https://www.facebook.com/elspot.pe/"><img  id="logos-redes" src="https://elspot.pe/wp-content/uploads/2022/06/facebook-logo.png"></a>
  <a href="https://www.instagram.com/elspot.pe/"><img  id="logos-redes" src="https://elspot.pe/wp-content/uploads/2022/06/instagram-logo.png"></a>
  <a href="https://www.linkedin.com/company/elspot-pe"><img  id="logos-redes" src="https://elspot.pe/wp-content/uploads/2022/06/linkedin.png"></a>
</center>
<style>
#logos-redes {
  display: inline-block;
  width: 30px;
}
</style>
            </div>
            <p class="title call">Llámanos al:</p>
            <a class="number"
                href="tel:+51<?php echo esc_html(get_option('numero_page')); ?>"><?php echo esc_html(get_option('numero_page')); ?></a>
        </div>

    </div>

</footer>

</div>
<?php wp_footer(); ?>
</body>

</html>