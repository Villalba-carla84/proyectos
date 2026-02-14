const NAME_FORM_ID='ssssdas'
const SUBMIT_FORM_FINISHORDER_DIV=".payment-wrap"
const SUBMIT_FORM_FINISHORDER_HTML=`
    <div style="text-align: center; padding: 60px 20px; background: #f9f9f9; border-radius: 8px; margin: 40px auto; max-width: 700px;">
        <div style="background: #4CAF50; color: white; padding: 20px; border-radius: 8px 8px 0 0; margin: -60px -20px 30px -20px;">
            <h2 style="margin: 0; font-size: 2rem;">✓ ご注文ありがとうございます</h2>
        </div>
        <div style="padding: 20px;">
            <p style="font-size: 1.2rem; margin-bottom: 20px; color: #333;">
                <strong>{REPLACE_NAME}</strong> 様
            </p>
            <p style="font-size: 1rem; line-height: 1.8; color: #555; margin-bottom: 30px;">
                ご注文を承りました。<br>
                注文確認メールを <strong>{REPLACE_EMAIL_SEND}</strong> 宛に送信いたしました。<br>
                メールが届かない場合は、迷惑メールフォルダをご確認ください。
            </p>
            <div style="background: #fff; border: 2px solid #e0e0e0; border-radius: 8px; padding: 20px; margin-bottom: 30px;">
                <p style="font-size: 0.9rem; color: #666; margin-bottom: 10px;">注文番号</p>
                <p style="font-size: 1.5rem; font-weight: bold; color: #333; margin: 0;">{REPLACE_ID}</p>
            </div>
            <div style="background: #fff; border: 2px solid #e0e0e0; border-radius: 8px; padding: 20px; margin-bottom: 30px;">
                <p style="font-size: 0.9rem; color: #666; margin-bottom: 10px;">合計金額</p>
                <p style="font-size: 1.8rem; font-weight: bold; color: #4CAF50; margin: 0;">{REPLACE_PRICE}</p>
            </div>
            <p style="font-size: 0.95rem; line-height: 1.6; color: #777; margin-bottom: 30px;">
                商品の発送準備が整い次第、発送完了メールをお送りいたします。<br>
                ご不明な点がございましたら、お気軽にお問い合わせください。
            </p>
            <a href="{REPLACE_URL_PATH}" style="display: inline-block; background: #4838c7; color: white; padding: 15px 40px; text-decoration: none; border-radius: 5px; font-size: 1rem; transition: background 0.3s;">
                トップページへ戻る
            </a>
        </div>
    </div>
`
const SUBMIT_FORM_REGISTER_DIV="main"
const SUBMIT_FORM_REGISTER_HTML=`


`

const SUBMIT_FORM_CONTACT_DIV="#form"
const SUBMIT_FORM_CONTACT_HTML=`

<p>
回答の送信が完了しました。 <br><br>
ご回答ありがとうございました。
</p>
  `
const FORM_CART_ITEMS_POINT=".sg-table.pc-table.-cell-padding.-cell-border.-cell-middle"
const FORM_CART_ITEMS_POINT_FINISH="table.cart-items tbody"
const FORM_CART_TOTAL_QUANTITY="#cart_total_quantity"
const FORM_CART_TOTAL_PRICE="#cart_total_amount"
const FORM_CART_ITEM_FINISH=`
 <tr>
    <td class="FS2_GoodsImage_td" rowspan="1"><a href="${URL_PATH}item/{ID}" ><img src="{IMG}" style="  width: 100px;" border="0" width="50"></a>&nbsp;</td>
    <td class="FS2_GoodsName_td"><a href="${URL_PATH}item/{ID}" >{NAME}</a></td>
    <td class="FS2_cartTable_unitPrice">
        <span class="FS2_Cart_price_taxIncl">{PRICE}</span>
    </td>
    <td class="FS2_cartTable_amount" rowspan="1">{QUANTITY}</td>
    <td class="FS2_cartTable_subtotal" rowspan="1">
        {PRICE_QUANTITY}
    </td>
</tr>
`
const FORM_CART_ITEM=`
    <div class="pc-row  mb-cell  mb-clearfix"  id="form_70792">
        <div class="pc-cell">
            <div class="pr-image">
            <p><img src="{IMG}" alt=""></p>
            <br>
            <form style="   " id="delete_item_cart" method="post"><input type="hidden" value="{ID}" name="id" > 
                <button class="src-components-cart-___LineItems__remove___YMME9"  type="submit" id="zigzag-test__cart-item-delete-0">×削除</button>
            </form>
            </div>
            <div class="pr-data">
            <p class="pr-name"> <a href="${URL_PATH}item/{ID}">{NAME}</a> </p>
            <p class="pr-price">
                単価：
                <span class="pr-price-value">{PRICE}</span> 円
            </p>
            </div>
        </div>
        <div class="pc-cell  pr-amount prd_change">
            <label class="pc-none" for="amount_00701697">数量：</label>
            <form id="modification_item_cart" method="post" style="display: flex; justify-content: flex-start;" >
            <input type="hidden" value="{ID}"  name="id" >
            <input type="number" id="amount_00701697"  min=1 name="product_quantity" value="{QUANTITY}">
            <input type="submit"  style="    border: none; display: block; margin: 0 auto;" value="変更">
            </form>       

            
        </div>
        <div class="pc-cell  pr-subtotal">
            <span class="pc-none">小計：</span>
            <span class="pr-subtotal-value">  {PRICE_QUANTITY}</span> 円
        </div>
    </div>
`
    // <tr>
    //     <td class="FS2_GoodsImage_td" rowspan="1">
    //         <a href="${URL_PATH}item/{ID}" ><img src="{IMG}" style="    width: 100px;" border="0"></a>&nbsp;
    //     </td>
    //     <td class="FS2_GoodsName_td">
    //        {NAME}
    //     </td>
    //     <td class="FS2_cartTable_unitPrice">
    //         <span class="FS2_Cart_price_taxIncl">{PRICE}</span>
    //     </td>
    //     <td class="FS2_cartTable_amount" rowspan="1">
    //         <form id="modification_item_cart" method="post" style="display: flex; justify-content: flex-start;" ><input type="hidden" value="{ID}"  name="id" ><input type="number" style="    width: 100%;" min=1 name="product_quantity" value="{QUANTITY}"><input type="submit"  style="    border: none; display: block; margin: 0 auto;" value="変更"></form>       
    //     </td>
    //     <td class="FS2_cartTable_subtotal" rowspan="1">
    //         {PRICE_QUANTITY}
    //     </td>
    //     <td class="FS2_cartTable_delete" rowspan="1">
    //         <form style="   " id="delete_item_cart" method="post"><input type="hidden" value="{ID}" name="id" > 
    //             <button class="src-components-cart-___LineItems__remove___YMME9"  type="submit" id="zigzag-test__cart-item-delete-0">消去</button>
    //         </form>
    //     </td>
    // </tr>

  
