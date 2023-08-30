<?php

/**
 * Template Name: 【銘柄一覧】ニチゴーGポリマー
 */
// グレード一覧表の取得
// $n_a_pvoh_arr = CFS()->get('n_a_pvoh');
// $n_a_pvoh_cnt = count($n_a_pvoh_arr);
// $g_pvoh_arr = CFS()->get('g_pvoh');
// $g_pvoh_cnt = count($g_pvoh_arr);
// $k_pvoh_arr = CFS()->get('k_pvoh');
// $k_pvoh_cnt = count($k_pvoh_arr);
// $list_lower_comment_arr = CFS()->get('list_lower_comment');
?>
<?php get_header(); ?>

<main class="arc-brand-g-polymer">

  <section class="hero-d core">
    <div class="containers">
      <div class="hero-d__box">
        <div class="hero-d__box--had"><span>銘柄一覧</span></div>
        <h1 class="ttl-primary">ニチゴーGポリマー™</h1>
        <div class="hero-d__box--lead">ニチゴーGポリマー™の銘柄をご紹介します。</div>
      </div>
    </div>
  </section>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>g-polymer/">ニチゴーGポリマー™</a></li>
        <li>銘柄一覧</li>
      </ul>
    </div>
  </section>

  <section class="grade">
    <div class="containers">
      <h2 class="ttl-secondary">ニチゴーGポリマー™のタイプ</h2>
      <div class="lead">ご使用の用途に合わせて以下の2タイプからお選びいただけます。</div>
      <?php
      $slug = "g-polymer";
      $args = array(
        'post_type' => 'grades',
        'posts_per_page' => 2,
        'paged' => $paged,
        'has_password' => false,
        'tax_query'  => array(
          'relation'  => 'AND',
          array(
            'taxonomy' => 'grades_category',
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
        <div class="flex jcC gap30 card">

          <?php
          while ($my_query->have_posts()) :
            $my_query->the_post();

          ?>
            <div class="card__box">
              <h3 class="card__box--ttl"><span><?php the_title(); ?></span></h3>
              <figure class="card__box--img"><?php the_post_thumbnail(); ?></figure>
              <div class="taC"><a href="<?php the_permalink(); ?>" class="txt-link"><span>詳細を読む</span><img src="<?php echo assets_path() ?>img/common/bg-more.svg" alt="詳細を読む"></a></div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <!-- <section class="">
    <div class="containers">
      <h2 class="ttl-secondary">ニチゴーGポリマー™のグレード一覧表</h2>
      <div class="grade-menu">
        <div class="scroll">
          <table>
            <colgroup>
              <col>
              <col>
              <col>
              <col>
            </colgroup>
            <tbody>
              <tr>
                <th>分類</th>
                <th>品種</th>
                <th>ケン化品（mol %）</th>
                <th>粘度（mPa・s）</th>
              </tr>
              <tr>
                <td rowspan="2">N型・A型PVOH<br><small>（完全、準完全ケン化型）</small></td>
                <td>N-300</td>
                <td>98.0~99.0</td>
                <td>25.0~30.0</td>
              </tr>
              <tr>
                <td>NL-05</td>
                <td>98.5以上</td>
                <td>4.6~6.0</td>
              </tr>
              <tr>
                <td rowspan="5">G型PVOH<br><small>（部分ケン化型）</small></td>
                <td>GH-20R</td>
                <td>86.5~89.0</td>
                <td>40.0~46.0</td>
              </tr>
              <tr>
                <td>GH-17R</td>
                <td>86.5~89.0</td>
                <td>27.0~33.0</td>
              </tr>
              <tr>
                <td>GH-14R</td>
                <td>86.5~89.0</td>
                <td>20.0~24.5</td>
              </tr>
              <tr>
                <td>GL-05</td>
                <td>86.5~89.0</td>
                <td>4.8~5.8</td>
              </tr>
              <tr>
                <td>GL-03</td>
                <td>86.5~89.0</td>
                <td>3.0~3.7</td>
              </tr>
              <tr>
                <td rowspan="5">K型PVOH<br><small>（部分ケン化型）</small></td>
                <td>KH-20</td>
                <td>78.5~81.5</td>
                <td>44.0~52.0</td>
              </tr>
              <tr>
                <td>KH-17</td>
                <td>78.5~81.5</td>
                <td>32.0~38.0</td>
              </tr>
              <tr>
                <td>KH-05</td>
                <td>78.5~82.0</td>
                <td>4.0~5.0</td>
              </tr>
              <tr>
                <td>KH-03</td>
                <td>78.5~82.0</td>
                <td>2.8~3.4</td>
              </tr>
              <tr>
                <td>NK-05R</td>
                <td>71.0~75.0</td>
                <td>4.5~5.5</td>
              </tr>
            </tbody>
          </table>
        </div>
        <ul class="note">
          <li>※揮発分は製品包装時保証で、5%以下です。</li>
          <li>※pHは4%水溶液､30℃において5~7です。</li>
          <li>※ゴーセノール™の試験方法はJIS K 6726（ポリビニルアルコール試験方法）に準拠しています。</li>
          <li>※粘度：4%水溶液、20℃</li>
        </ul>
      </div>

    </div>
  </section> -->

  <section class="product bg-LB">
    <div class="containers">
      <h2 class="ttl-secondary">ニチゴーGポリマー™の使用用途</h2>
      <div class="lead">ニチゴーG-ポリマー™は、その高い機能性から様々な製品開発シーンで活用されています。</div>
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
      <div class="taC"><a href="<?php echo esc_url(home_url('/')); ?>usage/" class="txt-link"><span>用途一覧を見る</span><img src="<?php echo assets_path() ?>img/common/bg-more.svg" alt="用途一覧を見る"></a></div>
    </div>
  </section>

</main>

<?php get_footer(); ?>