<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Friends extends Controller_Index{
    
    public $template = 'Base';
    
    public function action_index(){
        $content = View::factory('Friends');
        $this->template->content = $content;
    }
}