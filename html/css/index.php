<?php

$lang = 'it';

$frasi['it'][] = "affanculo."

?>




<html lang="<?php echo $lang; ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="Content-Language" content="<?php echo $lang; ?>" />

  <title>Dove vuoi andare oggi?</title>
  <meta name="description" content="Dove vuoi andare oggi?">
  <meta name="author" content="Carlo 'kajyr'">

  <?php /*<meta name="viewport" content="width=device-width, initial-scale=1.0">*/?>
  <meta property="fb:admins" content="707570570" />
  <?php /* <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">*/?>

  <link href='http://fonts.googleapis.com/css?family=Lobster+Two:700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/style.css?v=2">

</head>

<body>

  <div id="container">
    <header>

    </header>
    <div id="main" role="main">

      <?php echo $frasi[$lang][array_rand($frasi[$lang])] ?>

    </div>
    <footer>
      <div class="social">
        <div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=176793495722085&amp;xfbml=1"></script>
        <fb:like href="" send="true" layout="button_count" width="150" show_faces="false" action="recommend" font=""></fb:like>
      </div>
      <!-- Place this tag where you want the +1 button to render. -->
      <div class="social">
        <div class="g-plusone" data-size="medium"></div>
      </div>
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