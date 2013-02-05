<div id="content" class="span10">
<div class="row-fluid sortable">
<?php
foreach ($articles as $article){?>
    <div class="box span4" style="min-height:100px" id="box">
        <div class="box-header well">
            <h2><i class=""></i> <?php echo Text::limit_chars($article->article_alias,27)?></h2>
            <div class="box-icon">
                <a href="/articles/edit/<?php echo $article->article_alias?>" class="btn btn-round"><i class="icon-pencil"></i></a>
                <a href="/articles/delete/<?php echo $article->article_alias?>" class="btn btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
        <?php echo HTML::anchor('/articles/article/'.$article->article_alias,$article->article_title)?>
        </div>
    </div>
<?php }?>
</div>
</div>