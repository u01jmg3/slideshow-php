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

			.reveal li {
				color: #13daec;
			}

			.reveal li span {
				color: #767676;
				font-size: 30px;
				line-height: 1.3em;
			}

			::selection {
				background: #13daec;
			}

            /**/

            .normal-mode, .print-pdf .print-mode, .print-pdf .slide-number {
                display: none;
            }

            .print-pdf .normal-mode {
                display: inline;
            }

            .hyperlink {
				font-size: 30px !important;
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
				<section data-background="#F6F6F6">
					<h1>Hack Day - 2 May 2014</h1>
                    <a class="normal-mode hyperlink" href="?#">(Normal Mode)</a>
                    <a class="print-mode hyperlink" href="?print-pdf#">(Print Mode)</a>
				</section>
				<section data-background="#F6F6F6">
					<ul>
						<li><span>SASS vs LESS</span></li>
						<li><span>Foundation 5 vs Bootstrap vs Semantic UI</span></li>
						<li><span>Sublime Text 3 vs Notepad++ vs PHPStorm vs Adobe Brackets vs GitHub’s Atom text editor
							<ul><li><span>Sublime packages vs Notepad++ plugins</span></li></ul>
						</span></li>
						<li><span>Grunt vs Gulp</span></li>
						<li><span>Bower vs Component</span></li>
						<li><span>Yeoman vs Brunch vs Lineman</span></li>
						<li><span>Heroku vs Nodejitsu vs AppFog</span></li>
						<li><span>Angular.js vs Ember.js vs Backbone.js</span></li>
						<li><span>Handlebars.js vs. Hogan.js vs. Mustache.js vs. jsRender vs Dust.js vs Underscore.js</span></li>
						<li><span>Require.js vs Browserify vs Common.js</span></li>
						<li><span>Dalek.js</span></li>
						<li><span>Laravel 4 vs Symfony</span></li>
						<li><span>jQuery vs Zepto vs MooTools</span></li>
						<li><span>ShiftEdit vs  Cloud9 vs Koding vs Coda</span></li>
						<li><span>CodePen vs JsFiddle vs JsBin vs CSS Deck</span></li>
					</ul>
				</section>
				<section data-background="#F6F6F6">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>sass.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>less.png">
				</section>
				<section data-background="#F6F6F6">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>foundation.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>twitter-bootstrap.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>semantic-ui.png">
				</section>
				<section data-background="#F6F6F6">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>sublime-text.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>notepad++.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>phpstorm.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>brackets.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>atom.png">
				</section>
				<section data-background="#F6F6F6">
					<p>...</p>
				</section>
				<section data-background="#F6F6F6">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>grunt.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>gulp.png">
				</section>
				<section data-background="#F6F6F6">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>bower.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>component.png">
				</section>
				<section data-background="#F6F6F6">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>yeoman.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>brunch.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>lineman.png">
				</section>
				<section data-background="#F6F6F6">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>heroku.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>nodejitsu.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>appfog.png">
				</section>
				<section data-background="#F6F6F6">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>angularjs.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>emberjs.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>backbonejs.png">
				</section>
				<section data-background="#F6F6F6">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>handlebarsjs.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>hoganjs.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>mustachejs.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>jsrender.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>dustjs.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>underscorejs.png">
				</section>
				<section data-background="#F6F6F6">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>requirejs.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>browserify.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>commonjs.png">
				</section>
				<section data-background="#F6F6F6">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>dalekjs.png">
				</section>
				<section data-background="#F6F6F6">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>laravel4.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>symfony.png">
				</section>
				<section data-background="#F6F6F6">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>jquery.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>zepto.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>mootools.png">
				</section>
				<section data-background="#F6F6F6">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>shiftedit.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>cloud9.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>koding.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>coda.png">
				</section>
				<section data-background="#F6F6F6">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>codepen.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>jsfiddle.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>jsbin.png">
					<img src="<?php echo LOGOS_IMAGES_PATH ?>cssdeck.png">
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