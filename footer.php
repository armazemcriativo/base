        <footer class="footer" role="contentinfo">
            <div class="container">
                <nav class="footer__navigation">
                    <?php wp_nav_menu(['theme_location' => 'footer', 'menu_class' => 'nav nav--footer']); ?>
                </nav>
                <p class="footer__copyright"><?php echo get_bloginfo( 'name' ); ?> &copy; <?php echo date('Y'); ?></p>
                <a href="https://madeby.ac" title="Armazém Criativo">madeby.ac</a>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
