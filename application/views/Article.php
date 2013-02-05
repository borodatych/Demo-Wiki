<div id="content" class="span10">
<h2>
    <?php echo $articles['article_title']?> 
    <a href="/articles/edit/<?php echo $articles['article_alias']?>" class="btn btn-round">
        <i class="icon-pencil"></i>
    </a>
</h2>
<br>
<?php
$wiki = new Muster\SimpleWiki();
$html = $wiki->get_html($articles['article_text']);
echo $html;
?>
</div>