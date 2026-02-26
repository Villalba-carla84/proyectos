<section class="payment-wrap">

    <!------step------>
    <div class="payment-step pdng-t12 pdng-b16" id="payment-step">
        <ul class="flex-box flex-box-steps">
            <li class="pdng-tb8 "><span>ログイン・会員登録</span><span class="step-nonactive"></span></li>
            <li class="pdng-tb8 active"><span>確認・修正</span><span class="step-active"></span></li>
            <li class="pdng-tb8 "><span>完了</span><span class="step-nonactive"></span></li>
        </ul>
    </div>
    <!------step------> <!------step------>
    <!------案内文表示------>
    <div class="payment-notice-caution font-09 pdng-rl32 mg-b24"></div>
    <div class="payment-notice font-09 pdng-rl32 mg-b24"></div>
    <!------案内文表示------>

  <div class="block">
        <div class="flex-box flex-wrap">
            <!------注文者情報・決済方法など------>
            <div class="payment-main">
<form id="main-form">
    <input type="hidden" name="recaptchaResponse" id="recaptchaResponse">
                <!-- 自動配送分割 -->
                

                <!----複数配送---->
                
                <!----通常配送のお届け先---->
                            <div class="step_item_box bdr-line-gray-btm pdng-tb24">
            <div class="flex-box pdng-b16">
                <p class="step_item_title font-1-1 font-bold">
                    お届け先
                </p>
            </div>
            <div>
                <div class="payment-form-inner mg-auto">
                    <div class="pdng-b16 mg-auto">
                        <label class="form-label req-icon font-08 pdng-l16">お名前</label>
                        <input type="text" id="receiver-name" name="firstName" maxlength="40" class="form-input" placeholder="例）山田太郎" value="">
                        <p id="receiver-name-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                            お名前をご入力ください。
                        </p>
                    </div>
                    <div class="pdng-b16 mg-auto">
                        <label class="form-label req-icon font-08 pdng-l16">お名前（フリガナ）</label>
                        <input type="text" id="receiver-nameKana" name="lastName" maxlength="40" class="form-input" placeholder="例）ヤマダタロウ" value="">
                        <p id="receiver-nameKana-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                            お名前（フリガナ）をご入力ください。</p>
                    </div>
                    <div class="pdng-b16 mg-auto">
                        <label class="form-label req-icon font-08 pdng-l16">メールアドレス</label>
                        <input type="email" id="receiver-email" name="email" maxlength="255" class="form-input" placeholder="例）info@example.com" value="">
                        <p id="receiver-email-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                            メールアドレスをご入力ください。
                        </p>
                    </div>
                    <div class="pdng-b16 mg-auto">
                        <label class="form-label req-icon font-08 pdng-l16">電話番号</label>
                        <input type="tel" id="receiver-tel" name="tel" maxlength="15" class="form-input" placeholder="例）08001234567" value="">
                        <p id="receiver-tel-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                            電話番号をご入力ください。
                        </p>
                    </div>
                    <div class="pdng-b16 mg-auto">
                        <label class="form-label req-icon font-08 pdng-l16">郵便番号</label>
                        <input type="tel" id="receiver-zipCode" name="zipCode" class="form-input" maxlength="8" placeholder="例）1508512" value="">
                        <p id="receiver-zipCode-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                            郵便番号をご入力ください。</p>
                    </div>
                    <div class="pdng-b16 mg-auto">
                        <label class="form-label req-icon font-08 pdng-l16">都道府県</label>
                        <div class="select-wrap">
                            <select id="receiver-prefectureId" name="prefectureId">
                                <option value="">選択してください</option>
                                <option value="1">北海道</option>
                                <option value="2">青森県</option>
                                <option value="3">岩手県</option>
                                <option value="4">宮城県</option>
                                <option value="5">秋田県</option>
                                <option value="6">山形県</option>
                                <option value="7">福島県</option>
                                <option value="8">茨城県</option>
                                <option value="9">栃木県</option>
                                <option value="10">群馬県</option>
                                <option value="11">埼玉県</option>
                                <option value="12">千葉県</option>
                                <option value="13">東京(23区内)</option>
                                <option value="14">東京(23区外)</option>
                                <option value="15">神奈川県</option>
                                <option value="16">新潟県</option>
                                <option value="17">富山県</option>
                                <option value="18">石川県</option>
                                <option value="19">福井県</option>
                                <option value="20">山梨県</option>
                                <option value="21">長野県</option>
                                <option value="22">岐阜県</option>
                                <option value="23">静岡県</option>
                                <option value="24">愛知県</option>
                                <option value="25">三重県</option>
                                <option value="26">滋賀県</option>
                                <option value="27">京都府</option>
                                <option value="28">大阪府</option>
                                <option value="29">兵庫県</option>
                                <option value="30">奈良県</option>
                                <option value="31">和歌山県</option>
                                <option value="32">鳥取県</option>
                                <option value="33">島根県</option>
                                <option value="34">岡山県</option>
                                <option value="35">広島県</option>
                                <option value="36">山口県</option>
                                <option value="37">徳島県</option>
                                <option value="38">香川県</option>
                                <option value="39">愛媛県</option>
                                <option value="40">高知県</option>
                                <option value="41">福岡県</option>
                                <option value="42">佐賀県</option>
                                <option value="43">長崎県</option>
                                <option value="44">熊本県</option>
                                <option value="45">大分県</option>
                                <option value="46">宮崎県</option>
                                <option value="47">鹿児島県</option>
                                <option value="48">沖縄県</option>
                            </select>
                        </div>
                        <p id="receiver-prefectureId-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                            都道府県を選択してください。</p>
                    </div>
                    <div class="pdng-b16 mg-auto">
                        <label class="form-label req-icon font-08 pdng-l16">市区町村</label>
                        <input type="text" id="receiver-address1" name="address1" maxlength="200" class="form-input" placeholder="例）渋谷区" value="">
                        <p id="receiver-address1-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                            市区町村をご入力ください。</p>
                    </div>
                    <div class="pdng-b16 mg-auto">
                        <label class="form-label req-icon font-08 pdng-l16">それ以降の住所</label>
                        <input type="text" id="receiver-address2" name="address2" maxlength="120" class="form-input" placeholder="例）○○町1-1-1" value="">
                        <p id="receiver-address2-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                            それ以降の住所をご入力ください。</p>
                    </div>
                </div>
            </div>
                        <!--複数配送設定-->
                                        <!--複数配送設定-->
        </div>
    
    <div id="standy_htmls" style="display:none;">
        
  <div id="_delivery_date_info" class="form-wrap">
                    <div id="delivery-date-info" class="payment-form pdng-24 delivery-date-info" multiple-delivery-id="">
            
                        <p class="pdng-b24 font-bold font-1-2 ">
                お届け希望時間帯
            </p>
            <div class="payment-form-inner mg-auto mg-b32 pdng-l16 pdng-r16">
                <div class="pdng-b24 mg-auto">
                    <div class="select-wrap">
                        <select id="delivery-time" name="delivery-time" class="delivery-time-select">
                                                        <option value="指定なし" selected="">
                                指定なし                            </option>
                                                        <option value="午前中">
                                午前中                            </option>
                                                        <option value="14:00-16:00">
                                14:00-16:00                            </option>
                                                        <option value="16:00-18:00">
                                16:00-18:00                            </option>
                                                        <option value="18:00-20:00">
                                18:00-20:00                            </option>
                                                        <option value="19:00-21:00">
                                19:00-21:00                            </option>
                                                    </select>
                    </div>

                <div class=" font-08 pdng-t16 pdng-l8 delivery-time-comment perm-html">
                                            ※配達時間の指定は配送方法が宅配便の場合のみ可能です。                                        </div>
                </div>
            </div>
            
            <div id="delivery_date_info_modal_error_div" style="display: none;">
                <div class="payment-notice font-07"></div>
                <div class="payment-notice-caution font-07"></div>
            </div>

            <div class="flex-box">
            <input id="html_delivery_date_info_decision" type="button" value="この内容で変更する" class="font-1 pdng-24 w9 mg-auto modal-close" onclick="html_delivery_date_info_decision()">
            </div>
        </div>
        
       
    </div><div id="_receiver_info" class="form-wrap form-switching">
    <div id="receiver-info" class="payment-form pdng-24">
        <p class="pdng-b32 font-bold font-1-2">
            お届け先の変更
            <!-- アドレス帳リンク -->
                <span id="view_list" name="view_list" class="font-08 crl-accent mg-l32 font-normal form-switching-btn">アドレス帳から選ぶ</span>
        </p>
        <div class="payment-form-inner mg-auto mg-b32 pdng-l16 pdng-r16">
            <div class="pdng-b24 mg-auto">
                <label class="form-label req-icon font-08 pdng-l16">お名前</label>
                <input type="text" id="receiver-name" name="receiver-name" maxlength="40" class="form-input" placeholder="例）山田太郎" value="">
                <p id="receiver-name-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                    お名前をご入力ください。
                </p>
            </div>
            <div class="pdng-b24 mg-auto">
                <label class="form-label req-icon font-08 pdng-l16">お名前（フリガナ）</label>
                <input type="text" id="receiver-nameKana" name="receiver-nameKana" maxlength="40" class="form-input" placeholder="例）ヤマダタロウ" value="">
                <p id="receiver-nameKana-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                    お名前（フリガナ）をご入力ください。</p>
            </div>
            
                        <div class="pdng-b24 mg-auto">
                <label class="form-label req-icon font-08 pdng-l16">電話番号</label>
                <input type="tel" id="receiver-tel" name="receiver-tel" maxlength="15" class="form-input" placeholder="例）08001234567" value="">
                <p id="receiver-tel-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                    電話番号をご入力ください。
                </p>
            </div>
            <div class="pdng-b24 mg-auto">
                <label class="form-label req-icon font-08 pdng-l16">郵便番号</label>
                <input type="tel" id="receiver-zipCode" name="receiver-zipCode" class="form-input" maxlength="8" placeholder="例）1508512" value="">
                <p id="receiver-zipCode-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                    郵便番号をご入力ください。</p>
            </div>
            <div class="pdng-b24 mg-auto">
                <label class="form-label req-icon font-08 pdng-l16">都道府県</label>
                <div class="select-wrap">
                    <select id="receiver-prefectureId" name="receiver-prefectureId">
                        <option value="">選択してください</option>
                                                <option value="1">北海道</option>
                                                <option value="2">青森県</option>
                                                <option value="3">岩手県</option>
                                                <option value="4">宮城県</option>
                                                <option value="5">秋田県</option>
                                                <option value="6">山形県</option>
                                                <option value="7">福島県</option>
                                                <option value="8">茨城県</option>
                                                <option value="9">栃木県</option>
                                                <option value="10">群馬県</option>
                                                <option value="11">埼玉県</option>
                                                <option value="12">千葉県</option>
                                                <option value="13">東京(23区内)</option>
                                                <option value="14">東京(23区外)</option>
                                                <option value="15">神奈川県</option>
                                                <option value="16">新潟県</option>
                                                <option value="17">富山県</option>
                                                <option value="18">石川県</option>
                                                <option value="19">福井県</option>
                                                <option value="20">山梨県</option>
                                                <option value="21">長野県</option>
                                                <option value="22">岐阜県</option>
                                                <option value="23">静岡県</option>
                                                <option value="24">愛知県</option>
                                                <option value="25">三重県</option>
                                                <option value="26">滋賀県</option>
                                                <option value="27">京都府</option>
                                                <option value="28">大阪府</option>
                                                <option value="29">兵庫県</option>
                                                <option value="30">奈良県</option>
                                                <option value="31">和歌山県</option>
                                                <option value="32">鳥取県</option>
                                                <option value="33">島根県</option>
                                                <option value="34">岡山県</option>
                                                <option value="35">広島県</option>
                                                <option value="36">山口県</option>
                                                <option value="37">徳島県</option>
                                                <option value="38">香川県</option>
                                                <option value="39">愛媛県</option>
                                                <option value="40">高知県</option>
                                                <option value="41">福岡県</option>
                                                <option value="42">佐賀県</option>
                                                <option value="43">長崎県</option>
                                                <option value="44">熊本県</option>
                                                <option value="45">大分県</option>
                                                <option value="46">宮崎県</option>
                                                <option value="47">鹿児島県</option>
                                                <option value="48">沖縄県</option>
                                            </select>
                </div>
                <p id="receiver-prefectureId-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                    都道府県を選択してください。</p>
            </div>
            <div class="pdng-b24 mg-auto">
                <label class="form-label req-icon font-08 pdng-l16">市区町村</label>
                <input type="text" id="receiver-address1" name="receiver-address1" maxlength="200" class="form-input" placeholder="例）渋谷区" value="">
                <p id="receiver-address1-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                    市区町村をご入力ください。</p>
            </div>
            <div class="pdng-b24 mg-auto">
                <label class="form-label req-icon font-08 pdng-l16">それ以降の住所</label>
                <input type="text" id="receiver-address2" name="receiver-address2" maxlength="120" class="form-input" placeholder="例）○○町1-1-1" value="">
                <p id="receiver-address2-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                    それ以降の住所をご入力ください。</p>
            </div>
        </div>
        <!-- アドレス帳登録 -->
        
    <div class="flex-box-center payment-check-box mg-b24" id="add-address-book-area">
        <input id="in-address-book" name="add-address-book" type="checkbox" value="1">
        <label class="font-08" for="in-address-book">
            このお届け先をアドレス帳に登録する
        </label>
    </div>

        <div id="receiver_info_modal_error_div" style="display: none;">
            <div class="payment-notice font-07"></div>
            <div class="payment-notice-caution font-07"></div>
        </div>

        <div class="flex-box mg-b24">
            <input id="update_receiver" type="button" value="この内容で変更する" class="font-1 pdng-24 w9 mg-auto modal-close">
        </div>
            </div>

    <!-- アドレス帳フォーム -->
        <div id="receiver-list" class="payment-form pdng-24" style="display:none;">
        <p class="pdng-b32 font-bold font-1-2">アドレス帳リスト
            <span id="view_ordered_list" class="font-08 crl-accent mg-l32 font-normal form-switching-btn">注文履歴から選ぶ</span>
        </p>
        <div class="payment-form-inner mg-auto mg-b32 pdng-l16 pdng-r16">
                    </div>
                <div class="payment-form-inner mg-auto mg-tb32">
            <p class="font-1-2 font-bold txt-center txt-lineh-1-6">
                アドレス帳が登録されていません。
            </p>
        </div>
        
        <div class="flex-box mg-b24">
            <input id="overwrite_receiver" type="button" value="決定" class="font-1 pdng-24 w9 mg-auto modal-close" style="display:none;">
        </div>
        <div class="flex-box">
            <button id="bind_receiver_info" type="button" class="font-08 pdng-16 w9 mg-auto txt-center bdr-line-normal address-reset" style="display:none;">住所を編集</button>
        </div>

        
            <input type="hidden" name="db" value="mizosports">
            <input type="hidden" name="ssl_tempid" value="e6cc730c45282488929caaff25689270">
            <input type="hidden" name="login_id" value="260204000001">
            <input type="hidden" name="type" value="ins">
        
    </div>


        <div id="ordered-list" class="payment-form pdng-24" style="display:none;">
        <p class="pdng-b32 font-bold font-1-2">注文履歴
            <span id="view_receiver_info" name="view_receiver_info" class="font-08 crl-accent mg-l32 font-normal form-switching-btn">お届け先の変更へ戻る</span>
        </p>
        <div class="payment-form-inner mg-auto mg-b32 pdng-l16 pdng-r16">
                        <div class="payment-form-radio mg-auto mg-b16">

                <input type="radio" id="ordered-list-item-0" name="ordered-past-receiver" value="0" data-receiver-name="lola" data-receiver-namekana="ponce" data-receiver-tel="008-0123-4567" data-receiver-zipcode="1508512" data-receiver-prefectureid="13" data-receiver-address1="渋谷区桜丘町26番1号" data-receiver-address2="Ituzaza 123" checked="">

                <label class="font-08 pdng-tb16" for="ordered-list-item-0">
                    <p class="font-bold font-09 pdng-b8 arrival-address-info-name">
                       <span class="font-07 font-normal mg-l16"></span>
                    </p>
                                        <p class="font-08 pdng-b4 arrival-address-postcode">
                                           </p>
                    <p class="txt-lineh-1-6 pdng-r16 font-08 arrival-address-detail">
                                         </p>
                </label>
            </div>
                    </div>
                <div class="flex-box-center payment-check-box mg-b24" id="add-address-book-ordered-area">
            <input name="add-address-book-ordered" type="checkbox" value="1" id="in-address-book-ordered" checked="">
            <label class="font-08" for="in-address-book-ordered">
            このお届け先をアドレス帳に登録する
            </label>
        </div>
        
        <div class="flex-box mg-b24">
            <input id="overwrite_receiver_orderd" type="button" value="決定" class="font-1 pdng-24 w9 mg-auto modal-close">
        </div>
        <div class="flex-box">
            <button id="bind_receiver_info_orderd" type="button" class="font-08 pdng-16 w9 mg-auto txt-center bdr-line-normal address-reset">住所を編集</button>
        </div>

    </div>


