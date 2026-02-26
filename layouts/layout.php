
<html>

<head>
  <?php
    $vShopCss = @filemtime(__DIR__ . '/../assets/downloads/shop.css') ?: time();
    $vCommonCss = @filemtime(__DIR__ . '/../assets/downloads/common.css') ?: time();
    $vIndexCss = @filemtime(__DIR__ . '/../assets/css/index.css') ?: time();
    $vLayoutCss = @filemtime(__DIR__ . '/../assets/css/layout.css') ?: time();
    $vHomeCss = @filemtime(__DIR__ . '/../assets/css/home.css') ?: time();
    $vLoginCss = @filemtime(__DIR__ . '/../assets/css/login.css') ?: time();
    $vRegisterCss = @filemtime(__DIR__ . '/../assets/css/register.css') ?: time();
    $vCartCss = @filemtime(__DIR__ . '/../assets/css/cart.css') ?: time();
    $vFinishOrderCss = @filemtime(__DIR__ . '/../assets/css/finishOrder.css') ?: time();
    $vAllJs = @filemtime(__DIR__ . '/../assets/js/all.min.js') ?: time();
    $vIndexJs = @filemtime(__DIR__ . '/../assets/js/index.js') ?: time();
    $vWebJs = @filemtime(__DIR__ . '/../assets/js/web.js') ?: time();
  ?>
  <meta http-equiv="Content-Language" content="ja">
  <meta http-equiv="Content-Type" content="text/html; charset=EUC-JP">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= URL_PATH ?>assets/downloads/shop.css?v=<?= $vShopCss ?>" type="text/css">
  <link type="text/css" rel="stylesheet" href="<?= URL_PATH ?>assets/downloads/common.css?v=<?= $vCommonCss ?>">
  <link type="text/css" rel="stylesheet" href="<?= URL_PATH ?>assets/css/index.css?v=<?= $vIndexCss ?>">
  <link type="text/css" rel="stylesheet" href="<?= URL_PATH ?>assets/css/layout.css?v=<?= $vLayoutCss ?>">
  <link type="text/css" rel="stylesheet" href="<?= URL_PATH ?>assets/css/home.css?v=<?= $vHomeCss ?>">
  <link type="text/css" rel="stylesheet" href="<?= URL_PATH ?>assets/css/login.css?v=<?= $vLoginCss ?>">
  <link type="text/css" rel="stylesheet" href="<?= URL_PATH ?>assets/css/register.css?v=<?= $vRegisterCss ?>">
  <link type="text/css" rel="stylesheet" href="<?= URL_PATH ?>assets/css/cart.css?v=<?= $vCartCss ?>">
  <link type="text/css" rel="stylesheet" href="<?= URL_PATH ?>assets/css/finishOrder.css?v=<?= $vFinishOrderCss ?>">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    const URL_PATH = '<?= URL_PATH ?>';
    const EMAIL_SEND = '<?= EMAIL_SEND ?>';
    const TIENDA_NAME_1 = '<?= TIENDA_NAME_1 ?>';
    const TIENDA_NAME_2 = '<?= TIENDA_NAME_2 ?>';
    const TIENDA_NAME_3 = '<?= TIENDA_NAME_3 ?>';
  </script>
  <link rel="apple-touch-icon" sizes="180x180" href="<?= URL_PATH ?>assets/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= URL_PATH ?>assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= URL_PATH ?>assets/img/favicon-16x16.png">
  <link rel="manifest" href="<?= URL_PATH ?>assets/img/site.webmanifest">

  <title>
    <?= TIENDA_NAME_1 ?>
  </title>


  <script src="<?= URL_PATH ?>assets/js/all.min.js?v=<?= $vAllJs ?>"></script>
  <script src="<?= URL_PATH ?>assets/js/index.js?v=<?= $vIndexJs ?>"></script>
      <script src="<?= URL_PATH ?>assets/js/web.js?v=<?= $vWebJs ?>"></script>
      <style>
        @media (max-width: 1024px) {
          .M_layer3 {
            display: none !important;
          }
        }
      </style>
  <script>
    // Mostrar/ocultar botón X para cerrar menú hamburguesa
    function toggleMenuCloseBtn(show) {
      var btn = document.getElementById('menu-close-btn');
      if (btn) btn.style.display = show ? 'block' : 'none';
    }
    document.addEventListener('DOMContentLoaded', function() {
      var nav = document.querySelector('.global_nav');
      var trigger = document.querySelector('.menu-trigger');
      var closeBtn = document.getElementById('menu-close-btn');
      function updateBtn() {
        var isMobile = window.innerWidth <= 1024;
        var navOn = nav && nav.classList.contains('global_nav_on');
        toggleMenuCloseBtn(isMobile && navOn);
      }
      if (trigger && nav && closeBtn) {
        trigger.addEventListener('click', function() {
          setTimeout(updateBtn, 100);
        });
        closeBtn.addEventListener('click', function() {
          nav.classList.remove('global_nav_on');
          trigger.classList.remove('active');
          toggleMenuCloseBtn(false);
        });
        window.addEventListener('resize', updateBtn);
      }
    });
  </script>




