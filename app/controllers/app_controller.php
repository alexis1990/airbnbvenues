<?php

namespace APP\CONTROLLERS;

class app_controller{

	private $tpl;
	private $model;
	private $dataset;

	function __construct(){
		$this->tpl='main.html';
		$this->model=new \APP\MODELS\app_model();
	}

	function home(){

	}

	function getVenue($f3, $params){
		$this->dataset=$this->model->getVenue($params);
		$f3->set('one',$this->dataset);
		$this->tpl='venue.html';
	}

	function imageResize($f3, $params){
		$size = explode('x', $params['size']);
		$folder = $params['folder'];
		$file = $params['file'];
		$img = new \Image('/public/upload/'.$folder.'/'.$file);
		$img->resize($size[0],$size[1]);
		$this->tpl='image_render.html';
		$f3->set('img',$img);
	}

	function afterroute(){
		//echo View::instance()->render($this->tpl);
		//$template=new Template;
		//echo Template::instance()->render('main.html');
		echo \View::instance()->render($this->tpl);
	}

}

?>