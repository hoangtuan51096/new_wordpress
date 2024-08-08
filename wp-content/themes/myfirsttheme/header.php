<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/basic.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/product.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/accordion.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/border.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/navi.js"></script> 
  <!--swiper--> 
    
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/swiper.min.css">
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <link href="http://fonts.googleapis.com/earlyaccess/notosansjp.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script> 

    <?php wp_head(); ?>
    <?php 
        $listHeaders = [
            [
                "link" => "https://www.seikosha-net.co.jp/products/rafos_physio/",
                "img" => "/img/slide/black_rafos.jpg",
                "img_sp" => "/img/slide/black_rafos_sp.jpg",
                "alt" => "黒ラフォス登場！",
                "alt_sp" => "黒ラフォス登場！",
            ],
            [
                "link" => "",
                "img" => "/img/slide/2023newproducts_01.jpg",
                "img_sp" => "/img/slide/bwj2023t_sp.jpg",
                "alt" => "RAFOS新シリーズ3機種発売！",
                "alt_sp" => "BWJ2023 TOKYO",
            ],
            [
                "link" => "https://www.seikosha-net.co.jp/products/melatite/",
                "img" => "/img/slide/melatite.jpg",
                "img_sp" => "/img/slide/melatite_sp.jpg",
                "alt" => "ESTHELUX＆MELATITE発売！",
                "alt_sp" => "ESTHELUX＆MELATITE発売！",
            ],
            [
                "link" => "https://www.seikosha-net.co.jp/products/rafos/",
                "img" => "/img/slide/bestitem_pc.jpg",
                "img_sp" => "/img/slide/bestitem_sp.jpg",
                "alt" => "BEST ITEM",
                "alt_sp" => "BEST ITEM",
            ],
            [
                "link" => "https://www.seikosha-net.co.jp/products/famubo-cs/",
                "img" => "/img/slide/slide_pc_famubo-cs_physio.jpg",
                "img_sp" => "/img/slide/slide_sp_famubo-cs_physio.jpg",
                "alt" => "FAMUBO-CS",
                "alt_sp" => "FAMUBO-CS",
            ],
            [
                "link" => "https://www.seikosha-net.co.jp/products/bfi_famubo/",
                "img" => "/img/slide/07.jpg",
                "img_sp" => "/img/slide/07_sp.jpg",
                "alt" => "BFI FAMUBO",
                "alt_sp" => "BFI FAMUBO",
            ],
            [
                "link" => "https://www.seikosha-net.co.jp/products/famubo-cs/",
                "img" => "/img/slide/famubo_cs.jpg",
                "img_sp" => "/img/slide/famubo_cs.jpg",
                "alt" => "FAMUBO-CS",
                "alt_sp" => "FAMUBO-CS",
            ],
            [
                "link" => "https://www.seikosha-net.co.jp/lp/RafosTera/",
                "img" => "/img/slide/11.jpg",
                "img_sp" => "/img/slide/11_sp.jpg",
                "alt" => "ダヴィンチ高周波RAFOS TERA",
                "alt_sp" => "ダヴィンチ高周波RAFOS TERA",
            ],
            [
                "link" => "https://www.seikosha-net.co.jp/essence/stem_cells.html/",
                "img" => "/img/slide/12.jpg",
                "img_sp" => "/img/slide/12_sp.jpg",
                "alt" => "ヒト幹細胞培養液",
                "alt_sp" => "ヒト幹細胞培養液",
            ],
            [
                "link" => "https://www.seikosha-net.co.jp/products/sonocare/",
                "img" => "/img/slide/02.jpg",
                "img_sp" => "/img/slide/02_sp.jpg",
                "alt" => "ソノケア",
                "alt_sp" => "ソノケア",
            ],
            [
                "link" => "https://www.seikosha-net.co.jp/products/rafos_mini_physio/",
                "img" => "/img/slide/04.jpg",
                "img_sp" => "/img/slide/04_sp.jpg",
                "alt" => "RAFOS mini Physio",
                "alt_sp" => "RAFOS mini Physio",
            ],
        ];
    ?>

