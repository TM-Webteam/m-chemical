<?php get_header(); ?>
<style>
  .grade-menu table th {
    font-size: 14px;
    font-weight: 700;
    text-align: center;
    background: #005bac;
    color: #fff;
    width: 30%;
  }
</style>
<main class="company">

  <section class="hero-d core">
    <div class="containers">
      <div class="hero-d__box">
        <h1 class="ttl-primary cW">企業情報</h1>
      </div>
    </div>
  </section>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li>企業情報</li>
      </ul>
    </div>
  </section>

  <section class="summary">

    <div class="containers">
      <div class="grade-menu">
        <div class="scroll">
          <table>

            <tbody>
              <tr>
                <th scope="row">会社名</th>
                <td>三菱ケミカル株式会社</td>
              </tr>
              <tr>
                <th scope="row">会社名（英語）</th>
                <td>Mitsubishi Chemical Corporation</td>
              </tr>
              <tr>
                <th scope="row">本店所在地</th>
                <td>〒100-8251<br>東京都千代田区丸の内1-1-1　パレスビル</td>
              </tr>
              <tr>
                <th scope="row">代表者</th>
                <td>代表取締役　江口 幸治<br>代表取締役　筑本 学</td>
              </tr>
              <tr>
                <th scope="row">創業</th>
                <td>1933年8月31日</td>
              </tr>
              <tr>
                <th scope="row">発足</th>
                <td>2017年4月1日</td>
              </tr>
              <tr>
                <th scope="row">資本金</th>
                <td>532億2900万円</td>
              </tr>
              <tr>
                <th scope="row">事業内容</th>
                <td>機能商品、素材他</td>
              </tr>
              <tr>
                <th scope="row">従業員数</th>
                <td>連結42,127名、単独13,100人（2023年3月31日現在）</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>