</div></div></form>



                <!----通常配送の配送方法---->
                                    <div class="step_item_box bdr-line-gray-btm pdng-tb24">
    <div class="flex-box pdng-b16">
        <p class="step_item_title font-1-1 font-bold">配送方法</p>
            </div>

    <div class="payment-form-inner mg-auto">
        <div class="payment-form-radio mg-auto mg-b8">
            <input type="radio" name="shipping" value="20180717152333" id="20180717152333" checked="">
            <label class="font-08 pdng-tb16 pdng-r16" for="20180717152333">
                <div>宅配便（ヤマト運輸・佐川急便）</div>
                <div class="font-08 pdng-t8" style="color: #666;">（送料: 850円、決済手数料: 550円）</div>
            </label>
        </div>
        
        <div class="payment-form-radio mg-auto mg-b8">
            <input type="radio" name="shipping" value="20180717152424" id="20180717152424" checked="">
            <label class="font-08 pdng-tb16 pdng-r16" for="20180717152424">メール便</label>
        </div>
        
        <div class="payment-form-radio mg-auto mg-b8">
            <input type="radio" name="shipping" value="20251003122513" id="20251003122513" checked="">
            <label class="font-08 pdng-tb16 pdng-r16" for="20251003122513">宅配便※代引き不可</label>
        </div>
        
        
        
        
        
        
        
        
        
        <div class="payment-form-radio mg-auto mg-b8">
            <input type="radio" name="shipping" value="20231209104520" id="20231209104520" checked="">
            <label class="font-08 pdng-tb16 pdng-r16" for="20231209104520">大型配送</label>
        </div>
        
        <div class="payment-form-radio mg-auto mg-b8">
            <input type="radio" name="shipping" value="20260126154122" id="20260126154122" checket="">
            <label class="font-08 pdng-tb16 pdng-r16" for="20260126154122">送料無料（沖縄・北海道送料別）</label>
        </div>
    </div>
