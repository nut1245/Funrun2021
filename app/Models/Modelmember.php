<?php namespace App\Models;

use CodeIgniter\Model;

    class Modelmember extends Model{

    protected $table ='member';
    protected $allowedFields = ['id_card','name','age','email','password'];
    protected $primiryKey = 'id_card';
 }
