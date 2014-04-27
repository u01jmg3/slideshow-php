<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hack Day - 2 May 2014</title>

        <meta name="description" content="Our first Hack Day">
        <meta name="author" content="Jonathan Goode">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <?php
            $cwd = getcwd() . '/';
            require_once($cwd . 'includes/global/config.inc.php');
        ?>

        <link rel="stylesheet" href="<?php echo CSS_PATH ?>reveal.css">
        <link rel="stylesheet" href="<?php echo THEME_CSS_PATH ?>default.css" id="theme">

        <!-- For syntax highlighting -->
        <link rel="stylesheet" href="<?php echo CSS_LIB_PATH ?>zenburn.css">

        <style>
            @font-face {
                font-family: 'Secca Std';
                src:  url('<?php echo FONT_LIB_PATH ?>secca_std.otf') format('opentype');
                font-weight: normal;
                font-style: normal;
            }

            body {
                background: #f6f6f6;
            }

            .reveal {
                color: #767676;
                font-family: 'Secca Std';
                font-size: 20px;
            }

            .reveal h1,
            .reveal h2,
            .reveal h3,
            .reveal h4,
            .reveal h5,
            .reveal h6 {
                color: inherit;
                font-family: inherit;
            }

            .reveal h1 {
                /*
                text-shadow: 0 1px 0 #cccccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbbbbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaaaaa, 0 6px 1px rgba(0, 0, 0, 0.1), 0 0 5px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3), 0 3px 5px rgba(0, 0, 0, 0.2), 0 5px 10px rgba(0, 0, 0, 0.25), 0 20px 20px rgba(0, 0, 0, 0.15);
                */
                text-shadow: 0 1px 0 #cccccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbbbbb, 0 4px 0 #b9b9b9, 0 0px 0 #aaaaaa, 0 0px 1px rgba(0, 0, 0, 0.1), 0 0 5px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3), 0 3px 5px rgba(0, 0, 0, 0.2), 0 5px 10px rgba(0, 0, 0, 0.25), 0 20px 20px rgba(0, 0, 0, 0.15);
            }

            .reveal li .grey-text {
                color: #767676;
            }

            .reveal li span, .reveal p {
                font-size: 30px;
                line-height: 1.3em;
            }

            .reveal li, .blue-text {
                color: #13daec;
            }

            ::selection {
                background: #13daec;
            }

            /**/

            .normal-mode, .print-pdf .print-mode, .print-pdf .slide-number, .slide-0 .slide-number {
                display: none;
            }

            .print-pdf .normal-mode {
                display: inline;
            }

            .hyperlink {
                font-size: 30px !important;
            }

            .justified-text {
                text-align: justify;
            }
        </style>

        <!-- If the query includes 'print-pdf', include the PDF print sheet -->
        <script>
            if( window.location.search.match( /print-pdf/gi ) ) {
                var link = document.createElement( 'link' );
                link.rel = 'stylesheet';
                link.type = 'text/css';
                link.href = '<?php echo PRINT_CSS_PATH ?>pdf.css';
                document.getElementsByTagName( 'head' )[0].appendChild( link );
            }
        </script>

        <!--[if lt IE 9]>
        <script src="<?php echo SCRIPTS_LIB_PATH ?>html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="reveal">

            <!-- Any section element inside of this container is displayed as a slide -->
            <div class="slides">
                <section>
                    <h1>Hack Day - 2 May 2014</h1>
                    <a class="normal-mode hyperlink" href="?#">(Normal Mode)</a>
                    <a class="print-mode hyperlink" href="?print-pdf#">(Print Mode)</a>
                </section>
                <section>
                    <ul>
                        <li><span class="grey-text">SASS vs LESS</span></li>
                        <li><span class="grey-text">Foundation 5 vs Twitter Bootstrap vs Semantic UI</span></li>
                        <li><span class="grey-text">Sublime Text 3 vs Notepad++ vs PHPStorm vs Adobe Brackets vs GitHub’s Atom text editor
                            <ul><li><span class="grey-text">Sublime packages vs Notepad++ plugins</span></li></ul>
                        </span></li>
                        <li><span class="grey-text">Grunt vs Gulp</span></li>
                        <li><span class="grey-text">Bower vs Component</span></li>
                        <li><span class="grey-text">Yeoman vs Brunch vs Lineman.js</span></li>
                        <li><span class="grey-text">Heroku vs Nodejitsu vs AppFog</span></li>
                        <li><span class="grey-text">Angular.js vs Ember.js vs Backbone.js</span></li>
                        <li><span class="grey-text">Handlebars.js vs. Hogan.js vs. Mustache.js vs. jsRender vs Dust.js vs Underscore.js</span></li>
                        <li><span class="grey-text">Require.js vs Browserify vs Common.js</span></li>
                        <li><span class="grey-text">Dalek.js</span></li>
                        <li><span class="grey-text">Laravel 4 vs Symfony</span></li>
                        <li><span class="grey-text">jQuery vs Zepto vs MooTools</span></li>
                        <li><span class="grey-text">ShiftEdit vs  Cloud9 vs Koding vs Coda 2</span></li>
                        <li><span class="grey-text">CodePen vs JsFiddle vs JsBin vs CSS Deck</span></li>
                        <li><span class="grey-text">Dploy vs Snap CI vs Travis CI</span></li>
                    </ul>
                </section>
                <section>
                    <ul>
                        <li><span class="blue-text">What is a hack day?</span></li>
                    </ul>
                    <p>A hackathon is an event in which computer programmers and others involved in software development, including graphic designers, interface designers and project managers, collaborate intensively on software projects. Occasionally, there is a hardware component as well.</p>
                </section>
                <section>
                    <ul>
                        <li><span class="blue-text">What is the procedure?</span>
                            <ul><li><span class="grey-text">Split up into groups of 2 or 3</span></li></ul>
                        </li>
                    </ul>
                </section>
                <section class="justified-text">
                    <ul>
                        <li><span class="blue-text">Continuous Integration</span></li>
                            <ul><li><a href="http://www.thoughtworks.com/continuous-integration">http://www.thoughtworks.com/continuous-integration</a></li></ul>
                        </li>
                    </ul>
                    <p>Continuous Integration (CI) is a development practice that requires developers to integrate code into a shared repository several times a day. Each check-in is then verified by an automated build, allowing teams to detect problems early.</p>
                    <p>By integrating regularly, you can detect errors quickly, and locate them more easily.</p>
                    </p>
                </section>
                <section>
                    <ul>
                        <li><span class="blue-text">CSS Preprocessors</span></li>
                    </ul>
                    <p>
                        <a href="http://sass-lang.com/" target="_blank"><a href="" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>sass.png"></a>
                        <a href="http://lesscss.org/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>less.png"></a>
                    </p>
                </section>
                <section>
                    <ul>
                        <li><span class="blue-text">Front-end Frameworks</span></li>
                    </ul>
                    <p>
                        <a href="http://foundation.zurb.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>foundation.png"></a>
                        <a href="http://getbootstrap.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>twitter-bootstrap.png"></a>
                        <a href="http://semantic-ui.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>semantic-ui.png"></a>
                    </p>
                </section>
                <section>
                    <ul>
                        <li><span class="blue-text">Text Editors / IDEs</span></li>
                    </ul>
                    <p>
                        <a href="http://www.sublimetext.com/3" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>sublime-text.png"></a>
                        <a href="http://notepad-plus-plus.org/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>notepad++.png"></a>
                        <a href="http://www.jetbrains.com/phpstorm/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>phpstorm.png"></a>
                        <a href="http://brackets.io/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>brackets.png"></a>
                        <a href="https://atom.io/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>atom.png"></a>
                    </p>
                </section>
                <section>
                    <ul>
                        <li><span class="blue-text">Task Runners</span></li>
                    </ul>
                    <p>
                        <a href="http://gruntjs.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>grunt.png"></a>
                        <a href="http://gulpjs.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>gulp.png"></a>
                    </p>
                </section>
                <section>
                    <ul>
                        <li><span class="blue-text">Package Managers</span></li>
                    </ul>
                    <p>
                        <a href="http://bower.io/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>bower.png"></a>
                        <a href="http://component.io/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>component.png"></a>
                    </p>
                </section>
                <section>
                    <ul>
                        <li><span class="blue-text">Scaffolding Tools</span></li>
                    </ul>
                    <p>
                        <a href="http://yeoman.io/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>yeoman.png"></a>
                        <a href="http://brunch.io/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>brunch.png"></a>
                        <a href="http://www.linemanjs.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>linemanjs.png"></a>
                    </p>
                </section>
                <section>
                    <ul>
                        <li><span class="blue-text">Cloud Platforms</span></li>
                    </ul>
                    <p>
                        <a href="https://www.heroku.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>heroku.png"></a>
                        <a href="https://www.nodejitsu.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>nodejitsu.png"></a>
                        <a href="https://www.appfog.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>appfog.png"></a>
                    </p>
                </section>
                <section>
                    <ul>
                        <li><span class="blue-text">JavaScript MVW Frameworks</span></li>
                    </ul>
                    <p>
                        <a href="https://angularjs.org/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>angularjs.png"></a>
                        <a href="http://emberjs.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>emberjs.png"></a>
                        <a href="http://backbonejs.org/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>backbonejs.png"></a>
                    </p>
                </section>
                <section>
                    <ul>
                        <li><span class="blue-text">JavaScript Templating Engines</span></li>
                    </ul>
                    <p>
                        <a href="http://handlebarsjs.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>handlebarsjs.png"></a>
                        <a href="http://twitter.github.io/hogan.js/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>hoganjs.png"></a>
                        <a href="http://mustache.github.io/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>mustachejs.png"></a>
                        <a href="http://www.jsviews.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>jsrender.png"></a>
                        <a href="http://akdubya.github.io/dustjs/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>dustjs.png"></a>
                        <a href="http://underscorejs.org/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>underscorejs.png"></a>
                    </p>
                </section>
                <section>
                    <ul>
                        <li><span class="blue-text">JavaScript File and Module Loaders</span></li>
                    </ul>
                    <p>
                        <a href="http://requirejs.org/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>requirejs.png"></a>
                        <a href="http://browserify.org/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>browserify.png"></a>
                        <a href="http://www.commonjs.org/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>commonjs.png"></a>
                    </p>
                </section>
                <section>
                    <ul>
                        <li><span class="blue-text">Automated Testing</span></li>
                    </ul>
                    <p>
                        <a href="http://dalekjs.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>dalekjs.png"></a>
                    </p>
                </section>
                <section>
                    <ul>
                        <li><span class="blue-text">PHP Frameworks</span></li>
                    </ul>
                    <p>
                        <a href="http://laravel.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>laravel4.png"></a>
                        <a href="http://symfony.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>symfony.png"></a>
                    </p>
                </section>
                <section>
                    <ul>
                        <li><span class="blue-text">JavaScript Libraries</span></li>
                    </ul>
                    <p>
                        <a href="http://jquery.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>jquery.png"></a>
                        <a href="http://zeptojs.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>zepto.png"></a>
                        <a href="http://mootools.net/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>mootools.png"></a>
                    </p>
                </section>
                <section>
                    <ul>
                        <li><span class="blue-text">Cloud Editors/IDEs</span></li>
                    </ul>
                    <p>
                        <a href="https://shiftedit.net/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>shiftedit.png"></a>
                        <a href="https://c9.io/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>cloud9.png"></a>
                        <a href="https://koding.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>koding.png"></a>
                        <a href="https://panic.com/coda/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>coda.png"></a>
                    </p>
                </section>
                <section>
                    <ul>
                        <li><span class="blue-text">Code Playgrounds</span></li>
                    </ul>
                    <p>
                        <a href="http://codepen.io/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>codepen.png"></a>
                        <a href="http://jsfiddle.net/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>jsfiddle.png"></a>
                        <a href="http://jsbin.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>jsbin.png"></a>
                        <a href="http://cssdeck.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>cssdeck.png"></a>
                    </p>
                </section>
                <section>
                    <ul>
                        <li><span class="blue-text">Continuous Deployment Platforms</span></li>
                    </ul>
                    <p>
                        <a href="http://dploy.io/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>dploy.png"></a>
                        <a href="http://snap-ci.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>snapci.png"></a>
                        <a href="http://travis-ci.com/" target="_blank"><img src="<?php echo LOGOS_IMAGES_PATH ?>travisci.png"></a>
                    </p>
                </section>
            </div>
        </div><!-- .reveal -->

        <script src="<?php echo SCRIPTS_LIB_PATH ?>head.min.js"></script>
        <script src="<?php echo SCRIPTS_PATH ?>reveal.js"></script>
        <script>
            // Full list of configuration options available here:
            // https://github.com/hakimel/reveal.js#configuration
            Reveal.initialize({
                history: true,
                loop: true,
                mouseWheel: true,
                slideNumber: true,

                theme: 'default', // available themes are in /css/theme
                transition: 'linear', // default/cube/page/concave/zoom/linear/fade/none

                // Parallax scrolling
                //parallaxBackgroundImage: 'https://s3.amazonaws.com/hakim-static/reveal-js/reveal-parallax-1.jpg',
                //parallaxBackgroundSize: '2100px 900px',

                // Optional libraries used to extend on reveal.js
                dependencies: [
                    { src: '<?php echo SCRIPTS_LIB_PATH ?>classList.js', condition: function() { return !document.body.classList; } },
                    { src: '<?php echo MARKDOWN_PLUGINS_PATH ?>marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
                    { src: '<?php echo MARKDOWN_PLUGINS_PATH ?>markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
                    { src: '<?php echo HIGHLIGHT_PLUGINS_PATH ?>highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
                    { src: '<?php echo ZOOM_JS_PLUGINS_PATH ?>zoom.js', async: true, condition: function() { return !!document.body.classList; } },
                    { src: '<?php echo NOTES_PLUGINS_PATH ?>notes.js', async: true, condition: function() { return !!document.body.classList; } }
                ]
            });
        </script>
    </body>
</html>