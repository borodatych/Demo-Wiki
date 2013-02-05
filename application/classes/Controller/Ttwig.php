<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ttwig extends Controller_Twig{
    
    public function action_index(){
        $this->context->myvar = 'Hi twig!';
        //$this->template->content = View::factory('Ttt');
        }
    
}