</div>

<div id="standy_htmls" style="display:none;">
    <div id="_shipping_info" class="form-wrap">
    <div id="shipping-info" class="payment-form pdng-24">
        <p class="pdng-b32 font-bold font-1-2">
            配送方法
        </p>
        <div class="payment-form-inner mg-auto mg-b32 pdng-l16 pdng-r16">
                                    <div class="payment-form-radio mg-auto mg-b8">
                <input type="radio" name="shipping" value="20180717152333" id="20180717152333">
                <label class="font-08 pdng-tb16 pdng-r16" for="20180717152333">宅配便（ヤマト運輸・佐川急便）</label>
            </div>
            <div class="folding-box" style="display: none;">
                <div class="font-08 pdng-b16 pdng-l16 pdng-r16 perm-html">
                                                                【まとめ買い時の送料の扱い】<br>
送料別の商品と送料無料の商品を同時にご注文の場合は、送料無料になります。※沖縄・離島除く<br>
<br>
【送料分消費税】<br>
この料金には消費税が 含まれています。<br>
<br>
【沖縄県へのお届けについて】<br>
送料無料商品をご注文いただいても、送料がかかります。<br>
※ソックス2足購入でメール便配送無料のみ送料無料対象となります。<br>
                                    </div>
            </div>
                                                <div class="payment-form-radio mg-auto mg-b8">
                <input type="radio" name="shipping" value="20180717152424" id="20180717152424" disabled="">
                <label class="font-08 pdng-tb16 pdng-r16" for="20180717152424">メール便</label>
            </div>
            <div class="folding-box" style="display: none;">
                <div class="font-08 pdng-b16 pdng-l16 pdng-r16 perm-html">
                                                                【荷物サイズについて】<br>
