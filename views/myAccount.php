<div class="container_contents">


	<div class="section login">


		<h2>すでに会員登録されている方</h2>

		<p class="txt01">会員の方は、登録時に入力されたメールアドレスとパスワードでログインしてください。</p>
	
	</div>



	    <div class="c-button__group">
        <button  id="logout_form"  class="c-button c-button--lg">ログアウト</button>
    </div>
</div>



<style>
	/* Botón de cerrar sesión */
	#logout_form,
	.c-button.c-button--lg {
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
		margin: 24px auto;
		min-width: 250px;
		max-width: 400px;
		display: block;
	}

	#logout_form:hover,
	.c-button.c-button--lg:hover {
		background: linear-gradient(135deg, #4ba0d9 0%, #5db3ec 100%);
		box-shadow: 0 6px 24px rgba(54, 141, 199, 0.35);
		transform: translateY(-2px);
	}

	#logout_form:active,
	.c-button.c-button--lg:active {
		transform: translateY(0);
		box-shadow: 0 2px 8px rgba(54, 141, 199, 0.3);
	}

	@media (max-width: 1024px) {
		#logout_form,
		.c-button.c-button--lg {
			font-size: 2rem !important;
			padding: 20px 56px !important;
			border-radius: 14px !important;
		}
	}

	@media (max-width: 768px) {
		#logout_form,
		.c-button.c-button--lg {
			font-size: 1.8rem !important;
			padding: 18px 48px !important;
			width: 90% !important;
			max-width: 100% !important;
		}
	}

	/*.main{
	padding:15px 30px;
	background:#fff; 
	border-width:1px; 
	border-style:solid;
	border-color:#ddd; 
}*/
	.section {
		overflow: hidden;
		_zoom: 1;
	}

	.entry {
		border-top-width: 1px;
		/* 境目の罫線サイズ */
		border-top-style: dotted;
		/* 境目の罫線スタイル */
		border-top-color: #ddd;
		/* 境目の罫線色 */
		padding-top: 40px;
		margin-top: 40px;
	}

	.headImg {
		margin-bottom: 15px;
		text-align: center;
	}

	.txt01 {
		text-align: left;
		line-height: 1.6;
	}

	.errortxt {
		text-align: left;
		color: #ff0000;
		margin-top: 8px;
	}

	.loginform {
		width: 390px;
		margin: 20px auto 0;
	}

	.loginform th {
		text-align: left;
		min-width: 120px;
		padding: 15px 8px;
		background: #ccc;
		/* テーブルの背景色（タイトル） */
		font-size: 13px;
		/* テーブルのフォントサイズ（タイトル） */
		color: #333;
		/* テーブルの文字色（タイトル） */
	}

	.loginform td {
		text-align: left;
		padding: 5px;
		background: #eee;
		/* テーブルの背景色（項目） */
	}

	.loginform td input {
		width: 200px;
		font-size: 13px;
		/* テーブルのフォントサイズ（項目） */
		color: #333;
		/* テーブルの文字色（項目） */
	}

	.keeptxt {
		width: 390px;
		margin: 4px auto 15px;
	}

	.passwdtxt {
		width: 390px;
		text-align: left;
		margin: 4px auto 0;
	}

	label {
		cursor: pointer;
	}

	.btn {
		margin-top: 20px;
	}

	.btn input {
		cursor: pointer;
		padding: 2px 10px;
	}

	.link {
		text-align: center;
		margin-top: 10px;
		margin-bottom: 40px;
	}

	/* buy */
	.buyEntry {
		margin: 0 auto;
	}

	.buyNmember {
		margin: 0 0 10px 20px;
	}

	.buyBorder {
		border-right-width: 1px;
		/* 境目の罫線サイズ */
		border-right-style: dotted;
		/* 境目の罫線スタイル */
		border-right-color: #ddd;
		/* 境目の罫線色 */
	}

	.buyWrap td {
		padding: 0;
		width: 50%;
		vertical-align: top;
	}

	/* footer */
	.footer {
		margin-top: 30px;
	}

	.shoplink {
		text-align: right;
		margin-bottom: 10px;
	}

	.seal {
		width: 400px;
		margin: 0 auto;
	}

	.sealimg img {
		border: 5px solid #fff;
	}

	.sealtxt {
		text-align: left;
		font-size: 10px;
		padding-left: 10px;
		color: #666;
		/* フッターの文字色 */
	}

	/* lockes */

	#locked .main {
		padding: 30px 30px 0 30px;
	}

	.errorContents {
		background: #ffeeee;
		padding: 16px;
		text-align: left;
		margin: 16px auto;
		color: #ff0000;
	}

	/* amazon */
	.amazon-login-v2 {
		max-width: 250px;
		height: 40px;
		margin: 0 auto 20px;
	}

	.amazon-wrap {
		padding-top: 30px;
	}

	.amazon-wrap p {
		text-align: center;
		margin: 0 auto 10px;
		line-height: 1.6;
	}

	.amazon-title {
		line-height: 1;
		font-size: 15px;
		margin: 0 auto 10px;
		font-weight: 700;
	}

	a:hover img {
		filter: alpha(opacity=75);
		-moz-opacity: 0.75;
		opacity: 0.75;
	}

	.password .loginform {
		width: 450px;
	}

	.password input[name="email"] {
		width: 95%;
	}

	.notes {
		font-size: 10px;
		color: #888;
		display: block;
		margin-top: 4px;
	}

	.btn {
		display: inline-block;
		margin: 16px auto;
		background: none;
	}

	.btn input[type="submit"],
	.btn input[type="button"] {
		min-width: 250px;
		max-width: 290px;
		border: none;
		background: #2b5177;
		color: #fff;
		text-decoration: none;
		padding: 8px 32px;
		box-sizing: border-box;
		border-radius: 5px;
		font-size: 17px;
		display: inline-block;
		margin: 0 auto;
		cursor: pointer;
	}

	.btn input[type="button"].disabled {
		background: #ddd;
		pointer-events: none;
	}


	.btn input[type="button"]:hover {
		background: #76b3e8;
	}

	.policy_area {
		border: 1px solid #ccc;
		height: 175px;
		overflow-x: hidden;
		overflow-y: auto;
		margin: 16px auto;
		text-align: left;
		font-size: 13px;
	}

	iframe.privacyPolicy {
		width: 100%;
		border: 1px solid #ccc;
		margin-bottom: 8px;
		height: 140px;
		overflow: auto;
		box-sizing: border-box;
	}

	.cautionText {
		color: #ff0000;
		margin-top: 20px;
	}

	#passKey {
		margin: 24px 0 8px;
		background: #ffe0e0;
		border: 1px solid #cc0000;
		padding: 8px;
	}

	#passKey p {
		text-align: center;
		font-weight: bold;
		font-size: 21px;
		letter-spacing: 0.5em;
		line-height: 60px;
		color: #cc0000;
		font-family: Arial, Helvetica, sans-serif;
		margin-top: 0;
		background: #fff;
	}

	.cautionCopy {
		text-align: center;
	}

	.confirm-notes {
		font-size: 12px;
		color: #666;
	}

	.line-login {
		max-width: 250px;
	}

	@media screen and (max-width: 768px) {
		.header img {
			max-width: 100%;
		}

		.wrap {
			width: 100%;
		}

		.main {
			padding: 1rem;
			border: none;
			float: left;
		}

		.headImg img {
			max-width: 100%;
		}

		.loginform,
		.password .loginform {
			width: 100%;
		}

		.password input[name="email"] {
			width: 100%;
		}

		.loginform th {
			width: 100%;
			display: block;
		}

		.loginform td {
			width: 100%;
			display: block;
		}

		.loginform td input {
			width: 100%;
		}

		.keeptxt,
		.passwdtxt {
			width: 100%;
		}

		.seal {
			width: 100%;
		}

		.btn input[type="button"] {
			width: 100%;
			max-width: 400px;
		}

		.buyWrap {
			width: 100%;
		}

		.buyWrap td {
			width: 100%;
			display: block;
		}

		.buyEntry {
			margin: 0 0 2rem;
		}

		.buyNmember {
			margin: 0;
		}

		.buyBorder {
			border: none;
		}

		/* amazon */
		.amazon-login-v2 {
			width: 100%;
			max-width: 400px;
		}

		.amazon-wrap p {
			text-align: left;
		}

		.line-login {
			width: 100%;
			max-width: 400px;
		}
	}


</style>