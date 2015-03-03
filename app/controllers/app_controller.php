<?php

namespace APP\CONTROLLERS;

class app_controller{

	private $tpl;
	private $model;
	private $dataset;
	private $activeMenu;
	private $pageTitle;

	function __construct(){
		session_start();
		$this->tpl='main.html';
		$this->model=new \APP\MODELS\app_model();
		$this->activeMenu = 1;
		$this->message = "";
		$this->logged = $this->model->is_logged();
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
		$this->dataset = $this->model->getAll();
		$f3->set('result', $this->dataset);
		$this->tpl = 'advancedSearch.html';
	}

	function select_value($f3){
		$this->activeMenu = 2;
		$this->dataset = $this->model->select_value();
		$f3->set('result', $this->dataset);
		$this->tpl = 'advancedSearch.html';
	}


	// Forms

	function loginForm($f3){
		$this->pageTitle = 'Connexion';
		$this->tpl = 'loginForm.html';
	}

	function loginSubmit($f3){
		$this->pageTitle = 'Connexion';
		$this->logged = $this->model->login($f3);

	}

	function signupForm($f3){
		$this->pageTitle = 'Inscription';
		$this->tpl = 'signupForm.html';
	}

	function signupSubmit($f3){
		$this->pageTitle = 'Inscription';
		$this->model->signup($f3);
		$this->tpl = 'signupForm.html';
	}

	function logout(){
		$this->model->logout();
		$this->logged = false;
		$this->message = "Vous êtes déconnecté";
	}


	// Search bar home
	function search($f3){
		// If post request is not empty
		if($f3->get('POST.search') != ''){
			$this->pageTitle = 'Recherche';
			$f3->set('result', $this->dataset = $this->model->getVenues($f3->get('POST.search')));
			$this->tpl = 'search.html';
		}
		
	}

	// afterroute
	function afterroute($f3){
		$f3->set('pageTitle', $this->pageTitle);
		$f3->set('message', $this->message);
		$f3->set('menu', $this->model->renderMenu($this->activeMenu));
		$f3->set('profile', $this->model->renderProfile($this->logged));
		echo \View::instance()->render($this->tpl);
	}

}

?>