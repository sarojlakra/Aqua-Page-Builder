<?php 
/* Media Uploader Block 
 *
 * Please see media block in cuvette 
 */
if(!class_exists('AQ_Upload_Block')) {
	class AQ_Upload_Block {
		
		function __construct() {
			$block_options = array(
				'name' => __('Media', 'aqpb-l10n'),
				'size' => 'span6',
				'icon' => 'fa-upload', //Font awesome icon class
			);
			
			//create the block
			parent::__construct('aq_upload_block', $block_options);
		}
		
		function form($instance) {
			$defaults = array(
				'media' => '',
			);
			$instance = wp_parse_args($instance, $defaults);
			extract($instance);
			
			
		}
		
		function block($instance) {
			if($title) echo '<h4 class="aq-block-title">'.strip_tags($title).'</h4>';
		}
		
	}
}
