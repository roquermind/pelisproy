<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
	
	public $variable;
	
	public function __construc()
	{
		parent::_construc();
	}
	
	public function login($username,$password)
	{
		
		$this->db->where('nickname',$username);
		$this->db->where('password',$password);
		$v=$this->db->get('usuario');
		if($v->num_rows()>0)
		{
			return true;
		}else{
			return false;
		}
	}
	
}