<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <div class="entry-meta">
                            <span class="posted-on">Posted on <?php the_date(); ?></span>
                            <span class="byline"> by <?php the_author(); ?></span>
                        </div>
                    </header>
                    
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                    
                    <footer class="entry-footer">
                        <?php the_tags('Tags: ', ', ', '<br>'); ?>
                        <p>Categories: <?php the_category(', '); ?></p>
                    </footer>
                </article>
                
                <?php comments_template(); ?>
                
            <?php endwhile; endif; ?>
        </div>
        <div class="col-lg-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>