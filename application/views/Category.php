<div id="content" class="span10">
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-th-list"></i> Категории&emsp;<span class="divider">/</span>&emsp;<a href="category/add"><i class="icon-plus"></i> Добавить категорию</a></h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
<table class="table table-striped table-bordered bootstrap-datatable datatable">
	<tr>
            <th>Название категории</th>
            <th>Алиас</th>
            <th>Описание категории</th>
            <th> </th>
        </tr>
	<?php foreach ($categories as $cat){?>
  	<tr>
            <td style="width: 300px">     
                <input type="checkbox" name="cat_id" value="<?php echo $cat->id?>"><?php echo str_repeat('&nbsp;', 2 * $cat->lvl)?>
                <a href="/category/edit/<?php echo $cat->category_alias?>"><?php echo $cat->category_title ?></a>
            </td>
            <td><?php echo $cat->category_alias?></td>
            <td><?php echo $cat->category_description?></td>
            <td style="min-width:213px;width:213px">
                <!--<a class="btn btn-success" href="#"><i class="icon-zoom-in icon-white"></i>View</a>-->
                <a class="btn btn-info" href="/category/edit/<?php echo $cat->category_alias?>"><i class="icon-edit icon-white"></i>Редактировать</a>
                <a class="btn btn-danger" href="/category/delete/<?php echo $cat->category_alias?>"><i class="icon-trash icon-white"></i>Удалить</a>
            </td>
	</tr>  
	<?php }?>
</table>
</div></div></div></div>