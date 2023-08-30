<?php get_header(); ?>

<main class="rad">

  <section class="hero-c core">
    <div class="containers">
      <div class="hero-c__box">
        <h1 class="ttl-primary" data-aos="fade" data-aos-delay="400">研究開発・<br class="sp-only">技術部門の皆様へ</h1>
        <div class="hero-c__box--lead">ご使用の用途に最適な機能性ポリビニルアルコールを<br class="pc-only">ご提供いたします</div>
        <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="more boder"><span>ご相談したい方はこちら</span></a>
      </div>
    </div>
  </section>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li>研究開発・技術部門の皆様へ</li>
      </ul>
    </div>
  </section>

  <section class="needs">
    <div class="containers">
      <div class="flex gap30 card">
        <a href="#usage" class="card__box core" data-aos="fade-down">
          <div class="card__box--txt">製品の<span>使用方法、特性</span>を知りたい方はこちら</div>
        </a>
        <a href="#applications" class="card__box core" data-aos="fade-up">
          <div class="card__box--txt">自社の<span>使用用途</span>に適した<br>機能性ポリビニルアルコールを探している方はこちら</div>
        </a>
      </div>
    </div>
  </section>

  <section id="usage" class="data">
    <div class="containers">
      <div class="ttl-tertiary">製品の使用方法、特性を知りたい方はこちら</div>
      <h2 class="ttl-secondary">各製品別技術情報</h2>
      <?php
      $termsparent = array();
      $termchildrens = array();
      $tax_name = 'technical_category'; //タクソノミー指定
      $term_slug = 'gohsenol'; //親タームslug指定
      $termsparent = get_terms($tax_name, array('slug' => $term_slug)); //親ターム情報取得
      if (!empty($termsparent)) {
        $termchildrens = get_terms($tax_name, array('parent' => $termsparent[0]->term_id)); //子ターム情報取得
      }
      ?>
      <?php if (!empty($termchildrens)) : ?>
        <summary class="card" data-aos="fade-up">
          <h3 class="card__ttl">ゴーセノール™の技術情報</h3>

          <ul class="flex jcC gap30 card__btn">
            <?php foreach ($termchildrens as $termchildren) :
              // print_r($termchildren); 
            ?>
              <li><a href="<?php echo esc_url(home_url('/')); ?>technical/category/gohsenol/#<?php echo $termchildren->slug; ?>" class="more-data"><?php echo $termchildren->name; ?></a></li>
            <?php endforeach; ?>
          </ul>
          <div class="taC"><a href="<?php echo esc_url(home_url('/')); ?>technical/category/gohsenol/" class="txt-link"><span>ゴーセノール™の技術情報一覧を見る</span><img src="<?php echo assets_path() ?>img/common/bg-more.svg" alt="ゴーセノール™の技術情報一覧を見る"></a></div>
        </summary>
      <?php endif; ?>
      <?php
      $termsparent = array();
      $termchildrens = array();
      $tax_name = 'technical_category'; //タクソノミー指定
      $term_slug = 'gohsenex'; //親タームslug指定
      $termsparent = get_terms($tax_name, array('slug' => $term_slug)); //親ターム情報取得if()
      if (!empty($termsparent)) {
        $termchildrens = get_terms($tax_name, array('parent' => $termsparent[0]->term_id)); //子ターム情報取得
      }
      ?>

      <?php if (!empty($termchildrens)) : ?>
        <summary class="card" data-aos="fade-up" data-aos-delay="200">
          <h3 class="card__ttl v2">ゴーセネックス™の技術情報</h3>
          <ul class="flex jcC gap30 card__btn">
            <?php foreach ((array)$termchildrens as $termchildren) :
              // print_r($termchildren); 
            ?>
              <li><a href="<?php echo esc_url(home_url('/')); ?>technical/category/gohsenex/#<?php echo $termchildren->slug; ?>" class="more-data"><?php echo $termchildren->name; ?></a></li>
            <?php endforeach; ?>
          </ul>
          <div class="taC"><a href="<?php echo esc_url(home_url('/')); ?>technical/category/gohsenex/" class="txt-link"><span>ゴーセネックス™の技術情報一覧を見る</span><img src="<?php echo assets_path() ?>img/common/bg-more.svg" alt="ゴーセネックス™の技術情報一覧を見る"></a></div>
        </summary>
      <?php endif; ?>
      <?php
      $termsparent = array();
      $termchildrens = array();
      $tax_name = 'technical_category'; //タクソノミー指定
      $term_slug = 'g-polymer'; //親タームslug指定
      $termsparent = get_terms($tax_name, array('slug' => $term_slug)); //親ターム情報取得if()
      if (!empty($termsparent)) {
        $termchildrens = get_terms($tax_name, array('parent' => $termsparent[0]->term_id)); //子ターム情報取得
      }
      ?>
      <?php if (!empty($termchildrens)) : ?>
        <summary class="card" data-aos="fade-up" data-aos-delay="300">
          <h3 class="card__ttl v3">ニチゴーGポリマー™の技術情報</h3>
          <ul class="flex jcC gap30 card__btn">
            <?php foreach ((array)$termchildrens as $termchildren) :
              // print_r($termchildren); 
            ?>
              <li><a href="<?php echo esc_url(home_url('/')); ?>technical/category/g-polymer/#<?php echo $termchildren->slug; ?>" class="more-data"><?php echo $termchildren->name; ?></a></li>
            <?php endforeach; ?>
          </ul>
          <div class="taC"><a href="<?php echo esc_url(home_url('/')); ?>technical/category/g-polymer/" class="txt-link"><span>ニチゴーGポリマー™の技術情報一覧を見る</span><img src="<?php echo assets_path() ?>img/common/bg-more.svg" alt="ニチゴーGポリマー™の技術情報一覧を見る"></a></div>
        </summary>
      <?php endif; ?>
    </div>
    <div class="brand-circle-medium"></div>
  </section>
  <?php
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
  $args = array(
    'posts_per_page'   => -1,
    'post_type'    => 'usage',
    'paged' => $paged,
    // 'order' => 'DESC',
    // 'orderby' => 'modified',
    'post_status' => 'publish',
  );
  $latest_query = new WP_Query($args);
  $exclude_ids = array();
  if ($latest_query->have_posts()) :
  ?>
    <section id="applications" class="product">
      <div class="containers">
        <div class="ttl-tertiary">自社の使用用途に適した<br>機能性ポリビニルアルコールを探している方はこちら</div>
        <h2 class="ttl-secondary">使用用途から探す</h2>
        <div class="flex item">
          <?php while ($latest_query->have_posts()) : $latest_query->the_post();
            $exclude_ids[] = get_the_ID();
            $post_id = get_the_ID();
            $post_terms = get_the_terms(get_the_ID(), 'column_category');
          ?>
            <a href="<?php the_permalink(); ?>" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="200" style="border-radius: 5px;">
              <?php the_post_thumbnail(); ?>
              <span><?php the_title(); ?></span>
            </a>
          <?php endwhile; ?>
          <!-- <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="200">
            <img src="<?php echo assets_path() ?>img/common/img-product01.jpg" alt="接着・バインダー">
            <span>接着・バインダー</span>
          </a>
          <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="300">
            <img src="<?php echo assets_path() ?>img/common/img-product02.jpg" alt="紙加工">
            <span>紙加工</span>
          </a>
          <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="400">
            <img src="<?php echo assets_path() ?>img/common/img-product03.jpg" alt="エマルジョン">
            <span>エマルジョン</span>
          </a>
          <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="500">
            <img src="<?php echo assets_path() ?>img/common/img-product04.jpg" alt="懸濁剤">
            <span>懸濁剤</span>
          </a>
          <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="600">
            <img src="<?php echo assets_path() ?>img/common/img-product05.jpg" alt="フィルム">
            <span>フィルム</span>
          </a>
          <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="700">
            <img src="<?php echo assets_path() ?>img/common/img-product06.jpg" alt="石油掘削">
            <span>石油掘削</span>
          </a>
          <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="800">
            <img src="<?php echo assets_path() ?>img/common/img-product07.jpg" alt="3Dプリンター">
            <span>3Dプリンター</span>
          </a>
          <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="900">
            <img src="<?php echo assets_path() ?>img/common/img-product08.jpg" alt="ガスバリア包材（溶融成型）">
            <span>ガスバリア包材<br>（溶融成型）</span>
          </a>
          <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="1000">
            <img src="<?php echo assets_path() ?>img/common/img-product09.jpg" alt="ガスバリア包材（コーティング）">
            <span>ガスバリア包材<br>（コーティング）</span>
          </a>
          <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="1100">
            <img src="<?php echo assets_path() ?>img/common/img-product10.jpg" alt="生分解性バリア包材">
            <span>生分解性<br>バリア包材</span>
          </a> -->
        </div>
      </div>
      <div class="brand-circle-medium"></div>
    </section>
  <?php endif; ?>
  <?php
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
  $args = array(
    'posts_per_page'   => 3,
    'post_type'    => 'catalog',
    'paged' => $paged,
    'order' => 'DESC',
    'orderby' => 'modified',
    'post_status' => 'publish',
  );
  $latest_query = new WP_Query($args);
  $exclude_ids = array();
  if ($latest_query->have_posts()) :
  ?>
    <section class="card-type1">
      <div class="containers">
        <h2 class="ttl-secondary">製品カタログ・<br class="sp-only">安全データシート（SDS）</h2>
        <ul class="flex gap30 card">
          <?php while ($latest_query->have_posts()) : $latest_query->the_post();
            $exclude_ids[] = get_the_ID();
            $post_id = get_the_ID();
            $post_terms = get_the_terms(get_the_ID(), 'column_category');
          ?>
            <li class="card__box" data-aos="fade-up" data-aos-delay="200">
              <div class="card__box--sub cB"><?php echo CFS()->get('sub_title'); ?></div>
              <h3 class="card__box--ttl"><?php the_title(); ?></h3>
              <figure class="card__box--img"><?php the_post_thumbnail(); ?></figure>
              <a href="<?php the_permalink(); ?>" class="more-dl">PDFダウンロード</a>
            </li>
          <?php endwhile; ?>
          <!-- <li class="card__box" data-aos="fade-up" data-aos-delay="200">
            <div class="card__box--sub cB">ポリビニルアルコール（PVOH）</div>
            <h3 class="card__box--ttl">ゴーセノール™</h3>
            <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/common/img-catalog01.png" alt="ゴーセノール™"></figure>
            <a href="#" class="more-dl">PDFダウンロード</a>
          </li>
          <li class="card__box" data-aos="fade-up" data-aos-delay="400">
            <div class="card__box--sub cLB">特殊変性ポリビニルアルコール（PVOH）</div>
            <h3 class="card__box--ttl">ゴーセネックス™</h3>
            <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/common/img-catalog01.png" alt="ゴーセネックス™"></figure>
            <a href="#" class="more-dl">PDFダウンロード</a>
          </li>
          <li class="card__box" data-aos="fade-up" data-aos-delay="600">
            <div class="card__box--sub cG">ブテンジオールビニルアルコール<br>コポリマー（BVOH）</div>
            <h3 class="card__box--ttl">ニチゴーG-ポリマー™</h3>
            <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/common/img-catalog01.png" alt="ニチゴーG-ポリマー™"></figure>
            <a href="#" class="more-dl">PDFダウンロード</a>
          </li> -->
        </ul>
        <div class="taC"><a href="<?php echo esc_url(home_url('/')); ?>catalog/" class="txt-link"><span>一覧を見る</span><img src="<?php echo assets_path() ?>img/common/bg-more.svg" alt="一覧を見る"></a></div>
      </div>
    </section>
  <?php endif; ?>
  <section class="inquiry">
    <div class="containers">
      <h2 class="ttl-secondary cW">貴社の使用用途や<br class="sp-only">開発したい性能に合わせて<br>最適な機能性ポリビニル<br class="sp-only">アルコール製品をご提案します！</h2>
      <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="more"><span>ご相談・お見積り依頼はこちら</span></a>
      <summary class="flex aiC jcC gap30 inquiry__box">
        <div class="inquiry__box--ttl">製品カタログ・安全データシートを<br class="sp-only">ご希望の方はこちら</div>
        <a href="<?php echo esc_url(home_url('/')); ?>catalog/" class="more-square"><span data-text="製品カタログダウンロード">製品カタログダウンロード</span></a>
      </summary>
    </div>
  </section>

</main>

<?php get_footer(); ?>