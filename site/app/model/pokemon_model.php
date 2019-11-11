<?php
namespace App\Model;

use Illuminate\Databse\Eloquent\Model;

class Pokemon_Model extends Model {
    protected $table = 'pokemon';
    protected $fillable = ['name', 'typed'];
}