A4サイズ以内・厚さ3cm以内・重さ1kg以内 を満たす商品に限り1個口での発送が可能です。<br>
（例1）Tシャツ1枚　（例2）ソックス約2足<br>
上記サイズを超える場合、複数個口や宅配便での発送へ修正し送料加算させていただきます。<br>
変更の場合は注文翌営業日にメールにてご連絡となります。<br>
<br>
【商品発送について】<br>
ポスト投函のため、お届け日時の指定は出来ません。<br>
<br>
メール便配送は、お荷物紛失・不達時の補償は一切ございません。                                    </div>
            </div>
                                                <div class="payment-form-radio mg-auto mg-b8">
                <input type="radio" name="shipping" value="20251003122513" id="20251003122513" disabled="">
                <label class="font-08 pdng-tb16 pdng-r16" for="20251003122513">宅配便※代引き不可</label>
            </div>
            <div class="folding-box" style="display: none;">
                <div class="font-08 pdng-b16 pdng-l16 pdng-r16 perm-html">
                                                                                                    </div>
            </div>
                                                <div class="payment-form-radio mg-auto mg-b8">
                <input type="radio" name="shipping" value="20180810184939" id="20180810184939">
                <label class="font-08 pdng-tb16 pdng-r16" for="20180810184939">店舗受取り［m-sports浜松店］</label>
            </div>
            <div class="folding-box" style="display: none;">
                <div class="font-08 pdng-b16 pdng-l16 pdng-r16 perm-html">
                                                                m-sports浜松店でのお受け取りです。<br>
