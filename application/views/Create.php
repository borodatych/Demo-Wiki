<?php 
echo 'Create '.
	  		HTML::anchor(Route::url('wiki-edit', array('page' => $page)), $page);