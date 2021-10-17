<?php get_header(); ?>
	<main class="formWrapper">
    <div class="container">
      <h2 class="title">
        Contact
      </h2>
      <p class="text">
        制作依頼やご相談はお気軽にお問い合わせください。
      </p>
      <div class="formWrap">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php echo the_content(); ?>
<?php endwhile; endif; ?>
      </div>
    </div>
  </main>
<?php get_footer(); ?>