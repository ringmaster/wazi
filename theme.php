<?php

class SampleTheme extends Theme
{
	public function action_template_header( $theme )
	{
		Stack::add('template_stylesheet', array('http://yui.yahooapis.com/2.8.1/build/reset-fonts-grids/reset-fonts-grids.css', 'screen,projection'), 'reset');
		Stack::add('template_stylesheet', array(Site::get_url('theme', '/style.css'), 'screen,projection'), 'site');
	}
}

?>
