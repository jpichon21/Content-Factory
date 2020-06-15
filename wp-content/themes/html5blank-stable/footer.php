			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<?php wp_footer(); ?>

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
					<?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com"
						title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

			</div>
			<!-- /wrapper -->

			<?php wp_footer(); ?>

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

			</body>

			</html>