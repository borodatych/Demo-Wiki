<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Twig template controller
 *
 * @package    Kohana-Twig
 * @author     John Heathco <jheathco@gmail.com>
 */
abstract class Controller_Twig extends Controller {

	/**
	 * @var Twig_Environment
	 */
	public $twig;

	/**
	 * @var boolean  Auto-render template after controller method returns
	 */
	public $auto_render = TRUE;

	/**
	 * @var array|object  Stores mapping of template vars => values
	 */
	public $context;

	public function __construct(Request $request, Response $response)
	{
		// Setup the Twig loader environment
		$this->twig = Kohana_Twig::instance();

		if (Kohana_Twig::$config->context_object)
		{
			// Context treated as an object
			$this->context = new stdClass;
		}
		else
		{
			// Context treated as an array
			$this->context = array();
		}

		// Auto-generate template filename ('index' method called on Controller_Admin_Users looks for 'admin/users/index')
		$this->template = $request->controller().'/'.$request->action().Kohana_Twig::$config->suffix;

		if ($request->directory())
		{
			// Preprend directory if needed
			$this->template = $request->directory().'/'.$this->template;
		}

		parent::__construct($request, $response);
	}

	public function after()
	{
		if ($this->auto_render)
		{
			// Auto-render the template
			$this->response->body($this->twig->loadTemplate($this->template)->render((array) $this->context));
		}
	}

} // End Controller_Twig
