<?php
$data = file_get_contents('./const/products.json');
$products = json_decode($data, true);


?>

<div class="container_contents">

     <div class="carousel">

          <div class="controls">
               <button data-btn-prev>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
               </button>
               <button data-btn-next>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
               </button>
          </div>


          <div class="carousel-track">
               <div class="carousel-item"><a href="<?= URL_PATH ?>section?s=NBA[エヌビーエー]"><img
                              src="<?= URL_PATH ?>assets/img/imgHome/15953533551152.jpg" alt="imagen 1"></a></div>
               <div class="carousel-item"><a href="<?= URL_PATH ?>section?s=JORDAN[ジョーダン]"><img
                              src="<?= URL_PATH ?>assets/img/imgHome/bnr_jordan.jpg" alt="Imagen 2" /></a></div>
               <div class="carousel-item"><a href="<?= URL_PATH ?>section?s=ZAMST[ザムスト]"><img
                              src="<?= URL_PATH ?>assets/img/imgHome/banner_hozin.jpg" alt="Imagen 3" /></a></div>
               <div class="carousel-item"><a href="<?= URL_PATH ?>section?s=Nike[ナイキ]"><img
                              src="<?= URL_PATH ?>assets/img/imgHome/nike.jpg" alt="Imagen 4" /></a></div>
               <div class="carousel-item"><a href="<?= URL_PATH ?>section?s=EGOZARU[エゴザル]"><img
                              src="<?= URL_PATH ?>assets/img/imgHome/bnr_top_long_embroidery.jpg" alt="Imagen 5" /></a>
               </div>
               <div class="carousel-item"><a href="<?= URL_PATH ?>section?s=molten[モルテン]&t=バスケットボール"><img
                              src="<?= URL_PATH ?>assets/img/imgHome/banner_ball.jpg" alt="Imagen 6" /></a></div>
          </div>


          <div class="pagination" id="pagination"></div>
     </div>

     <!--recomendados-->
     <div class="main-contents" id="index">
          <div class="section index-new item-list">
               <div class="ttl_content_wrap">
                    <h3 class="ttl_content"><span class="en">RECOMMENDED</span><span class="ja">今日のおすすめ</span></h3>
               </div>
               <link rel="stylesheet" href="<?= URL_PATH ?>assets/css/section_card.css">
               <div class="section-card-list">
               <?php
                    $max_items = 20;
                    $total = count($products);
                    if ($total > 0) {
                         $random_keys = array_rand($products, min($max_items, $total));
                         if (!is_array($random_keys)) $random_keys = [$random_keys];
                         $selected = [];
                         foreach ($random_keys as $i) {
                              $selected[] = $products[$i];
                         }
                         while (count($selected) < $max_items && $total > 0) {
                              $selected[] = $products[array_rand($products)];
                         }
                         foreach ($selected as $product) {
                              if (!isset($product['id'], $product['img'][0], $product['title'], $product['price'])) continue;
               ?>
               <a href="<?= URL_PATH ?>item/<?= $product['id'] ?>" class="section-card">
                 <div class="section-card-image">
                   <img
                     <?php if(substr($product['img'][0], 0, strlen("http")) === "http" ){ ?>
                       src="<?= $product['img'][0] ?>"
                     <?php  }else { ?>
                       src="<?= URL_PATH ?>assets/img/<?= $product['img'][0] ?>"
                     <?php  } ?>
                     alt="<?= $product['title'] ?>"
                     loading="lazy">
                 </div>
                 <div class="section-card-info">
                   <div class="section-card-title">
                     <?= $product['title'] ?>
                   </div>
                   <div class="section-card-price">
                     <?= number_format($product['price'],0,'.',',') ?>円
                   </div>
                 </div>
               </a>
               <?php }
                    }
               ?>
               </div>
          </div>

  </div>
</div>