<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\PredenunciaEvidencia;
use App\Admin\Municipio;
use App\Admin\Denunciante;
use App\Admin\Predenuncia;
use App\Admin\LugarHecho;
use Mail;
use App\Mail\DenunciaRecibida;
use Illuminate\Support\Facades\DB;
use UxWeb\SweetAlert\SweetAlert;

use Illuminate\Support\Carbon;

class PredenunciaController extends Controller
{
    public function index()
    {
        $ultimoIdPredenuncia = Predenuncia::latest('id')->first();
        $municipios = Municipio::where('estado_id', '=', '32')->get();

        return view('predenuncia', compact('municipios', 'ultimoIdPredenuncia'));
    }

    public function store(Request $request)
    {
        //dd($request->get('notificacion_telefono'));
        DB::beginTransaction();
        $denunciante = new Denunciante();
        $denunciante->nombre = $request->get('nombre');
        $denunciante->direccion = $request->get('direccion');
        $denunciante->correo_electronico = $request->get('email');
        $denunciante->municipio_id = $request->get('municipio_id');
        $denunciante->telefono = $request->get('telefono');
        $denunciante->notificacion_correo = $request->get('notificacion_correo') == 'on' ? 1 : 0;
        $denunciante->notificacion_telefono = $request->get('notificacion_telefono') == 'on' ? 1 : 0;
        $denunciante->save();
        $denunciante_id = $denunciante->id;

        $lugar_hechos = new LugarHecho();
        $lugar_hechos->fecha = $request->get('fecha_hechos');
        $lugar_hechos->calle = $request->get('calle');
        $lugar_hechos->numero = $request->get('numero');
        $lugar_hechos->colonia = $request->get('colonia');

        $lugar_hechos->municipio_id = $request->get('param');
        $lugar_hechos->save();
        $lugar_hechos_id= $lugar_hechos->id;
        $predenuncia= new Predenuncia;
        //$predenuncia ->folio=$this->generarFolio();
        $predenuncia->denunciante_id= $denunciante_id;
        $predenuncia->lugar_hechos_id= $lugar_hechos_id;
        $predenuncia->descripcion=$request->get('descripcion');
        $predenuncia->save();
        $id_predenuncia = $predenuncia->id;
        $mensaje = $request;

        $evidencias = PredenunciaEvidencia::
        select('imagen')
        ->where('predenuncia_id', '=', $id_predenuncia)
        ->get();
        $evidencias = $evidencias;

        DB::commit();

         Mail::to('predenuncia@fiscaliazacatecas.gob.mx')->send(new DenunciaRecibida($mensaje,$evidencias));

        
         return redirect()->back()->with('flash', 'Se ha recibido su predenuncia, personal de la Fiscalía se pondrá en contacto contigo vía correo electrónico para dar respuesta e indicar el trámite conducente.');;

        
    }

    public function generarFolio(){
        $ultimoIdPredenuncia= Predenuncia::latest('id')->first();
        $ultimoIdPredenuncia= intval($ultimoIdPredenuncia->id)+1;
        $today = Carbon::now()->format('Y');
        $folio=0;
        $folio= "0".$ultimoIdPredenuncia."/".$today;
        return $folio;
    }
}
