<div class="container_contents">
    <style>
        #contact .agreeWrap {
            margin: 20px 0;
            padding: 15px;
            background: #f5f5f5;
            border: 1px solid #ddd;
            display: block !important;
        }
        
        #contact .agreeWrap label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        
        #contact .agreeWrap input[type="checkbox"] {
            margin-right: 10px;
            width: 18px;
            height: 18px;
        }
        
        #contact .btnWrap {
            text-align: center;
            margin: 30px 0;
            display: block !important;
        }
        
        #contact .btnWrap .btn,
        #contact .btnWrap input[type="submit"] {
            display: inline-block !important;
            padding: 15px 40px;
            background: #8594f0;
            color: #fff !important;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            transition: background 0.3s;
            border: none;
            cursor: pointer;
        }
        
        #contact .btnWrap .btn.disabled,
        #contact .btnWrap input[type="submit"].disabled,
        #contact .btnWrap input[type="submit"]:disabled {
            background: #ccc !important;
            cursor: not-allowed !important;
            pointer-events: none;
        }
        
        #contact .btnWrap .btn:not(.disabled):hover,
        #contact .btnWrap input[type="submit"]:not(.disabled):not(:disabled):hover {
            background: #2a6fa3;
        }
        
        #contact .errorMesseage {
            color: #f00;
            font-size: 14px;
            margin: 5px 0;
        }
    </style>
   
    <form name="contact" method="POST" action="">
        
        <div class="wrap" id="contact">

            <section class="main">

                <div class="section">


                    <p>以下のフォームの項目を入力し、よろしければ「この内容で問い合わせる」ボタンをクリックしてください。<br>
                        <br>
                        <br>
                        ■■注文済みの方■■<br>
                        お問合せ内容の最初に注文番号（P18-----）をご記載ください。<br>
                        ※注文履歴より確認可<br>
                        <br>
                        ■■よくある質問■■<br>
                        ◎注文履歴に「ショップへお問合せください」と記載されています<br>
                        →注文履歴に注文番号が表示されても「ショップへお問合せください」と記載されている場合、ご注文は正常に完了できていないためキャンセルとなります。<br>
                        <br>
                        ◎購入履歴にでてきません<br>
                        →注文時ログインせずにゲスト購入された場合、注文履歴には反映されません。<br>
                        下記URLにてメールで送られてきている注文番号で検索・確認をお願いします。<br>
                        <br>
                        ◎再入荷予定はありますか<br>
                        →セール品の再入荷予定はございません。<br>
                        キャンセルがあった場合のみ再販がある可能性がございます。<br>
                        <br>
                        <br>
                        ※店舗の在庫状況などは直接店舗へお問合せください。<br>
                        0723-91-7783<br>
                        <br>
                        通販営業時間　10:00-17:00　定休日：日曜日
                    </p>


                    <table class="formTable">
                        <tbody>
                            <tr>
                                <th>お名前<span class="required">必須</span></th>
                                <td>
                                    <p id="name_error" class="errorMesseage"></p>
                                    <input type="text" name="name" maxlength="20" size="25" value="">
                                </td>
                            </tr>
                            <tr>
                                <th>メールアドレス<span class="required">必須</span></th>
                                <td>
                                    <p id="email_error" class="errorMesseage"></p>
                                    <input type="text" name="email" maxlength="50" size="50" value="">
                                </td>
                            </tr>
                            <tr>
                                <th>お問い合わせ内容<span class="required">必須</span></th>
                                <td>
                                    <p id="content_error" class="errorMesseage"></p>
                                    <textarea wrap="off" rows="15" cols="60" maxlength="2000" name="content"></textarea>
                                    <span class="notes">※全角2000文字まで</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="agreeWrap">
                        <p id="agree_error" class="errorMesseage"></p>
                        <label>
                            <input type="checkbox" name="agree" id="agree" value="1">
                            <span>個人情報の取り扱いに同意する</span>
                        </label>
                    </div>

                    <div class="btnWrap">
                          <input type="submit" name="submit" id="send_btn" value="この内容で問い合わせる" class="disabled">
                    </div>
                </div>
            </section>



        </div>

    </form>
    <div class="smartphoneHide"></div>

<deepl-input-controller translate="no"></deepl-input-controller>
</div>