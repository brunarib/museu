<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tematicas extends Model
{
    protected $fillable = ['name'];
	protected $guarded = ['id'];
	protected $table = 'tematicas';
	
}
