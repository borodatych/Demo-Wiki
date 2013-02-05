<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Swiki extends Controller_Index{
    
    public function action_index(){
        
        $wiki = new Muster\SimpleWiki();
        $html = $wiki->get_html('**%s background-color:black color:yellow% This will draw attention! %%**');
        
        $this->template->content = View::factory('Swiki')->bind('html',$html);
    }
    
}