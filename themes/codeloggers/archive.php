<?php get_header(); ?>

<main id="app-content">
  <header id="search">
    <?php get_search_form(); ?>
  </header>
  <h1>
    <?php esc_html_e( "Here are what I've thinking", 'codeloggers' ); ?>
  </h1>

  <?php if ( have_posts() ) : ?>
    <?php get_template_part( 'grid-loop' ); ?>
  <?php else : ?>

    <article class="post error">
      <h4 class="404"><?php esc_html_e( 'Maybe my mind is empty for now :)', 'codeloggers' ); ?></h4>
      <p>Do you want to suggest this subject?</p>
      <p>Send me a message</p>
    </article>

  <?php endif; //end have_posts ?>

</main>

<?php get_footer(); ?>