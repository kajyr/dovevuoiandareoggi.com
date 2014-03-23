<?php

$lang = 'it';

$frasi['it'] = array(
	"affanculo."
);

$pos = strip_tags($_GET['a']);

if ( empty($pos) || empty($frasi[$lang][$pos]) ) {
	$pos = array_rand($frasi[$lang]);
}



?>




<html lang="<?php echo $lang; ?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Language" content="<?php echo $lang; ?>" />

	<title>Dove vuoi andare oggi?</title>
	<meta name="description" content="Dove vuoi andare oggi?">
	<meta name="author" content="Carlo 'kajyr'">

	<link href='http://fonts.googleapis.com/css?family=Lobster+Two:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css?v=2">

	<link rel="author" type="text/html" href="http://google.com/+CarloPanzi"/>

	<meta property="fb:admins" content="707570570" />
	<meta property="og:title" content="Dove vuoi andare oggi?"/>
	<meta property="og:type" content="website"/>
	<meta property="og:site_name" content="Dove vuoi andare oggi?"/>
	<meta property="og:url" content="http://dovevuoiandareoggi.com">
	<meta property="og:image" content="http://dovevuoiandareoggi.com/images/5826041631_d965a190bd_b.jpg">
	<meta property="og:description" content="Dove vuoi andare oggi ti da degli ottimi suggerimenti"/>

</head>

<body>

	<div id="container">

		<section id="suggestion">
			<p>
				<?php echo $frasi[$lang][$pos]; ?>
			</p>
		</section>

		<footer>

			<div class="social" id="facebook">
				<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=176793495722085&amp;xfbml=1"></script>
				<fb:like href="" send="true" layout="button_count" width="150" show_faces="false" action="recommend" font=""></fb:like>
			</div>
			<!-- Place this tag where you want the +1 button to render. -->
			<div class="social" id="google">
				<div class="g-plusone" data-size="medium"></div>
			</div>

			<section id="links">
				<a href="/?a=<?php echo $pos; ?>">permalink</a> | 
				suggest |
				proudly made by <a href="https://github.com/kajyr">@kajyr</a>
			</section>

		</footer>
	</div>

	<!-- Place this tag after the last +1 button tag. -->
	<script type="text/javascript">
	window.___gcfg = {lang: 'it'};
	(function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	})();
	</script>

	<script type="text/javascript">

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-1163483-10']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();

	</script>
</body>
</html>