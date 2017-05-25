<?php
/**
 * The core plugin class.
 * @since      1.0
 * @package    delete-image-with-post
 * @subpackage delete-image-with-post/includes
 * @author     Soruov Roy <sourovfci@gmail.com>
 */
if(!class_exists('Delete_Image_With_Post')){
	class Delete_Image_With_Post 
	{

		/**
		 * Instentiate class
		 */
		public static function init()
		{
			$Delete_Image_With_Post = new Delete_Image_With_Post();
			return $Delete_Image_With_Post;
		}

		/**
		 * Constructor
		 */
		public function __construct()
		{
			add_action('before_delete_post', [$this, 'before_delete_post']);
		}

		/**
		 * Trigger before delete post meta
		 * Delete image
		 */
		public function before_delete_post($postid)
		{
			global $post_type;
			$attachmentid = get_post_thumbnail_id($postid);
			if(!empty($attachmentid)){
				wp_delete_attachment($attachmentid, true);
			}
			if($post_type == 'product'){
				$image_gallery = get_post_meta($postid, '_product_image_gallery', true);
				if(!empty($image_gallery)){
					$images_array = explode(",", $image_gallery);
					foreach($images_array as $image_id){
						wp_delete_attachment($image_id, true);
					}
				}
			}
		}// End
	}// End class
}// End if