<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'environment' => array
	(
		'debug'               => FALSE,
		'trim_blocks'         => FALSE,
		'charset'             => 'utf-8',
		'base_template_class' => 'Twig_Template',
		'cache'               => APPPATH.'cache/twig',
		'auto_reload'         => TRUE,
		'strict_variables'    => FALSE,
		'autoescape'          => TRUE,
		'optimizations'       => -1,
	),
	'extensions' => array
	(
		// List extension class names
	),
	'templates'      => APPPATH.'views/twig',
	'suffix'         => '.html',
	'context_object' => TRUE,
);