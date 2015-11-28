<?php
class sign_model extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function registro_usuario($nombre, $apellidos, $nickname, $password, $mail, $fechaNacimiento, $nacionalidad, $sexo, $fechaReg){
		$data=array(
				'nombre'=>$nombre,
				'apellidos'=>$apellidos,
				'nickname'=>$nickname,
				'password'=>$password,
				'correo'=>$mail,
				'fechaNacimiento'=>$fechaNacimiento,
				'avatar'=>'mr_x.gif',
				'sexo'=>$sexo,
				'nacionalidad'=>$nacionalidad,
				'fechaReg'=>$fechaReg,
				'tipoUsuario'=>1
		);
		return $this->db->insert('usuario', $data);
	}
	
}