<div class="container_contents">


	<div class="section login">


		<h2>すでに会員登録されている方</h2>

		<p class="txt01">会員の方は、登録時に入力されたメールアドレスとパスワードでログインしてください。</p>
		<p id="ErrorTextMsg" class="errortxt"></p>

		<form name="login_form" action="/account/login" method="post">
			<input type="hidden" name="type" value="confirm">
			<input type="hidden" name="ssl_tempid" value="2979f910812cafe0e1114e2e100b2de4">
			<input type="hidden" name="code" value="">
			<input type="hidden" name="brandcode" value="">
			<input type="hidden" name="ssl_login_return_url" value="/">
			<input type="hidden" name="is_newpage_ip_limit" value="">
			<input type="hidden" name="sub_type" value="">
			<input type="hidden" name="opt" value="">

			<table class="loginform">
				<tbody>
					<tr>
						<th>メールアドレス</th>
						<td><input type="email" name="id" value="" style="ime-mode:disabled;"></td>
					</tr>
					<tr>
						<th>パスワード</th>
						<td><input type="password" name="passwd" style="ime-mode:disabled;"></td>
					</tr>
				</tbody>
			</table>

			<div class="btn"><input type="submit" value="ログイン"></div>

		</form>
	</div>



	<div class="section entry">
		<h2>まだ会員登録されてない方</h2>
		<p class="txt01">初めてご利用の方は、こちらから会員登録すると便利にお買い物ができるようになります。</p>
		<div class="btn">

			<a href="<?= URL_PATH ?>register">新規会員登録</a>
		</div>
	</div>
</div>