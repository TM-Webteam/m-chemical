<?php
$post_id = get_the_ID();
$post_terms = get_the_terms($post_id, 'news_category');
$title = get_the_title();
$lead = get_post_meta($post_id, "lead", true);
$comment = get_post_meta($post_id, "comment", true);
$paragraph_arr = get_post_meta($post_id, "paragraph", false);
$paragraph_arr = CFS()->get('paragraph');
$relation_catalog_arr = CFS()->get('relation_catalog');
$relation_usage_arr = CFS()->get('relation_usage');
?>
<?php get_header(); ?>

<main class="sng-usage">

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>usage/">使用用途</a></li>
        <li><?php echo $title; ?></li>
      </ul>
    </div>
  </section>

  <section class="">
    <div class="containers flex">

      <!-- 投稿記事詳細メイン -->
      <article class="main-conts single">

        <h1 class="single__h1"><?php echo $title; ?></h1>

        <div class="single__lead"><?php echo $lead; ?></div>


        <div class="single__toc">
          <div class="single__toc--ttl">目次</div>
          <dl>
            <?php
            $i = 0;
            ?>
            <?php if ($paragraph_arr) : foreach ($paragraph_arr as $paragraph) :
                $i++;
                $i2 = 0;
            ?>
                <dt><a href="#toc<?php echo $i ?>"><?php echo esc_html(strip_tags($paragraph['title'])) ?></a></dt>
                <?php if ($paragraph['caption']) : ?>
                  <dd>
                    <ul>
                      <?php foreach ((array)$paragraph['caption'] as $caption) :
                        $i2++;
                        if (!empty($caption['caption_title'])) :
                      ?>
                          <li><a href="#toc<?php echo $i ?>-<?php echo $i2 ?>"><?php echo esc_html(strip_tags($caption['caption_title'])) ?></a></li>
                      <?php
                        endif;
                      endforeach; ?>
                    </ul>
                  </dd>
                <?php endif; ?>
            <?php endforeach;
            endif; ?>
          </dl>
        </div>

        <?php
        $i = 0;
        if ($paragraph_arr) : foreach ($paragraph_arr as $paragraph) :
            $i++;
            $i2 = 0;
        ?>
            <h2 id="toc<?php echo $i; ?>" class="single__h2"><?php echo $paragraph['title'] ?></h2>
            <div class="single__txt">
              <?php echo $paragraph['comment'] ?>
            </div>
            <?php foreach ((array)$paragraph['caption'] as $caption) :
              $i2++;
            ?>
              <h3 id="toc<?php echo $i; ?>-<?php echo $i2 ?>" class="single__h3"><?php echo $caption['caption_title'] ?></h3>
              <div class="single__txt">
                <?php echo wp_kses_post($caption['caption_comment']) ?>
              </div>
            <?php endforeach ?>
        <?php endforeach;
        endif; ?>

        <?php get_template_part('parts/content', 'catalog'); ?>
        <?php get_template_part('parts/content', 'usage'); ?>


      </article>

      <!-- サイドメニュー -->
      <aside class="side-nav">

        <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="bnr-contact"><img src="<?php echo assets_path() ?>img/common/bnr-contact.png" alt=""></a>

        <a href="<?php echo esc_url(home_url('/')); ?>catalog/" class="bnr-catalog"><img src="<?php echo assets_path() ?>img/common/bnr-catalog.png" alt=""></a>

        <!-- <div class="search">
          <form action="" class="search__form">
            <input class="search__input" type="search" placeholder="キーワードから探す">
            <button class="search__btn" type="submit"><img src="<?php echo assets_path() ?>img/common/icon-search-g.svg"></button>
          </form>
        </div> -->

        <div class="blogList">
          <h3 class="ttl-tertiary">よく読まれているコラム</h3>
          <a href="#" class="flex aiC inherit item">
            <div class="item__img"><img src="<?php echo assets_path() ?>img/common/img-blog01.jpg" alt=""></div>
            <div class="item__ttl">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</div>
          </a>
          <a href="#" class="flex aiC inherit item">
            <div class="item__img"><img src="<?php echo assets_path() ?>img/common/img-blog01.jpg" alt=""></div>
            <div class="item__ttl">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</div>
          </a>
          <a href="#" class="flex aiC inherit item">
            <div class="item__img"><img src="<?php echo assets_path() ?>img/common/img-blog01.jpg" alt=""></div>
            <div class="item__ttl">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</div>
          </a>
          <a href="#" class="flex aiC inherit item">
            <div class="item__img"><img src="<?php echo assets_path() ?>img/common/img-blog01.jpg" alt=""></div>
            <div class="item__ttl">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</div>
          </a>
          <a href="#" class="flex aiC inherit item">
            <div class="item__img"><img src="<?php echo assets_path() ?>img/common/img-blog01.jpg" alt=""></div>
            <div class="item__ttl">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</div>
          </a>
        </div>

      </aside>

    </div>
  </section>

</main>

<?php get_footer(); ?>