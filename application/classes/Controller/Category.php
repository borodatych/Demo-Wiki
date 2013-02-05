<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Категории товаров
 */
class Controller_Category extends Controller_Index {
    
    public function before() {parent::before();}

    public function action_index(){
        $categories = ORM::factory('Category');
        $categories = $categories->fulltree()->as_array();
        $content = View::factory('Category')->bind('errors', $errors)->bind('categories', $categories);
        $this->template->page_title = 'Категории';
        $this->template->content = $content;
    }
    
    public function action_add(){
        $content = View::factory('Categoryadd')->set('values',$_POST)
                ->bind('categories',$categories)->bind('errors',$errors);
        $categories = ORM::factory('Category')->fulltree()->as_array();
        if (isset($_POST['submit'])){
            $cat = Arr::extract($_POST,array('category_title','category_alias','cat_id','category_description'));
            $newcategory = ORM::factory('Category');
            //print '<pre>'; print_r($cat); print '</pre>'; echo '<br>';
            $newcategory->category_title = $cat['category_title'];
            $newcategory->category_alias = $cat['category_alias'];
            $newcategory->category_description = $cat['category_description'];
            try{
                if(!$cat['cat_id']){$newcategory->make_root();}
                else{$newcategory->insert_as_last_child($cat['cat_id']);}
                HTTP::redirect('category');
            }catch(ORM_Validation_Exception $e){$errors = $e->errors('validation');}
        }
        //$categories = $categories->fulltree()->as_array();
        $this->template->page_title = 'Категории';
        $this->template->content = $content;
    }

    public function action_edit(){
        $alias = $this->request->param('alias');
        $content = View::factory('Categoryedit')->set('values',$_POST)->bind('errors',$errors)
                ->bind('id',$id)->bind('categories',$categories)->bind('data',$data)
                ;
        $category = ORM::factory('Category')->where('category_alias','=',$alias)->find();
	$data = $category->as_array();
        if(!$category->loaded()){HTTP::redirect('category');}
	$categories = ORM::factory('Category')->fulltree()->as_array();
        //$categories = $categories->fulltree()->as_array();
        if(isset($_POST['submit'])){
            $data[] = Arr::extract($_POST, array('category_title','category_alias','category_description','template'));
            $data = Arr::flatten($data);
            $category->values($data);
            try{$category->save(); HTTP::redirect('category');}
            catch(ORM_Validation_Exception $e){$errors = $e->errors('validation');}
        }
        $this->template->page_title = 'Категории';
        $this->template->content = $content;
    }
    
    public function action_delete(){
        $alias = $this->request->param('alias');
        $data = ORM::factory('Category')->where('category_alias','=',$alias)->find();
        if(!$data->loaded()){HTTP::redirect('category');}
        $data->delete();
        HTTP::redirect('category');
    }
}