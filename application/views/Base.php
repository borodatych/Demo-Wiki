<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Demonstration of my work in Kohana</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <link rel="shortcut icon" href="/img/favicon.ico">
    <?php foreach($styles as $file_style){echo HTML::style($file_style);}?>
    <?php foreach ($scripts as $file_script){echo HTML::script($file_script);}?>
    
    <style type="text/css">
        body {padding-bottom: 40px;}
        .sidebar-nav {padding: 9px 0;}
        [class*="span"]{margin-left:0px !important;}
        #content{margin-left:20px !important;}
        #box{margin-left:10px !important;}
    </style>
		
</head>

<body>
    <!-- topbar starts -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </a>
                <a class="brand" href="/admin"> <img alt="k-shop Logo" src="/img/logo20.png" /> <span>KoWiki</span></a>
		<!-- theme selector starts -->
<!--		<div class="btn-group pull-right theme-container" >
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-tint"></i><span class="hidden-phone"> Сменить тему</span><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" id="themes">
                        <li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
                        <li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
                        <li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
                        <li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
                        <li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
                        <li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
                        <li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
                        <li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
                        <li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
                    </ul>
                </div>-->
		<!-- theme selector ends -->
		<!-- user dropdown starts -->
		<div class="btn-group pull-right" >
                    <button id="toggle-fullscreen" class="btn btn-large btn-primary visible-desktop" data-toggle="button">Полный экран</button>
<!--                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-user"></i><span class="hidden-phone"> <?//=Auth::instance()->get_user()->username;?>Name</span><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li><li class="divider"></li><li><a href="/admin/auth/logout">Выйти</a></li>
                    </ul>-->
                </div>
		<!-- user dropdown ends -->
<!--		<div class="top-nav nav-collapse">
                    <ul class="nav">
                        <li><a href="/">Магазин</a></li>
                        <li>
                            <form class="navbar-search pull-left">
                                <input placeholder="Найти" class="search-query span2" name="query" type="text">
                            </form>
                        </li>
                    </ul>
                </div>/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- topbar ends -->
    <div class="container-fluid">
        <div class="row-fluid">
            <?php echo $menu?>
            <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>
                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
            </noscript>
            <?php echo $content?>
        </div><!--/fluid-row-->
		
		<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>

		<footer>
			<p class="pull-left">&copy; <a href="http://help.demka.org" target="_blank">Создание и разработка сайтов</a> <?php echo date('Y') ?></p>
			<p class="pull-right">Powered by: <a href="http://help.demka.org">Borodatych</a></p>
		</footer>

	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->


<!--<script>
$(document).ready(function(){
    //alert('rrr')
    $('#cat').change(function() {
        $('#fromselect').submit();
    });
});
</script>-->
</body>
</html>

