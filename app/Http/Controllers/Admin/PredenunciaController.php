<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Estado;
use App\Admin\Municipio;
use App\Admin\Denunciante;
use App\Admin\Predenuncia;
use App\Admin\LugarHecho;
use Mail;  
use App\Mail\DenunciaRecibida;
use Illuminate\Support\Facades\DB;



class PredenunciaController extends Controller
{
    public function index(){
        $ultimoIdPredenuncia= Predenuncia::latest('id')->first();
        $municipios=Municipio::where('estado_id','=','32')->get();

        
        return view('welcome',compact('municipios','ultimoIdPredenuncia'));
        
    }


    public function store(Request $request){
        DB::beginTransaction();
        $denunciante=new Denunciante;
        $denunciante->nombre=$request->get('nombre');
        $denunciante->direccion=$request->get('direccion');
        $denunciante->correo_electronico=$request->get('email');
        $denunciante->telefono=$request->get('telefono');
        $denunciante->save();
        $denunciante_id= $denunciante->id;
        
        $lugar_hechos = new LugarHecho;
        $lugar_hechos->calle=$request->get('calle');
        $lugar_hechos->numero=$request->get('numero');
        $lugar_hechos->municipio_id=$request->get('param');
        $lugar_hechos->save();
        $lugar_hechos_id= $lugar_hechos->id;
        $predenuncia= new Predenuncia;
        $predenuncia->denunciante_id= $denunciante_id;
        $predenuncia->lugar_hechos_id= $lugar_hechos_id;
        $predenuncia->descripcion=$request->get('descripcion');
        $predenuncia->save();
        $mensaje=$request;
        
         Mail::to('jramirezv@fiscaliazacatecas.gob.mx')->send(new DenunciaRecibida($mensaje));
        DB::commit();
        return redirect()->back();
    }
}
