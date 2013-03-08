<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/references.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="http://fast.fonts.com/jsapi/084a8b55-380b-4a9f-8ea8-c6a68bb66291.js"></script>
    </head>
    <body id="refernces-site">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->



        <?php include 'header.php' ?>

        <section id="value-prop">
            <div class="wrap">
                <hgroup>
                    <h1>Referenciáink</h1>
                    <hr>
                </hgroup>
                <p>Az elmúlt 20 évben elég sokat építkeztünk. Alant amikre a legbüszkébbek vagyunk.</p>
                <div class="two" id="prop-links">
                	<a href="#finished">kész projektek</a>
                    <a href="#ongoing">futó projektek</a>                    
                </div>
            </div>
        </section>

        <div id="main-content">
            
        	<section id="ongoing">
        		<hgroup>
        			<h1>Futó projektek</h1>
        			<hr>
        		</hgroup>
        		<div class="list" id="ongoing-list">
        			<a href="reference" class="reference">
        				<div class="image-wrap">
        					<img src="img/2.jpeg" alt="">
        				</div>
        				<p class="caption">
        					Házfelújítás Szegeden
        					<span>88%</span>
        				</p>
        			</a>
        			<a href="reference" class="reference">
        				<div class="image-wrap">
        					<img src="img/3.jpeg" alt="">
        				</div>
        				<p class="caption">
        					Irodaház építés
        					<span>10%</span>
        				</p>
        			</a>
        			<a href="reference" class="reference">
        				<div class="image-wrap">
        					<img src="img/1.jpeg" alt="">
        				</div>
        				<p class="caption">
        					Egyetemi tatarozás
        					<span>65%</span>
        				</p>
        			</a>
        		</div>
        	</section>

        	<section id="finished">
        		<hgroup>
        			<h1>Kész projektek</h1>
        			<hr>
        		</hgroup>
        		<div class="filters">
        			<a href="#years">minden év</a>
        			<a href="#types">minden típus</a>
        		</div>
        		<div id="years" class="filter-options">
        			<ul>
        				<li>2013</li>
        				<li>2012</li>
        				<li>2011</li>
        				<li>2010</li>
        				<li>2009</li>
        				<li class="all">Minden év</li>
        			</ul>
        		</div>
        		<div id="types" class="filter-options">
        			<ul>
        				<li class="type-01">Közületi</li>
        				<li class="type-02">Magán</li>
        				<li class="type-03">Felújítás</li>
        				<li class="type-04">Műemlékvédelem</li>
        				<li class="all">Minden típus</li>
        			</ul>
        		</div>
        		<div class="list" id="finished-list">
        			<a href="reference" class="reference type-01">
        				<div class="image-wrap">
        					<img src="img/2.jpeg" alt="">
        				</div>
        				<p class="caption">
        					Házfelújítás Szegeden
        					<span>Szeged</span>
        				</p>
        			</a>
        			<a href="reference" class="reference type-01">
        				<div class="image-wrap">
        					<img src="img/3.jpeg" alt="">
        				</div>
        				<p class="caption">
        					Irodaház építés
        					<span>Budapest</span>
        				</p>
        			</a>
        			<a href="reference" class="reference type-02">
        				<div class="image-wrap">
        					<img src="img/1.jpeg" alt="">
        				</div>
        				<p class="caption">
        					Egyetemi tatarozás
        					<span>Pécs</span>
        				</p>
        			</a>
        			<a href="reference" class="reference type-03">
        				<div class="image-wrap">
        					<img src="img/2.jpeg" alt="">
        				</div>
        				<p class="caption">
        					Házfelújítás Szegeden
        					<span>Szeged</span>
        				</p>
        			</a>
        			<a href="reference" class="reference type-03">
        				<div class="image-wrap">
        					<img src="img/3.jpeg" alt="">
        				</div>
        				<p class="caption">
        					Irodaház építés
        					<span>Róma</span>
        				</p>
        			</a>
        		</div>
        	</section>

        </div>

        <?php include 'footer.php' ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="js/main.js"></script>
        <script src="js/references.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