〒430-0905 静岡県浜松市中区鍛治町100-1 ショッピングモールZAZA CITY 中央館1F<br>
電話番号：0534010555                                    </div>
            </div>
                                                <div class="payment-form-radio mg-auto mg-b8">
                <input type="radio" name="shipping" value="20230630165925" id="20230630165925">
                <label class="font-08 pdng-tb16 pdng-r16" for="20230630165925">店舗受取り［MS-SHIZUOKA静岡店］</label>
            </div>
            <div class="folding-box" style="display: none;">
                <div class="font-08 pdng-b16 pdng-l16 pdng-r16 perm-html">
                                                                MS SHIZUOKA静岡店でのお受け取りです。<br>
〒420-0031 静岡県静岡市葵区呉服町2-1-1　札の辻ビル2F<br>
電話番号：0542042777                                    </div>
            </div>
                                                <div class="payment-form-radio mg-auto mg-b8">
                <input type="radio" name="shipping" value="20180810184822" id="20180810184822">
                <label class="font-08 pdng-tb16 pdng-r16" for="20180810184822">店舗受取り［m-sports沼津店］</label>
            </div>
            <div class="folding-box" style="display: none;">
                <div class="font-08 pdng-b16 pdng-l16 pdng-r16 perm-html">
                                                                m-sports沼津店でのお受け取りです。<br>
〒410-0056 静岡県沼津市高島町28-16<br>
電話番号：0559291800                                    </div>
            </div>
                                                <div class="payment-form-radio mg-auto mg-b8">
                <input type="radio" name="shipping" value="20180810184651" id="20180810184651">
                <label class="font-08 pdng-tb16 pdng-r16" for="20180810184651">店舗受取り［MS-TOKYO渋谷店］</label>
            </div>
            <div class="folding-box" style="display: none;">
                <div class="font-08 pdng-b16 pdng-l16 pdng-r16 perm-html">
                                                                MS TOKYO渋谷店でのお受け取りです。<br>
〒150-0042 東京都渋谷区宇田川町33-8 塚田ビル3F<br>
電話番号：0364553101                                    </div>
            </div>
                                                <div class="payment-form-radio mg-auto mg-b8">
                <input type="radio" name="shipping" value="20231209104520" id="20231209104520" disabled="">
                <label class="font-08 pdng-tb16 pdng-r16" for="20231209104520">大型配送</label>
            </div>
            <div class="folding-box" style="display: none;">
                <div class="font-08 pdng-b16 pdng-l16 pdng-r16 perm-html">
                                                                                                    </div>
            </div>
                                                <div class="payment-form-radio mg-auto mg-b8">
                <input type="radio" name="shipping" value="20260126154122" id="20260126154122" disabled="">
                <label class="font-08 pdng-tb16 pdng-r16" for="20260126154122">送料無料（沖縄・北海道送料別）</label>
            </div>
            <div class="folding-box" style="display: none;">
                <div class="font-08 pdng-b16 pdng-l16 pdng-r16 perm-html">
                                                                                                    </div>
            </div>
                                </div>

        <div id="shipping_info_modal_error_div" style="display: none;">
            <div class="payment-notice font-07"></div>
            <div class="payment-notice-caution font-07"></div>
        </div>

        <div class="flex-box">
            <input type="button" id="update_shipping" value="この内容で変更する" class="font-1 pdng-24 w9 mg-auto modal-close">
        </div>
    </div>
</div>

