<?php
add_filter('edit_post_link', '_bem_edit_post_link');

function _bem_edit_post_link($output) {
	return str_replace('post-edit-link', 'post-edit-link _content__edit-link', $output);
}