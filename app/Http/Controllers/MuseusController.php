<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\museu;
use App\Http\Resources\museu as MuseuResource;

class MuseusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
	
    {
		$museus = museu::get();
        return MuseuResource::collection($museus);
    }

   
    public function show($id)
    {
       $museus = museu::findOrFail($id);
	   
	   return new MuseuResource($museus);
    }

    public function byName ($nome){
		
		//$museu = museu::findOrFail($name);
		return  MuseuResource::collection(museu::where("dsc_museu", "like", "%" .$nome. "%")->get());
	}
	
	public function byTematica ($tematica){
		
		//$museu = museu::findOrFail($name);
		return  MuseuResource::collection(museu::where("tematica", "=",$tematica)->get());
	}
	public function byApi ($api){
		
		//$museu = museu::findOrFail($name);
		return  MuseuResource::collection(museu::where("api", "=",$api)->get());
	}
	
    public function destroy($id)
    {
        $museu = museu::findOrFail($id);
		$museu->delete();
		return response()->json('removido com sucesso!');
    }
}
