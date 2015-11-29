<!DOCTYPE HTML>
<html>

<head>
    <?php Loader::element('header_required') ?>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="<?= $view->getThemePath() ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="<?= $view->getThemePath() ?>/assets/css/main.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?= $view->getThemePath() ?>/assets/css/ie8.css"/><![endif]-->
</head>

<body class="landing">
<div class="<?= $c->getPageWrapperClass() ?>">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <nav id="nav">
                <ul>
                    <li><a href="index.php" class="button">Home</a></li>
                    <li><a href="index.php" class="button">Blog</a></li>
                    <li><a href="index.php" class="button">Contact</a></li>
                </ul>
            </nav>
        </header>

        <!-- Banner -->
        <section id="banner">
            <h2>My Job Scanner</h2>

            <p>Twoje okno na świat, w którym wymarzona praca jest na wyciągnięcie ręki.</p>
            <ul class="actions">
                Newsletter
            </ul>
        </section>

        <!-- Main -->
        <section id="main" class="container">

            <section class="box special">
                <header class="major">
                    <h2>Introducing the ultimate mobile app
                        <br/>
                        for doing stuff with your phone</h2>

                    <p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc ornare<br/>
                        adipiscing nunc adipiscing. Condimentum turpis massa.</p>
                </header>
                <span class="image featured"><img src="<?= $view->getThemePath() ?>/images/pic01.jpg" alt=""/></span>
            </section>

            <section class="box special features">
                <div class="features-row">
                    <section>
                        <span class="icon major fa-bolt accent2"></span>

                        <h3>Magna etiam</h3>

                        <p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim
                            rutrum
                            phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
                    </section>
                    <section>
                        <span class="icon major fa-area-chart accent3"></span>

                        <h3>Ipsum dolor</h3>

                        <p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim
                            rutrum
                            phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
                    </section>
                </div>
                <div class="features-row">
                    <section>
                        <span class="icon major fa-cloud accent4"></span>

                        <h3>Sed feugiat</h3>

                        <p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim
                            rutrum
                            phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
                    </section>
                    <section>
                        <span class="icon major fa-lock accent5"></span>

                        <h3>Enim phasellus</h3>

                        <p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim
                            rutrum
                            phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
                    </section>
                </div>
            </section>

            <div class="row">
                <div class="6u 12u(narrower)">

                    <section class="box special">
                    <span class="image featured"><img src="<?= $view->getThemePath() ?>/images/pic02.jpg"
                                                      alt=""/></span>

                        <h3>Sed lorem adipiscing</h3>

                        <p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim
                            rutrum
                            phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
                        <ul class="actions">
                            <li><a href="#" class="button alt">Learn More</a></li>
                        </ul>
                    </section>

                </div>
                <div class="6u 12u(narrower)">

                    <section class="box special">
                    <span class="image featured"><img src="<?= $view->getThemePath() ?>/images/pic03.jpg"
                                                      alt=""/></span>

                        <h3>Accumsan integer</h3>

                        <p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim
                            rutrum
                            phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
                        <ul class="actions">
                            <li><a href="#" class="button alt">Learn More</a></li>
                        </ul>
                    </section>

                </div>
            </div>

        </section>

        <!-- CTA -->
        <section id="cta">

            <h2>Sign up for beta access</h2>

            <p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc.</p>

            <form>
                <div class="row uniform 50%">
                    <div class="8u 12u(mobilep)">
                        <input type="email" name="email" id="email" placeholder="Email Address"/>
                    </div>
                    <div class="4u 12u(mobilep)">
                        <input type="submit" value="Sign Up" class="fit"/>
                    </div>
                </div>
            </form>

        </section>

        <!-- Footer -->
        <footer id="footer">
            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; Untitled. All rights reserved.</li>
                <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </footer>

    </div>

    <?php
    $a = new Area('Area Name');
    $a->display($c);
    ?>

</div>

<!-- Scripts -->
<script src="<?= $view->getThemePath() ?>/assets/js/jquery.min.js"></script>
<script src="<?= $view->getThemePath() ?>/assets/js/jquery.dropotron.min.js"></script>
<script src="<?= $view->getThemePath() ?>/assets/js/jquery.scrollgress.min.js"></script>
<script src="<?= $view->getThemePath() ?>/assets/js/skel.min.js"></script>
<script src="<?= $view->getThemePath() ?>/assets/js/util.js"></script>
<!--[if lte IE 8]>
<script src="<?= $view->getThemePath() ?>/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="<?= $view->getThemePath() ?>/assets/js/main.js"></script>

<?php Loader::element('footer_required') ?>

</body>
</html>