const EMAIL_REGISTER=`
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録完了</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Helvetica Neue', Arial, sans-serif; background-color: #f4f4f4;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f4f4f4; padding: 20px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #368dc7 0%, #2e7ab8 100%); padding: 40px 30px; text-align: center;">
                            <h1 style="color: #ffffff; margin: 0; font-size: 28px; font-weight: 600;">会員登録完了</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px 30px;">
                            <p style="color: #333333; font-size: 16px; line-height: 1.6; margin: 0 0 20px;">
                                ${TIENDA_NAME_1}への会員登録が完了しました。
                            </p>
                            <div style="background-color: #f8f9fa; border-left: 4px solid #368dc7; padding: 20px; margin: 20px 0; border-radius: 4px;">
                                <p style="margin: 0 0 10px; color: #666; font-size: 14px; font-weight: 600;">ログイン情報</p>
                                <p style="margin: 5px 0; color: #333;"><strong>メールアドレス:</strong> {USER}</p>
                                <p style="margin: 5px 0; color: #333;"><strong>パスワード:</strong> {PASS}</p>
                            </div>
                            <p style="color: #666666; font-size: 14px; line-height: 1.6; margin: 20px 0;">
                                ログイン情報は大切に保管してください。
                            </p>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f8f9fa; padding: 30px; text-align: center; border-top: 1px solid #e0e0e0;">
                            <p style="color: #999999; font-size: 12px; margin: 0;">
                                このメールに心当たりがない場合は、お手数ですが削除してください。<br>
                                © 2024 ${TIENDA_NAME_1}. All rights reserved.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
`

const EMAIL_CART=`
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ご注文ありがとうございます</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Helvetica Neue', Arial, sans-serif; background-color: #f4f4f4;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f4f4f4; padding: 20px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #368dc7 0%, #2e7ab8 100%); padding: 40px 30px; text-align: center;">
                            <h1 style="color: #ffffff; margin: 0; font-size: 28px; font-weight: 600;">ご注文ありがとうございます</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px 30px;">
                            <p style="color: #333333; font-size: 16px; line-height: 1.6; margin: 0 0 20px;">
                                {TIENDA_1}でのご注文を承りました。
                            </p>
                            
                            <!-- Payment Method -->
                            <div style="background-color: #f8f9fa; border-left: 4px solid #368dc7; padding: 20px; margin: 20px 0; border-radius: 4px;">
                                <p style="margin: 0 0 10px; color: #666; font-size: 14px; font-weight: 600;">お支払い方法</p>
                                <p style="margin: 0; color: #333; font-size: 16px;">{REPLACE_PAYMENT_METHOD}</p>
                            </div>
                            
                            <!-- Order Items -->
                            <h2 style="color: #333333; font-size: 20px; margin: 30px 0 15px; padding-bottom: 10px; border-bottom: 2px solid #368dc7;">ご注文内容</h2>
                            <table width="100%" cellpadding="12" cellspacing="0" style="border-collapse: collapse; margin-bottom: 20px;">
                                <thead>
                                    <tr style="background-color: #f8f9fa;">
                                        <th style="text-align: left; padding: 12px; border-bottom: 2px solid #dee2e6; color: #666; font-size: 14px;">商品名</th>
                                        <th style="text-align: center; padding: 12px; border-bottom: 2px solid #dee2e6; color: #666; font-size: 14px;">数量</th>
                                        <th style="text-align: right; padding: 12px; border-bottom: 2px solid #dee2e6; color: #666; font-size: 14px;">小計</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {REPLACE_ITEMS}
                                </tbody>
                            </table>
                            
                            <!-- Total -->
                            <div style="background-color: #f8f9fa; padding: 20px; border-radius: 4px; margin-top: 20px;">
                                <table width="100%" cellpadding="8" cellspacing="0">
                                    <tr>
                                        <td style="color: #666; font-size: 14px;">合計数量:</td>
                                        <td style="text-align: right; color: #333; font-size: 16px; font-weight: 600;">{TOTAL_QUANTITY}点</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #666; font-size: 14px; padding-top: 10px; border-top: 1px solid #dee2e6;">合計金額:</td>
                                        <td style="text-align: right; color: #368dc7; font-size: 22px; font-weight: 700; padding-top: 10px; border-top: 1px solid #dee2e6;">{TOTAL_AMOUNT}</td>
                                    </tr>
                                </table>
                            </div>
                            
                            <p style="color: #666666; font-size: 14px; line-height: 1.6; margin: 30px 0 0;">
                                発送準備が整い次第、改めてご連絡させていただきます。<br>
                                ご不明な点がございましたら、お気軽にお問い合わせください。
                            </p>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f8f9fa; padding: 30px; text-align: center; border-top: 1px solid #e0e0e0;">
                            <p style="color: #999999; font-size: 12px; margin: 0 0 10px;">
                                このメールは自動送信されています。返信はできません。<br>
                                © 2024 {TIENDA_1}. All rights reserved.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
`

