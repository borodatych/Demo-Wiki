<?php defined('SYSPATH') or die('No direct script access.');
Class Model_Page extends ORM
{
	public function rules()
	{
		return array(
			'title' => array(
				array('not_empty')	
			),
		);
	}
}