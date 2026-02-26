<?php
$data = file_get_contents('./const/products.json');
$products = json_decode($data, true);
$filterProducts = [];
$tagsUse = [];
$title = "";
$type = !empty($_GET['q']) ? 'search' : 'section';
$sortValue = "";
if (!empty($_GET['sort'])) {
  if (strpos($_GET['sort'], 'price-ascending')  !== false) {
    $sortValue = "価格の安い順";
    usort($products, function ($a, $b) {
      return $a['price'] <=> $b['price'];
    });
  }
  if (strpos($_GET['sort'], 'price-descending')  !== false) {
    $sortValue = "価格の高い順";
    usort($products, function ($a, $b) {
      return $b['price'] <=> $a['price'];
    });
  }
}
if (!empty($_GET['q'])) {
  $title = "検索結果: " . $_GET['q'];
  $filterProducts = [];
  $q_value = !empty($_GET['q']) ? $_GET['q'] : " ";
  $qList = explode(" ", $q_value);
  for ($i = 0; $i < count($products); $i++) {
    $add = true;
    for ($j = 0; $j < count($qList); $j++) {
      if (isset($qList[$j])) {
        if (
          !in_array($qList[$j], $products[$i]['section']) &&
          strpos(strtolower($products[$i]["title"]), strtolower($qList[$j])) === false &&
          strpos(strtolower($products[$i]["description"]), strtolower($qList[$j])) === false
        ) {
          $add = false;
        }
      }
    }
    if ($add == true)
      array_push($filterProducts, $products[$i]);
  }
  $products = $filterProducts;
}
if (isset($_GET['s'])) {
  $filterProducts = [];
  $keyFind = "section";
  $valueFind = $_GET["s"];
  $slug = strtolower(trim($valueFind));
  $sectionAliases = [
    'shoes' => ['シューズ'],
    'apparel' => ['アパレル'],
    'balls' => ['バスケットボール', 'ゴール・ボール', 'ボールバッグ', 'ボールバック・ボールカゴ・バッグ', 'サッカーボール', 'バレーボール', 'ハンドボール'],
    'goods' => ['バッグ・その他', 'バッグ・グッズ', 'バッグ', 'バッグ・ソックス・その他', 'バッグ・タオル・ソックス', 'ソックス・バッグ・その他', 'タオル・バッグ・その他', 'その他', '記念品', '作戦盤', 'ホイッスル', '審判用品', 'ボールケア用品', 'シューズケア用品', 'ラインテープ・ライン引き', 'トレーニング', '備品'],
    'suport-item' => ['サポーター', 'テーピング', 'テーピング・アイシング'],
    'support-item' => ['サポーター', 'テーピング', 'テーピング・アイシング']
  ];

  if (isset($sectionAliases[$slug])) {
    $title = strtoupper($slug);
    for ($i = 0; $i < count($products); $i++) {
      if (!isset($products[$i]['tag']) || !is_array($products[$i]['tag'])) {
        continue;
      }
      foreach ($sectionAliases[$slug] as $aliasTag) {
        if (in_array($aliasTag, $products[$i]['tag'])) {
          array_push($filterProducts, $products[$i]);
          break;
        }
      }
    }
  } else {
    $title = $_GET["s"];
    for ($i = 0; $i < count($products); $i++) {
      if (
        isset($products[$i][$keyFind]) &&
        in_array($valueFind, $products[$i][$keyFind])
      ) {
        array_push($filterProducts, $products[$i]);
      }
    }
  }
  $products = $filterProducts;
}
if (isset($_GET['t'])) {
  $filterProducts = [];
  $keyFind = "tag";
  $valueFind = $_GET["t"];
  $title =  $title == ''  ? $_GET["t"]  :  $title . ' > ' . $_GET["t"];
  for ($i = 0; $i < count($products); $i++) {
    if (
      isset($products[$i][$keyFind]) &&
      in_array($valueFind, $products[$i][$keyFind])
    ) {
      array_push($filterProducts, $products[$i]);
    }
  }
}
foreach ($filterProducts as $objeto) {
  if (isset($objeto['tag']) && is_array($objeto['tag'])) {
    foreach ($objeto['tag'] as $section) {
      $tagsUse[$section] = true;
    }
  }
}
$countProducts = count($filterProducts);
$tagsUse = array_keys($tagsUse);
$itemsPerPage = 30;
$pagesNumberLast = $countProducts > 0 ? (int) ceil($countProducts / $itemsPerPage) : 0;
$pagesNumber = isset($_GET['page']) ? (int) $_GET['page'] : 1;

if ($pagesNumber < 1) {
  $pagesNumber = 1;
}
if ($pagesNumberLast > 0 && $pagesNumber > $pagesNumberLast) {
  $pagesNumber = $pagesNumberLast;
}

$enable_next = $pagesNumber < $pagesNumberLast;
$enable_prev = $pagesNumber > 1;
$filterProducts = array_values($filterProducts);
$offset = ($pagesNumber - 1) * $itemsPerPage;
$pagedProducts = array_slice($filterProducts, $offset, $itemsPerPage);

$buildPageUrl = function ($pageNumber) {
  $params = $_GET;

  if ($pageNumber <= 1) {
    unset($params['page']);
  } else {
    $params['page'] = $pageNumber;
  }

  $queryString = http_build_query($params);
  return URL_PATH . 'section' . (!empty($queryString) ? '?' . $queryString : '');
};

?>

<link rel="stylesheet" href="<?= URL_PATH ?>assets/css/section_card.css">
<div class="section-card-list">
<?php for ($i = 0; $i < count($pagedProducts); $i++) { ?>
  <a href="<?= URL_PATH ?>item/<?= $pagedProducts[$i]['id'] ?>" class="section-card">
    <div class="section-card-image">
      <img
        <?php if(substr($pagedProducts[$i]['img'][0], 0, strlen("http")) === "http" ){ ?>
          src="<?= $pagedProducts[$i]['img'][0] ?>"
        <?php  }else { ?>
          src="<?= URL_PATH ?>assets/img/<?= $pagedProducts[$i]['img'][0] ?>"
        <?php  } ?>
        alt="<?= $pagedProducts[$i]['title'] ?>"
        loading="lazy">
    </div>
    <div class="section-card-info">
      <div class="section-card-title">
        <?= $pagedProducts[$i]['title'] ?>
      </div>
      <div class="section-card-price">
        <?= number_format($pagedProducts[$i]['price'],0,'.',',') ?>円
      </div>
    </div>
  </a>
<?php } ?>
</div>

<?php if ($pagesNumberLast > 1) {
  $startPage = max(1, $pagesNumber - 2);
  $endPage = min($pagesNumberLast, $startPage + 4);
  $startPage = max(1, $endPage - 4);
?>
  <nav class="section-pagination" aria-label="Productos por página">
    <?php if ($enable_prev) { ?>
      <a class="section-page-link" href="<?= $buildPageUrl($pagesNumber - 1) ?>" aria-label="Página anterior">Anterior</a>
    <?php } ?>

    <?php for ($page = $startPage; $page <= $endPage; $page++) { ?>
      <?php if ($page == $pagesNumber) { ?>
        <span class="section-page-link is-active" aria-current="page"><?= $page ?></span>
      <?php } else { ?>
        <a class="section-page-link" href="<?= $buildPageUrl($page) ?>"><?= $page ?></a>
      <?php } ?>
    <?php } ?>

    <?php if ($enable_next) { ?>
      <a class="section-page-link" href="<?= $buildPageUrl($pagesNumber + 1) ?>" aria-label="Página siguiente">Siguiente</a>
    <?php } ?>
  </nav>
<?php } ?>

             