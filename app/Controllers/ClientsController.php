<?php namespace App\Controllers;

use App\Models\ClientsModel;

class ClientsController extends BaseController
{
	public function index()
	{
		$data=array(
			'identificationcard'=>"Llave de tubo",
			'ClientsName'=>"nhrgdfs",
			'LastName'=>"Herramientas",
			'UserName'=>"pulgada",
			'Email'=>"proetuscbbvxdfjhi@gmail.com",
			'Direction'=>"ierhihfnf",
			'Municipalites'=>"hsihuifshdf",
		);
		return view('Clients',$data);
	}

	public function Add(){

		$ClientModel=new ClientsModel();

		$identificationcard=$this->request->getPost('identificationcard');
		$ClientsName=$this->request->getPost('ClientsName');
		$LastName=$this->request->getPost('identificationcard');
		$UserName=$this->request->getPost('UserName');
		$Email=$this->request->getPost('Email');
		$Direction=$this->request->getPost('Direction');
		$Municipalites=$this->request->getPost('Municipalites');

		$ClientModel->save([
			'cedula_cliente'->$identificationcard,
			'nombre_cliente'->$ClientsName,
			'apellidos_cliente'->$LastName,
			'nombre_usuario'->$UserName,
			'TRIAL_COLUMN8'->$Email,
			'TRIAL_COLUMN9'->$Direction,
			'TRIAL_COLUMN10'->Municipalites
		]);
		 return redirect()->to(base_url('public/Clients'))->with("mensaje","Cliente registrado con exito");


	}

}