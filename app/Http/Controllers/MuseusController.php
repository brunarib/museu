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

    public function byName ($dsc_museu){
		
		//$museu = museu::findOrFail($name);
		return  MuseuResource::collection(museu::where("dsc_museu", "like", "%" .$dsc_museu. "%")->get());
	}
	
    public function destroy($id)
    {
        $museu = museu::findOrFail($id);
		$museu->delete();
		return response()->json('removido com sucesso!');
    }
}
