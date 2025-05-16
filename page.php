<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1>We Provide All Health Care Solution</h1>
                <p>Protect Your Health And Take Care To Of Your Health</p>
                <a href="#" class="btn btn-main">Read More</a>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-img.png" alt="Hero Image">
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Our Services</h2>
                    <p>We provide a wide range of medical services</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $services = new WP_Query(array(
                'post_type' => 'service',
                'posts_per_page' => 6
            ));
            
            if ($services->have_posts()) :
                while ($services->have_posts()) : $services->the_post(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="service-icon">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            <?php endif; ?>
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-more">Learn More <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="section about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-img.jpg" alt="About Novena">
            </div>
            <div class="col-lg-6">
                <h2>About Novena</h2>
                <h3>We Provide Best Medical Services</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, sequi corrupti corporis quam.</p>
                <div class="about-features">
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <h4>Professional Staff</h4>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <h4>Emergency Services</h4>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <h4>24/7 Support</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>