</div>



                
                <!----定期購入---->
                
                <!----予約販売---->
                
                <!----通常配送のお届け日---->
                                <div class="step_item_box bdr-line-gray-btm pdng-tb24">
                                <div class="flex-box pdng-b16">
                    <p class="step_item_title font-1-1 font-bold">
                        お届け時間帯指定                    </p>
                                                        </div>
                    <div class="payment-form-inner mg-auto mg-b16">
                        <div class="select-wrap">
                            <select id="delivery-time" name="delivery-time" class="delivery-time-select">
                                <option value="指定なし" selected="">指定なし</option>
                                <option value="午前中">午前中</option>
                                <option value="14:00-16:00">14:00-16:00</option>
                                <option value="16:00-18:00">16:00-18:00</option>
                                <option value="18:00-20:00">18:00-20:00</option>
                                <option value="19:00-21:00">19:00-21:00</option>
                            </select>
                        </div>
                        <div class="font-08 pdng-t8 delivery-time-comment">
                            ※配達時間の指定は配送方法が宅配便の場合のみ可能です。
                        </div>
                    </div>
                
                                <div>
                    <p class="step_item_contents font-09 user-delivery-date">
                                                                <span class="crl-orange font-bold time-specify">指定なし</span>
                                                                                    </p><div class="pdng-t16">
                            <span class="font-08 delivery-guideline">お届け目安： <a class="crl-accent hover-underline link-target-blank" href="https://www.m-sports.co.jp/view/guide" target="_blank" rel="noopener noreferrer">お届け日について</a></span>
                        </div>
                                        <p></p>
                </div>
                
            </div>
    
    <div id="standy_htmls" style="display:none;">
            
    </div>



                                



<!-- クーポン入力中のモーダルをトリガーするためのダミー要素 -->
<a id="coupon-modal-trigger" class="modal-summoner" data-modal-id="_coupon_draft_modal" style="display: none;"></a>                                
                <!-- お支払い方法 -->
                                
<div class="step_item_box bdr-line-gray-btm pdng-tb24">
    <div class="flex-box pdng-b16">
        <p class="step_item_title font-1-1 font-bold">
            お支払い方法
        </p>
    </div>

    <div class="payment-form-inner mg-auto">
        <!-- クレジットカード -->
        <div class="payment-form-radio mg-auto mg-b8">
            <input type="radio" name="pay-method" value="Y" id="paymethod_Y">
            <label class="font-08 pdng-tb16 pdng-r16" for="paymethod_Y">
                クレジットカード
                <span class="font-07" style="display: block; color: #666; padding-top: 4px;">(VISA, MasterCard, Diners, AMEX, JCB)</span>
            </label>
        </div>
        
        <!-- Campos de tarjeta de crédito -->
        <div id="paymethod_Y_info" class="pdng-l32 pdng-r16 pdng-b16 font-08" style="display: none;">
            <div class="payment-form-inner mg-auto">
                <div class="pdng-b16 mg-auto">
                    <label class="form-label req-icon font-08 pdng-l16">カード名義人（ローマ字）</label>
                    <input type="text" id="card-holder-name" name="cardHolderName" maxlength="100" class="form-input" placeholder="例）TARO YAMADA" value="">
                    <p id="card-holder-name-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                        カード名義人をご入力ください。
                    </p>
                </div>
                
                <div class="pdng-b16 mg-auto">
                    <label class="form-label req-icon font-08 pdng-l16">カード番号</label>
                    <input type="text" id="card-number" name="cardNumber" maxlength="19" class="form-input" placeholder="例）1234 5678 9012 3456" value="">
                    <p id="card-number-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                        カード番号をご入力ください。
                    </p>
                </div>
                
                <div style="display: flex; gap: 16px; margin-bottom: 16px;">
                    <div style="flex: 1;">
                        <label class="form-label req-icon font-08 pdng-l16">有効期限（月）</label>
                        <div class="select-wrap">
                            <select id="card-exp-month" name="cardExpMonth">
                                <option value="">月</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <p id="card-exp-month-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                            月を選択してください。
                        </p>
                    </div>
                    
                    <div style="flex: 1;">
                        <label class="form-label req-icon font-08 pdng-l16">有効期限（年）</label>
                        <div class="select-wrap">
                            <select id="card-exp-year" name="cardExpYear">
                                <option value="">年</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                                <option value="2031">2031</option>
                                <option value="2032">2032</option>
                                <option value="2033">2033</option>
                                <option value="2034">2034</option>
                                <option value="2035">2035</option>
                            </select>
                        </div>
                        <p id="card-exp-year-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                            年を選択してください。
                        </p>
                    </div>
                </div>
                
                <div class="pdng-b16 mg-auto">
                    <label class="form-label req-icon font-08 pdng-l16">セキュリティコード（CVV）</label>
                    <input type="text" id="card-cvv" name="cardCvv" maxlength="4" class="form-input" placeholder="例）123" value="" style="max-width: 150px;">
                    <p class="font-07 pdng-t8 pdng-l16" style="color: #666;">
                        カード裏面の3桁または4桁の数字
                    </p>
                    <p id="card-cvv-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;">
                        セキュリティコードをご入力ください。
                    </p>
                </div>
                
                <div class="txt-lineh-1-4" style="color: #666; background-color: #f8f9fa; padding: 12px; border-radius: 4px; margin-top: 16px;">
                    ※ カード情報は安全に処理されます<br>
                    ※ ご注文確定後、決済処理を行います
                </div>
            </div>
        </div>
        
        
        
        <!-- 銀行振込 -->
        <div class="payment-form-radio mg-auto mg-b8">
            <input type="radio" name="pay-method" value="B" id="paymethod_B">
            <label class="font-08 pdng-tb16 pdng-r16" for="paymethod_B">銀行振込</label>
        </div>
        <div id="paymethod_B_info" class="pdng-l32 pdng-r16 pdng-b16 font-08" style="display: none;">
            <div class="txt-lineh-1-4" style="color: #666;">
                振込先はご注文確認後、メールでお送り致します。ご注文日より2日以内にメールが届かない場合はお手数ですが、ご連絡お願いします。<br>
                振込手数料はお客様負担でお願い致します。<br>
                ご入金確認後に商品を発送いたします。
            </div>
        </div>
        
        <!-- 代金引換 -->
        <div class="payment-form-radio mg-auto mg-b8">
            <input type="radio" name="pay-method" value="R" id="paymethod_R" checked="">
            <label class="font-08 pdng-tb16 pdng-r16" for="paymethod_R">代金引換</label>
        </div>
        <div id="paymethod_R_info" class="pdng-l32 pdng-r16 pdng-b16 font-08" style="display: block;">
            <div class="txt-lineh-1-4" style="color: #666;">
                代引き業者：宅配便(ヤマト運輸又は佐川急便) ※お客様にて運送業者のご指定は出来ません。<br>
                お支払いは現金払いのみ可能です。<br>
                お支払総額は「商品代金合計＋送料＋代引手数料」です。
            </div>
        </div>
    </div>
    
    <!-- お支払い時期 -->
    <div class="pdng-t16">
        <a href="/jindokan/pages/info" target="_blank" class="font-08 crl-accent hover-underline link-target-blank payment-period">
            お支払い時期について
        </a>
    </div>
