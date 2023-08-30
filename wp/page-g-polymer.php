<?php get_header(); ?>

<main class="g-polymer">

  <section class="hero-b">
    <div class="flex sp-reverse containers-full">
      <div class="hero-b__box core">
        <div>
          <div class="hero-b__box--sub"><span>ブテンジオール・<br>ビニルアルコールコポリマー（BVOH）</span></div>
          <h1 class="ttl-primary" data-aos="fade" data-aos-delay="400"><img src="<?php echo assets_path() ?>img/g-polymer/logo.svg" alt="ニチゴーGポリマー™"></h1>
          <div class="hero-b__box--txt">非晶部の凝集力と結晶性を自在に制御できる、<br>次世代ビニルアルコール系樹脂（BVOH)</div>
          <a href="<?php echo esc_url(home_url('/')); ?>catalog/g-polymer/" class="more boder"><span>カタログダウンロードはこちら</span></a>
        </div>
      </div>
      <figure class="hero-b__mv">
        <ul id="hero-slick">
          <li class="slider01"></li>
          <li class="slider02"></li>
          <li class="slider03"></li>
        </ul>
      </figure>
    </div>
  </section>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li>ニチゴーGポリマー™</li>
      </ul>
    </div>
  </section>

  <section class="anchor">
    <div class="containers">
      <ul class="flex item" data-aos="fade-down">
        <li><a href="#anchor01" class="inner">製品概要・特徴</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>technical/category/g-polymer/">技術情報</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>g-polymer/grades/">銘柄一覧</a></li>
        <li><a href="#anchor02" class="inner">使用用途</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>catalog/g-polymer/">製品カタログ・SDS</a></li>
      </ul>
    </div>
  </section>

  <section id="anchor01" class="sec01">
    <div class="containers">
      <h2 class="ttl-secondary">ニチゴーGポリマー™とは</h2>
      <div class="flex aiC sp-reverse">
        <dl class="sec01__box">
          <dt>
            <h3>革新的新素材！！<br>ブテンジオールビニルアルコールポリマー（BVOH）</h3>
          </dt>
          <dd>ニチゴーGポリマー™は、非晶部の凝集力と結晶性を自在に制御できる、次世代ビニルアルコール系樹脂（BVOH）です。</dd>
          <dd>「低結晶性と高い水素結合力」という相反する性質を持つことにより、優れた透明性や耐溶剤性に加え、従来のポリビニルアルコール（PVOH、PVA）ではトレードオフの関係にあった機能を発揮する新素材です。</dd>
        </dl>
        <figure class="sec01__img" data-aos="fade-left"><img src="<?php echo assets_path() ?>img/g-polymer/img01.jpg" alt="ブテンジオールビニルアルコールポリマー（BVOH）"></figure>
      </div>
    </div>
    <div class="brand-circle-small"></div>
  </section>

  <section class="feature bg-LB">
    <div class="containers">
      <h2 class="ttl-secondary">ニチゴーGポリマー™の特徴</h2>
      <div class="lead">ニチゴーGポリマー™は生分解性・ガスバリア性・溶融成形性・水溶性を有するビニルアルコール系樹脂です。</div>
      <div class="scroll">
        <figure class="feature__img"><img src="<?php echo assets_path() ?>img/g-polymer/img-menu.png" alt="ニチゴーGポリマー™の特徴"></figure>
      </div>
      <div class="feature__btn taC">
        <div class="balloon"><span class="balloon__txt">ニチゴーGポリマー™の基本物性について<br>より詳しく知りたい方はこちら</span></div>
        <a href="<?php echo esc_url(home_url('/')); ?>technical/category/g-polymer/" class="txt-link"><span>技術情報を見る</span><img src="<?php echo assets_path() ?>img/common/bg-more.svg" alt="技術情報を見る"></a>
      </div>
    </div>
  </section>

  <section class="material">
    <div class="containers">
      <h2 class="ttl-secondary cW">ニチゴーG-ポリマー™製品カタログ・<br class="sp-only">安全データシート（SDS）</h2>
      <div class="flex aiC jcC gap30 desc">
        <figure class="desc__img" data-aos="fade-down-right"><img src="<?php echo assets_path() ?>img/common/img-wp-g-polymer.png" alt="ニチゴーG-ポリマー™"></figure>
        <summary class="desc__box">
          <div class="desc__box--ttl"><small>ブテンジオールビニルアルコールコポリマー（BVOH）</small><br>ニチゴーG-ポリマー™</div>
          <ul class="flex fS gap50 desc__box--list">
            <li>製品詳細カタログ</li>
            <li>安全データシート（SDS）</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/')); ?>catalog/g-polymer/" class="more cW"><span>カタログ・SDS一覧を見る</span></a>
        </summary>
      </div>
    </div>
    <div class="brand-circle-small"></div>
  </section>

  <section id="anchor02" class="product bg-LB">
    <div class="containers">
      <h2 class="ttl-secondary">ニチゴーGポリマー™の使用用途</h2>
      <div class="lead">ニチゴーGポリマーは、その高い機能性から<br class="sp-only">様々な製品開発シーンで活用されています。</div>
      <?php
      $slug = "g-polymer";
      $args = array(
        'post_type' => 'usage',
        'posts_per_page' => 10,
        'paged' => $paged,
        'has_password' => false,
        'post_status' => 'publish',
        'tax_query'  => array(
          'relation'  => 'AND',
          array(
            'taxonomy' => 'usage_category',
            'field' => 'slug',
            'terms' => array($slug),
            'operator' => 'IN',
          ),
        ),
      );
      // print_r($args);
      $my_query = new WP_Query($args);
      $max_page = $my_query->max_num_pages;
      if ($my_query->have_posts()) :
      ?>
        <div class="flex item">
          <?php
          while ($my_query->have_posts()) :
            $my_query->the_post();

          ?>
            <a href="<?php the_permalink(); ?>" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="200">
              <?php the_post_thumbnail(); ?>
              <span><?php the_title(); ?></span>
            </a>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
      <div class="product__btn taC"><a href="<?php echo esc_url(home_url('/')); ?>usage/" class="txt-link"><span>用途一覧を見る</span><img src="<?php echo assets_path() ?>img/common/bg-more.svg" alt="用途一覧を見る"></a></div>
    </div>
  </section>

  <section class="inquiry">
    <div class="containers">
      <h2 class="ttl-secondary cW">ニチゴーGポリマー™に関する<br>ご相談・お問合せは<br class="sp-only">お気軽にご連絡ください。</h2>
      <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="more"><span>ご相談・お見積り依頼はこちら</span></a>
      <summary class="flex aiC jcC gap30 inquiry__box">
        <div class="inquiry__box--ttl">製品カタログ・安全データシートを<br class="sp-only">ご希望の方はこちら</div>
        <a href="#" class="more-square"><span data-text="PDFダウンロード">PDFダウンロード</span></a>
      </summary>
    </div>
  </section>

</main>

<?php get_footer(); ?>