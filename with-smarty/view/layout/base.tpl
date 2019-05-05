<!DOCTYPE html>
<html>
<head>
	
	<title>{$view->getPageTitle()} | My Website</title>

	<meta charset="utf-8">
	
	{foreach from=$view->getStylesheets() item="stylesheet"}
		<link rel="stylesheet" href="{$stylesheet}">
	{/foreach}

</head>
<body>

	{include file='layout/header.tpl'}

	<div class="content">
		<div class="container">

			<h1 class="mt-5">{$view->getPageTitle()}</h1>

			{$pageContent}

		</div>
	</div>

	{include file='layout/footer.tpl'}
	
	{foreach from=$view->getJavascripts() item="javascript"}
		<script src="{$javascript}"></script>
	{/foreach}

</body>
</html>