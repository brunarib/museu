<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class museu extends Model
{
    protected $fillable = 
	['dsc_museu','historia','telefone','email','link'];
	protected $guarded = ['id','api'];
	protected $table = 'museus';
}
