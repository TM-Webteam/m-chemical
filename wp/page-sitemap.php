<?php get_header(); ?>

<main class="sitemap">

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li>サイトマップ</li>
      </ul>
    </div>
  </section>

  <section>
    <div class="containers flex gap40">

      <div class="group">
        <div class="group__ttl">製品情報</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>gohsenol/">ゴーセノール</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>gohsenex/">ゴーセネックス</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>g-polymer/">ニチゴーGポリマー</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">サービスとサポート</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>research_and_development/">研究開発者・技術部門の方</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>trading/">総合商社・科学専門商社の方</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>manufacturer/">メーカー企画・購買部門の方</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">お問合せ</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>research_and_development/">製品カタログ・SDSダウンロード</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>trading/">ご相談・お見積り依頼</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">技術・お役立ち情報</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>technical/category/gohsenol/">技術情報：ゴーセノール</a></li>
          <!-- <li><a href="<?php echo esc_url(home_url('/')); ?>technical/category/gohsenex/">技術情報：ゴーセネックス</a></li> -->
          <li><a href="<?php echo esc_url(home_url('/')); ?>technical/category/g-polymer/">技術情報：ニチゴーGポリマー</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>knowledge/">基礎知識・用語解説</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>usage/">使用用途</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>news/">ニュース</a></li>
        </ul>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>