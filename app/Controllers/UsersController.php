<?php namespace App\Controllers;

class UsersController extends BaseController
{
	public function index()
	{
		$data=array(
			'Username'=>"Llave de tubo",
			'Name'=>"tytyyt",
			'password'=>"Herramientas",
			'email'=>"pulgada"
		);
		return view('Users',$data);
	}

	public function Add(){
		$UserModel=new UsersModel();
		
		$Username=$this->request->getPost('Username');
		$Name=$this->request->getPost('Name');
		$password=$this->request->getPost('password');
		$email=$this->request->getPost('email');

		$UserModel->save([
			'nombre'->$Name,
			'nombreususario'->$Username,
			'password'->$password,
			'correo'->$email
		]);
		 return redirect()->to(base_url('public/Users'))->with("mensaje","Usuario registrado con exito");


	}
}
