<?php
$url = explode('/', URL);
$data = file_get_contents('./const/products.json');
$products = json_decode($data, true);
$specific_value = $url[2];
$data = file_get_contents('./const/products.json');
$products = json_decode($data, true);
$filterSectionProducts = [];
for ($i = 0; $i < count($products); $i++) {
  if ($products[$i]["id"] == $specific_value) {
    $ProductsId = $products[$i];
  }
}

?>

<style>
    @media (max-width: 1024px) {
        .item-wrap {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 32px;
        }

        .item-img {
            float: none;
            width: 35%;
            min-width: 0;
            padding-right: 0;
            flex-shrink: 0;
        }

        .item-img .bx-wrapper {
            margin: 0;
        }

        .M_imageMainWrap .bx-wrapper .bx-viewport {
            aspect-ratio: 1;
        }

        .M_imageMainList-item {
            aspect-ratio: 1;
        }

        .M_imageMainList-item img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .item-detail {
            float: none;
            width: 65%;
            flex: 1;
        }

        .ttl_detail {
            font-size: 1.4rem;
            line-height: 1.3;
            margin-bottom: 10px;
        }

        .detail_price {
            font-size: 1.8rem !important;
        }

        .item-detail-info {
            font-size: 0.95rem;
        }
    }

    @media (max-width: 768px) {
        .item-wrap {
            gap: 12px;
        }

        .item-img {
            width: 40%;
        }

        .item-detail {
            width: 60%;
        }

        .ttl_detail {
            font-size: 1.2rem;
        }

        .detail_price {
            font-size: 1.6rem !important;
        }
    }

    /* Botón añadir al carrito */
    input[type="submit"] {
        background: linear-gradient(135deg, #368dc7 0%, #4ba0d9 100%);
        color: #fff;
        border: none;
        border-radius: 12px;
        padding: 16px 48px;
        font-size: 1.2rem;
        font-weight: 700;
        cursor: pointer;
        box-shadow: 0 4px 16px rgba(54, 141, 199, 0.25);
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-top: 24px;
        width: 100%;
        max-width: 400px;
    }

    input[type="submit"]:hover {
        background: linear-gradient(135deg, #4ba0d9 0%, #5db3ec 100%);
        box-shadow: 0 6px 24px rgba(54, 141, 199, 0.35);
        transform: translateY(-2px);
    }

    input[type="submit"]:active {
        transform: translateY(0);
        box-shadow: 0 2px 8px rgba(54, 141, 199, 0.3);
    }

    @media (max-width: 1024px) {
        input[type="submit"] {
            font-size: 2rem !important;
            padding: 20px 56px !important;
            border-radius: 14px !important;
            margin-top: 28px !important;
        }
    }

    @media (max-width: 768px) {
        input[type="submit"] {
            font-size: 1.8rem !important;
            padding: 18px 48px !important;
            max-width: 100% !important;
        }
    }
</style>

<div class="container_contents">

    <table border="0" cellspacing="0" cellpadding="0" width="770" id="makebanner">
        <tbody>
            <tr>
               

                <input type="hidden" name="id"><input type="hidden" name="passwd"><input type="hidden" name="type"
                    value="login">
                <td width="10">&nbsp;</td>
                <td valign="top" width="640" align="center">
                    <form name="all_view_menu" method="post" action="/shop/shopbrand.html"
                        style="margin: 0;padding: 0;">
                        <input type="hidden" name="search" value="">
                    </form>
                    <style type="text/css">
                        
                        input.m_price {
                            border: 0 none;
                            padding-right: 3px;
                            text-align: right;
                        }
                       
                    </style>
                    <form name="form1" method="post" action="/shop/basket.html">

                        <input type="hidden" name="product_id" value="<?= $ProductsId['id'] ?>">
                        <input type="hidden" name="product_name" value="<?= $ProductsId['title'] ?>">
                        <input type="hidden" name="product_amount" value="<?= $ProductsId['price'] ?>">
                <input type="hidden" name="product_quantity" value="1">
                        
 <input type="hidden" name="product_img" 
                  <?php if(substr($ProductsId['img'][0], 0, strlen("http")) === "http" ){ ?>
                  value="<?= $ProductsId['img'][0] ?>"
                  <?php  }else { ?>
                  value="<?= URL_PATH ?>assets/img/<?= $ProductsId['img'][0] ?>"
                  <?php  } ?>
                  >


                        <div class="main-contents" id="detail">
                            <!--<a href="/#info" class="vacation_notice" style="color: #fff; text-decoration: none; background: black; padding: 15px; display: block; margin-bottom: 15px;">
          <span class="vacation_text" style="display: block; font-size: 22px; margin-bottom: 10px;">GW休暇のお知らせ</span>
          出荷や加工日程など詳細はこちら
     </a>-->
                            <div class="detail_category">
                                
                                &gt;
                                <font color="red">
                                    <?= isset($ProductsId['title']) ? htmlspecialchars($ProductsId['title']) : '' ?>
                                </font>
                                <br>
                                <?php if (!empty($ProductsId['section'])): ?>
                                    <span class="product-section">
                                        <?php foreach ($ProductsId['section'] as $section): ?>
                                            <a href="<?= URL_PATH ?>section?s=<?= urlencode($section) ?>" class="section-tag" style="background:#f7f7fa; color:#4838c7; border-radius:4px; padding:2px 8px; margin-right:4px; font-size:0.95em; text-decoration:none; display:inline-block; transition:background 0.2s ease;">
                                                <?= htmlspecialchars($section) ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </span>
                                <?php endif; ?>
                                <?php if (!empty($ProductsId['tag'])): ?>
                                    <span class="product-tag">
                                        <?php foreach ($ProductsId['tag'] as $tag): ?>
                                            <a href="<?= URL_PATH ?>section?t=<?= urlencode($tag) ?>" class="tag-label" style="background:#e0e0e0; color:#222; border-radius:4px; padding:2px 8px; margin-right:4px; font-size:0.95em; text-decoration:none; display:inline-block; transition:background 0.2s ease;">
                                                <?= htmlspecialchars($tag) ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="section clear item-wrap">
                                <div class="item-img">
                                    <div class="M_imageMainWrap">
                                        <div class="bx-wrapper" style="max-width: 100%;">
                                            <div class="bx-viewport"
                                                style="width: 100%; overflow: hidden; position: relative; height: 437.318px;">
                                                <div class="M_imageMainList" style="width: auto; position: relative;">
                                                    <div class="M_imageMainList-item" id="image_main_0"
                                                        style="float: none; list-style: none; position: absolute; width: 655.99px; z-index: 0; display: none;">
                                                        <img src="https://makeshop-multi-images.akamaized.net/mizosports/shopimages/26/82/3_000000008226.jpg?1757049921"
                                                            alt="LUKA.77 PF Gone Camping ルカ.77 PF ルカ・ドンチッチ ジョーダン 【HF0819-003】 バスケ バッシュ 靴 シューズ 2025/9/4">
                                                    </div>
                                                    <div class="M_imageMainList-item" id="image_main_1"
                                                        style="float: none; list-style: none; position: absolute; width: 655.99px; z-index: 50;">
                                                        <img  <?php
                        $i = 0;
                        if (substr($ProductsId['img'][$i], 0, strlen("http")) === "http") { ?>
                    src="<?= $ProductsId['img'][$i] ?>"
                    <?php  } else { ?>
                    src="<?= URL_PATH ?>assets/img/<?= $ProductsId['img'][$i] ?>"
                    <?php  } ?>  alt="<?= htmlspecialchars($ProductsId['title']) ?>">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="bx-controls bx-has-controls-direction">
                                               
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="item-detail">
                                    <p class="detail_maker"></p>
                                    <h2 class="ttl_detail"><?= $ProductsId['title'] ?>
                                           </h2>
                                    <div class="item-detail-info">
                                        <p class="detail_price">
                                           <?= number_format($ProductsId['price'],0,'.',',') ?>円
                                        </p>
                                        <?= $ProductsId['description'] ?>

                                        
                                    </div>
                                    
                                   
                                        <?= $ProductsId['infoCart'] ?>
                                   
                                </div>
                            </div>

                            <input type="hidden" name="brandcode" value="000000008226">
                            <input type="hidden" name="typep" value="">
                            <input type="hidden" name="ordertype">
                            <input type="hidden" name="opts">


                            <input type="submit" value="カートに入れる">




                            <!--最近チェックした商品-->




                        </div>
                    </form>




                </td>
            </tr>
            <tr>
                <td colspan="4"> </td>
            </tr>
        </tbody>
    </table>

    <!--//wrapper-->
</div>