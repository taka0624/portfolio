<?php get_header(); ?>
	<main class="articleWrapper">
    <div class="container">
      <h2 class="title">
        Work
      </h2>
      <ul class="posts">
<?php
  $theQuery = subLoop(6);
  if($theQuery->have_posts()):
  while ($theQuery->have_posts()):
  $theQuery->the_post();
?>
        <li class="post">
          <a href="<?= the_permalink();?>">
            <div class="bgImg thumbnail"
              style="background-image: url(<?= the_post_thumbnail_url(); ?>);">
            </div>
          </a>
        </li>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
      </ul>
    </div>
  </main>
<?php get_footer(); ?>