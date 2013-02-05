<script type="text/javascript">
$(document).ready(function() {
    $("#example2").dataTable().fnDestroy();
    $('#example2').dataTable( {
        //"bServerSide": true,
        //"bRetrieve" : true,
        //"bFilter": false,
        //"bDestroy": true,
                 //"bPaginate": false,
                 //"bJQueryUI": true,
                 //"bRetrieve": true,
                 //"bDestroy": true,
                //"sPaginationType": "full_numbers",
        //"oLanguage": {"sUrl": "/js/dataTables.ru.txt"},
        "oLanguage": {
            "sProcessing":   "Подождите...",
            "sLengthMenu":   "Показать _MENU_ записей",
            "sZeroRecords":  "Записи отсутствуют.",
            "sInfo":         "Записи с _START_ до _END_ из _TOTAL_ записей",
            "sInfoEmpty":    "Записи с 0 до 0 из 0 записей",
            "sInfoFiltered": "(отфильтровано из _MAX_ записей)",
            "sInfoPostFix":  "",
            "sSearch":       "Поиск:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst": "Первая",
                "sPrevious": "Предыдущая",
                "sNext": "Следующая",
                "sLast": "Последняя"
            }//,"bDestroy": true
        }
    });
 });
 
//$(document).ready(function () {
//    oTable = $("#example").dataTable({ 
//        "bPaginate": true,
//        "bJQueryUI": true,
//        "bRetrieve": true,
//        "sPaginationType": "full_numbers"
//})
//
//$("#example").dataTable().fnDestroy();    // destroy the old datatable
//oTable = $("#example").dataTable({
//    "bPaginate": true,
//    "bJQueryUI": true,
//    "bRetrieve": true,
//    "sPaginationType": "full_numbers",
//    "oLanguage": {
//            "sProcessing":   "Подождите...",
//            "sLengthMenu":   "Показать _MENU_ записей",
//            "sZeroRecords":  "Записи отсутствуют.",
//            "sInfo":         "Записи с _START_ до _END_ из _TOTAL_ записей",
//            "sInfoEmpty":    "Записи с 0 до 0 из 0 записей",
//            "sInfoFiltered": "(отфильтровано из _MAX_ записей)",
//            "sInfoPostFix":  "",
//            "sSearch":       "Поиск:",
//            "sUrl":          "",
//            "oPaginate": {
//                "sFirst": "Первая",
//                "sPrevious": "Предыдущая",
//                "sNext": "Следующая",
//                "sLast": "Последняя"
//            }
//    }
//});

</script>
<div id="content" class="span10">
    <div>
        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li><li><span class="divider">/</span></li>
            <li><a href="/articles">Статьи</a></li>
        </ul>
    </div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-pencil"></i> Статьи&emsp;<span class="divider">/</span>&emsp;<a href="articles/add"><i class="icon-plus"></i> Добавить статью</a></h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">

<table class="table table-striped table-bordered bootstrap-datatable datatable" id="example">
    <thead>
        <tr height="30">
            <th>Название</th><th>Алиас</th><th>Функции</th>
        </tr>
    </thead>
<? foreach ($articles as  $article):?>
<tr>
    <td><a href="articles/edit/<?=$article->article_id?>"><?=$article->article_title?></a></td>
    <td><?=$article->article_alias ?></td>
    <td width="100" align="center">
    <a href="articles/edit/<?=$article->article_id?>"><i class="icon-pencil"></i></a>
    <a href="articles/delete/<?=$article->article_id?>"><i class="icon-remove"></i></a>
    </td>
</tr>
<? endforeach?>
</table>
</div></div></div></div>