</div>
              
                <!-------- 注文備考 -------->
                
<div class="step_item_box pdng-tb24 payment-form order-notes">
  <div class="flex-box pdng-b16">
    <p class="step_item_title font-1-1 font-bold">
      注文備考
    </p>
  </div>
  <!-------- 注文案内文 -------->
      <div>
      <div class="txt-lineh-1-6 step_item_contents font-09 order-notes-descript perm-html">
                  ※ネーム加工商品注文後の加工内容変更・キャンセル等は出来ません。<br>              </div>
    </div>
            <div class="pdng-tb8">
      <p class="txt-lineh-1-8 font-08"><span class="crl-red">＊</span>は入力必須項目です</p>
    </div>
        <div class="order-notes-block">
  
  <!-------- 配送備考 -------->
        
  <!-------- 注文備考 -------->
                                                                            <!-------- チェックボックス -------->
          <div class="order-notes-checkbox perm-html filled">
            <div class="step_item_title font-09 font-bold mg-b8 req-icon" id="order_remark_0_title">
                                  注文確定後、同梱依頼をいただいても対応できかねます。                            </div>
            <div class="remarks-vertical">
                                        <div class="pdng-b8 flex-box-start payment-check-box checkbox-options">
                <input name="order_remark_0" data-remark-type="order" data-remark-id="20250516095358" data-error-key="20250516095358" type="checkbox" value="確認しました。" id="order_remark_0_0">
                <label class="font-08 pdng-tb16" for="order_remark_0_0">
                  確認しました。                </label>
              </div>
                        </div>
            <p id="order_remark_0-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;"> 必須項目です。</p>
          </div>
                                          <!-------- チェックボックス -------->
                                                                        <!-------- チェックボックス -------->
          <div class="order-notes-checkbox perm-html filled">
            <div class="step_item_title font-09 font-bold mg-b8 req-icon" id="order_remark_1_title">
                                  クレジット決済エラーにより注文履歴に「ショップへお問合せください」と表示された場合、自動キャンセルとなります。                            </div>
            <div class="remarks-vertical">
                                        <div class="pdng-b8 flex-box-start payment-check-box checkbox-options">
                <input name="order_remark_1" data-remark-type="order" data-remark-id="20250516100807" data-error-key="20250516100807" type="checkbox" value="確認しました。" id="order_remark_1_0">
                <label class="font-08 pdng-tb16" for="order_remark_1_0">
                  確認しました。                </label>
              </div>
                        </div>
            <p id="order_remark_1-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;"> 必須項目です。</p>
          </div>
                                          <!-------- チェックボックス -------->
                                                                        <!-------- チェックボックス -------->
          <div class="order-notes-checkbox perm-html filled">
            <div class="step_item_title font-09 font-bold mg-b8 req-icon" id="order_remark_2_title">
                                  ゆうパケットでの配送を希望の場合、数量により複数個口での発送・送料加算となる場合がございます。詳細はご利用ガイド「配送について」をご確認ください。                            </div>
            <div class="remarks-vertical">
                                        <div class="pdng-b8 flex-box-start payment-check-box checkbox-options">
                <input name="order_remark_2" data-remark-type="order" data-remark-id="20250828095805" data-error-key="20250828095805" type="checkbox" value="確認しました。" id="order_remark_2_0">
                <label class="font-08 pdng-tb16" for="order_remark_2_0">
                  確認しました。                </label>
              </div>
                        </div>
            <p id="order_remark_2-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;"> 必須項目です。</p>
          </div>
                                          <!-------- チェックボックス -------->
                                                                        <!-------- チェックボックス -------->
          <div class="order-notes-checkbox perm-html filled">
            <div class="step_item_title font-09 font-bold mg-b8 req-icon" id="order_remark_3_title">
                                  【領収書について】発送完了後にマイページ注文履歴より発行可能です。※会員登録必須、ログインして購入手続きを行ってください。※代金引換の場合は利用不可                            </div>
            <div class="remarks-vertical">
                                        <div class="pdng-b8 flex-box-start payment-check-box checkbox-options">
                <input name="order_remark_3" data-remark-type="order" data-remark-id="20250920153628" data-error-key="20250920153628" type="checkbox" value="確認しました。" id="order_remark_3_0">
                <label class="font-08 pdng-tb16" for="order_remark_3_0">
                  確認しました。                </label>
              </div>
                        </div>
            <p id="order_remark_3-error" class="error-message font-07 pdng-t8 pdng-l16" style="display:none;"> 必須項目です。</p>
          </div>
                                          <!-------- チェックボックス -------->
                    </div>
  
