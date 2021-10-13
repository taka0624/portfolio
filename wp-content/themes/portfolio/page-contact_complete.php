<?php get_header(); ?>
	<main class="completeWrapper">
    <div class="container">
      <h2 class="title">
        Contact
      </h2>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php echo the_content(); ?>
<?php endwhile; endif; ?>
      <p class="btnWrap">
        <a class="btn primaryBtn" href="<?php echo home_url() ?>">
          Top Page
        </a>
      </p>
    </div>
  </main>
<?php get_footer(); ?>