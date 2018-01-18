<?php
/**
 * Class AMP_Widget_Media_Video
 *
 * @package AMP
 */

/**
 * Class AMP_Widget_Media_Video
 *
 * @package AMP
 */
class AMP_Widget_Media_Video extends WP_Widget_Media_Video {

	/**
	 * Echoes the markup of the widget.
	 *
	 * @todo filter $output, to convert <video> to <amp-video> and remove the 'style' attribute.
	 * @see https://github.com/Automattic/amp-wp/issues/864
	 * @param array $instance Data for widget.
	 * @return void.
	 */
	public function render_media( $instance ) {
		ob_start();
		parent::render_media( $instance );
		$output = ob_get_clean();
		echo $output; // WPCS: XSS ok.
	}

}
