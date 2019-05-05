<?php

class BlogPost
{	
	public $postData = null;

	public function __construct($postId)
	{
		$allPosts = json_decode(file_get_contents('../data/blogposts.json'), true);
		$this->postData = $allPosts[$postId];
	}

	public function getTitle()
	{
		return $this->postData['title'];
	}

	public function getPostImage()
	{	
		$bgRgb = substr(md5(rand()), 0, 6);
		$txRgb = substr(md5(rand()), 0, 6);
		return "https://via.placeholder.com/500x400/" . $bgRgb . "/" . $txRgb;
	}

	public function getExcerpt()
	{
		return $this->postData['excerpt'];
	}

	public function getContent()
	{
		return $this->postData['content'];
	}

	public function getPostDate($format = 'd.m.Y H:i')
	{	
		$datetime = new DateTime($this->postData['created']);
		return $datetime->format($format);
	}

}