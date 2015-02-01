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

  private function getMapper($table='venues'){
    return new \DB\SQL\Mapper($this->dB,$table);
  }







}


?>