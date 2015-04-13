		</main>
		<footer>
			<p>
				Website by <a href="http://www.eamonngormley.com">Eamonn Gormley</a> &copy; <?php echo date('Y'); ?>
			</p>


		</footer>
		
		<?php wp_footer(); ?>

        <script src="/wp-content/themes/H5Custom/lib/js/bjqs-1.3.min.js"></script>
        <script class="secret-source">
                jQuery(document).ready(function($) {

                  $('#banner-slide').bjqs({
                    animtype      : 'slide',
                    height        : 150,
                    width         : 150,
                    responsive    : true,
                    randomstart   : true
                  });

                });
        </script>

		<script type="text/javascript" src="/wp-content/themes/H5Custom/lib/js/jquery.fancybox.js"></script>
		<script type="text/javascript" src="/wp-content/themes/H5Custom/lib/js/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="/wp-content/themes/H5Custom/lib/js/jquery.fancybox-buttons.js"></script>
		<script type="text/javascript" src="/wp-content/themes/H5Custom/lib/js/jquery.fancybox-media.js"></script>
		<script type="text/javascript" src="/wp-content/themes/H5Custom/lib/js/jquery.fancybox-thumbs.js"></script>
		<script type="text/javascript">
               // Remove padding, set opening and closing animations, close if clicked and disable overlay
               jQuery(".fancybox-effects-d").fancybox({
                        padding: 0,
                        margintop: 10,

                        openEffect : 'elastic',
                        openSpeed  : 150,

                        closeEffect : 'elastic',
                        closeSpeed  : 150,

                        closeClick : true,

                        helpers : {
                            overlay : null
                        }
               });
        </script>

        <script>
            // Google analytics
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-58398409-1', 'auto');
            ga('send', 'pageview');

        </script>

	</body>
</html>