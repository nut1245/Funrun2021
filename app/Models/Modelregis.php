<?php namespace App\Models;

use CodeIgniter\Model;

    class Modelregis extends Model{

    protected $table ='regis';
    protected $allowedFields = ['ID','member','category_run'];
    protected $primiryKey = 'member';
 }
