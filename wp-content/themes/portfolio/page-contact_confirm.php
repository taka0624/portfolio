<?php get_header(); ?>
	<main class="confirmWrapper">
    <div class="container">
      <h2 class="title">
        Contact
      </h2>
      <p class="text">
        以下の無用でよろしければ<span class="emphasis">Send</span>を押してください。
      </p>
      <div class="contactWrap">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php echo the_content(); ?>
<?php endwhile; endif; ?>
    </div>
  </main>
<?php get_footer(); ?>