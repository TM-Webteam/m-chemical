<?php get_header(); ?>

<main class="thanks">

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/">ご相談・お見積り依頼</a></li>
        <li>ご相談・お見積り依頼いただきありがとうございました。</li>
      </ul>
    </div>
  </section>

  <section>
    <div class="containers">

      <h1 class="ttl-primary-lower">ご相談・お見積り依頼いただき<br class="sp-only">ありがとうございました。</h1>

      <div class="lead">後日、弊社営業担当より<br class="sp-only">ご連絡させていただきます。</div>

      <div class="taC"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="txt-link"><span>トップページに戻る</span><img src="<?php echo assets_path() ?>img/common/bg-more.svg" alt="トップページに戻る"></a></div>

    </div>
  </section>

</main>

<?php get_footer(); ?>