<div id="content" class="span10">
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-plus"></i> Добавить статью</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
<!-- TinyMCE -->
<!--<script type="text/javascript" src="/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="/js/tiny_mce/tinymce_config.js" ></script>-->
<!-- TinyMCE -->

<?php //if($errors){foreach($errors as $error){print '<div class="error_msg">'.$error.'</div>';}} ?>

<form action="" method="post" class="form-horizontal">
    <fieldset>
        <legend>Добавление статьи:</legend>
        <div class="control-group">
            <label class="control-label" for="cat_id">Категория:&emsp;</label>
            <select name="cat_id" data-rel="chosen">
		<option>Выберите категорию</option>
		<?php foreach ($cats as $cat){
                    if(Arr::get($values,'cat_id')!=NULL){
                        echo '<option value="'.$cat->id.'" selected>'.str_repeat('&nbsp;',2*$cat->lvl).$cat->category_title.'</option>';
                    }else{echo '<option value="'.$cat->id.'">'.str_repeat('&nbsp;',2*$cat->lvl).$cat->category_title.'</option>'; }}?>
            </select>
        </div>
        <div class="control-group">
            <label class="control-label" for="article_title">Название:&emsp;</label>
            <label style="color:red">
                <input type="text" name="article_title" value="<?php echo Arr::get($values,'article_title');?>">
                <?php echo Arr::get($errors,'article_title');?>
            </label>
        </div>
        <div class="control-group">
            <label class="control-label" for="article_alias">Алиас:&emsp;</label>
            <label style="color:red">
                <input type="text" name="article_alias" value="<?php echo Arr::get($values,'article_alias');?>">
                <?php echo Arr::get($errors,'article_alias');?>
            </label>
        </div>
        <div class="control-group">
            <label class="control-label" for="article_text">Содержание:&emsp;
                <p style="color:red"><?php echo Arr::get($errors,'article_text');?>&emsp;</p>
            </label>
            <textarea name="article_text" style="width:500px;height:300px"><?php echo Arr::get($values,'article_text');?></textarea>
	</div>
        <div class="control-group">
            <label class="control-label" for="article_description">Описание:&emsp;</label>
            <input type="text" name="article_description" value="<?php echo Arr::get($values,'article_title');?>">
        </div>
        <div class="control-group">
            <label class="control-label" for="article_keywords">Ключевые слова:&emsp;</label>
            <input type="text" name="article_keywords" value="<?php echo Arr::get($values,'article_title');?>">
        </div>
        <div class="control-group">
            <label class="control-label" for="article_status">Опубликовать:&emsp;</label>
            <input data-no-uniform="true" type="checkbox" class="iphone-toggle" name="article_status" <?php if(Arr::get($values,'article_status')=='on'){echo 'checked';}?>>
        </div>
        <div class="form-actions">
            <button type="submit" name="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </fieldset>
</form>
</div></div></div></div>