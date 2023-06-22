<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php esc_html(bloginfo('charset')); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="keywords" content="">
<!-- <meta name="description" content="<?php bloginfo('description'); ?>"> -->
<meta name="author" content="">
<title><?php wp_title('|', true, 'right'); ?></title>
<meta name="format-detection" content="telephone=no">

<!-- Web font -->
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

<!-- Style sheet -->
<link rel="stylesheet" href="<?php echo assets_path() ?>css/main.css">
<?php wp_head(); ?>

</head>

<?php if (!empty($class)) : ?>
  <body <?php body_class($class); ?>>
<?php else : ?>
  <body <?php body_class(); ?>>
<?php endif; ?>

  <header>
  <div class="in">
    <aside class="flex aiC inherit">
      <div class="in__logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo assets_path() ?>img/common/logo.svg" alt="三菱ケミカル株式会社"></a></div>
      <div class="nav-wrap">
        <nav class="in__nav flex jcE gap20 aiC pc-only">
          <ul class="flex jcE gap30 aiC language">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="language__link current">JA</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>en/" class="language__link">EN</a></li>
          </ul>
          <form method="get" action="" class="header-search">
            <input name="s" class="header-search__input" type="search">
            <input type="hidden" name="post_type" value="column">
            <button accesskey="f" class="header-search__btn" type="submit"><img src="<?php echo assets_path() ?>img/common/icon-search.svg"></button>
          </form>
          <ul class="flex jcE aiC aside">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/" class="aside__link"><span data-text="製品カタログ">製品カタログ</span></a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="aside__link"><span data-text="ご相談・お見積り依頼">ご相談・お見積り依頼</span></a></li>
          </ul>
        </nav>
        <nav class="nav-list pc-only">
          <ul class="flex jcE gap50 nav-list-box">
      
            <li class="parent">
              <a href="#" class="arrow disabled">製品情報</a>
              <div class="mega flex pull">
                <div class="mega__menu">
                  <div class="mega__menu--ttl">製品情報</div>
                  <div class="mega__child">
                    <ul class="mega__child--list">
                      <li class="flex aifS nav-link">
                        <a href="#" class="ttl-link disabled">ゴーセノール™</a>
                        <ul class="flex child-link">
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>gohsenol/">製品概要・特長</a></li>
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>usage/gohsenol/">使用用途</a></li>
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>gohsenol/grades/">品種一覧（一般銘柄）</a></li>
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/gohsenol/">安全データシート（SDS）</a></li>
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>technical/gosenol/">技術情報</a></li>
                        </ul>
                      </li>
                      <li class="flex aifS nav-link">
                        <a href="#" class="ttl-link disabled">ゴーセネックス™</a>
                        <ul class="flex child-link">
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>gohsenex/">製品概要・特長</a></li>
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>usage/gohsenex/">使用用途</a></li>
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>gohsenex/grades/">品種一覧（一般銘柄）</a></li>
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/gohsenex/">安全データシート（SDS）</a></li>
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>technical/gohsenex/">技術情報</a></li>
                        </ul>
                      </li>
                      <li class="flex aifS nav-link">
                        <a href="#" class="ttl-link disabled">ニチゴーG-ポリマー™</a>
                        <ul class="flex child-link">
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>g-polymer/">製品概要・特長</a></li>
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>usage/g-polymer/">使用用途</a></li>
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>g-polymer/grades/">品種一覧（一般銘柄）</a></li>
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/g-polymer/">安全データシート（SDS）</a></li>
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>technical/g-polymer/">技術情報</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="mega__info core">
                  <div class="mega__info--ttl">機能性ポリビニルアルコールに関する<br>ご相談・お問合せは<br>お気軽にご連絡下さい。</div>
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="more-square"><span data-text="ご相談・お見積り依頼">ご相談・お見積り依頼</span></a>
                </div>
              </div>
            </li>
      
            <li class="parent">
              <a href="#" class="arrow disabled">サービスとサポート</a>
              <div class="mega flex pull">
                <div class="mega__menu">
                  <div class="mega__menu--ttl">サービスとサポート</div>
                  <div class="mega__child">
                    <ul class="mega__child--list">
                      <li class="flex aifS nav-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>research_and_development/" class="ttl-link">研究開発者・<br>技術部門の方向け</a></li>
                      <li class="flex aifS nav-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>trading/" class="ttl-link">総合商社・<br>化学専門商社の方向け</a></li>
                      <li class="flex aifS nav-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>manufacturer/" class="ttl-link">メーカー企画・<br>購買部門の方向け</a></li>
                    </ul>
                  </div>
                </div>
                <div class="mega__info core">
                  <div class="mega__info--ttl">機能性ポリビニルアルコールに関する<br>ご相談・お問合せは<br>お気軽にご連絡下さい。</div>
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="more-square"><span data-text="ご相談・お見積り依頼">ご相談・お見積り依頼</span></a>
                </div>
              </div>
            </li>

            <li class="parent">
              <a href="#" class="arrow disabled">使用用途</a>
              <div class="mega flex pull">
                <div class="mega__menu">
                  <div class="mega__menu--ttl">使用用途</div>
                  <div class="mega__child">
                    <ul class="mega__child--list">
                      <li class="flex aifS nav-link">
                        <a href="#" class="ttl-link disabled">ゴーセノール™</a>
                        <ul class="flex aifS child-link">
                          <li><a href="">接着・バインダー</a></li>
                          <li><a href="">懸濁剤</a></li>
                          <li><a href="">紙加工</a></li>
                          <li><a href="">フィルム</a></li>
                          <li><a href="">エマルジョン</a></li>
                        </ul>
                      </li>
                      <li class="flex aifS nav-link">
                        <a href="#" class="ttl-link disabled">ゴーセネックス™</a>
                        <ul class="flex aifS child-link">
                          <li><a href="">接着・バインダー</a></li>
                          <li><a href="">フィルム</a></li>
                          <li><a href="">紙加工</a></li>
                          <li><a href="">石油掘削</a></li>
                          <li><a href="">エマルジョン</a></li>
                        </ul>
                      </li>
                      <li class="flex aifS nav-link">
                        <a href="#" class="ttl-link disabled">ニチゴーG-ポリマー™</a>
                        <ul class="flex aifS child-link">
                          <li><a href="">接着・バインダー</a></li>
                          <li><a href="">ガスバリア包材（溶融成型）</a></li>
                          <li><a href="">エマルジョン</a></li>
                          <li><a href="">ガスバリア包材（コーティング）</a></li>
                          <li><a href="">石油掘削</a></li>
                          <li><a href="">生分解性バリア包材</a></li>
                          <li><a href="">3Dプリンター</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="mega__info core">
                  <div class="mega__info--ttl">機能性ポリビニルアルコールに関する<br>ご相談・お問合せは<br>お気軽にご連絡下さい。</div>
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="more-square"><span data-text="ご相談・お見積り依頼">ご相談・お見積り依頼</span></a>
                </div>
              </div>
            </li>

            <li class="parent">
              <a href="#" class="arrow disabled">技術・お役立ち情報</a>
              <div class="mega flex pull">
                <div class="mega__menu">
                  <div class="mega__menu--ttl">技術・お役立ち情報</div>
                  <div class="mega__child">
                    <ul class="mega__child--list">
                      <li class="flex aifS nav-link">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>technical/" class="ttl-link">技術情報</a>
                        <ul class="flex aifS child-link">
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>technical/gosenol/">ゴーセノール™</a></li>
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>technical/gohsenex/">ニチゴーG-ポリマー™</a></li>
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>technical/g-polymer/">ゴーセネックス™</a></li>
                        </ul>
                      </li>
                      <li class="flex aifS nav-link">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/" class="ttl-link">お役立ち情報</a>
                        <ul class="flex aifS child-link">
                          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>knowledge/">基礎知識・用語解説</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="mega__info core">
                  <div class="mega__info--ttl">機能性ポリビニルアルコールに関する<br>ご相談・お問合せは<br>お気軽にご連絡下さい。</div>
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="more-square"><span data-text="ご相談・お見積り依頼">ご相談・お見積り依頼</span></a>
                </div>
              </div>
            </li>
      
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/" class="link">ニュース</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/" class="link">企業情報</a></li>
            <li><a href="#" class="link">販売拠点</a></li>
          </ul>
        </nav>
      </div>
      <div id="nav-toggle" class="sp-only">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </aside>
  </div>
  

  <div id="gloval-nav" class="sp-only">
    <form method="get" action="" class="header-search">
      <input name="s" class="header-search__input" type="search" placeholder="サイト内検索">
      <input type="hidden" name="post_type" value="column">
      <button accesskey="f" class="header-search__btn" type="submit"><img src="<?php echo assets_path() ?>img/common/icon-search.svg"></button>
    </form>
    <ul class="wrap">

      <li class="list">
        <div class="list__ttl accordion">製品情報</div>
        <div class="list__wrap">
          <div class="list__pull">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>gohsenol/" class="list__pull--parent arrow">ゴーセノール™</a>
            <ul class="flex inherit list__pull--box">
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>gohsenol/">製品概要・特長</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>usage/gohsenol/">使用用途</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>gohsenol/grades/">品種一覧（一般銘柄）</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/gohsenol/">安全データシート（SDS）</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>technical/gosenol/">技術情報</a></li>
            </ul>
          </div>
          <div class="list__pull">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>gohsenex/" class="list__pull--parent arrow">ゴーセネックス™</a>
            <ul class="flex inherit list__pull--box">
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>gohsenex/">製品概要・特長</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>usage/gohsenex/">使用用途</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>gohsenex/grades/">品種一覧（一般銘柄）</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/gohsenex/">安全データシート（SDS）</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>technical/gohsenex/">技術情報</a></li>
            </ul>
          </div>
          <div class="list__pull">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>g-polymer/" class="list__pull--parent arrow">ニチゴーG-ポリマー™</a>
            <ul class="flex inherit list__pull--box">
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>g-polymer/">製品概要・特長</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>usage/g-polymer/">使用用途</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>g-polymer/grades/">品種一覧（一般銘柄）</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/g-polymer/">安全データシート（SDS）</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>technical/g-polymer/">技術情報</a></li>
            </ul>
          </div>
        </div>
      </li>

      <li class="list">
        <div class="list__ttl accordion">サービスとサポート</div>
        <div class="list__wrap">
          <div class="list__pull">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>research_and_development/" class="list__pull--parent arrow">研究開発者・技術部門の方向け</a>
          </div>
          <div class="list__pull">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>trading/" class="list__pull--parent arrow">総合商社・化学専門商社の方向け</a>
          </div>
          <div class="list__pull">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>manufacturer/" class="list__pull--parent arrow">メーカー企画・購買部門の方向け</a>
          </div>
        </div>
      </li>

      <li class="list">
        <div class="list__ttl accordion">使用用途</div>
        <div class="list__wrap">
          <div class="list__pull">
            <div class="list__pull--parent">ゴーセノール™</div>
            <ul class="flex inherit list__pull--box">
              <li><a href="">接着・バインダー</a></li>
              <li><a href="">懸濁剤</a></li>
              <li><a href="">紙加工</a></li>
              <li><a href="">フィルム</a></li>
              <li><a href="">エマルジョン</a></li>
            </ul>
          </div>
          <div class="list__pull">
            <div class="list__pull--parent">ゴーセネックス™</div>
            <ul class="flex inherit list__pull--box">
              <li><a href="">接着・バインダー</a></li>
              <li><a href="">フィルム</a></li>
              <li><a href="">紙加工</a></li>
              <li><a href="">石油掘削</a></li>
              <li><a href="">エマルジョン</a></li>
            </ul>
          </div>
          <div class="list__pull">
            <div class="list__pull--parent">ニチゴーG-ポリマー™</div>
            <ul class="flex inherit list__pull--box">
              <li><a href="">接着・バインダー</a></li>
              <li><a href="">ガスバリア包材<br>（溶融成型）</a></li>
              <li><a href="">エマルジョン</a></li>
              <li><a href="">ガスバリア包材<br>（コーティング）</a></li>
              <li><a href="">石油掘削</a></li>
              <li><a href="">生分解性バリア包材</a></li>
              <li><a href="">3Dプリンター</a></li>
            </ul>
          </div>
        </div>
      </li>

      <li class="list">
        <div class="list__ttl accordion">技術・お役立ち情報</div>
        <div class="list__wrap">
          <div class="list__pull">
            <a href="" class="list__pull--parent arrow">技術情報</a>
            <ul class="flex inherit list__pull--box">
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>technical/gosenol/">ゴーセノール™</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>technical/g-polymer/">ニチゴーG-ポリマー™</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>technical/gohsenex/">ゴーセネックス™</a></li>
            </ul>
          </div>
          <div class="list__pull">
            <a href="" class="list__pull--parent arrow">お役立ち情報</a>
            <ul class="flex inherit list__pull--box">
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>knowledge/">基礎知識・用語解説</a></li>
            </ul>
          </div>
        </div>
      </li>

      <li class="list"><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/" class="list__ttl arrow">ニュース</a></li>
      <li class="list"><a href="#" class="list__ttl arrow">企業情報</a></li>
      <li class="list"><a href="#" class="list__ttl arrow">販売拠点</a></li>
    </ul>
    <div class="aside">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/" class="aside__btn">製品カタログ</a>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="aside__btn">ご相談・お見積り依頼</a>
    </div>
    <div class="flex jcA language">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="current">JAPANESE</a>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>en/" class="">ENGLISH</a>
    </div>
  </div>
</header>
  