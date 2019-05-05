<?php /* Smarty version 2.6.31, created on 2019-05-05 13:17:13
         compiled from layout/base.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	
	<title><?php echo $this->_tpl_vars['view']->getPageTitle(); ?>
 | My Website</title>

	<meta charset="utf-8">
	
	<?php $_from = $this->_tpl_vars['view']->getStylesheets(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['stylesheet']):
?>
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['stylesheet']; ?>
">
	<?php endforeach; endif; unset($_from); ?>

</head>
<body>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'layout/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<div class="content">
		<div class="container">

			<h1 class="mt-5"><?php echo $this->_tpl_vars['view']->getPageTitle(); ?>
</h1>

			<?php echo $this->_tpl_vars['pageContent']; ?>


		</div>
	</div>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'layout/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<?php $_from = $this->_tpl_vars['view']->getJavascripts(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['javascript']):
?>
		<script src="<?php echo $this->_tpl_vars['javascript']; ?>
"></script>
	<?php endforeach; endif; unset($_from); ?>

</body>
</html>