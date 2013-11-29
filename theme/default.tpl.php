<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?=$title?></title>
        <meta name="description" content="<?=$meta_description?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="theme/style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
          <style>
            <?=$style?>
          </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <header id='above'>
        <?=getHTMLForKmomNavlinks($navkmom, "nav-kmom")?>
    </header>

    <header id='header'>
       <a href="index.php">
        <img class="site-logo" src="img/logo.png" alt="logo" width="80" height="80" />
      </a>
      <p class="site-title">phpmvc</p>
      <p class="site-slogan">Mitt PHP-baserade och MVC-inspirerade ramverk</p>
    </div>
    <?=getHTMLForNavigation($navbar, "navbar")?>
  </header>

    <div id="main" role="main">
    <?=$main?>
  </div>

  <footer id="footer">

  
    <div id='social'>
      <p style='float:left; margin-right:10px;'> &copy; | 2013 | Isa Jansson </p>
      <a title="Besök mig på Facebook"         href="https://www.facebook.com/isa.jansson"                   target="_blank"><img src="img/facebook.png" alt="" width="20" /></a> 
      <a title="Besök mig på Twitter"          href="https://twitter.com/Isa_Jansson"                        target="_blank"><img src="img/twitter.png" alt="" width="20" /></a> 
      <a title="Kontakta mig på LinkedIn"      href="http://www.linkedin.com/pub/isa-jansson/67/55a/81b"     target="_blank"><img src="img/Linkedin.png" alt="" width="20" /></a>  
      <a title="Mitt GitHub"                   href="https://github.com/IsaJansson"                         target="_blank"><img src="img/guthub.png" alt="" width="20" /></a>

    </div>
    
    <p style='float:left; margin-right:20px; margin-left:20px;'>Tips:
      <a href="http://www.w3.org/2009/cheatsheet"  target="_blank">cheatsheet</a>
      <a href="http://dev.w3.org/html5/spec/spec.html"  target="_blank">html5</a>
      <a href="http://www.w3.org/Style/CSS/current-work#CSS3"  target="_blank">css3</a>
      <a href="http://php.net/manual/en/index.php"  target="_blank">php</a>
    </p>

    <p>Verktyg: 
        <a href="http://www.workwithcolor.com/hsl-color-schemer-01.htm" target="_blank">colors</a>
      <a href="http://dbwebb.se/style" target="_blank">style</a>
        <a href="http://validator.w3.org/i18n-checker/check?uri=<?=$currentUrl?>" target="_blank">i18n</a>
    <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance" target="_blank">unicorn</a>
    </p>
    
  </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
