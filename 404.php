<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>



				<h1 class="page-title"><?php _e( 'belki bu sayfada değilsin. ne çıkar? seni arıyorum ya...', 'twentyten' ); ?></h1>
				<p><?php _e( 'aradığınız ne yazık ki çok uzaklara gitmiş veya buralara hiç uğramamış. başkasını aramanızı elbette istemeyiz. ama başka bir yerde aramanızı tavsiye edebiliriz. yine de başkasını aramak istiyorsanız:', 'twentyten' ); ?></p>
				<?php get_search_form(); ?>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>