<?php get_header(); ?>
	<main class="singleWrapper">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container">
      <h2 class="title">
<?php the_title(); ?>
      </h2>
      <div class="deliverableWrap">
        <div class="imgWrap">
          <a href="">
            <div class="bgImg thumbnail"
              style="background-image: url(<?= the_post_thumbnail_url(); ?>);">
            </div>
          </a>
        </div>
        <div class="content">
<?php echo get_the_content(); ?>
        </div>
      </div>
    </div>
<?php endwhile; else: ?>
    <p>Not Found Pages...</p>
<?php endif; ?>
  </main>
<?php get_footer(); ?>