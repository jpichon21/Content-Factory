<?php
/**
 * @package WordPress
 * @subpackage Theme_Compat
 * @deprecated 3.0.0
 *
 * This file is here for backward compatibility with old themes and will be removed in a future version
 */
_deprecated_file(
	/* translators: %s: Template name. */
	sprintf( __( 'Theme without %s' ), basename( __FILE__ ) ),
	'3.0.0',
	null,
	/* translators: %s: Template name. */
	sprintf( __( 'Please include a %s template in your theme.' ), basename( __FILE__ ) )
);
?>

<hr />

</div>

<!-- Gorgeous design by Michael Heilemann - http://binarybonsai.com/kubrick/ -->
<?php /* "Just what do you think you're doing Dave?" */ ?>

	<!-- footer -->
			

				<?php wp_footer(); ?>


	
			<!-- /footer -->

			</div>
			<!-- /wrapper -->


			<!-- analytics -->
			<script>
				(function (f, i, r, e, s, h, l) {
					i['GoogleAnalyticsObject'] = s;
					f[s] = f[s] || function () {
						(f[s].q = f[s].q || []).push(arguments)
					}, f[s].l = 1 * new Date();
					h = i.createElement(r),
						l = i.getElementsByTagName(r)[0];
					h.async = 1;
					h.src = e;
					l.parentNode.insertBefore(h, l)
				})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
				ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
				ga('send', 'pageview');
			</script>

			<script>
				Object.defineProperty(HTMLMediaElement.prototype, 'playing', {
					get: function () {
						return (this.currentTime > 0 && !this.paused && !this.ended && this.readyState > 2);
					}
				});
			</script>


			<!-- Insight TAG -->
			<script type="text/javascript">
				_linkedin_partner_id = "2106594";
				window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
				window._linkedin_data_partner_ids.push(_linkedin_partner_id);
			</script>
			<script type="text/javascript">
				(function () {
					var s = document.getElementsByTagName("script")[0];
					var b = document.createElement("script");
					b.type = "text/javascript";
					b.async = true;
					b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
					s.parentNode.insertBefore(b, s);
				})();
			</script> <noscript> <img height="1" width="1" style="display:none;" alt=""
					src="https://px.ads.linkedin.com/collect/?pid=2106594&fmt=gif" /> </noscript>
			<!-- -->

			
			<?php wp_footer(); ?>
			</body>

			</html>
</body>
</html>