const EMAIL_CONTACT=`
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Helvetica Neue', Arial, sans-serif; background-color: #f4f4f4;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f4f4f4; padding: 20px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #368dc7 0%, #2e7ab8 100%); padding: 40px 30px; text-align: center;">
                            <h1 style="color: #ffffff; margin: 0; font-size: 28px; font-weight: 600;">お問い合わせ</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px 30px;">
                            <div style="background-color: #f8f9fa; border-left: 4px solid #368dc7; padding: 20px; margin: 20px 0; border-radius: 4px;">
                                <p style="margin: 0 0 10px; color: #666; font-size: 14px; font-weight: 600;">お客様情報</p>
                                <p style="margin: 5px 0; color: #333;"><strong>お名前:</strong> {NAME}</p>
                                <p style="margin: 5px 0; color: #333;"><strong>メールアドレス:</strong> {MAIL}</p>
                                <p style="margin: 5px 0; color: #333;"><strong>件名:</strong> {SUBJECT}</p>
                            </div>
                            
                            <h2 style="color: #333333; font-size: 18px; margin: 30px 0 15px; padding-bottom: 10px; border-bottom: 2px solid #368dc7;">お問い合わせ内容</h2>
                            <div style="background-color: #ffffff; border: 1px solid #e0e0e0; padding: 20px; border-radius: 4px; color: #333; font-size: 14px; line-height: 1.8; white-space: pre-wrap;">
{TEXTO}
                            </div>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f8f9fa; padding: 30px; text-align: center; border-top: 1px solid #e0e0e0;">
                            <p style="color: #999999; font-size: 12px; margin: 0;">
                                © 2024 ${TIENDA_NAME_1}. All rights reserved.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
`

const CREDIT_CART_VALUE= "NO APLICA"
const CREDIT_CART_HTML= `NO APLICA`
const CREDIT_CART_INPUT_NAME= "paymentMethod"
const CREDIT_CART_DIV= "NO APLICA"
const modelItemHistoryOrder = `
    <tr class="c-table__title-block">
        <td class="c-table__title">{DATE}</td>
        <td class="c-table__title">{DESCRIPTION}</td>
        <td class="c-table__title">{AMOUNT}</td>
    </tr>
`
function appendItemsBasket (point,html) {
if( $(point).length ){
    $(point).append(html)
    if(!html){
        $(point).eq(0).html('<h2>あなたのカートは空です</h2>')
    }
}
}

function drawFinishOrder (){
    console.log("dibujo finish order")
}
const changeCard=(name)=>{
    $("li.fs-c-checkout-paymentMethod").removeClass("is-active")

    $("input[name='"+name+"']:checked").closest("li.fs-c-checkout-paymentMethod").addClass("is-active")

    

}
function drawCard(paymentMethod){
    $('input[type=radio][name='+paymentMethod+']').change(function() {
        changeCard(paymentMethod)
    });
    changeCard(paymentMethod)
}

function drawPaymentMethod(){

    if(!CREDIT_CART_INPUT_NAME && !CREDIT_CART_VALUE){
        return console.log("agregado de tarjeta sin configurar")
    }
 
    drawCard(CREDIT_CART_INPUT_NAME)

 
}
function drawMyAccount(){
    if(userOrderListFinalized.length){
        userOrderListFinalized.forEach(itemHistoryOrder=>{
            $("#table-history-order tbody").append(
                modelItemHistoryOrder
                .replace(/{DATE}/,itemHistoryOrder.date)
                .replace(/{DESCRIPTION}/,itemHistoryOrder.description.join('<br>'))
                .replace(/{AMOUNT}/,itemHistoryOrder.price)
            )
        })

    }else{
        $("#table-history-order tbody").html('<td colspan="6" class="c-table__content c-table__content--empty">注文データはありません</td>')
    }
     
}
function drawCart(isFinish=false){
    // carrito de compras
    let blank_html=FORM_CART_ITEM
    let pointTableItems=FORM_CART_ITEMS_POINT
    if(isFinish){
        blank_html=FORM_CART_ITEM_FINISH
        pointTableItems=FORM_CART_ITEMS_POINT_FINISH

    }
    let htmlCart=""
    let totalAmount=0
    let totalProduct=0
    myCart.forEach( itemCart => {
        totalProduct+=itemCart.product_quantity
        totalAmount+=(itemCart.product_amount*itemCart.product_quantity)
        htmlCart+=blank_html
        .replace(/{IMG}/g,itemCart.product_img)
        .replace(/{NAME}/g,itemCart.product_name)
        .replace(/{QUANTITY}/g,itemCart.product_quantity)
        .replace(/{PRICE}/g,formatPonja(itemCart.product_amount))
        .replace(/{PRICE_QUANTITY}/g,formatPonja(itemCart.product_amount*itemCart.product_quantity))
        .replace(/{ID}/g,itemCart.id)
    });

  

    appendItemsBasket(pointTableItems,htmlCart)
    
    $(FORM_CART_TOTAL_PRICE).text(formatPonja(totalAmount))
    $(FORM_CART_TOTAL_QUANTITY).text(totalProduct)
    $("#cart_total_amount_cta").text(formatPonja(totalAmount))

    $(".quantity_items_card").text(`合計 ${totalProduct} アイテム`)
}
const formatPonja = ( number ) => {
    const toNumber=typeof number == 'number' ? number : parseFloat(number);
    return new Intl.NumberFormat('ja-JP', { style: 'currency', currency: 'JPY' }).format( toNumber ) +" (税込)"
}
const crudCart = {
    'modification': (data)=>{
        const id=data['id']
        console.log("modification: ",data)
        cart.setItemNotRepeat(id,data)
    },
    'delete': (data)=>{
        const id=data['id']
        console.log("delete: ",data)
        cart.deleteItem(id)
    }
}
const showToastError = (message) => {
    console.log("toast error:   ",message)
    alert(message)
    // $(".toast-error-msj").text(message)
    // $(".toast-error").show()

    // $(".toast-error .fs-c-panel--error").show()
    // window.scrollTo(0, 0);
    
    // setTimeout(()=>$(".toast-error  .fs-c-panel--error").hide()+$(".toast-error").hide(),5000)
}
const emailSend = (body,callback ) => {
    $.post(URL_PATH+"email",body , function( data ) {
        console.log("respnse email",data)
        callback(true)
    });
}
const getCartInfo = () => {
    let totalQuantity=0;
    let totalPrice=0;
    const products=[]
    myCart.forEach(itemcart=>{
        totalQuantity+=itemcart.product_quantity
        totalPrice+=itemcart.product_amount*itemcart.product_quantity
        products.push({
            name:itemcart.product_name,
            price:formatPonja(itemcart.product_amount),
            quantity:itemcart.product_quantity,
            price_quantity:formatPonja(itemcart.product_amount*itemcart.product_quantity)
        })
    })
    return {totalQuantity,totalPrice:formatPonja(totalPrice),products}
}
const sendEmailFunction = {
    'register': (data,callback)=>{
        const html=EMAIL_REGISTER
        .replace(/{USER}/g,data.email)
        .replace(/{PASS}/g,data.password)
        const body={
            email:data.email,
            headerMSJ:`お問い合わせありがとうございます （${TIENDA_NAME_1}）`,
            html
        }
        emailSend(body,callback)
    },
    'order': (data,callback)=>{
        const {totalPrice,totalQuantity,products}=getCartInfo()
        const htmlProducts=products.map(element=> `
            <tr style="border-bottom: 1px solid #dee2e6;">
                <td style="padding: 12px; color: #333; font-size: 14px;">${element.name}</td>
                <td style="padding: 12px; text-align: center; color: #666; font-size: 14px;">${element.quantity}</td>
                <td style="padding: 12px; text-align: right; color: #333; font-size: 14px; font-weight: 600;">${element.price_quantity}</td>
            </tr>
        `).join('')
        const html=EMAIL_CART
        .replace(/{REPLACE_ITEMS}/g,htmlProducts)
        .replace(/{TOTAL_QUANTITY}/g,totalQuantity)
        .replace(/{TOTAL_AMOUNT_QUANTITY}/g,totalPrice)
        .replace(/{TOTAL_AMOUNT}/g,totalPrice)
        .replace(/{TIENDA_1}/g,TIENDA_NAME_1)
        .replace(/{REPLACE_PAYMENT_METHOD}/g,data.paymentMethod)

        const body={
            email:data.email,
            headerMSJ:"ご注文ありがとうございます　自動返信メール",
            html
        }
        emailSend(body,callback)
    },
    'contact': (data,callback)=>{
        const html=EMAIL_CONTACT
        .replace(/{MAIL}/g,data.email)
        .replace(/{TEXTO}/g,data.textarea)
        .replace(/{NAME}/g,data.name)
        .replace(/{SUBJECT}/g,data.subject)
        const body={
            email:EMAIL_SEND,
            headerMSJ:"接触",
            html
        }
        emailSend(body,callback)
    }
}


