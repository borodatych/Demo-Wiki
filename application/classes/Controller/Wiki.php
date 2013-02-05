<?php defined('SYSPATH') or die('No direct script access.');
Class Controller_Wiki extends Controller{
    
    protected $page_model;
    protected $single_view;
    protected $save_view;
    protected $create_view;
        
        public function before(){
            $this->page_model = ORM::factory('Page');
            //$this->page_model = ORM::factory('Article');
            $this->single_view = View::factory('Single');
            $this->save_view = View::factory('Save');
            $this->create_view = View::factory('Create');
	}
	
	public function action_index(){
            //$wiki = ORM::factory('Wiki')->scope('some_project_id');
            $this->response->body('wiki home page.');
	}
        
        public function action_read_page(){
            $page = $this->request->param('page');
            $single = $this->page_model->where('title','=',$page)->find();
            if($single->loaded()){
                $this->single_view->page = $page;
                $this->single_view->content = $single->content;
                $this->response->body($this->single_view);
            }else{
                $this->create_view->page = $page;	
                $this->response->body($this->create_view);
            }
	}
        
        public function action_edit_page(){
            $page = $this->request->param('page');
            $single =  $this->page_model->where('title', '=', $page)->find();
            if($single->loaded()){$content = $single->content;}
            else{$content = '';}
            $this->save_view->content = $content;
            $this->save_view->page = $page;
            $this->response->body($this->save_view);
	}
        
        public function action_save_page(){
            $page = $this->request->post('page');
            $single =  $this->page_model->where('title', '=', $page)->find();
            if($single->loaded()){
                $single->content = $this->request->post('content');
                $single->save();
            }else{
                $single->title = $this->request->post('page');
                $single->content = $this->request->post('content');
                $single->save();
            }
            //$this->request->redirect(Route::url('wiki-page', array('page' => $page)));
            HTTP::redirect('/wiki/'.$page);
	}
}