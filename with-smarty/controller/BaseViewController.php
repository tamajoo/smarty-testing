<?php 

require 'lib/smarty/Smarty.class.php';

class BaseViewController
{

	public $template = null;
	public $smarty = null;
	public $viewdata = [];
	public $pageId = "";

	public function __construct($pageId)
	{
		$this->pageId = $pageId;
		$this->smarty = new Smarty();
		$this->smarty->compile_dir = 'tmp/smarty/';
		$this->smarty->template_dir = 'view/'; 

		$this->viewdata['view'] = $this;

		$this->addStylesheet('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
		$this->addJavascript('https://code.jquery.com/jquery-3.3.1.slim.min.js');
		$this->addJavascript('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
		$this->addJavascript('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
	}

	/**
	 * Output the template
	 * @return type
	 */
	public function render()
	{
        $this->smarty->assign($this->viewdata);
		$this->smarty->display($this->template);
	}

	/**
	 * Add data to the template
	 * @param type $data 
	 * @return type
	 */
	public function addViewData($data)
	{
		$this->viewdata = array_merge($this->viewdata, $data);
	}

	/**
	 * Return the page ID of the current page
	 * @return type
	 */
	public function getActivePage()
	{
		return $this->pageId;
	}

	/**
	 * Return the page title, defined in the page controller
	 * @return type
	 */
	public function getPageTitle()
	{
		return $this->pageTitle;
	}
	
	/**
	 * Get the footer texts
	 * @return type
	 */
	public function getFooterTexts()
	{
		return [
			'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
			'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
			'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
			'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
		];
	}
	
	/**
	 * Add a stylesheet to the array of stylesheets to be used on the page
	 * @param type $url 
	 * @return type
	 */
	public function addStylesheet($url)
	{
		$this->stylesheets[] = $url;
	}

	/**
	 * Return the array of stylesheets for output in the template
	 * @return type
	 */
	public function getStylesheets()
	{
		return $this->stylesheets;
	}
	
	/**
	 * Add a javascript file to the array of javascript files to be used on the page
	 * @param type $url 
	 * @return type
	 */
	public function addJavascript($url)
	{
		$this->javascripts[] = $url;
	}
	
	/**
	 * Return the array of javascript files for output in the template
	 * @return type
	 */
	public function getJavascripts()
	{
		return $this->javascripts;
	}

	/**
	 * Return an example image url with given dimensions and colors
	 * @return type
	 */
	public function getImageUrl($width, $height, $backgroundColor = '007bff', $textColor = 'ffffff')
	{
		return "https://via.placeholder.com/" . $width . "x" . $height . "/" . $backgroundColor . "/" . $textColor;
	}

}