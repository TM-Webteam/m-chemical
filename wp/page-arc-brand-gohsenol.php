<?php

/**
 * Template Name: 【銘柄一覧】ゴーセノール
 */
// グレード一覧表の取得
$n_a_pvoh_arr = CFS()->get('n_a_pvoh');
$n_a_pvoh_cnt = count($n_a_pvoh_arr);
$g_pvoh_arr = CFS()->get('g_pvoh');
$g_pvoh_cnt = count($g_pvoh_arr);
$k_pvoh_arr = CFS()->get('k_pvoh');
$k_pvoh_cnt = count($k_pvoh_arr);
$list_lower_comment_arr = CFS()->get('list_lower_comment');
?>
<?php get_header(); ?>

<main class="arc-brand-gohsenol">

  <section class="hero-d core">
    <div class="containers">
      <div class="hero-d__box">
        <div class="hero-d__box--had"><span>銘柄一覧</span></div>
        <h1 class="ttl-primary">ゴーセノール™</h1>
        <div class="hero-d__box--lead">ゴーセノール™の銘柄をご紹介します。</div>
      </div>
    </div>
  </section>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>gohsenol/">ゴーセノール™</a></li>
        <li>銘柄一覧</li>
      </ul>
    </div>
  </section>

  <section class="grade">
    <div class="containers">
      <h2 class="ttl-secondary">ゴーセノール™の銘柄</h2>
      <?php
      $slug = "gohsenol";
      $args = array(
        'post_type' => 'grades',
        'posts_per_page' => 10,
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
        <ul class="flex grade__btn">
          <?php
          while ($my_query->have_posts()) :
            $my_query->the_post();

          ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </div>
  </section>

  <section class="">
    <div class="containers">
      <h2 class="ttl-secondary">ゴーセノール™のグレード一覧表</h2>
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
              <?php if (!empty($n_a_pvoh_cnt)) : ?>
                <?php
                $cnt = 0;
                foreach ($n_a_pvoh_arr as $val) :
                  $cnt++;
                ?>
                  <tr>
                    <?php if ($cnt == 1) : ?>
                      <td rowspan="<?php echo $n_a_pvoh_cnt; ?>">N型・A型PVOH<br><small>（完全、準完全ケン化型）</small></td>
                    <?php endif; ?>
                    <td><?php echo $val['breed']; ?></td>
                    <td><?php echo $val['saponification']; ?></td>
                    <td><?php echo $val['viscosity']; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
              <?php if (!empty($g_pvoh_arr)) : ?>
                <?php
                $cnt = 0;
                foreach ($g_pvoh_arr as $val) :
                  $cnt++;
                ?>
                  <tr>
                    <?php if ($cnt == 1) : ?>
                      <td rowspan="<?php echo $g_pvoh_cnt; ?>">G型PVOH<br><small>（部分ケン化型）</small></td>
                    <?php endif; ?>
                    <td><?php echo $val['breed']; ?></td>
                    <td><?php echo $val['saponification']; ?></td>
                    <td><?php echo $val['viscosity']; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
              <?php if (!empty($k_pvoh_arr)) : ?>
                <?php
                $cnt = 0;
                foreach ($k_pvoh_arr as $val) :
                  $cnt++;
                ?>
                  <tr>
                    <?php if ($cnt == 1) : ?>
                      <td rowspan="<?php echo $k_pvoh_cnt; ?>">K型PVOH<br><small>（部分ケン化型）</small></td>
                    <?php endif; ?>
                    <td><?php echo $val['breed']; ?></td>
                    <td><?php echo $val['saponification']; ?></td>
                    <td><?php echo $val['viscosity']; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
        <?php if (!empty($list_lower_comment_arr)) : ?>
          <ul class="note">
            <?php foreach ($list_lower_comment_arr as $val) : ?>
              <li><?php echo $val['comment']; ?></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>

    </div>
  </section>

  <section class="product bg-LB">
    <div class="containers">
      <h2 class="ttl-secondary">ゴーセノール™の使用用途</h2>
      <div class="lead">ゴーセノール™は、その高い機能性から様々な製品開発シーンで活用されています。</div>

      <?php
      $slug = "gohsenol";
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