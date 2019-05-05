<?php

require 'BaseViewController.php';
require 'model/BlogPost.php';

class PostViewController extends BaseViewController
{
	public $template = 'page/post.tpl';
	public $pageTitle = 'Post';

	public function __construct($pageId)
	{
		parent::__construct($pageId);

		$postId = $_GET['post'];
		$post = new BlogPost($postId);

		$this->addViewData([
			'post' => $post,
		]);
	}

}