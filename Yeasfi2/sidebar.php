<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php
?>
<aside>
<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
	<ul id="sidebar">
		<?php dynamic_sidebar( 'left-sidebar' ); ?>
	</ul>
<?php endif; ?>
</aside>

