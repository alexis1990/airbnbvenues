<?php

namespace APP\CONTROLLERS;

class app_controller{

	private $tpl;
	private $model;
	private $dataset;
	private $activeMenu;
	private $pageTitle;

	function __construct(){
		$this->tpl='main.html';
		$this->model=new \APP\MODELS\app_model();
		$this->activeMenu = 1;
	}

	function home(){

	}

	function getVenue($f3, $params){
		$this->dataset = $this->model->getVenue($params);
		$f3->set('one',$this->dataset);
		$this->tpl = 'venue.html';
	}

	function imageResize($f3, $params){
		$size = explode('x', $params['size']);
		$folder = $params['folder'];
		$file = $params['file'];
		$img = new \Image('/public/upload/'.$folder.'/'.$file);
		$img->resize($size[0],$size[1]);
		$this->tpl = 'image_render.html';
		$f3->set('img',$img);
	}

	function bookingList($f3){
		$this->activeMenu = 2;
		$this->tpl = 'bookingList.html';
	}

	function advancedSearch($f3){
		$this->pageTitle = 'Recherche avancée';
		$this->activeMenu = 3;
		$this->tpl = 'advancedSearch.html';
	}

	function afterroute($f3){
		//echo View::instance()->render($this->tpl);
		//$template=new Template;
		//echo Template::instance()->render('main.html');
		$f3->set('pageTitle', $this->pageTitle);
		$f3->set('menu', $this->model->renderMenu($this->activeMenu));
		echo \View::instance()->render($this->tpl);
	}

}

?>