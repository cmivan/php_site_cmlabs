<?php
global $options;
foreach ($options as $value) {
	if (get_settings( $value['id'] ) === FALSE) {
		$$value['id'] = $value['std'];
	}
	else {
		$$value['id'] = get_settings( $value['id'] );
	}
}
?>

	</div> <!-- content -->

		<div id="footer">

		<div class="footer-inside">

			<div class="about-us">
				<h2>五厘米？</h2>
				<p><?php echo stripslashes($yam_aboutus); ?></p>
			</div> <!-- about-us -->

			<div class="latest-tweets">
				<h2>Latest Tweets</h2>
				<ul id="twitter_update_list">
					<li>Loading Tweets...</li>
				</ul>
<?php /*?>
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/<?php echo $yam_twitter; ?>.json?callback=twitterCallback2&amp;count=<?php echo $yam_tweetsnr; ?>"></script><?php */?>
			</div> <!-- latest-tweets -->

			<div class="subscribe">
                		<h2>Subscribe to our Newsletter</h2>
				<p>Enter your e-mail to get the latest posts and updates:</p>
				<form action="http://feedburner.google.com/fb/a/mailverify" class="feedburner" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $yam_feedburner; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
				<input type="text" name="email" class="enteremail" value="Enter your e-mail" onfocus="if (this.value == 'Enter your e-mail') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter your e-mail';}" /><input type="hidden" value="<?php echo $yam_feedburner; ?>" name="uri"/><input type="hidden" name="loc" value="en_US"/>
				<input type="submit" value="Subscribe" class="formsubmit" />
				</form>
			</div> <!-- subscribe -->

		</div> <!-- footer-inside -->

		</div>
        <!-- footer -->
		<div id="footer-credits">
			<div class="footer-credits-inside">
				<div class="footer-credits-left">
					&#169; Copyright <?php echo date('Y'); ?> - <?php bloginfo('name'); ?>
				</div>
				<div class="footer-credits-right">
					Powered by <a href="http://www.wordpress.org">Wordpress</a> - 5limi Theme by <a href="http://5limi.cn" title="">5limi.cn</a>
				</div>
			</div>
		</div> 
        <!-- footer-credits -->

	<?php wp_footer(); ?>
</body>
</html>
