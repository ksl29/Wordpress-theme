<?php get_header(); ?>
<div class="grid-layout">
    <main>
        <div class="posts-grid ">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="posts">
                        <h6 class="post-info"><?php the_time('F jS, Y') ?></h6>
                        <h3 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                        <p><?php the_excerpt(__('(more...)')); ?></p>
                        <h6 class="post-author">by <?php the_author(); ?></h6>

                    </div>
                <?php endwhile;
            else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>


    </main>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>