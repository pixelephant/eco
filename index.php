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
        <link rel="stylesheet" href="css/index.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="http://fast.fonts.com/jsapi/084a8b55-380b-4a9f-8ea8-c6a68bb66291.js"></script>
    </head>
    <body id="index-site">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->



        <?php include 'header.php' ?>

        <section id="value-prop">
            <div class="wrap">
                <hgroup>
                    <h1>Generálkivitelezés</h1>
                    <hr>
                </hgroup>
                <p>Generálkivitelezői módszertanunkat több mint 20 éve csiszoljuk.</p>
                <div class="three" id="prop-links">
                    <a href="references">referenciáink</a>
                    <a href="services">szolgáltatások</a>
                    <a href="about">rólunk</a>
                </div>
            </div>
        </section>

        <div id="main-content">
            <section id="newest">
                <hgroup>
                    <h1>Legújabb projektjeink</h1>
                    <hr>
                </hgroup>
                <div class="swiper-container">
                      <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <a href="#">
                                <div class="image-wrap">
                                    <img src="img/1.jpeg" alt="">
                                </div>
                                <p class="caption">
                                    BudaCash Irodaház
                                    <span>Budapest, 2011</span>
                                </p>
                            </a>
                          </div>
                          
                          <div class="swiper-slide">
                            <a href="#">
                                <div class="image-wrap">
                                    <img src="img/2.jpeg" alt="">
                                </div>
                                <p class="caption">
                                    BudaCash Irodaház
                                    <span>Budapest, 2011</span>
                                </p>
                            </a>
                          </div>
                          <div class="swiper-slide">
                            <a href="#">
                                <div class="image-wrap">
                                    <img src="img/3.jpeg" alt="">
                                </div>                                
                                <p class="caption">
                                    BudaCash Irodaház
                                    <span>Budapest, 2011</span>
                                </p>
                            </a>
                          </div>
                      </div>
                    </div>
                    <div class="pagination"></div>
            </section>

            <section id="services">
                <hgroup>
                    <h1>Szolgáltatásaink</h1>
                    <hr>
                </hgroup>
                    <a href="#" class="service">
                        <img src="img/tmp1.png" alt="Építési-felújítási munkák">
                        <h2>Építési és felújítási munkák</h2>
                        <p>Vállalkozási stratégiánk szerint minőségi munkánkat az átlagos építőipari árviszonyokhoz képest mérsékelt 
                        árszinten szolgáltatjuk.</p>
                    </a>
                    <a href="#" class="service">
                        <img src="img/tmp2.png" alt="Műemlékvédelem">
                        <h2>Műemlékvédelem</h2>
                        <p>Mindenkinek fontos, hogy a lakóépület, amelyben él biztonságos, korszerű, energiatakarékos és 
                        esztétikus legyen.</p>
                    </a>
                    <a href="#" class="service">
                        <img src="img/tmp3.png" alt="Generálkivitelezés">
                        <h2>Generálkivitelezés</h2>
                        <p>Teljes mértékben hazai tulajdonú 
                        vállalkozás, amely elkötelezte magát a hosszú távon is értéket képviselő magas színvonalú.</p>
                    </a>
            </section>

            <div class="f-wrap">
                <section id="actual">
                <hgroup>
                    <h1>Aktuális</h1>
                    <hr>
                </hgroup>
                <div>
                    <h2>Műszaki asszisztenst keresünk</h2>
                    <p>Keressük új műszaki asszisztens csapattagunkat. 3-5 év szakmai tapasztalat és angol nyelvtudás szükséges.</p>
                    <a href="actual" class="t-link"><span>részletek</span> &raquo;</a>
                </div>
                <div>
                    <h2>Új EU-s pályázatok</h2>
                    <p>Keressük új műszaki asszisztens csapattagunkat. 3-5 év szakmai tapasztalat és angol nyelvtudás szükséges.</p>
                    <a href="actual" class="t-link"><span>részletek</span> &raquo;</a>
                </div>
            </section>

            <section id="property">
                <hgroup>
                    <h1>Eladó ingatlanjaink</h1>
                    <hr>
                </hgroup>
                <div class="image-wrap">
                    <a href="#">
                        <img src="img/1.jpeg" alt="">
                    </a>                    
                </div>
                <p class="caption">
                    100m<sup>2</sup>-es családi ház az örsön
                </p>
            </section>
            </div>

        </div>

        <?php include 'footer.php' ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="js/main.js"></script>
        <script src="js/index.js"></script>
        <script src="js/swiper.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
