<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class museu extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
		 'id' 		=> $this-> id,
		 'dsc_museu'=>$this->dsc_museu,
		 'historia'	=>$this->historia,
		 'telefone'	=>$this->telefone,
		 'email'	=>$this->email,
		 'link'		=>$this->link,
		 'api'		=>$this->api
		
		];
    }
}
