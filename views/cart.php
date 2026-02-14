<div class="main-contents" id="basket">
    <h2>買い物かご</h2>
    
    <div class="section basket-wrap">
        <table class="basket">
            <thead>
                <tr>
                    <th colspan="3">商品情報</th>
                    <th>数量</th>
                    <th>価格</th>
                    <th>削除</th>
                </tr>
            </thead>
            <tbody id="cart-items-tbody">
                <!-- Los items del carrito se insertarán aquí dinámicamente con JS -->
            </tbody>
            <tr>
                <td colspan="7" class="basket-haisou">
                    <div class="carriageWrap">
                        <p class="carriageMsg1"></p>
                        <p class="carriageMsg2"></p>
                    </div>
                </td>
            </tr>
           
        <tr>
            <td colspan="7" class="basket-total">
                
                <dl class="total-wrap">
                    <dt class="total-item">合計金額：</dt>    
                    <dd class="total-price"><em>2,900円 (税込)</em></dd>
                </dl>
            </td>
        </tr>
          
        </tbody></table> 
        
        <div class="btn-wrap clear">
            <div class="btn-wrap-order">
                <a href="<?= URL_PATH ?>finishOrder" class="btn">購入手続きへ進む</a>
            </div>
        </div>
    </div>
</div>