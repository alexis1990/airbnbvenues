<?php

namespace APP\MODELS;

class app_model{

	private $dB;

	function __construct(){
		$f3=\Base::instance();
		$this->dB=new \DB\SQL('mysql:host='.$f3->get('db_host').';port='.$f3->get('db_port').';dbname='.$f3->get('db_name'),
			$f3->get('db_login'),$f3->get('db_password'));
	}

	public function getVenue($params){
		//$combined=new DB\SQL\Mapper($db,'combined');
	 // $combined->load(array('id=?',$params['id']));
		return $this->getMapper('venue_datas')->load(array('id=?',$params['id']));
		//return $this->getMapper()->load(array('id=?',$params['id']));
	}

	public function getVenues($data){

		$query=array(
			'name LIKE :name1',
			':name1'=>'%'.$data.'%'
			);
		return $this->getMapper()->find($query,array('order'=>'name'));
	}

	public function renderMenu($activeMenu){
		$menu = '<ul class="headerMenu">';

		if($activeMenu == 1)
			{ $menu .= '<li class="activeHeaderLink"><a href="/">Lieux</a></li>'; }
		else{ $menu .= '<li><a href="/">Lieux</a></li>'; }

		if($activeMenu == 2)
			{ $menu .= '<li class="activeHeaderLink"><a href="/booking">Mes réservations</a></li>'; }
		else{ $menu .= '<li><a href="/booking">Mes réservations</a></li>'; }

		if($activeMenu == 3)
			{ $menu .= '<li class="activeHeaderLink"><a href="/search">Recherche avancée</a></li>'; }
		else{ $menu .= '<li><a href="/search">Recherche avancée</a></li>'; }

		return $menu;
	}

	private function getMapper($table='venues'){
		return new \DB\SQL\Mapper($this->dB,$table);
	}

}


?>