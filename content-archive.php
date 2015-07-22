        <article <?php post_class(); ?>>
            <header class="entry-header">
                <time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>" class="entry-date"><?php the_time(get_option('date_format')); ?></time>
                <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            </header>
            <section class="entry-content">
                <?php the_excerpt(); ?>
            </section>
        </article>