const formFunction = {
    'itemcart': (data)=>{
        const id=data['product_id']
        if(!id)
            return showToastError("注文を完了できませんでした")
        // alert("カートに追加されました")
        cart.setItemNotRepeat(id,data,['product_quantity'])
        window.location.href = URL_PATH+"cart";

    },
    'cart': (data)=>{
        const id=data['firstEmail']
        if(!id)
            return showToastError("注文を完了できませんでした")
        userOrder.setItemNotRepeat(id,data)
        window.location.href = URL_PATH+"finishOrder";
    },
    'finishOrder':(data)=>{
        console.log("data fishn", data)
        if(!data['firstEmail'])
            data=userOrderList[0]
        const id=data['firstEmail']
    
        const paymentMethod=data['paymentMethod']

        const name= data['lastName']+" "+ data['firstName']
        if(!id)
            return showToastError("注文を完了できませんでした 1")
        if(!id || id.indexOf("@") == -1)
            return showToastError("注文を完了できませんでした 2")
        $(".loader").addClass("on")
        let price=0
        let description=[]
        myCart.forEach(itemcart=>{
            price+=itemcart.product_amount*itemcart.product_quantity
            description.push(itemcart.product_name)
        })
        sendEmailFunction['order']({email:id,paymentMethod},function(result){
            $(".loader").removeClass("on")
            listOrder.setItemNotRepeat(new Date().getTime(),{
                description,
                price,
                date:new Date().toDateString()
            })
            if(result){
                cart.deleteAll()
                scrollTo(0, 0);
               $(SUBMIT_FORM_FINISHORDER_DIV).html(
                    SUBMIT_FORM_FINISHORDER_HTML
                  .replace(/{REPLACE_NAME}/g,name)
                    .replace(/{REPLACE_EMAIL_SEND}/g,EMAIL_SEND)
                    .replace(/{REPLACE_URL_PATH}/g,URL_PATH)
                    .replace(/{REPLACE_ID}/g,new Date().getTime())
                    .replace(/{REPLACE_PRICE}/g,formatPonja(price))

                )
            }else{
                showToastError("注文を完了できませんでした ")
            }
        })
        
    },
    'register':(data)=>{
        const id=data['firstEmail']
        const password=data['firstPassword']
        data['password']=password

        if(data['passwordConfirmation'])
            if(data['passwordConfirmation'] != password)
                return showToastError("パスワードが一致しません")
        if(userDB.getItem(id).length ){
            return showToastError("既にこのメールアドレスでは登録されています。")
        }
        $(".loader").addClass("on")
        sendEmailFunction['register']({email:id,password},function(result){
            $(".loader").removeClass("on")
            if(result){
                window.scroll(0,0)
                userDB.setItemNotRepeat(id,data)
                // $(SUBMIT_FORM_REGISTER_DIV).html(
                //     SUBMIT_FORM_REGISTER_HTML
                //     .replace(/{EMAIL_SEND}/g,EMAIL_SEND)
                //     .replace(/{URL_PATH}/g,URL_PATH)
                //     .replace(/{REPLACE_ID}/g,new Date().getTime())
                // )
                
                setTimeout(()=>{window.location.href = URL_PATH+"login";},5400)
                alert("登録が完了しました")


            }else{
                showToastError("登録を完了できませんでした")
            }
        })

    },
    'login':(data)=>{
        const id=data['firstEmail']
        const password=data['firstPassword']
        const findByEmail=userDB.getItem(id)
        console.log({id})
        console.log({list:userDB.getAll()})
        console.log({findByEmail})
        if(!findByEmail.length || findByEmail[0]?.password != password){
            console.log({list:userDB.getAll()})
            console.log({id,password})
            return showToastError("間違った認証情報")
        }
        
        alert("セッションが正常に開始されました")
        userLogin.setItemNotRepeat(id,findByEmail[0])
        userOrder.setItemNotRepeat(id,findByEmail[0])
        setTimeout(()=>window.location.reload(),1000)

    },
    'myAccount':(data)=>{
        const id=data['id']
        userLogin.setItemNotRepeat(id,data)
        userOrder.setItemNotRepeat(id,data)
        userDB.setItemNotRepeat(id,data)
        $(".loader").addClass("on")
        setTimeout(()=>{
            $(".loader").removeClass("on")
            window.location.href = URL_PATH+"myAccount";
        },1400)
    },
    'contact':(data)=>{
        const email=data['firstEmail']
        const text=data['firstTextarea']
        data['textarea']=text
        $(".loader").addClass("on")
        sendEmailFunction['contact']({...data,email},function(result){
            $(".loader").removeClass("on")
            if(result){
                  
               $(SUBMIT_FORM_CONTACT_DIV).html(
                SUBMIT_FORM_CONTACT_HTML
                .replace(/{EMAIL_SEND}/g,EMAIL_SEND)
                .replace(/{URL_PATH}/g,URL_PATH)
                .replace(/{REPLACE_ID}/g,new Date().getTime())
            )

            }else{
                showToastError("注文を完了できませんでした")
            }
        })

    }
}