</head>
<body <?php body_class(); ?>>
  <div id="wrapper">
    <header id="header">
      <h1 class="logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/logo_head.png" alt="株式会社誠鋼社-SEIKOSHA"></a></h1>
      <div class="hamburger"> <span></span> <span></span> <span></span> </div>
      <nav class="globalMenuSp">
        <ul class="gNaviListSp">
          <li><a>Category</a>
            <div class="gNaviChildSp">
              <ul>
                <li class="medical"><a href="../category/medical.html">Medical Beauty</a></li>
                <li class="beauty"><a href="../category/beauty.html">Esthetic Beauty</a></li>
                <li class="physio"><a href="../category/physio.html">Physio Sports</a></li>
                <li class="business"><a href="../business_support/" target="blank">開業支援system</a></li>
                <li class="self"><a href="../self_medication/">Self-medication</a></li>
                <li class="optimus"><a href="../optimus/" target="blank">Optimus studio</a></li>
              </ul>
            </div>
          </li>
          <li><a>Products</a>
            <div class="gNaviChildSp">
              <ul>
                <li><a href="products/famubo/">FAMUBO</a></li>
                <li><a href="products/famubo-d/">FAMUBO-D</a></li>
                <li><a href="products/famubo-cs/">FAMUBO-CS</a></li>
                <li><a href="products/bfi_famubo/">BFI FAMUBO</a></li>
                <li><a href="products/famubo-w/">FAMUBO-W</a></li>
                <li><a href="products/famubo-z/">FAMUBO-Z</a></li>
                <li><a href="products/observ520x/">OBSERV520x</a></li>
                <li><a href="products/observ320/">OBSERV320</a></li>
                <li><a href="products/asl/">ASL</a></li>
                <li><a href="products/rafos_sense/">RAFOS SENSE</a></li>
                <li><a href="products/rafos_tera/">RAFOS TERA</a></li>
                <li><a href="products/rafos/">RAFOS premium</a></li>
                <li><a href="products/rafos_ecare/">RAFOS E care</a></li>
                <li><a href="products/rafos_quantum/">RAFOS QUANTUM</a></li>
                <li><a href="products/rafos_physio/">RAFOS Physio</a></li>
                <li><a href="products/rafos_pro/">RAFOS premium pro</a></li>
                <li><a href="products/rafos_cellcum/">RAFOS cellcum</a></li>
                <li><a href="products/rafos_mini/">RAFOS MINI</a></li>
                <li><a href="products/rafos_mini_medical/">RAFOS MINI Medical</a></li>
                <li><a href="products/rafos_mini_physio/">RAFOS MINI Physio</a></li>
                <li><a href="products/sonocare/">sonocare</a></li>
                <li><a href="products/ultra_care/">Ultra care</a></li>
                <li><a href="products/plamingo/">PLAMINGO</a></li>
                <li><a href="products/pico_laser/">PICO LASER</a></li>
                <li><a href="products/puraxel/">PURAXEL</a></li>
                <li><a href="products/esthelux/">ESTHELUX</a></li>
                <li><a href="products/esthelux_pro/">ESTHELUX Pro</a></li>
                
                <!--
                <li><a href="products/smartlux/">SMARTLUX</a></li>
                -->
                <li><a href="/../products/starvac_dxlight/">STARVAC DX light</a></li>
                <li><a href="/../products/starvac_dxsmart/">STARVAC DX smart</a></li>
                <li><a href="products/plinic/">PLINIC</a></li>
                <li><a href="products/R_face/">R face</a></li>
                <li><a href="products/robolex_mini/">ROBOLEX</a></li>
                <li><a href="products/LymphaTouch/">Lympha Touch</a></li>
                <!-- <li><a href="products/ifl/">IFL</a></li> -->
                <li><a href="products/healfusion/">HealFusion</a></li>
                <li><a href="products/proFacial/">PRO Facial</a></li>
                <li><a href="products/Ego/">EGO</a></li>
                <!-- <li><a href="products/blulin7/">BLULIN 7</a></li> -->
                <!--<li><a href="products/view_fix/">VIEWFIX</a></li>-->
                <!-- <li><a href="products/multi_facial/">Multi Facial</a></li> -->
                <!--<li><a href="products/ppc/">PPCオイル</a></li>-->
                <li><a href="essence/stem_cells.html">ヒト幹細胞培養液</a></li>
                <li><a href="products/melatite/">メラタイト</a></li>
                <li><a href="products/celltite/">セルタイト</a></li>
                <!-- <li><a href="products/protein/">プロテイン</a></li> -->
                <li><a href="products/canalsoft/">カナルソフトシーネ </a></li>
                <li><a href="products/canal_series/">カナルシリーズ </a></li>
              </ul>
            </div>
          </li>
          <li><a>Seminar</a>
            <div class="gNaviChildSp">
              <ul>
                <li><a href="seminar/#Famubo">FAMUBOフォローアップセミナー</a></li>
                <li><a href="seminar/#Rafos_special">SEIKOSHA  BEAUTY  SEMINAR</a></li>
                
                <!--
                <li><a href="seminar/Rafos_f">RAFOSフォローアップセミナー</a></li>
                <li><a href="seminar/#BFI">BFIフォローアップセミナー</a></li>
                <li><a href="seminar/#Demo">デモ体験</a></li>-->
                
                <li><a href="seminar/remote.html">リモートセミナー</a></li>
                <li><a href="seminar/map.html">セミナー会場</a></li>
                <li><a href="seminar/mailform/application.html">セミナー予約</a></li>
              </ul>
            </div>
          </li>
          <li><a>News＆Media</a>
            <div class="gNaviChildSp">
              <ul>
                <li><a href="NewsMedia/">お知らせ</a></li>
                <li><a href="NewsMedia/Interview.html">インタビュー</a></li>
                <li><a href="NewsMedia/media.html">メディア掲載情報</a></li>
                <li><a href="NewsMedia/faq.html">よくあるご質問</a></li>
                <li><a href="NewsMedia/demonstration.html">最新機器のデモンストレーション</a></li>
                <li><a href="i-map/" target="blank">製品導入マップ</a></li>
                <li><a href="form/i-map/contact.html" target="blank">製品導入マップ 記入フォーム</a></li>
              </ul>
            </div>
          </li>
          <li><a>company</a>
            <div class="gNaviChildSp">
              <ul>
                <li class="campany"><a href="company/">会社概要</a></li>
                <li class="history"><a href="company/product_history.html">製品開発の歴史</a></li>
                <li><a href="company/concept.html">誠鋼社の概念</a></li>
                <li><a href="company/history.html">誠鋼社の沿革</a></li>
                <li><a href="company/records.html">実績</a></li>
                <li><a href="company/enthusiasm.html">製品開発への思い</a></li>
                <li><a href="company/evidence.html">学会発表・エビデンス</a></li>
                <li><a href="company/policy.html">プライバシーポリシー</a></li>
                <li><a href="company/sitemap.html">サイトマップ</a></li>
              </ul>
            </div>
          </li>
          <li><a>Customer Support</a>
            <div class="gNaviChildSp">
              <ul>
                <li class="business"><a href="business_support/" target="blank">開業支援system</a></li>
                <li class="purchase"><a href="purchase/">ご購入までの流れ</a></li>
                <li class="maintenance"><a href="CustomerSupport/maintenance.html">修理・メンテナンス</a></li>
                <li><a href="form/contact/mailform/">総合お問い合わせ</a></li>
                <li><a href="seminar/mailform/application.html">セミナー予約</a></li>
                <li><a href="form/optimus/mailform/">スタジオ予約</a></li>
                <li><a href="form/optimus/contact.html">施術体験予約</a></li>
                <li><a href="form/products/">製品お問い合わせ</a></li>
                <li><a href="form/dealer/mailform/">新規代理店登録</a></li>
                <li><a href="form/user/contact.html">ユーザー保証登録</a></li>
                <li><a href="form/maintenance/mailform/">修理・メンテナンスお問い合わせ</a></li>
              </ul>
            </div>
          </li>
        </ul>
        <div class="h_toi"> <a href="tel:0332341039">tel:03-3234-1039</a> <a href="form/contact/mailform/">お問い合わせ</a> </div>
      </nav>
    </header>
    <div class="c-container">
      <div class="swiper-container swiper_mv">
        <div class="swiper-wrapper">
          <?php
            foreach($listHeaders as $header) {
              if ($header['link']) {
                echo('
                  <div class="swiper-slide">
                    <a class="no_click" href="'. $header['link'] .'" target="_blank">
                      <img src="'. get_template_directory_uri() . $header['img'] .'" class="pc" alt="'. $header['alt'] .'">
                      <img src="'. get_template_directory_uri() . $header['img_sp'] .'" class="sp" alt="'. $header['alt_sp'] .'">
                    </a>
                  </div>
                ');
              } else {
                echo('
                  <div class="swiper-slide">
                    <img src="'. get_template_directory_uri() . $header['img'] .'" class="pc" alt="'. $header['alt'] .'">
                    <img src="'. get_template_directory_uri() . $header['img_sp'] .'" class="sp" alt="'. $header['alt_sp'] .'">
                  </div>
                ');
              }
            }
          ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