</div>


                <!-- 備考 -->
                                <div class="step_item_box pdng-tb24 bdr-line-gray-top">
                    <div class="flex-box pdng-b16">
                        <p class="step_item_title font-1-1 font-bold">
                            備考欄
                        </p>
                    </div>
                    <div>
                        <textarea class="w10 pdng-8 font-1 order-memo" name="order_memo" id="order_memo" rows="6" placeholder="ご要望・ご質問などをご記入ください"></textarea>
                    </div>
                </div>
                
            </div>
            <!------注文者情報・決済方法など------>

            <!------注文商品情報------>
            <div class="payment-prdt-info">
                <div class="step_item_box pdng-tb24">
                    <p class="step_item_title font-1-1 font-bold pdng-b16">
                        ご注文内容
                    </p>

                    <!------注文商品情報は別ファイル------>
                    <table class="cart-items">
                        <tbody>
                            <!-- Los items del carrito se insertarán aquí dinámicamente con JS desde index.js -->
                        
 <tr>
  
</tr>
</tbody>
                    </table>



                    
                    <div class="pdng-t4 payment-prdt-total">

                    <!-- 定期購入総額表示 -->
                    
                                        <!-- 通常配送 -->
                        
                        <!-- 予約明細 -->
                        
                        

                        
                                            
                                                
                        
                        
                        
                        
                        
                        

                        <div class="w10 flex-box pdng-tb16" id="total-price-area">
                            <p class="font-09">合計</p>
                            <p class="font-1 font-bold">
                                <span class="total-price" id="cart_total_amount">￥30,800 (税込)</span>
                            </p>
                        </div>

                                            </div>

                </div>
            </div>
            <!------注文商品情報------>
            
       
        </div>

            <!------特定商取引法に基づく表記------>
    <div class="txt-center mg-tb24 return-policy-wrap">
        <a href="/jindokan/ordercontract" class="font-09 crl-accent hover-underline link-target-blank" target="_blank" rel="noopener noreferrer">特定商取引法に基づく表記</a>
<span class="font-09">と</span>
<a href="/jindokan/pages/privacy-policy" class="font-09 crl-accent hover-underline link-target-blank pdng-r4" target="_blank" rel="noopener noreferrer">個人情報の取り扱いについて</a><br>
<a class="font-09 pdng-r4">に同意の上、ご注文ください。</a>
    </div>
    <!------特定商取引法に基づく表記------>
    <!------注文確定ボタン------>
    <div class="next-btn txt-ctr mg-tb24">
        
<!-- 注文確定ボタン（その他の決済） -->
<input name="checkout" type="button" class="font-1 pdng-24 w10 checkout-confirm" value="注文を確定する">
    </div>
    <!------注文確定ボタン------>

        <div class="step02-flow-cta" style="bottom: -95.9766px; display: none; transition: bottom 0.3s ease-in-out;">
        <!------メッセージ------>
        <div class="step02-flow-cta-message">
            <div class="step02-flow-cta-message-box">
                <div class="payment-notice-caution pdng-rl16 mg-b24">
                </div>
                <span class="close-message" style="display: none;">Close</span>
            </div>
            <div class="step02-flow-cta-message-box">
                <div class="payment-notice pdng-rl16 mg-b24">
                </div>
                <span class="close-message" style="display: none;">Close</span>
            </div>
        </div>

        <!------メッセージ------>
        <!------特定商取引法に基づく表記------>
        <div class="mg-tb24 flow-cta-return-policy txt-lineh-1-6">
            <a href="/jindokan/ordercontract" class="font-09 crl-accent hover-underline link-target-blank" target="_blank" rel="noopener noreferrer">特定商取引法に基づく表記</a>
<span class="font-09">と</span>
<a href="/jindokan/pages/privacy-policy" class="font-09 crl-accent hover-underline link-target-blank pdng-r4" target="_blank" rel="noopener noreferrer">個人情報の取り扱いについて</a><br>
<a class="font-09 pdng-r4">に同意の上、ご注文ください。</a>
        </div>
        <!------特定商取引法に基づく表記------>
        <div id="cta-area-total-price">
            <p class="font-09 txt-lineh-1-6">合計</p>
            <p class="font-1 font-bold">
                <span class="total-price" id="cart_total_amount_cta">￥30,800 (税込)</span>
            </p>
        </div>
        <!------注文確定ボタン------>
        <div class="next-btn txt-ctr mg-tb24">
            
<!-- 注文確定ボタン（その他の決済） -->
<input name="checkout" type="button" class="font-1 pdng-24 w10 checkout-confirm" value="注文を確定する">
        </div>
        <!------注文確定ボタン------>
    </div>
    
 
    </div>
</section>