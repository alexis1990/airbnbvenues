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

	public function signup($f3){
		if($this->loadAccount($f3->get('POST.email')) < 1){
			if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password'])){
				$register_first_name = $_POST['first_name'];
				$register_last_name = $_POST['last_name'];
				$register_email = $_POST['email'];
				$register_password = $this->hash_password($_POST['password']);

				$account = new \DB\SQL\Mapper($this->dB,'accounts');
				$account->first_name = $register_first_name;
				$account->last_name = $register_last_name;
				$account->email = $register_email;
				$account->password = $register_password;

				$account->save();
			}
		}
		else{
			$f3->set('formError', 'Cette adresse email est déjà utilisée');
		}
	}

	public function login($f3){
		$email = $f3->get('POST.email');
		$password = $f3->get('POST.password');

		$account = new \DB\SQL\Mapper($this->dB,'accounts');
		$account->load(array('email = ?', $email));

		if($account->loaded() == 1){
			if($this->hash_password($password) == $account->password){
				$_SESSION['logged_mail'] = $account->email;
				return true;
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
	}

	public function is_logged(){
		if(isset($_SESSION['logged_mail'])){
			return true;
		}
		else{
			return false;
		}
	}

	public function logout(){
		session_destroy();
	}

	function loadAccount($email){
		$account = new \DB\SQL\Mapper($this->dB,'accounts');
		$account->load(array('email = ?', $email));
		return $account->loaded();
	}

	private function hash_password($password_to_hash){
		return sha1('ekçflk_d_l_45°2fke-q%!(kjeklkd' . $password_to_hash . 'ii+iial1ù$*_____=');
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

	public function renderProfile($is_logged){

		if($is_logged){
			$profile = '<div class="headerMenu headerProfile"><a href="#" class="menuProfile"><span class="headerProfileName">Arthur</span><span class="headerProfilePic"></span><span class="profile_notifs">3</span></a></div>';
		}
		else{
			$profile = '<div class="headerSignup"><a href="/signup" class="signupButton">Inscription</a><a href="/login" class="loginButton">Connexion</a></div>';
		}

		return $profile;
	}

	private function getMapper($table='venues'){
		return new \DB\SQL\Mapper($this->dB,$table);
	}

}


?>