<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 */
global $invert_shortname;?>
<div id="full-twitter-box"></div></div>
<!-- #main --> 

	<!-- #footer -->
	<div id="footer">
		<div class="container">
			<div class="row-fluid">
				<div class="second_wrapper">
					<?php dynamic_sidebar( 'Footer Sidebar' ); ?>
					<div class="clear"></div>
				</div>
				<!-- second_wrapper -->
			</div>
		</div>
		<div class="third_wrapper">
			<div class="container">
				<div class="row-fluid">
					<div class="copyright span6 alpha omega"> <?php echo stripslashes(sketch_get_option($invert_shortname."_copyright")); ?> </div>
					<div class="owner span6 alpha omega">Giấy chứng nhận ĐKKD số 0105058864 cấp lại ngày 02/02/2015, được cấp bởi Sở Kế hoạch và Đầu tư Thành phố Hà Nội. Điện thoại: 04 22 66 44 88</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<!-- third_wrapper --> 
		</div>
	<!-- #footer -->

</div>
<!-- #wrapper -->

<a href="JavaScript:void(0);" title="Back To Top" id="backtop"></a>
<?php wp_footer(); ?>
</body>
</html>