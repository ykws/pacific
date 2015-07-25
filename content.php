        <article>
            <header class="page-header">
                <h1 class="page-title"><?php the_title(); ?></h1>
            </header>
            <section class="entry-content">
                <?php the_content(); ?>
            </section>
<?php
if (is_single()) :
?>
            <div id="content_date_author">
              <ul class="alignright">
                <li>
                  <time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>" class="entry-date"><?php the_time(get_option('date_format')); ?></time>
                </li>
                <li>
                  <?php the_author_posts_link(); ?>
                </li>
              </ul>
            </div>
<?php
endif;
?>
        </article>
