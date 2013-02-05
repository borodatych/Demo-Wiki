<?php /* Smarty version 2.6.26, created on 2013-01-13 13:05:24
         compiled from Z:%5Chome%5Ckohana33%5Cwww%5Cmodules%5Csmarty%5Cviews%5Csmarty_demo_page.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'Z:\\home\\kohana33\\www\\modules\\smarty\\views\\smarty_demo_page.tpl', 6, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?php echo ((is_array($_tmp=@$this->_tpl_vars['title'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Welcome to Kohana with Smarty') : smarty_modifier_default($_tmp, 'Welcome to Kohana with Smarty')); ?>
</title>

<style type="text/css"><?php echo '
body   { font-family: verdana, sans-serif; font-size: 0.8em; width: 90%; margin: auto; line-height: 1.4em; }
code   { background-color: #e7e7e7; font-size: 1.2em; white-space: nowrap; padding: 0 4px; }
pre    { background-color: #e7e7e7; font-size: 1.2em; height: 20em; overflow: auto; padding: 2px 4px; }
table  { border: 2px solid #9f9f9f; border-collapse: collapse; }
td, th { border: 1px solid #9f9f9f; padding: 2px 4px; text-align: center; }
tbody td, tbody th { text-align: left; }
th     { background-color: #cfcfcf; }
.weak  { font-weight: normal; }
</style>'; ?>


</head>

<body>

<?php echo $this->_tpl_vars['content']; ?>


</body>
</html>