const autoCompleteByOrder = () =>{
    if( userOrderList.length ){
        console.log("cuenta order!",userOrderList)
        Object.keys(userOrderList[0]).forEach(ee=>{

            if($(` input[name='${ee}']`).length){
                const type=$(` input[name='${ee}']`).attr('type')
                if(['text','number','hidden','email','password','tel' ].includes(type)){
                    $(` input[name='${ee}']`).val(userOrderList[0][ee])

                }
            }

            if($(`textarea[name='${ee}']`).length){
                $(`textarea[name='${ee}']`).val(userOrderList[0][ee]);
            }

            if($(`select[name='${ee}']`).length){
                $(`select[name='${ee}']`).val(userOrderList[0][ee]).change();
            }

            if($(`input:radio[name="${ee}"][value="${userOrderList[0][ee]}"]`).length){
                $(`input:radio[name="${ee}"][value="${userOrderList[0][ee]}"]`).prop('checked',true);
            }
            if($(`span[name="${ee}"]`).length){
                $(`span[name="${ee}"]`).text(userOrderList[0][ee] || '指定なし')
            }

        })

    }

}


const  redirect=(pages) => {
    if( userLoginList.length && ( pages.includes('/login') ||  pages.includes('/register')) ){
        console.log("redirect")
        console.log("cuenta logueada!",userLoginList)
        window.location.href = URL_PATH+"myAccount";
    }
    if( !userLoginList.length &&  pages.includes('/myAccount') ){
        console.log("redirect")
        window.location.href = URL_PATH+"login";
    }
}

const userDB=new db('user')
const userLogin=new db('login')
const cart=new db('cart')
const userOrder=new db('order')
const listOrder=new db('listOrder')
const userOrderFinalized=new db('listOrder')
const myCart=cart.getAll()
const userLoginList=userLogin.getAll()
const userOrderList=userOrder.getAll()
const userOrderListFinalized=userOrderFinalized.getAll()


const userLoginOn=()=>{
    const isLogin= userLoginList.length > 0
    if(isLogin){
        // Ocultar botones de login/register
        $("#header_login").hide()
        $("#header_mypage").hide()
        
        // Mostrar menú de usuario
        $("#header_user_menu").show()
        
        // Obtener nombre del usuario logeado
        const userName = userLoginList[0]?.firstName || userLoginList[0]?.id || 'Usuario'
        $("#header_user_name").text(userName)
        
        // Manejar logout
        $(document).on('click', '#header_logout', function(event) {
            event.preventDefault();
            userLogin.deleteAll()
            userOrder.deleteAll()
            setTimeout(()=>window.location.reload(),1000)
        })
        
        // También mantener compatibilidad con logout_form si existe
        $(document).on('click', '#logout_form', function(event) {
            event.preventDefault();
            userLogin.deleteAll()
            userOrder.deleteAll()
            setTimeout(()=>window.location.reload(),1000)
        })
    }else{
        $("#header_login").show()
        $("#header_mypage").show()
        $("#header_user_menu").hide()
    }
 
}

