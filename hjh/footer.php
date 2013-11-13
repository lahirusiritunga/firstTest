<?php
/**
 * The template for displaying the footer.
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
    <div class="footer-content clearfix">
    
    <div id="footer_menu">
        
	 <?php if (is_active_sidebar ( 'footer-menu' ) ) : ?>
			<?php dynamic_sidebar('footer-menu'); ?>
		<?php else: ?>
		<ul>
			<?php wp_list_pages("title_li=&exclude=6,33,141&depth=2"); ?>
        </ul>
        <?php endif; ?>
		</div>
        <div id="footer_cloud">
	 <?php if (is_active_sidebar ( 'footer-cloud' ) ) : ?>
			<?php dynamic_sidebar('footer-cloud'); ?>

        <?php endif; ?>
		</div>
	</div>
        <div id="footer_address">
	 <?php if (is_active_sidebar ( 'footer-address' ) ) : ?>
			<?php dynamic_sidebar('footer-address'); ?>

        <?php endif; ?>
		</div>
   <div class="copyright"><p>&copy; Progrezzum 2013, All Rights Reserved</p></div>
    
	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>