<?php namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table ='productos';
    protected $allowedfields = ['nom_producto','cat_producto','medida','tipo','TRIAL_COLUMN6','TRIAL_COLUMN7','TRIAL_COLUMN8','TRIAL_COLUMN9','TRIAL_COLUMN10','TRIAL_COLUMN11','Imagen','Unidades'];

}