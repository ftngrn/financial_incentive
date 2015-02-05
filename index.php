<!DOCTYPE html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>		 <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>		 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>就園奨励費のめやす - 学校法人 札幌学園</title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<script type="text/javascript" src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	</head>
	<body>

		<div class="jumbotron">
			<div class="container">
				<h1>就園奨励費のめやす【直方市】</h1>
				<p>
					年収やお子さんの人数などから、就園奨励費のめやすが分かります<br />
					幼稚園に通わせているお子さんについて回答して下さい。
				</p>
				<span class="text-success small">※このページに入力した値は一切サーバに送信しません</span>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-4 opt">
					<h2>1. 兄・姉がいますか？</h2>
					<p><input type="checkbox" name="hasbros" id="hasbros" /><label for="hasbros">小学校1年生から3年生の兄・姉がいる</label></p>
				</div>
				<div class="col-md-4 opt">
					<h2>2. 何人目の子ですか？</h2>
					<p>
						<select type="text" name="num" id="num">
							<option id="num-default" value="">選択して下さい</option>
							<option id="num-1" value="1">第1子</option>
							<option id="num-2" value="2">第2子</option>
							<option id="num-3" value="3">第3子以降</option>
						</select>
					</p>
				</div>
				<div class="col-md-4 opt">
					<h2>3. 世帯の年収は？</h2>
					<p>
						<select type="text" name="ai" id="ai">
							<option id="ai-default" value="">選択して下さい</option>
							<option id="ai-0" value="0">生活保護を受けている</option>
							<option id="ai-270" value="1">270万円以下</option>
							<option id="ai-360" value="271">271〜360万円</option>
							<option id="ai-680" value="361">361万円〜680万円</option>
							<option id="ai-top" value="681">681万円以上</option>
							<option id="ai-none" value="-1">所得等未申告</option>
						</select>
					</p>
				</div>
			</div>
		</div>

		<div class="well calc">
			<button class="btn btn-lg btn-primary btn-block" name="calc" id="calc">計算する</button>
		</div>

		<div class="jumbotron result">
			<div class="container">
				<h2>もらえる就園奨励費のめやす</h2>
				<h3><span id="result-price"></span>円</h3>
			</div>
		</div>

<script type="text/javascript">
//<![CDATA[

//]]>
</script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

		<script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/per_income_levy.js"></script>

		<!-- GoogleAnalytics 不要な場合は以下の1行を削除して下さい -->
		<script type="text/javascript" src="js/_analytics.js"></script>

	</body>
</html>
