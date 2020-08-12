<?php get_header(); ?>

<main id="app-content">
  <header id="search">
    <?php get_search_form(); ?>
  </header>
  <h1>
    <?php esc_html_e( "Woops, Sorry I don't have what you are looking for", 'codeloggers' ); ?>
  </h1>

  <article class="post error">
    <h4 class="404"><?php esc_html_e( 'Maybe my mind is empty for now :)', 'codeloggers' ); ?></h4>
    <p>Do you want to suggest this subject?</p>
    <p>Send me a message to <a href="mailto:matias@codeloggers.com">matias@codeloggers.com</a></p>
  </article>

</main>

<?php get_footer(); ?>