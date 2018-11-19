<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
       protected $fillable = ['name'];
	protected $guarded = ['id'];
	protected $table = 'categorias';
	
}
