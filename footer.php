<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jamgraphickit
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer mdl-mega-footer" role="contentinfo">
		<nav class="site-info mdl-mega-footer--middle-section">
			<ul>
				<li class="mdl-mega-footer--drop-down-section">
	              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
	              <h1 class="mdl-mega-footer--heading">Features</h1>
	              <ul class="mdl-mega-footer--link-list">
	                <li><a href="#">About</a></li>
	                <li><a href="#">Terms</a></li>
	                <li><a href="#">Partners</a></li>
	                <li><a href="#">Updates</a></li>
	              </ul>
	            </li>
	            <li class="mdl-mega-footer--drop-down-section">
	              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
	              <h1 class="mdl-mega-footer--heading">Details</h1>
	              <ul class="mdl-mega-footer--link-list">
	                <li><a href="#">Spec</a></li>
	                <li><a href="#">Tools</a></li>
	                <li><a href="#">Resources</a></li>
	              </ul>
	            </li>
	            <li class="mdl-mega-footer--drop-down-section footer-social-networks">
	              <p class="mdl-mega-footer--heading">sigueme</p>
	              <ul class="mdl-mega-footer--link-list">
	                <li>
		                <a href="#" title="Facebook" alt="facebook">
		                	<!-- For modern browsers. -->
							<i class="material-icons md-light">face</i>
		                </a>
	                </li>
	                <li><a href="#" title="Twitter" alt="twitter"><i></i></a></li>
	                <li><a href="#" title="LinkedIn" alt="linkedin"><i></i></a></li>
	                <li><a href="#" title="Tumblr" alt="tumblr"><i></i></a></li>
	              </ul>
	            </li>
	        </ul>
        </nav><!-- .site-info -->
        <div class="mdl-mega-footer--bottom-section">
			<p>
				Para el website <a href="http://jamgraphic.com">jamgraphic.com</a> se creó el tema <?php printf( esc_html__( '%1$s desarrollado en base a %2$s', 'jamgraphickit' ), 'JamgraphicKit', '<a href="http://underscores.me/" rel="designer">underscores.me</a>' ); ?>, <a href="https://getmdl.io/" rel="nofollow">Material Design Lite</a>, y <a href="https://developers.google.com/web/fundamentals/getting-started/web-starter-kit/setting-up?hl=en" rel="nofollow">Web Starter Kit</a>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jamgraphickit' ) ); ?>" rel="nofollow"><?php printf( esc_html__( 'desarollado en %s', 'jamgraphickit' ), 'WordPress' ); ?></a>.
			</p>
			<p>
				<small>Derechos Reservados .............. copyright/ license digital</small>
			<p>
		</div><!-- .bottom-section -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-XXXXX-X', 'auto');
      ga('send', 'pageview');
    </script>

</body>
</html>
