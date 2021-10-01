<?php get_header(); ?>

<main>
    <div class="row ">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="post">
                    <h4 class="post-info"><?php the_time('F jS, Y') ?></h4>
                    <h2 class="post-title"><?php the_title(); ?></h2>
                    <h4>by <?php the_author(); ?></h4>
                    <p><?php the_content(__('(more...)')); ?></p>
                    <?php if (comments_open()) {
                        comments_template();
                    } ?>

                </article>
            <?php endwhile;
        else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>


</main>
<?php get_footer(); ?>