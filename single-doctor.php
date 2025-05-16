<?php get_header(); ?>

<div class="container doctor-single">
    <div class="row">
        <div class="col-lg-4">
            <div class="doctor-profile">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="doctor-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                
                <div class="doctor-info">
                    <h3><?php the_title(); ?></h3>
                    <p class="specialty"><?php echo get_post_meta(get_the_ID(), 'doctor_specialty', true); ?></p>
                    
                    <div class="doctor-contact">
                        <p><i class="fas fa-phone-alt"></i> <?php echo get_post_meta(get_the_ID(), 'doctor_phone', true); ?></p>
                        <p><i class="fas fa-envelope"></i> <?php echo get_post_meta(get_the_ID(), 'doctor_email', true); ?></p>
                    </div>
                    
                    <div class="doctor-social">
                        <?php
                        $socials = array('facebook', 'twitter', 'linkedin', 'instagram');
                        foreach ($socials as $social) {
                            $url = get_post_meta(get_the_ID(), 'doctor_' . $social, true);
                            if ($url) {
                                echo '<a href="' . esc_url($url) . '"><i class="fab fa-' . $social . '"></i></a>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="doctor-details">
                <h2>About Dr. <?php the_title(); ?></h2>
                <?php the_content(); ?>
                
                <div class="doctor-education">
                    <h3>Education</h3>
                    <?php echo wpautop(get_post_meta(get_the_ID(), 'doctor_education', true)); ?>
                </div>
                
                <div class="doctor-experience">
                    <h3>Experience</h3>
                    <?php echo wpautop(get_post_meta(get_the_ID(), 'doctor_experience', true)); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>