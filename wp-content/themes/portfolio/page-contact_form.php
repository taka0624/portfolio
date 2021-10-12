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
        <form action="#" method="POST">
          <dl>
            <dt>
              <label for="name">Name：</label>
            </dt>
            <dd>
              <input type="text" class="input" id="name">
            </dd>
          </dl>
          <dl>
            <dt>
              <label for="email">Email：</label>
            </dt>
            <dd>
              <input type="email" class="input" id="email">
            </dd>
          </dl>
          <dl>
            <dt>
              <label for="text">Message：</label>
            </dt>
            <dd>
              <textarea id="text"></textarea>
            </dd>
          </dl>
          <p class="btnWrap">
            <input type="button" class="btn primaryBtn" value="Send">
          </p>
        </form>
      </div>
    </div>
  </main>
<?php get_footer(); ?>