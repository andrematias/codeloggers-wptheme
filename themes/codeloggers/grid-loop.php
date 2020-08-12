<section id="posts-grid">
  <?php while ( have_posts() ) : the_post(); ?>
    <article class="post-preview">
      <header>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <h3 class="article-title">
              <a class="text-dark" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php the_title() ?>
            </a>
          </h3>
        </a>
    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <figure class="thumbnail">
          <?php the_post_thumbnail('medium_large'); // Fullsize image for the single post ?>
        </figure>
      </a>
    <?php endif; ?>
      </header>
      <section>
        <small><?php the_author(); ?></small>
      </section>
      <section class="post-metadata">
        <ul>
          <li><small><i class="tag-ico"></i><?php the_tags( '&nbsp;', '&nbsp;' ); ?></small></li>
          <li><small><i class="calendar-ico"></i> <?php the_time('F j, Y'); ?></small></li>
        </ul>
      </section>

      <main class="post-except">
        <p><?php the_excerpt();?> <a href="<?php the_permalink(); ?>">Read more...</a></p>
      </main>
      
    </article>
  <?php endwhile ?>

  <!-- pagintation -->
  <div id="pagination" class="clearfix">
    <div class="past-page"><?php previous_posts_link( __( 'Newer &raquo;', 'codeloggers' ) ); ?></div>
    <div class="next-page"><?php next_posts_link( __( ' &laquo; Older', 'codeloggers' ) ); ?></div>
  </div><!-- pagination -->
</section>