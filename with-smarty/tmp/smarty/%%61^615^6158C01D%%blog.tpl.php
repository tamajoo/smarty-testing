<?php /* Smarty version 2.6.31, created on 2019-05-05 13:24:08
         compiled from page/blog.tpl */ ?>
<?php ob_start(); ?>

	<p># Add blog page content here #</p>
	
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('pageContent', ob_get_contents());ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/base.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>