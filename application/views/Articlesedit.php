<div id="content" class="span10">
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-pencil"></i> Редактировать статью</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
<!-- TinyMCE -->
<!--<script type="text/javascript" src="/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		skin : "o2k7",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example word content CSS (should be your site CSS) this one removes paragraph margins
		content_css : "css/word.css"

	});
</script>-->
<!-- /TinyMCE -->
<?php //if($errors){foreach($errors as $error){print '<div class="error_msg">'.$error.'</div>';}} ?>

<form action="" method="post" class="form-horizontal">
    <fieldset>
        <legend>Редактирование статьи:</legend>
        <div class="control-group">
            <?php //print '<pre>'; print_r($data); print '</pre>'; echo '<br>'; //exit;?>
            <label class="control-label" for="cat_id">Категория:&emsp;</label>
            <select name="cat_id" data-rel="chosen">
		<option value="">Выберите категорию</option>
		<?php 
                foreach ($cats as $cat){
                    if(count($data['cat_id'])>0){//echo 'ttt';exit;
                        foreach($data['cat_id'] as $c){
                            $c = (Array) $c;
                            //print '<pre>'; print_r($c); print '</pre>'; echo '<br>'; exit;
                            if(Arr::get($c,'id')==$cat->id){
                                echo '<option value="'.$cat->id.'" selected>'.str_repeat('&nbsp;',2*$cat->lvl).$cat->category_title.'</option>';}
                            else{echo '<option value="'.$cat->id.'">'.str_repeat('&nbsp;',2*$cat->lvl).$cat->category_title.'</option>';}
                        }
                    }else{echo '<option value="'.$cat->id.'">'.str_repeat('&nbsp;',2*$cat->lvl).$cat->category_title.'</option>';}
                }?>
            </select>
        </div>
        <?php //exit;?>
        <div class="control-group">
            <label class="control-label" for="article_title">Название:&emsp;</label>
            <label style="color:red">
                <input type="text" name="article_title" value="<?php echo $data['article_title']?>">
                <?php echo Arr::get($errors,'article_title');?>
            </label>
        </div>
        <div class="control-group">
            <label class="control-label" for="article_alias">Алиас:&emsp;</label>
            <label style="color:red">
                <input type="text" name="article_alias" value="<?php echo $data['article_alias']?>">
                <?php echo Arr::get($errors,'article_alias');?>
            </label>
        </div>
        <div class="control-group">
            <label class="control-label" for="article_text">Содержание:&emsp;</label>
            <textarea name="article_text" style="width:500px;height:300px"><?php echo $data['article_text']?></textarea>
	</div>
        <div class="control-group">
            <label class="control-label" for="article_description">Описание:&emsp;</label>
            <input type="text" name="article_description" value="<?php echo $data['article_description']?>">
        </div>
        <div class="control-group">
            <label class="control-label" for="article_keywords">Ключевые слова:&emsp;</label>
            <input type="text" name="article_keywords" value="<?php echo $data['article_keywords']?>">
        </div>
        <div class="control-group">
            <label class="control-label" for="article_status">Опубликовать:&emsp;</label>
            <input data-no-uniform="true" type="checkbox" class="iphone-toggle" name="article_status" <?php if($data['article_status']=='on'){echo 'checked';}?>>
        </div>
        <div class="form-actions">
            <button type="submit" name="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </fieldset>
</form>
</div></div></div></div>