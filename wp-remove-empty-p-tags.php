// ----  Remove Empty P tags with a Regular Expression
  add_filter('the_content', 'remove_empty_p', 10, 1);
	function remove_empty_p($content){
		$content = force_balance_tags($content);
		return preg_replace('#<p>(\s|&nbsp;)*+(<br\s*/*>)?(\s|&nbsp;)*</p>#i', '', $content);
}
//-------------------------------------------
