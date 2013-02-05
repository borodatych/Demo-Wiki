<?php
class HTTP_Exception_404 extends Kohana_HTTP_Exception_404 {
    
    public function get_response(){
        $view = View::factory('404view');
        $view->message = $this->getMessage();
        $response = Response::factory()->status(404)->body($view->render());
        return $response;
    }
    
}