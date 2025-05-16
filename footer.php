<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-about">
                    <h3>About Novena</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, sequi corrupti corporis quam.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-links">
                    <h3>Departments</h3>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_class' => 'footer-menu'
                    ));
                    ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 200 D Block Green Lane, BD</p>
                    <p><i class="fas fa-phone-alt"></i> +10 367 467 8934</p>
                    <p><i class="fas fa-envelope"></i> contact@novena.com</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <p>Copyright &copy; <?php echo date('Y'); ?> All rights reserved | Novena</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>