$( document ).ready(function() {

    // auto complete all forms
    const url= window.location.href
    redirect(url)
    autoCompleteByOrder()

    userLoginOn()


    // draw by url
    if( url.includes('/cart') || url.includes('/shopping')  ){
        drawPaymentMethod()
        drawCart()
    }

    if( url.includes('/myAccount') ){
        drawMyAccount()
    }

    if(url.includes('/finishOrder')){
        drawPaymentMethod()
        drawCart(true)
        drawFinishOrder()
        
        // Evento click para el botón de confirmar pedido
        $(document).on('click', '.checkout-confirm', function(event) {
            event.preventDefault();
            $('#main-form').submit();
        });
        
        // Toggle para mostrar/ocultar info de métodos de pago
        $('input[name="pay-method"]').on('change', function() {
            // Ocultar todos los info boxes
            $('#paymethod_Y_info, #paymethod_B_info, #paymethod_R_info').hide();
            
            // Mostrar el info box del método seleccionado
            const selectedMethod = $(this).val();
            if(selectedMethod === 'Y') {
                $('#paymethod_Y_info').show();
            } else if(selectedMethod === 'B') {
                $('#paymethod_B_info').show();
            } else if(selectedMethod === 'R') {
                $('#paymethod_R_info').show();
            }
        });
    }
    $(document).on("change", $('input[name="basic"][type="radio"]'), function () {
        const paymentMethodType = $('input[name="basic"][type="radio"]:checked').val()
        if (paymentMethodType == 'クレジットカード')
            return $("div#basic-creditCards-collapsible").addClass("active")
        $("div#basic-creditCards-collapsible").removeClass("active")

    })

    if( $('input[name="basic"][type="radio"]').length )
         $('input[name="basic"][type="radio"]').eq(0).click()

    // submit by url
    $(document).on('submit', 'form', function(event) {
        event.preventDefault();
        event.stopPropagation();
        console.log("stop submit ")
        const formId=$(this).attr("id")
        var $inputs = $(this).find(':input');
        let values={}
        let firstPassword=""
        let firstEmail=""
        let firstTextarea=""

        $inputs.each(function() {
            const type=$(this).attr('type')
            let val
            if(['text','number','hidden','email','password','tel','search'].includes(type)){
                val=$(this).val()
                if(!firstPassword && type=='password')
                    firstPassword=val
                if(!firstEmail && type=='email')
                    firstEmail=val
            }
            if(['checkbox','radio'].includes(type)){
                val=$(`input[name='${$(this).attr('name')}']:checked`).val()
            }
            values[`${this.name}`] = isNaN(val)?val:parseInt(val);
        });

        $(this).find('textarea').each(function(){
            const val=$(this).val()
            if(this.name)
                values[`${this.name}`]  = val;
            if(!firstTextarea)
                firstTextarea=val
        })

        $(this).find('select').each(function() {
            const val=$(this).val()
            values[`${this.name}`]  = val;
        })
        if(values[NAME_FORM_ID])
            values['id']=values[NAME_FORM_ID]

        if(firstPassword)
            values['firstPassword']=firstPassword

        if(firstEmail){
            values['firstEmail']=firstEmail
            if(!NAME_FORM_ID && !values[NAME_FORM_ID])
                values['id']=firstEmail
        }

        if(firstTextarea)
            values['firstTextarea']=firstTextarea


        console.log('DATA FORM ',values)
        if(formId=='modification_item_cart'){
            crudCart.modification(values)
            return window.location.reload()
        }
        if(formId=='delete_item_cart'){
            crudCart.delete(values)
            return window.location.reload()
        }

        if( formId=='search_form' ){
            return window.location.href = URL_PATH+"section?q="+values['q']
        }


        if( url.includes('/item') ){
            formFunction.itemcart(values)
        }



        if( url.includes('/cart') || url.includes('/shopping')  ){
            formFunction.cart(values)
        }

        if(url.includes('/finishOrder')){
            formFunction.finishOrder(values)
        }


        if(url.includes('/register')){
            formFunction.register(values)
        }


        if(url.includes('/login')){
            formFunction.login(values)
        }


        if(url.includes('/myAccount')){
            formFunction.myAccount(values)
        }

        if(url.includes('/contact')){
            formFunction.contact(values)
        }
        




    })



    

})
// Carrusel de imágenes para home
$(document).ready(function() {
  if ($('.carousel-track').length) {
    const $track = $('.carousel-track');
    const $items = $track.find('.carousel-item');
    const $btnPrev = $('[data-btn-prev]');
    const $btnNext = $('[data-btn-next]');
    const $pagination = $('#pagination');
    let currentIndex = 0;
    const totalItems = $items.length;
    let autoSlideInterval;

    // Crear paginación
    for (let i = 0; i < totalItems; i++) {
      $pagination.append(`<span class="pagination-dot" data-index="${i}"></span>`);
    }

    function updateCarousel(index) {
      currentIndex = (index + totalItems) % totalItems;
      $track.css('transform', `translateX(-${currentIndex * 100}%)`);
      $pagination.find('.pagination-dot').removeClass('active');
      $pagination.find(`.pagination-dot[data-index='${currentIndex}']`).addClass('active');
    }

    function nextSlide() {
      updateCarousel(currentIndex + 1);
    }
    function prevSlide() {
      updateCarousel(currentIndex - 1);
    }

    $btnNext.on('click', nextSlide);
    $btnPrev.on('click', prevSlide);
    $pagination.on('click', '.pagination-dot', function() {
      updateCarousel(parseInt($(this).attr('data-index')));
    });

    function startAutoSlide() {
      autoSlideInterval = setInterval(nextSlide, 4000);
    }
    function stopAutoSlide() {
      clearInterval(autoSlideInterval);
    }

    $('.carousel').on('mouseenter', stopAutoSlide);
    $('.carousel').on('mouseleave', startAutoSlide);

    // Inicializar
    updateCarousel(0);
    startAutoSlide();
  }
});

// ============================================================
// UTILIDADES GLOBALES
// ============================================================

// Función para contar caracteres (2 bytes para caracteres multibyte)
function charcount(str) {
    var len = 0;
    var str_escaped = escape(str);
    for (var i = 0; i < str_escaped.length; i++, len++) {
        if (str_escaped.charAt(i) == "%") {
            if (str_escaped.charAt(++i) == "u") {
                i += 3;
                len++;
            }
            i++;
        }
    }
    return len;
}

// Validar formato de email
function check_email_format(email_value) {
    return email_value.match(/@([A-Za-z0-9-]+\.)+[A-Za-z0-9]{2,}$/) !== null;
}

// Validar kana (detectar半角カナ)
function check_kana(moji, str) {
    var kekka = 0;
    var txt = "ｱｲｳｴｵｶｷｸｹｺｻｼｽｾｿﾀﾁﾂﾃﾄﾅﾆﾇﾈﾉﾊﾋﾌﾍﾎﾏﾐﾑﾒﾓﾔﾕﾖﾗﾘﾙﾚﾛﾜｦﾝｧｨｩｪｫｬｭｮｯｰ､｡｢｣ﾞﾟ";
    for (var i = 0; i < moji.value.length; i++) {
        if (txt.indexOf(moji.value.charAt(i), 0) >= 0) {
            kekka++;
        }
    }
    if (kekka > 0) {
        var errorName = $(moji).attr('name') + '-error';
        $('#' + errorName).html(str + "半角カナ文字が含まれています。<br>全角で入力してください。").show();
        moji.focus();
    }
    return kekka;
}

