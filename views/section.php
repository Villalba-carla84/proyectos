<?php
$data = file_get_contents('./const/products.json');
$products = json_decode($data, true);
$filterProducts = [];
$tagsUse = [];
$MAX_LIMIT = 12;
$SKIP = !empty($_GET['skip']) ? intval($_GET['skip']) : 0;
$START_INDEX = $MAX_LIMIT * $SKIP;
$LAST_INDEX = $START_INDEX + $MAX_LIMIT;
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
  $title = $_GET["s"];
  for ($i = 0; $i < count($products); $i++) {
    if (
      isset($products[$i][$keyFind]) &&
      in_array($valueFind, $products[$i][$keyFind])
    ) {
      array_push($filterProducts, $products[$i]);
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
$pagesNumber = $SKIP + 1;
$pagesNumberLast = $filterProducts ? ceil(count($filterProducts) / $MAX_LIMIT) : 0;
$enable_next = !empty($filterProducts[$LAST_INDEX + 1]) ? true : false;
$enable_prev = $START_INDEX !== 0 ? true : false;
$filterProducts =  array_splice($filterProducts, $START_INDEX, $MAX_LIMIT);

?>

<link rel="stylesheet" href="<?= URL_PATH ?>assets/css/section_card.css">
<div class="section-card-list">
<?php for ($i = 0; $i < count($filterProducts); $i++) { ?>
  <a href="<?= URL_PATH ?>item/<?= $filterProducts[$i]['id'] ?>" class="section-card">
    <div class="section-card-image">
      <img
        <?php if(substr($filterProducts[$i]['img'][0], 0, strlen("http")) === "http" ){ ?>
          src="<?= $filterProducts[$i]['img'][0] ?>"
        <?php  }else { ?>
          src="<?= URL_PATH ?>assets/img/<?= $filterProducts[$i]['img'][0] ?>"
        <?php  } ?>
        alt="<?= $filterProducts[$i]['title'] ?>"
        loading="lazy">
    </div>
    <div class="section-card-info">
      <div class="section-card-title">
        <?= $filterProducts[$i]['title'] ?>
      </div>
      <div class="section-card-price">
        <?= number_format($filterProducts[$i]['price'],0,'.',',') ?>円
      </div>
    </div>
  </a>
<?php } ?>
</div>

             