</head>

<body bgcolor="#FFFFFF" marginwidth="0" marginheight="0" topmargin="0" leftmargin="0" cz-shortcut-listen="true">



  <center>

    <div id="wrap">
      <div id="header">
        <div id="container_header" class="container_header">
          <div class="container_header_inner">
            <div class="header_upper">
              <a href="<?= URL_PATH ?>"><img src="<?= URL_PATH ?>assets/img/banner1.png" alt="sports" width="250"></a>
              <div class="shopping_functions" style="    display: flex; gap: 15px;">
                <table border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                    <tr>
                      
                      <form name="top_form_log" action="" method="post" target="_top">
                      </form>

                      <td>
                        <a href="<?= URL_PATH ?>login" class="function_login" id="header_login">LOGIN</a>
                        <a href="<?= URL_PATH ?>register" class="function_mypage" id="header_mypage">MYPAGE</a>
                        <div id="header_user_menu" style="display:none;">
                          <span id="header_user_name"></span>
                          <a href="#" id="header_logout" class="header_logout_btn">LOGOUT</a>
                        </div>
                      </td>
                      <input type="hidden" name="type" value="login">
                    </tr>

                  </tbody>
                </table>
                <a href="<?= URL_PATH ?>cart" id="M_headBasketIn"><span class="cart-label">CART</span></a>

                <a href="<?= URL_PATH ?>pages/userGuide" class="function_guide">ご利用ガイド</a>
              </div>
            </div>
            <div class="header_lower">
              <div id="nav_wrap">
                <div id="trigger_nav">
                  <a class="menu-trigger">
                    <span></span>
                    <span></span>
                    <span></span>
                  </a>
                </div>
                <div class="global_nav">
                                    <button id="menu-close-btn" aria-label="Cerrar menú" style="display:none; position:fixed; bottom:24px; right:24px; z-index:2102; background:#fff; border:none; font-size:3.2rem; font-weight:900; color:#4838c7; width:64px; height:64px; border-radius:50%; box-shadow:0 2px 12px rgba(0,0,0,0.13); cursor:pointer;">×</button>
                  <div class="global_nav_wrap">
                    <div id="M_ctgList2">
                      <ul class="M_layer1">
                        <li id="M_ctg1_9"><a href="">ブランドから探す</a>
                          <ul class="M_layer2">

                            <li id="M_ctg2_111"><a href="<?= URL_PATH ?>section?s=adidas[アディダス]">ADIDAS[アディダス]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_199"><a href="<?= URL_PATH ?>section?s=adidas[アディダス]&t=シューズ">シューズ</a>
                                </li>
                                <li id="M_ctg3_200"><a href="<?= URL_PATH ?>section?s=adidas[アディダス]&t=アパレル">アパレル</a>
                                </li>
                              </ul>
                            </li>
                            <li id="M_ctg2_62"><a href="<?= URL_PATH ?>section?s=ASICS [アシックス]">ASICS [アシックス]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_201"><a href="<?= URL_PATH ?>section?s=ASICS [アシックス]&t=シューズ">シューズ</a>
                                </li>
                                <li id="M_ctg3_123"><a href="<?= URL_PATH ?>section?s=ASICS [アシックス]&t=アパレル">アパレル</a>
                                </li>
                                <li id="M_ctg3_204"><a href="<?= URL_PATH ?>section?s=ASICS [アシックス]&t=審判用品">審判用品</a>
                                </li>
                              </ul>
                            </li>

                            <li id="M_ctg2_91"><a href="<?= URL_PATH ?>section?s=B.BUDDY[ビー.バディ]">B.BUDDY[ビー.バディ]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_205"><a
                                    href="<?= URL_PATH ?>section?s=B.BUDDY[ビー.バディ]&t=トップス半袖">トップス半袖</a>
                                </li>
                                <li id="M_ctg3_206"><a
                                    href="<?= URL_PATH ?>section?s=B.BUDDY[ビー.バディ]&t=トップス長袖">トップス長袖</a>
                                </li>
                                <li id="M_ctg3_207"><a href="<?= URL_PATH ?>section?s=B.BUDDY[ビー.バディ]&t=パンツ">パンツ</a>
                                </li>
                                <li id="M_ctg3_208"><a
                                    href="<?= URL_PATH ?>section?s=B.BUDDY[ビー.バディ]&t=バッグ・グッズ">バッグ・グッズ</a>
                                </li>
                              </ul>
                            </li>
                            <li id="M_ctg2_322"><a href="<?= URL_PATH ?>section?s=blueeq[ブルイク]">BLUEEQ[ブルイク]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_323"><a href="<?= URL_PATH ?>section?s=blueeq[ブルイク]&t=アパレル">アパレル</a>
                                </li>
                                <li id="M_ctg3_324"><a href="<?= URL_PATH ?>section?s=blueeq[ブルイク]&t=バッグ">バッグ</a>
                                </li>
                              </ul>
                            </li>
                            <li id="M_ctg2_66"><a href="<?= URL_PATH ?>section?s=CONVERSE[コンバース]">CONVERSE[コンバース]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_330"><a href="<?= URL_PATH ?>section?s=CONVERSE[コンバース]&t=シューズ">シューズ</a>
                                </li>
                                <li id="M_ctg3_263"><a href="<?= URL_PATH ?>section?s=CONVERSE[コンバース]&t=アパレル">アパレル</a>
                                </li>
                                <li id="M_ctg3_124"><a
                                    href="<?= URL_PATH ?>section?s=CONVERSE[コンバース]&t=ブレーカー・スウェット">ブレーカー・スウェット</a></li>
                                <li id="M_ctg3_209"><a href="<?= URL_PATH ?>section?s=CONVERSE[コンバース]&t=ソックス">ソックス</a>
                                </li>
                              </ul>
                            </li>
                            <li id="M_ctg2_325"><a href="<?= URL_PATH ?>section?s=DADA[ダダ]">DADA[ダダ]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_326"><a href="<?= URL_PATH ?>section?s=DADA[ダダ]&t=アパレル">アパレル</a>
                                </li>
                              </ul>
                            </li>
                            <li id="M_ctg2_70"><a href="<?= URL_PATH ?>section?s=EGOZARU[エゴザル]">EGOZARU[エゴザル]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_334"><a
                                    href="<?= URL_PATH ?>section?s=EGOZARU[エゴザル]&t=瀬川琉久モデル">瀬川琉久モデル</a>
                                </li>
                                <li id="M_ctg3_274"><a href="<?= URL_PATH ?>section?s=EGOZARU[エゴザル]&t=シューズ">シューズ</a>
                                </li>
                                <li id="M_ctg3_128"><a href="<?= URL_PATH ?>section?s=EGOZARU[エゴザル]&t=トップス半袖">トップス半袖</a>
                                </li>
                                <li id="M_ctg3_129"><a href="<?= URL_PATH ?>section?s=EGOZARU[エゴザル]&t=トップス長袖">トップス長袖</a>
                                </li>
                                <li id="M_ctg3_130"><a
                                    href="<?= URL_PATH ?>section?s=EGOZARU[エゴザル]&t=ブレーカー・スウェット">ブレーカー・スウェット</a></li>
                                <li id="M_ctg3_131"><a href="<?= URL_PATH ?>section?s=EGOZARU[エゴザル]&t=パンツ">パンツ</a>
                                </li>
                                <li id="M_ctg3_336"><a href="<?= URL_PATH ?>section?s=EGOZARU[エゴザル]&t=インナー">インナー</a>
                                </li>
                                <li id="M_ctg3_132"><a href="<?= URL_PATH ?>section?s=EGOZARU[エゴザル]&t=ソックス">ソックス</a>
                                </li>
                                <li id="M_ctg3_133"><a href="<?= URL_PATH ?>section?s=EGOZARU[エゴザル]&t=タオル">タオル</a>
                                </li>
                                <li id="M_ctg3_134"><a
                                    href="<?= URL_PATH ?>section?s=EGOZARU[エゴザル]&t=バッグ・その他">バッグ・その他</a>
                                </li>
                              </ul>
                            </li>
                            <li id="M_ctg2_73"><a href="<?= URL_PATH ?>section?s=IN THE PAINT[インザペイント]">IN THE
                                PAINT[インザペイント]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_135"><a
                                    href="<?= URL_PATH ?>section?s=IN THE PAINT[インザペイント]&t=トップス半袖">トップス半袖</a>
                                </li>
                                <li id="M_ctg3_136"><a
                                    href="<?= URL_PATH ?>section?s=IN THE PAINT[インザペイント]&t=トップス長袖">トップス長袖</a>
                                </li>
                                <li id="M_ctg3_137"><a
                                    href="<?= URL_PATH ?>section?s=IN THE PAINT[インザペイント]&t=パンツ">パンツ</a>
                                </li>
                                <li id="M_ctg3_138"><a
                                    href="<?= URL_PATH ?>section?s=IN THE PAINT[インザペイント]&t=ソックス">ソックス</a>
                                </li>
                                <li id="M_ctg3_139"><a
                                    href="<?= URL_PATH ?>section?s=IN THE PAINT[インザペイント]&t=タオル・バッグ・その他">タオル・バッグ・その他</a>
                                </li>
                              </ul>
                            </li>
                            <li id="M_ctg2_74"><a href="<?= URL_PATH ?>section?s=JORDAN[ジョーダン]">JORDAN[ジョーダン]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_257"><a href="<?= URL_PATH ?>section?s=JORDAN[ジョーダン]&t=シューズ">シューズ</a>
                                </li>
                                <li id="M_ctg3_144"><a href="<?= URL_PATH ?>section?s=JORDAN[ジョーダン]&t=トップス半袖">トップス半袖</a>
                                </li>
                                <li id="M_ctg3_145"><a href="<?= URL_PATH ?>section?s=JORDAN[ジョーダン]&t=トップス長袖">トップス長袖</a>
                                </li>
                                <li id="M_ctg3_146"><a href="<?= URL_PATH ?>section?s=JORDAN[ジョーダン]&t=パンツ">パンツ</a>
                                </li>
                                <li id="M_ctg3_147"><a
                                    href="<?= URL_PATH ?>section?s=JORDAN[ジョーダン]&t=ソックス・バッグ・その他">ソックス・バッグ・その他</a></li>
                              </ul>
                            </li>
                            <li id="M_ctg2_75"><a href="<?= URL_PATH ?>section?s=McDavid[マクダビッド]">MCDAVID[マクダビッド]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_213"><a href="<?= URL_PATH ?>section?s=McDavid[マクダビッド]&t=サポーター">サポーター</a>
                                </li>
                                <li id="M_ctg3_214"><a href="<?= URL_PATH ?>section?s=McDavid[マクダビッド]&t=テーピング">テーピング</a>
                                </li>
                              </ul>
                            </li>
                            <li id="M_ctg2_76"><a href="<?= URL_PATH ?>section?s=MIKASA[ミカサ]">MIKASA[ミカサ]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_216"><a
                                    href="<?= URL_PATH ?>section?s=MIKASA[ミカサ]&t=バスケットボール">バスケットボール</a>
                                </li>
                                <li id="M_ctg3_217"><a href="<?= URL_PATH ?>section?s=MIKASA[ミカサ]&t=ボールバッグ">ボールバッグ</a>
                                </li>
                                <li id="M_ctg3_219"><a
                                    href="<?= URL_PATH ?>section?s=MIKASA[ミカサ]&t=テーピング・アイシング">テーピング・アイシング</a></li>
                                <li id="M_ctg3_220"><a href="<?= URL_PATH ?>section?s=MIKASA[ミカサ]&t=備品">備品</a>
                                </li>
                              </ul>
                            </li>
                            <li id="M_ctg2_77"><a href="<?= URL_PATH ?>section?s=molten[モルテン]">MOLTEN[モルテン]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_175"><a
                                    href="<?= URL_PATH ?>section?s=molten[モルテン]&t=バスケットボール">バスケットボール</a>
                                </li>
                                <li id="M_ctg3_177"><a href="<?= URL_PATH ?>section?s=molten[モルテン]&t=タイマー">タイマー</a>
                                </li>
                                <li id="M_ctg3_179"><a
                                    href="<?= URL_PATH ?>section?s=molten[モルテン]&t=ボールバック・ボールカゴ・バッグ">ボールバック・ボールカゴ・バッグ</a>
                                </li>
                                <li id="M_ctg3_178"><a href="<?= URL_PATH ?>section?s=molten[モルテン]&t=作戦盤">作戦盤</a>
                                </li>
                                <li id="M_ctg3_261"><a href="<?= URL_PATH ?>section?s=molten[モルテン]&t=ホイッスル">ホイッスル</a>
                                </li>
                                <li id="M_ctg3_176"><a href="<?= URL_PATH ?>section?s=molten[モルテン]&t=審判用品">審判用品</a>
                                </li>
                                <li id="M_ctg3_181"><a href="<?= URL_PATH ?>section?s=molten[モルテン]&t=ゲームベスト">ゲームベスト</a>
                                </li>
                                <li id="M_ctg3_190"><a
                                    href="<?= URL_PATH ?>section?s=molten[モルテン]&t=ボールケア用品">ボールケア用品</a>
                                </li>
                                <li id="M_ctg3_191"><a
                                    href="<?= URL_PATH ?>section?s=molten[モルテン]&t=シューズケア用品">シューズケア用品</a>
                                </li>
                                <li id="M_ctg3_192"><a
                                    href="<?= URL_PATH ?>section?s=molten[モルテン]&t=ラインテープ・ライン引き">ラインテープ・ライン引き</a></li>
                                <li id="M_ctg3_182"><a href="<?= URL_PATH ?>section?s=molten[モルテン]&t=トレーニング">トレーニング</a>
                                </li>
                                <li id="M_ctg3_185"><a href="<?= URL_PATH ?>section?s=molten[モルテン]&t=テーピング">テーピング</a>
                                </li>
                                <li id="M_ctg3_180"><a href="<?= URL_PATH ?>section?s=molten[モルテン]&t=記念品">記念品</a>
                                </li>
                                <li id="M_ctg3_186"><a href="<?= URL_PATH ?>section?s=molten[モルテン]&t=バレーボール">バレーボール</a>
                                </li>
                                <li id="M_ctg3_187"><a
                                    href="<?= URL_PATH ?>section?s=molten[モルテン]&t=サッカーボール">サッカーボール</a>
                                </li>
                                <li id="M_ctg3_188"><a href="<?= URL_PATH ?>section?s=molten[モルテン]&t=ハンドボール">ハンドボール</a>
                                </li>
                                <li id="M_ctg3_189"><a
                                    href="<?= URL_PATH ?>section?s=molten[モルテン]&t=その他スポーツ">その他スポーツ</a>
                                </li>
                              </ul>
                            </li>
                            <li id="M_ctg2_312"><a href="<?= URL_PATH ?>section?s=MUSASHI[ムサシ]">MUSASHI[ムサシ]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_315"><a href="<?= URL_PATH ?>section?s=MUSASHI[ムサシ]&t=KUN クン（美容と健康）">KUN
                                    クン（美容と健康）</a></li>
                                <li id="M_ctg3_316"><a
                                    href="<?= URL_PATH ?>section?s=MUSASHI[ムサシ]&t=KUAN クアン（パワーアップ）">KUAN
                                    クアン（パワーアップ）</a></li>
                                <li id="M_ctg3_318"><a
                                    href="<?= URL_PATH ?>section?s=MUSASHI[ムサシ]&t=HUAN フアン（ウェイトコントロール）">HUAN
                                    フアン（ウェイトコントロール）</a></li>
                                <li id="M_ctg3_320"><a
                                    href="<?= URL_PATH ?>section?s=MUSASHI[ムサシ]&t=CHEN チェン（瞬発力サポート）">CHEN
                                    チェン（瞬発力サポート）</a></li>
                              </ul>
                            </li>
                            <li id="M_ctg2_78"><a href="<?= URL_PATH ?>section?s=NBA[エヌビーエー]">NBA[エヌビーエー]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_148"><a href="<?= URL_PATH ?>section?s=NBA[エヌビーエー]&t=トップス半袖">トップス半袖</a>
                                </li>
                                <li id="M_ctg3_149"><a href="<?= URL_PATH ?>section?s=NBA[エヌビーエー]&t=トップス長袖">トップス長袖</a>
                                </li>
                                <li id="M_ctg3_150"><a href="<?= URL_PATH ?>section?s=NBA[エヌビーエー]&t=パンツ">パンツ</a>
                                </li>
                                <li id="M_ctg3_151"><a
                                    href="<?= URL_PATH ?>section?s=NBA[エヌビーエー]&t=ソックス・バッグ・その他">ソックス・バッグ・その他</a></li>
                              </ul>
                            </li>
                            <li id="M_ctg2_79"><a href="<?= URL_PATH ?>section?s=Nike[ナイキ]">NIKE[ナイキ]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_256"><a href="<?= URL_PATH ?>section?s=Nike[ナイキ]&t=シューズ">シューズ</a>
                                </li>
                                <li id="M_ctg3_140"><a href="<?= URL_PATH ?>section?s=Nike[ナイキ]&t=トップス半袖">トップス半袖</a>
                                </li>
                                <li id="M_ctg3_141"><a href="<?= URL_PATH ?>section?s=Nike[ナイキ]&t=トップス長袖">トップス長袖</a>
                                </li>
                                <li id="M_ctg3_142"><a href="<?= URL_PATH ?>section?s=Nike[ナイキ]&t=パンツ">パンツ</a>
                                </li>
                                <li id="M_ctg3_143"><a
                                    href="<?= URL_PATH ?>section?s=Nike[ナイキ]&t=ソックス・バッグ・その他">ソックス・バッグ・その他</a></li>
                              </ul>
                            </li>
                            <li id="M_ctg2_110"><a href="<?= URL_PATH ?>section?s=PUMA[プーマ]">PUMA[プーマ]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_224"><a href="<?= URL_PATH ?>section?s=PUMA[プーマ]&t=シューズ">シューズ</a>
                                </li>
                                <li id="M_ctg3_225"><a href="<?= URL_PATH ?>section?s=PUMA[プーマ]&t=トップス半袖">トップス半袖</a>
                                </li>
                                <li id="M_ctg3_226"><a href="<?= URL_PATH ?>section?s=PUMA[プーマ]&t=トップス長袖">トップス長袖</a>
                                </li>
                                <li id="M_ctg3_227"><a href="<?= URL_PATH ?>section?s=PUMA[プーマ]&t=パンツ">パンツ</a>
                                </li>
                                <li id="M_ctg3_262"><a href="<?= URL_PATH ?>section?s=PUMA[プーマ]&t=バッグ・その他">バッグ・その他</a>
                                </li>
                              </ul>
                            </li>
                            <li id="M_ctg2_80"><a href="<?= URL_PATH ?>section?s=ON THE COURT[オンザコート]">ON THE
                                COURT[オンザコート]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_223"><a
                                    href="<?= URL_PATH ?>section?s=ON THE COURT[オンザコート]&t=アパレル">アパレル</a>
                                </li>
                                <li id="M_ctg3_221"><a
                                    href="<?= URL_PATH ?>section?s=ON THE COURT[オンザコート]&t=審判用品">審判用品</a>
                                </li>
                                <li id="M_ctg3_222"><a
                                    href="<?= URL_PATH ?>section?s=ON THE COURT[オンザコート]&t=バッグ・タオル・ソックス">バッグ・タオル・ソックス</a>
                                </li>
                              </ul>
                            </li>
                            <li id="M_ctg2_269"><a href="<?= URL_PATH ?>section?s=SPALDING[スポルディング]">SPALDING[スポルディング]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_270"><a href="<?= URL_PATH ?>section?s=SPALDING[スポルディング]&t=ゴール・ボール">ゴール・ボール</a>
                                </li>
                                <li id="M_ctg3_327"><a href="<?= URL_PATH ?>section?s=SPALDING[スポルディング]&t=トップス">トップス</a>
                                </li>
                                <li id="M_ctg3_328"><a href="<?= URL_PATH ?>section?s=SPALDING[スポルディング]&t=パンツ">パンツ</a>
                                </li>
                                <li id="M_ctg3_271"><a href="<?= URL_PATH ?>section?s=SPALDING[スポルディング]&t=その他">その他</a>
                                </li>
                              </ul>
                            </li>
                            <li id="M_ctg2_84"><a href="<?= URL_PATH ?>section?s=UNDER ARMOUR[アンダーアーマー]">UNDER
                                ARMOUR[アンダーアーマー]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_231"><a
                                    href="<?= URL_PATH ?>section?s=UNDER ARMOUR[アンダーアーマー]&t=シューズ">シューズ</a>
                                </li>
                                <li id="M_ctg3_232"><a
                                    href="<?= URL_PATH ?>section?s=UNDER ARMOUR[アンダーアーマー]&t=トップス半袖">トップス半袖</a>
                                </li>
                                <li id="M_ctg3_233"><a
                                    href="<?= URL_PATH ?>section?s=UNDER ARMOUR[アンダーアーマー]&t=トップス長袖">トップス長袖</a>
                                </li>
                                <li id="M_ctg3_234"><a
                                    href="<?= URL_PATH ?>section?s=UNDER ARMOUR[アンダーアーマー]&t=パンツ">パンツ</a>
                                </li>
                                <li id="M_ctg3_235"><a
                                    href="<?= URL_PATH ?>section?s=UNDER ARMOUR[アンダーアーマー]&t=バッグ・ソックス・その他">バッグ・ソックス・その他</a>
                                </li>
                              </ul>
                            </li>
                            <li id="M_ctg2_87"><a href="<?= URL_PATH ?>section?s=ZAMST[ザムスト]">ZAMST[ザムスト]</a>
                              <ul class="M_layer3">
                                <li id="M_ctg3_236"><a href="<?= URL_PATH ?>section?s=ZAMST[ザムスト]&t=サポーター">サポーター</a>
                                </li>
                                <li id="M_ctg3_237"><a
                                    href="<?= URL_PATH ?>section?s=ZAMST[ザムスト]&t=テーピング・アイシング">テーピング・アイシング</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li id="M_ctg1_4"><a href="">SHOES</a>
                          <ul class="M_layer2">
                            <li id="M_ctg2_24"><a href="<?= URL_PATH ?>section?s=Nike[ナイキ]&t=シューズ">NIKE[ナイキ]</a></li>
                            <li id="M_ctg2_25"><a href="<?= URL_PATH ?>section?s=JORDAN[ジョーダン]&t=シューズ">JORDAN[ジョーダン]</a></li>
                            <li id="M_ctg2_331"><a href="<?= URL_PATH ?>section?s=CONVERSE[コンバース]&t=シューズ">CONVERSE[コンバース]</a></li>
                            <li id="M_ctg2_273"><a href="<?= URL_PATH ?>section?s=EGOZARU[エゴザル]&t=シューズ">EGOZARU[エゴザル]</a></li>
                            <li id="M_ctg2_26"><a href="<?= URL_PATH ?>section?s=ASICS [アシックス]&t=シューズ">ASICS [アシックス]</a></li>
                            <li id="M_ctg2_27"><a href="<?= URL_PATH ?>section?s=UNDER ARMOUR[アンダーアーマー]&t=シューズ">UNDER ARMOUR[アンダーアーマー]</a></li>
                            <li id="M_ctg2_106"><a href="<?= URL_PATH ?>section?s=PUMA[プーマ]&t=シューズ">PUMA[プーマ]</a></li>
                            <li id="M_ctg2_107"><a href="<?= URL_PATH ?>section?s=adidas[アディダス]&t=シューズ">ADIDAS[アディダス]</a></li>
                         </ul>
                        </li>
                        <li id="M_ctg1_5"><a href="">APPAREL</a>
                          <ul class="M_layer2">
                            <li id="M_ctg2_70a"><a href="<?= URL_PATH ?>section?s=EGOZARU[エゴザル]">EGOZARU[エゴザル]</a></li>
                            <li id="M_ctg2_73a"><a href="<?= URL_PATH ?>section?s=IN THE PAINT[インザペイント]">IN THE PAINT[インザペイント]</a></li>
                            <li id="M_ctg2_79a"><a href="<?= URL_PATH ?>section?s=Nike[ナイキ]">NIKE[ナイキ]</a></li>
                            <li id="M_ctg2_74a"><a href="<?= URL_PATH ?>section?s=JORDAN[ジョーダン]">JORDAN[ジョーダン]</a></li>
                            <li id="M_ctg2_84a"><a href="<?= URL_PATH ?>section?s=UNDER ARMOUR[アンダーアーマー]">UNDER ARMOUR[アンダーアーマー]</a></li>
                            <li id="M_ctg2_66a"><a href="<?= URL_PATH ?>section?s=CONVERSE[コンバース]">CONVERSE[コンバース]</a></li>
                            <li id="M_ctg2_111a"><a href="<?= URL_PATH ?>section?s=adidas[アディダス]">ADIDAS[アディダス]</a></li>
                            <li id="M_ctg2_110a"><a href="<?= URL_PATH ?>section?s=PUMA[プーマ]">PUMA[プーマ]</a></li>
                            <li id="M_ctg2_91a"><a href="<?= URL_PATH ?>section?s=B.BUDDY[ビー.バディ]">B.BUDDY[ビー.バディ]</a></li>
                            <li id="M_ctg2_80a"><a href="<?= URL_PATH ?>section?s=ON THE COURT[オンザコート]">ON THE COURT[オンザコート]</a></li>
                            <li id="M_ctg2_78a"><a href="<?= URL_PATH ?>section?s=NBA[エヌビーエー]">NBA[エヌビーエー]</a></li>
                            <li id="M_ctg2_269a"><a href="<?= URL_PATH ?>section?s=SPALDING[スポルディング]">SPALDING[スポルディング]</a></li>
                            <li id="M_ctg2_322a"><a href="<?= URL_PATH ?>section?s=blueeq[ブルイク]">BLUEEQ[ブルイク]</a></li>
                            <li id="M_ctg2_325a"><a href="<?= URL_PATH ?>section?s=DADA[ダダ]">DADA[ダダ]</a></li>
                          </ul>
                        </li>
                        <li id="M_ctg1_6"><a href="">BALL</a>
                          <ul class="M_layer2">
                            <li id="M_ctg2_77a"><a href="<?= URL_PATH ?>section?s=molten[モルテン]&t=バスケットボール">MOLTEN[モルテン]</a></li>
                            <li id="M_ctg2_76a"><a href="<?= URL_PATH ?>section?s=MIKASA[ミカサ]&t=バスケットボール">MIKASA[ミカサ]</a></li>
                            <li id="M_ctg2_269b"><a href="<?= URL_PATH ?>section?s=SPALDING[スポルディング]&t=ゴール・ボール">SPALDING[スポルディング]</a></li>
                          </ul>
                        </li>
                        <li id="M_ctg1_7"><a href="">SUPPORTER</a>
                          <ul class="M_layer2">
                            <li id="M_ctg2_87a"><a href="<?= URL_PATH ?>section?s=ZAMST[ザムスト]">ZAMST[ザムスト]</a></li>
                            <li id="M_ctg2_75a"><a href="<?= URL_PATH ?>section?s=McDavid[マクダビッド]">MCDAVID[マクダビッド]</a></li>
                          </ul>
                        </li>
                        <li id="M_ctg1_8"><a href="">GOODS</a>
                          <ul class="M_layer2">
                            <li id="M_ctg2_77b"><a href="<?= URL_PATH ?>section?s=molten[モルテン]">MOLTEN[モルテン]</a></li>
                            <li id="M_ctg2_76b"><a href="<?= URL_PATH ?>section?s=MIKASA[ミカサ]">MIKASA[ミカサ]</a></li>
                            <li id="M_ctg2_70b"><a href="<?= URL_PATH ?>section?s=EGOZARU[エゴザル]&t=バッグ・その他">EGOZARU[エゴザル]</a></li>
                          </ul>
                        </li>
                      

                    </div>

                  </div>

                </div>
                <div class="header_search">
                  <div id="hd-search">
                    <div class="search">
                      <form action="<?= URL_PATH ?>search" method="get" role="search" id="search_form"
                        class="hd-search-form">
                        <input type="search" name="q" value="" placeholder="キーワードを入力" class="search-input">
                        <button type="submit" class="search-button">
                          <img src="<?= URL_PATH ?>assets/downloads/icon_search1.svg?v=123787696369799658361675046778"
                            alt="検索">
                        </button>
                        <input type="hidden" name="options[prefix]" value="last">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container_contents">
        <?php
        // Detectar si NO estamos en la página de inicio
        $current_page = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
        $is_home = ($current_page == '' || $current_page == '/' || $current_page == 'index.php' || strpos($_SERVER['REQUEST_URI'], URL_PATH) === 0 && strlen($_SERVER['REQUEST_URI']) <= strlen(URL_PATH)+1);
        if (!$is_home) {
          echo '<div style="text-align: right; padding: 12px 20px; margin-bottom: 8px;">';
          echo '<a href="' . URL_PATH . '" style="font-size: 1.3rem; color: #666; text-decoration: none; opacity: 0.7; transition: opacity 0.3s ease; display: inline-block;">ホームに戻る ↑</a>';
          echo '</div>';
        }
        ?>
        <?php echo $content; ?>
      </div>
 <div id="footer">
        <div class="container_footer">
          <div class="container_footer_inner">
            <div class="shop_guid">
              <ul>
                <li><a href="<?= URL_PATH ?>company">会社案内</a></li>
                <li><a href="<?= URL_PATH ?>ordercontract">特定商取引法に基づく表記</a></li>
                <li><a href="<?= URL_PATH ?>pages/privacy-policy">個人情報保護ポリシー</a></li>
                <li><a href="<?= URL_PATH ?>page1">個人情報保護方針</a></li>
              </ul>
            </div>
            <div class="footer_contacts">

              <p class="btn_contact_wrap"><a href="<?= URL_PATH ?>contact" class="btn_contact">CONTACT</a></p>
            </div>
            <p class="copyright">© 2025 JINDŌKAN </p>
            <p><a id="page_top"></a></p>
          </div>
        </div>
      </div>
 
    </div>
      

  </center>
    
</body>


</html>