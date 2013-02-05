<?php defined('SYSPATH') or die('No direct script access.');

class Model_Category extends ORM_MPTT{

    protected $_has_many = array(
        //Один ко многим 
        //foreign_key - название столбца во второй таблице, по которому будет идти связь с первичным ключом первого
        //Многие ко многим
        //through — имя промежуточной таблицы, через которую будет осуществляться связь между первичными ключами двух моделей
        //foreign_key — имя столбца в промежуточной таблице, который будет выполнять связь с первичным ключом первой таблицы
        //far_key — имя столбца в промежуточной таблице, который будет выполнять связь с первичным ключом второй таблицы
        'products' => array(
            'model'   => 'article',
            'through' => 'articles_categories',
        ),
        'article' => array(
            'model' => 'article',
            'foreign_key' => 'category_id',
            'through' => 'articles_categories',
            'far_key' => 'article_id',
        ),
    );

    public function rules(){
        return array(
            'category_title' => array(
                array('not_empty'),
            ),
            'category_alias' => array(
                array('not_empty'),
                array('alpha_dash'),
                array(array($this, 'uniq_alias'), array(':value', ':field')),
            ),
        );
    }
    
    public function labels(){
        return array('title' => 'Категория',);
    }

    public function filters(){
        return array(
            TRUE => array(array('trim'),),
            'title' => array(array('strip_tags'),),
        );
    }
    
    public function uniq_alias($value, $field){
        $page = ORM::factory($this->_object_name)->where($field,'=',$value)->and_where($this->_primary_key,'!=',$this->pk())->find();
        if ($page->pk()){return false;}
        return true;
    }
} 
