<?php get_header(); ?>
	<main class="indexWrapper">
		<section class="firstView bgImg">
      <div class="overlay"></div>
      <div class="container">
        <h1 class="title">
          PORTFOLIO
        </h1>
      </div>
    </section>
    <section class="work">
      <div class="container">
        <h2 class="title">
          Work
        </h2>
        <div class="postsWrap">
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
        <div class="anchorWrap">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>/article/" class="anchor">show more</a>
        </div>
      </div>
    </section>
    <section class="skill">
      <div class="container">
        <div class="titleWrap">
          <h2 class="title">
            Skill
          </h2>
          <p class="text">
            さらにスキルアップしています。
          </p>
        </div>
        <ul class="skillList">
          <li class="imgWrap">
            <img src="<?php echo get_theme_file_uri('assets/img/html5.svg'); ?>" alt="html5">
          </li>
          <li class="imgWrap">
            <img src="<?php echo get_theme_file_uri('assets/img/css3.svg'); ?>" alt="css3">
          </li>
          <li class="imgWrap">
            <img src="<?php echo get_theme_file_uri('assets/img/jquery_logo.svg'); ?>" alt="jQuery">
          </li>
          <li class="imgWrap">
            <img src="<?php echo get_theme_file_uri('assets/img/git.svg'); ?>" alt="git">
          </li>
          <li class="imgWrap">
            <img src="<?php echo get_theme_file_uri('assets/img/github.svg'); ?>" alt="github">
          </li>
          <li class="imgWrap">
            <img src="<?php echo get_theme_file_uri('assets/img/wordpress.svg'); ?>" alt="wordpress">
          </li>
          <li class="imgWrap">
            <img src="<?php echo get_theme_file_uri('assets/img/visualstudio.svg'); ?>" alt="vscode">
          </li>
        </ul>
      </div>
    </section>
    <section class="about">
      <div class="container">
        <div class="content">
          <div class="bgWrap">
            <div class="bgImg portrait"></div>
          </div>
          <div class="aboutWrap">
            <h2 class="title">
              About
            </h2>
            <p class="name">
              川上 貴大
            </p>
            <p class="text">
              運用保守性を考慮したサイトの開発をすることを得意としています。<br>
              レスポンシブ対応でのHTML、CSS、jQuery、オリジナルテーマ制作を含むWordPress、の実装ができます。<br>
              現在はユーザーの目線に立って実用的なサイトを開発できるように様々なサイトを研究し、UL・UXの勉強に力を入れています。
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="contact">
      <div class="container">
        <div class="content">
          <div class="contactWrap">
            <h2 class="title">
              Contact
            </h2>
            <p class="text">
              制作依頼やご相談はお気軽にお問い合わせください。
            </p>
            <div class="anchorWrap">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact_form/" class="anchor">Contact page</a>
            </div>
          </div>
          <div class="bgWrap">
            <div class="bgImg typewriter"></div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>