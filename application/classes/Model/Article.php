<?php defined('SYSPATH') or die('No direct script access.');

class Model_Article extends ORM {

    protected $_table_name = 'articles';
    protected $_primary_key = 'article_id';
    protected $_db_group = 'default';
    
    protected $_has_many = array(
        //Один ко многим 
        //foreign_key - название столбца во второй таблице, по которому будет идти связь с первичным ключом первого
        //Многие ко многим
        //through — имя промежуточной таблицы, через которую будет осуществляться связь между первичными ключами двух моделей
        //foreign_key — имя столбца в промежуточной таблице, который будет выполнять связь с первичным ключом первой таблицы
        //far_key — имя столбца в промежуточной таблице, который будет выполнять связь с первичным ключом второй таблицы
        'comments' => array(
            'model' => 'comment',
            'foreign_key' => 'article_id',
        ),
        'categories' => array(
            'model' => 'category',
            'foreign_key' => 'article_id',
            'through' => 'articles_categories',
            'far_key' => 'category_id',
        ),
    );
    
    public function rules(){
        return array(
            'article_title' => array(
                array('not_empty'),
            ),
            'article_alias' => array(
                array('not_empty'),
                array('alpha_dash'),
                array(array($this, 'uniq_alias'), array(':value', ':field')),
            ),
            'article_text' => array(
                array('not_empty'),
            ),
        );
    }
    
    public function labels(){
        return array(
            'article_title' => 'Название',
            'article_alias' => 'Алиас',
            'article_text' => 'Текст',
        );
    }

    public function filters(){
        return array(
            TRUE => array(array('trim'),),
            'article_title' => array(array('strip_tags'),),
        );
    }

    public function uniq_alias($value, $field){
        $page = ORM::factory($this->_object_name)->where($field, '=', $value)->and_where($this->_primary_key, '!=', $this->pk())->find();
        if ($page->pk()){return false;}
        return true;
    }
}