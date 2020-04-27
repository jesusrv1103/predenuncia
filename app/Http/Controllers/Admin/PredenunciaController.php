<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Estado;
use App\Admin\PredenunciaEvidencia;
use App\Admin\Municipio;
use App\Admin\Denunciante;
use App\Admin\Predenuncia;
use App\Admin\LugarHecho;
use Mail;  
use App\Mail\DenunciaRecibida;
use Illuminate\Support\Facades\DB;

use UxWeb\SweetAlert\SweetAlert;




class PredenunciaController extends Controller
{
    public function index(){
      $ultimoIdPredenuncia= Predenuncia::latest('id')->first();
        $municipios=Municipio::where('estado_id','=','32')->get();

        
        return view('predenuncia',compact('municipios','ultimoIdPredenuncia'));
        
    }


    public function store(Request $request){


        //dd($request->get('notificacion_telefono'));
        
        DB::beginTransaction();
        $denunciante=new Denunciante;
        $denunciante->nombre=$request->get('nombre');
        $denunciante->direccion=$request->get('direccion');
        $denunciante->correo_electronico=$request->get('email');
        $denunciante->telefono=$request->get('telefono');
        $denunciante->notificacion_correo=$request->get('notificacion_correo') == "on" ? 1 : 0;  
        $denunciante->notificacion_telefono=$request->get('notificacion_telefono') == "on" ? 1 : 0;  
        $denunciante->save();
        $denunciante_id= $denunciante->id;
       
        $lugar_hechos = new LugarHecho;
        $lugar_hechos->fecha=$request->get('fecha_hechos');
        $lugar_hechos->calle=$request->get('calle');
        $lugar_hechos->numero=$request->get('numero');
       $lugar_hechos->colonia=$request->get('colonia');
       
        $lugar_hechos->municipio_id=$request->get('param');
        $lugar_hechos->save();
        $lugar_hechos_id= $lugar_hechos->id;
        $predenuncia= new Predenuncia;
        $predenuncia->denunciante_id= $denunciante_id;
        $predenuncia->lugar_hechos_id= $lugar_hechos_id;
        $predenuncia->descripcion=$request->get('descripcion');
        $predenuncia->save();
        $id_predenuncia= $predenuncia->id;
        $mensaje=$request;


     
        $evidencias= PredenunciaEvidencia::
        select('imagen')
        ->where('predenuncia_id','=',$id_predenuncia)
        ->get();
        $evidencias=$evidencias;
  

        DB::commit();
        //return $request;
        config(['mail.from.address' => 'jramirezv@fiscaliazacatecas.gob.mx']);
        config(['mail.password' => '5W%#sjdj0D03b&LuX3h1']);
         Mail::to('jesus21c.jrv@gmail.com')->send(new DenunciaRecibida($mensaje,$evidencias));
        // SweetAlert::message('Welcome back!');
        return redirect()->back()->with('flash', 'Se ha recibido su predenuncia, personal de la Fiscalía se pondrá en contacto contigo vía correo electrónico para dar respuesta e indicar el trámite conducente.');;

        
    }
}