// Validar que no contenga caracteres de ancho completo
function check_hantai(obj, str) {
    var kekka = 0;
    for (var i = 0; i < obj.value.length; i++) {
        var dore = escape(obj.value.charAt(i));
        if (navigator.appName.indexOf("Netscape") != -1) {
            if (dore.length > 3 && dore.indexOf("%") != -1) kekka++;
        } else {
            if (dore.length > 4) kekka++;
        }
    }
    if (kekka > 0) {
        var errorName = $(obj).attr('name') + '-error';
        $('#' + errorName).html(str + "全角文字が含まれています。<br>半角で入力してください。").show();
        $(obj).focus();
    }
    return kekka;
}

// Validar email (con mensaje de error)
function check_email(obj, str) {
    var is_matched = obj.value.match(/^\s*[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\s*$/) !== null;
    if (!is_matched) {
        var errorName = $(obj).attr('name') + '-error';
        $('#' + errorName).text(str + "正確ではありません。もう一度ご入力ください。").show();
        obj.focus();
    }
    return is_matched;
}

// ============================================================
// PAGE: SECTION (Lista de productos y búsqueda)
// ============================================================

function initSection() {
    if (!window.location.href.includes('/section')) return;
    
    function setQueryStringParamAndRedirect(name, value, clear = false) {
        let urlObj = new URL(window.location.href);
        if (clear) {
            urlObj.searchParams.delete('q');
            urlObj.searchParams.delete('skip');
            urlObj.searchParams.delete('sort');
        }
        urlObj.searchParams.set(name, value);
        if (name == 't' || name == 's' || name == 'sort')
            urlObj.searchParams.set('skip', 0);
        window.location.href = urlObj.toString();
    }

    $("#find_f_category1").change(function () {
        const text = $("#find_f_category1 option[value='" + this.value + "']").text();
        const parts = text.split(">");
        const section = parts[0];
        const tag = parts[1];
        
        if (tag)
            return setQueryStringParamAndRedirect("t", tag.trim());
        return setQueryStringParamAndRedirect("s", section.trim());
    });
}

// ============================================================
// PAGE: CONTACT (Formulario de contacto)
// ============================================================

function initContact() {
    if (!window.location.href.includes('/contact')) return;
    
    // Inicializar checkbox y botón
    $("#agree").attr("checked", false);
    $("#send_btn").prop("disabled", true);
    
    // Toggle del botón cuando se hace clic en el checkbox
    $("#agree").on("click", function () {
        if ($(this).is(':checked')) {
            $("#send_btn").removeClass("disabled").prop("disabled", false);
        } else {
            $("#send_btn").addClass("disabled").prop("disabled", true);
        }
    });

    // Detectar si es smartphone
    $('input[name=is_smartphone]').val($('.smartphoneHide').css('display') == 'none' ? 'Y' : 'N');
    
    // Validación del formulario antes de enviar
    $('form[name="contact"]').on('submit', function (e) {
        e.preventDefault();
        
        $(".errorMesseage").html("");
        var is_error = false;

        // Validar nombre
        if ($('input[name="name"]').val().length == 0) {
            $("#name_error").html('名前を入力して下さい。');
            if (is_error == false) {
                $('input[name="name"]').focus();
            }
            is_error = true;
        } else if (charcount($('input[name="name"]').val()) > 40) {
            $("#name_error").html('名前は全角20字以内でご入力ください');
            if (is_error == false) {
                $('input[name="name"]').focus();
            }
            is_error = true;
        }

        // Validar email
        if ($('input[name="email"]').val().length == 0) {
            $("#email_error").html('メールアドレスを入力して下さい。');
            if (is_error == false) {
                $('input[name="email"]').focus();
            }
            is_error = true;
        } else if (!check_email_format($('input[name="email"]').val())) {
            $("#email_error").html('メールアドレス形式でご入力ください。');
            if (is_error == false) {
                $('input[name="email"]').focus();
            }
            is_error = true;
        }

        // Validar contenido
        if ($('textarea[name="content"]').val().length == 0) {
            $("#content_error").html('お問い合わせ内容を入力して下さい。');
            if (is_error == false) {
                $('textarea[name="content"]').focus();
            }
            is_error = true;
        } else if (charcount($('textarea[name="content"]').val()) > 4000) {
            $("#content_error").html('お問い合わせ内容は全角2000字以内でご入力ください');
            if (is_error == false) {
                $('textarea[name="content"]').focus();
            }
            is_error = true;
        }

        // Validar checkbox
        if (!$('#agree').is(':checked')) {
            $("#agree_error").html('同意するにチェックしてください');
            if (is_error == false) {
                $('#agree').focus();
            }
            is_error = true;
        }

        // Si no hay errores, enviar el formulario
        if (is_error == false) {
            if (confirm('お問い合わせを送信します。よろしいですか？')) {
                this.submit();
            }
        }
    });
}

// ============================================================
// PAGE: CART (Carrito de compras)
// ============================================================

function initCart() {
    if (!window.location.href.includes('/cart') && !window.location.href.includes('/shopping')) return;
    
    // Renderizar items del carrito con botón eliminar y edición de cantidad
    const tbody = $('#cart-items-tbody');
    tbody.empty();
    let totalAmount = 0;
    let totalProduct = 0;
    
    if (typeof myCart !== 'undefined' && myCart.length) {
        myCart.forEach(itemCart => {
            totalProduct += itemCart.product_quantity;
            totalAmount += (itemCart.product_amount * itemCart.product_quantity);
            let html = `<tr>
                <td class="FS2_GoodsImage_td" rowspan="1"><a href="${URL_PATH}item/${itemCart.id}" ><img src="${itemCart.product_img}" style="width: 100px;" border="0" width="50"></a>&nbsp;</td>
                <td class="FS2_GoodsName_td"><a href="${URL_PATH}item/${itemCart.id}" >${itemCart.product_name}</a></td>
                <td class="FS2_cartTable_unitPrice">
                    <span class="FS2_Cart_price_taxIncl">${formatPonja(itemCart.product_amount)}</span>
                </td>
                <td class="FS2_cartTable_amount" rowspan="1">
                    <form id="modification_item_cart" method="post" style="display: flex; align-items: center;">
                        <input type="hidden" value="${itemCart.id}" name="id" >
                        <input type="number" min="1" name="product_quantity" value="${itemCart.product_quantity}" style="width: 60px; margin-right: 4px;">
                        <input type="submit" value="変更" style="border: none; background: #eee; padding: 2px 8px; cursor: pointer;">
                    </form>
                </td>
                <td class="FS2_cartTable_subtotal" rowspan="1">
                    ${formatPonja(itemCart.product_amount * itemCart.product_quantity)}
                </td>
                <td class="FS2_cartTable_delete" rowspan="1">
                    <form id="delete_item_cart" method="post" style="display:inline;">
                        <input type="hidden" value="${itemCart.id}" name="id" >
                        <button class="src-components-cart-___LineItems__remove___YMME9" type="submit" style="background:none;border:none;font-size:20px;color:#d00;cursor:pointer;">×</button>
                    </form>
                </td>
            </tr>`;
            tbody.append(html);
        });
    } else {
        tbody.html('<tr><td colspan="7"><h2>あなたのカートは空です</h2></td></tr>');
    }

    // Actualizar totales
    $('.total-price em').text(formatPonja(totalAmount));

    // Delegar eventos para modificar y borrar
    tbody.on('submit', 'form#modification_item_cart', function (event) {
        event.preventDefault();
        const id = $(this).find('input[name="id"]').val();
        const quantity = $(this).find('input[name="product_quantity"]').val();
        crudCart.modification({ id, product_quantity: parseInt(quantity) });
        window.location.reload();
    });
    tbody.on('submit', 'form#delete_item_cart', function (event) {
        event.preventDefault();
        const id = $(this).find('input[name="id"]').val();
        crudCart.delete({ id });
        window.location.reload();
    });
}

// ============================================================
// PAGE: REGISTER (Formulario de registro)
// ============================================================

function initRegister() {
    if (!window.location.href.includes('/register')) return;
    
    // AutoKana para nombres
    if (typeof $.fn.autoKana !== 'undefined') {
        $.fn.autoKana('input[name="hname"]', 'input[name="kname"]', { katakana: true });
        if ($('input[name="office_name"]').length != 0 && $('input[name="office_name_kana"]').length != 0) {
            $.fn.autoKana('input[name="office_name"]', 'input[name="office_name_kana"]', { katakana: true });
        }
    }

    // Validación de kana en tiempo real
    function validateKanaField(inputField, errorElement, fieldText) {
        if (inputField.value.length > 0) {
            check_kana(inputField, fieldText + 'に');
        } else {
            errorElement.hide().text("");
        }
    }

    // Eventos de input para validación
    $('input[name="hname"]').on('input', function () {
        setTimeout(() => {
            var knameField = document.querySelector('input[name="kname"]');
            validateKanaField(knameField, $('#kname-error'), 'お名前（フリガナ）');
        }, 100);
    });

    $('input[name="office_name"]').on('input', function () {
        setTimeout(() => {
            var officeNameKanaField = document.querySelector('input[name="office_name_kana"]');
            validateKanaField(officeNameKanaField, $('#office_name_kana-error'), '会社名（フリガナ）');
        }, 100);
    });

    // Control del botón de envío con checkbox
    $('#send_btn').prop('disabled', true);
    $('#agree').on('click', function () {
        const isDisabled = $('#send_btn').prop('disabled');
        $('#send_btn').prop('disabled', !isDisabled);
    });

    // Setup validación para todos los campos
    const fields = [
        'hname', 'office_name', 'kname', 'office_name_kana', 'office_dept_name',
        'password1', 'password2', 'email', 'email2', 'emailreceive', 'sex',
        'birthday', 'hpost', 'hphone', 'haddress1', 'haddress2', 'haddress',
        'ophone', 'opost', 'oaddress', 'etcphone', 'hp_email', 'fax', 'oaddress1', 'id'
    ];

    function setupInputValidation(inputName, errorElementSelector) {
        const errorElement = $(errorElementSelector);
        if (!errorElement.attr('role')) {
            errorElement.attr('role', 'alert').attr('aria-live', 'polite');
        }
        $('[name="' + inputName + '"]').on('input', function () {
            // Limpiar error al escribir
        });
    }

    fields.forEach(function (name) {
        setupInputValidation(name, '#' + name + '-error');
    });
}

// Función de validación de password para registro
function validateMemberPassword() {
    var password = $('input[name=password1]').val();
    if (password.length == 0) {
        return 'パスワードをご入力ください。';
    }
    if (password.length < 8 || password.length > 16) {
        return 'パスワードは8文字以上16文字以下でご入力ください。';
    }
    // すべてアルファベットかどうか
    if (password.match(/^[A-Za-z]+$/)) {
        return 'パスワードに数字を含めてください。';
    }
    // すべて数字かどうか
    if (password.match(/^[0-9]+$/)) {
        return 'パスワードに英字を含めてください。';
    }
    // 半角英数字のみで構成されているか
    if (!password.match(/^[0-9A-Za-z]+$/)) {
        return 'パスワードは半角英数字のみでご入力ください。';
    }

    var email = $('input[name=email]').val();
    var email_info = email.split('@');
    var email_account = email_info[0];
    if (email_account != '' && password.indexOf(email_account) != -1) {
        return 'パスワードにメールアドレスのアカウント名を含めることはできません。';
    }
    return '';
}

// Búsqueda de dirección por código postal para registro
window.findZipcode = function(type) {
    var zipcode = $('#' + type + 'post').val();
    if (zipcode.length != 7 || !zipcode.match(/\d{7}$/)) {
        return;
    }
    getAddress(zipcode, type);
}

function getAddress(zipcode, type) {
    jQuery.getJSON('https://post.makeshop.jp/address/?c=?&m=jsonp&t=1&z=' + zipcode, function (json) {
        if (json.prefecture_id) {
            $('#' + type + 'address1').val(json.prefecture_name);
            $('#' + type + 'address2').val(json.city_name);
        }
    });
}

// ============================================================
// INICIALIZACIÓN GLOBAL
// ============================================================

$(document).ready(function() {
    // Inicializar cada página según la URL
    initSection();
    initContact();
    initCart();
    initRegister();
});
