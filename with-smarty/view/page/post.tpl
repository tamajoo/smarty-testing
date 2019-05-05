{capture assign="pageContent"}
		
	<h2>{$post->getTitle()}</h2>

	<img src="{$post->getPostImage()}" class="img-fluid float-right pl-4 pb-3">

	<p>{$post->getContent()}</p>
	
{/capture}

{include file="layout/base.tpl"}