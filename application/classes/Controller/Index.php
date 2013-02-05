<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Base{
    
    public function before(){
        parent::before();
        include Kohana::find_file('classes','simplewiki/muster/simplewiki');
        include Kohana::find_file('classes','simplewiki/muster/simplewiki/parser');
        include Kohana::find_file('classes','simplewiki/muster/simplewiki/emitter');
        include Kohana::find_file('classes','simplewiki/muster/simplewiki/docnode');
        $menu = View::factory('Menu');
        $this->template->menu = $menu;
	$this->template->title = 'Админисртрирование';
	$this->template->page_title = 'Главная страница админки';
        
        //Admin
        $this->template->scripts[] = 'js/jquery-1.7.2.min.js';
        $this->template->scripts[] = 'js/jquery-ui-1.8.21.custom.min.js';
        $this->template->scripts[] = 'js/bootstrap-transition.js';
        $this->template->scripts[] = 'js/bootstrap-alert.js';
        $this->template->scripts[] = 'js/bootstrap-modal.js';
        $this->template->scripts[] = 'js/bootstrap-dropdown.js';
        $this->template->scripts[] = 'js/bootstrap-scrollspy.js';
        $this->template->scripts[] = 'js/bootstrap-tab.js';
        $this->template->scripts[] = 'js/bootstrap-tooltip.js';
        $this->template->scripts[] = 'js/bootstrap-popover.js';
        $this->template->scripts[] = 'js/bootstrap-button.js';
        $this->template->scripts[] = 'js/bootstrap-collapse.js';
        $this->template->scripts[] = 'js/bootstrap-carousel.js';
        $this->template->scripts[] = 'js/bootstrap-typeahead.js';
        $this->template->scripts[] = 'js/bootstrap-tour.js';
        $this->template->scripts[] = 'js/jquery.cookie.js';
        $this->template->scripts[] = 'js/fullcalendar.min.js';
        $this->template->scripts[] = 'js/jquery.dataTables.min.js';
        $this->template->scripts[] = 'js/excanvas.js';
        $this->template->scripts[] = 'js/jquery.flot.min.js';
        $this->template->scripts[] = 'js/jquery.flot.pie.min.js';
        $this->template->scripts[] = 'js/jquery.flot.stack.js';
        $this->template->scripts[] = 'js/jquery.flot.resize.min.js';
        $this->template->scripts[] = 'js/jquery.chosen.min.js';
        $this->template->scripts[] = 'js/jquery.uniform.min.js';
        $this->template->scripts[] = 'js/jquery.colorbox.min.js';
        $this->template->scripts[] = 'js/jquery.cleditor.min.js';
        $this->template->scripts[] = 'js/jquery.noty.js';
        $this->template->scripts[] = 'js/jquery.elfinder.min.js';
        $this->template->scripts[] = 'js/jquery.raty.min.js';
        $this->template->scripts[] = 'js/jquery.iphone.toggle.js';
        $this->template->scripts[] = 'js/jquery.autogrow-textarea.js';
        $this->template->scripts[] = 'js/jquery.uploadify-3.1.min.js';
        $this->template->scripts[] = 'js/jquery.history.js';
        $this->template->scripts[] = 'js/charisma.js';
        $this->template->styles[] = 'css/bootstrap-cerulean.css';
        $this->template->styles[] = 'css/bootstrap-responsive.css';
        $this->template->styles[] = 'css/charisma-app.css';
        $this->template->styles[] = 'css/jquery-ui-1.8.21.custom.css';
        $this->template->styles[] = 'css/fullcalendar.css';
        $this->template->styles[] = 'css/fullcalendar.print.css';
        $this->template->styles[] = 'css/chosen.css';
        $this->template->styles[] = 'css/uniform.default.css';
        $this->template->styles[] = 'css/colorbox.css';
        $this->template->styles[] = 'css/jquery.cleditor.css';
        $this->template->styles[] = 'css/jquery.noty.css';
        $this->template->styles[] = 'css/noty_theme_default.css';
        $this->template->styles[] = 'css/elfinder.min.css';
        $this->template->styles[] = 'css/elfinder.theme.css';
        $this->template->styles[] = 'css/jquery.iphone.toggle.css';
        $this->template->styles[] = 'css/opa-icons.css';
        $this->template->styles[] = 'css/uploadify.css';
        //Lightbox2
        $this->template->scripts[]  = 'js/lightbox.js';
        $this->template->styles[]  = 'css/lightbox.css';
        //Simple Wiki
        //$this->template->scripts[]  = 'application/classes/simplewiki/SimpleWiki.js';
        //$this->template->styles[]  = 'application/classes/simplewiki/SimpleWiki.css';
        $this->template->scripts[]  = 'js/SimpleWiki.js';
        $this->template->styles[]  = 'css/SimpleWiki.css';
    }
    
    public function action_index(){
        HTTP::redirect('Articles');
        //$this->template->content = View::factory('/dashboard');
    }
	
}