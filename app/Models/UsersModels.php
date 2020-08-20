<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table ='usuarios';
    protected $allowedfields = ['Id_usuario','correo','nombre','nombreususario','contraseña'];
}
