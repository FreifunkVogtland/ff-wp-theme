<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
	<div id="sidebar" role="complementary">
		<label for="nav-trigger" id="nav-trigger-label-sidebar"></label>
		<ul>
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>
	<li>
	<a href="https://twitter.com/FreifunkV" class="twitter-follow-button" data-show-count="false" data-lang="de" data-size="large" data-show-screen-name="false">@FreifunkV folgen</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	</li>
	<li>
	<div class="fb-page" data-href="https://www.facebook.com/vogtland.freifunk.net/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/vogtland.freifunk.net/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/vogtland.freifunk.net/">vogtland.freifunk.net</a></blockquote></div>
	</li>
	<li><a href="http://freifunk.net"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/button_freifunk.png"></a></li>
		</ul>

	</div>

