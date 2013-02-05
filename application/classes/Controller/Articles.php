<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Articles extends Controller_Index{
    
    public function before(){parent::before();$this->template->page_title = 'Статии';}
    
    public function action_index(){
        $articles = ORM::factory('Article')->find_all();
        $this->template->page_title = 'Статии';
        $this->template->content = View::factory('Articles')->bind('articles',$articles);
    }
    
    public function action_article(){
        $alias = $this->request->param('alias');
        $articles = ORM::factory('Article')->where('article_alias','=',$alias)->find()->as_array();
        //print '<pre>'; print_r($articles); print '</pre>'; echo '<br>'; exit;
        $article = View::factory('Article')->bind('articles',$articles);
        $this->template->page_title = '';
        $this->template->description = $articles['article_description'];
        $this->template->keywords = $articles['article_keywords'];
        $this->template->content = $article;
    }
    
    public function action_add(){
        
        $content = View::factory('Articlesadd')->set('values',$_POST)->bind('errors',$errors)
                ->bind('cats',$categories)->bind('data',$data)
                ;
        $categories = ORM::factory('Category')->fulltree()->as_array();
        //print '<pre>'; print_r($categories); print '</pre>'; echo '<br>'; exit;
        if(isset($_POST['submit'])){
            $data = Arr::extract($_POST,array('cat_id','article_title','article_alias','article_text','article_description','article_keywords','article_status'));
            $pages = ORM::factory('Article');
            $pages->values($data);
            try{$pages->save();HTTP::redirect('articles');}
            catch(ORM_Validation_Exception $e){$errors = $e->errors('validation');}
        }
        $this->template->page_title = 'Добавить страницу';
        $this->template->content = $content;
    }
    
    public function action_edit(){
        
        $alias = $this->request->param('alias');
        
        $content = View::factory('Articlesedit')->set('values',$_POST)->bind('errors',$errors)
                ->bind('id',$id)->bind('data',$data)->bind('cats',$categories)
                ;
        //echo $article_alias;
        $pages = ORM::factory('Article')->where('article_alias','=',$alias)->find();
        //print '<pre>'; print_r($pages); print '</pre>'; echo '<br>'; exit;
        if(!$pages->loaded()){HTTP::redirect('articles');}
        $categories = ORM::factory('Category');
        $categories = $categories->fulltree()->as_array();
        $data = $pages->as_array();
        $data['cat_id'] = $pages->categories->find_all()->as_array();
        //print '<pre>'; print_r($data['cat_id']); print '</pre>'; echo '<br>'; exit;
        if (isset($_POST['submit'])){
            //print '<pre>'; print_r($_POST); print '</pre>'; echo '<br>'; exit;
            //$data = Arr::extract($_POST,array('article_title','article_alias','article_text','article_description','article_keywords','article_status'));
            //$data = Arr::flatten($data);
            $data['article_title'] = Arr::get($_POST,'article_title');
            $data['article_alias'] = Arr::get($_POST,'article_alias');
            $data['article_text'] = Arr::get($_POST,'article_text');
            $data['article_description'] = Arr::get($_POST,'article_description');
            $data['article_keywords'] = Arr::get($_POST,'article_keywords');
            $data['article_status'] = Arr::get($_POST,'article_status');
            //$data[] = Arr::extract($_POST,array('cat_id'));
            
            $pages->values($data);
            //print '<pre>'; print_r($data['cat_id']); print '</pre>'; echo '<br>'; exit;
            try {
                $pages->save();
                //$pages->remove('categories');
                //$pages->add('categories',$data['cat_id']);
                ///HTTP::redirect('articles');
           }catch(ORM_Validation_Exception $e){$errors = $e->errors('validation');}
        }
        //print '<pre>'; print_r($data['cat_id']); print '</pre>'; echo '<br>'; exit;
        $this->template->page_title = 'Редактировть страницу';
        $this->template->content = $content;
    }
    
    public function action_delete(){
        $alias = $this->request->param('alias');
        $pages = ORM::factory('Article')->where('article_alias','=',$alias)->find();
        if(!$pages->loaded()){HTTP::redirect('articles');}
        $pages->delete();
        HTTP::redirect('articles');
    }

}