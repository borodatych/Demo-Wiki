<div id="content" class="span10">
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-plus"></i> Добавить категорию</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
<!-- TinyMCE -->
<script type="text/javascript" src="/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="/js/tiny_mce/tinymce_config.js" ></script>
<!-- /TinyMCE -->

<form action="" method="post" class="form-horizontal">
    <fieldset>
        <legend>Описание категории</legend>
<?php 
//if($errors){print '<pre>'; print_r($errors); print '</pre>'; echo '<br>';exit;
    //foreach($errors as $error){print '<div class="error_msg">'.$error.'</div>';}}
?>
        <div class="control-group">
            <label class="control-label" for="cat_id">Подкатегория:&emsp;</label>
            <select name="cat_id" data-rel="chosen">
                <option value="">--Выберите категорию--</option>
                <?php foreach ($categories as $cat){?>
                    <option value="<?php echo $cat->id?>"><?php echo str_repeat('&nbsp;',2* $cat->lvl).$cat->category_title?></option>
                <?php }?>
            </select>
        </div>
	<div class="control-group">
            <label class="control-label" for="category_title">Название:&emsp;</label>
            <label style="color:red">
                <input type="text"  name="category_title" value="<?php echo Arr::get($values,'category_title');?>">
                <?php echo Arr::get($errors,'category_title');?>
            </label>
        </div>
        <div class="control-group">
            <label class="control-label" for="category_alias">Алиас:&emsp;</label>
            <label style="color:red">
                <input type="text" name="category_alias" value="<?php echo Arr::get($values,'category_alias');?>">
                <?php echo Arr::get($errors,'category_alias');?>
            </label>
        </div>
	<div class="control-group">
            <label class="control-label" for="category_description">Описание:&emsp;</label>
            <textarea name="category_description"><?php echo Arr::get($values,'category_description');?></textarea>
        </div>
	<div class="control-group">
            <label class="control-label" for="category_image">Изображение:&emsp;</label>
            <input type="file" name="category_image" value="">
        </div>
        <div class="form-actions">
            <button type="submit" name="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </fieldset>
</form>
</div></div></div></div>