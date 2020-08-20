<?php namespace App\Controllers;

class ProductsController extends BaseController
{
	public function index()
	{
		$data=array(
			'ProductName'=>"Llave de tubo",
			'imagenProducts'=>"https://maquitodo.com.co/559-thickbox_default/llave-tubo-24-profesional-stanley.jpg",
			'Category'=>"Herramientas",
			'measure'=>"pulgada",
			'Kind'=>0.4,
			'lowerPrice'=>5000,
			'higherPrice'=>6000,
			'suppliers'=>"jjdjdff",
			'providerName'=>"nijmf",
			'telephone'=>3146148038,
			'direction'=>"calle 61#ihi",
			'units'=>45
		);
		return view('Products',$data);
	}

	public function Add(){
		$ProductModel=new ProductsModel();
		
		$ProductName=$this->request->getPost('ProductName');
		$imagenProducts=$this->request->getPost('imagenProducts');
		$Category=$this->request->getPost('Category');
		$measure=$this->request->getPost('measure');
		$Kind=$this->request->getPost('Kind');
		$lowerPrice=$this->request->getPost('lowerPrice');
		$higherPrice=$this->request->getPost('higherPrice');
		$suppliers=$this->request->getPost('suppliers');
		$providerName=$this->request->getPost('providerName');
		$telephone=$this->request->getPost('telephone');
		$direction=$this->request->getPost('direction');
		$units=$this->request->getPost('units');


		$ProductModel->save([

			'nom_producto'->$ProductName,
			'Imagen'->$imagenProducts,
			'cat_producto'->$Category,
			'medida'->$measure
			'tipo'->$Kind,
			'TRIAL_COLUMN6'->$lowerPrice,
			'TRIAL_COLUMN7'->$higherPrice,
			'TRIAL_COLUMN8'->$suppliers
			'TRIAL_COLUMN9'->$providerName,
			'TRIAL_COLUMN10'->$telephone,
			'TRIAL_COLUMN611'->$direction,
			'Unidades'->$units
		]);
		 return redirect()->to(base_url('public/Products'))->with("mensaje","Producto registrado con exito");


	}
	public function delete($Id_usuario){
		$ProductModel= new ProductsModel();
		$ProductModel->where('Id_usuario',$Id_usuario)->delete();
		return redirect()->to(base_url('public/Users'));
	}
	public function update($Id_usuario){
		$ProductModel= new ProductsModel();
	
		$username=$this->request-<getPost('nombre2');
		$email=$this->request-<getPost('nombreususario2');
		$username=$this->request-<getPost('password2');
		$email=$this->request-<getPost('correo2');
	
		$UserModel->update($Id_usuario,[
			'nombre'->$Name,
			'nombreususario'->$Username,
			'password'->$password,
			'correo'->$email
		]);
	
		return redirect()->to(base_url('public/Users'));
	}
							
}
