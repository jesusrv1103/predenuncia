<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin\Predenuncia;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $predenuncias=Predenuncia::
        join('lugar_hechos as lugar','predenuncias.lugar_hechos_id','=', 'lugar.id')
        ->join('municipios AS m', 'lugar.municipio_id', '=','m.id')
        ->join('denunciantes AS d','predenuncias.denunciante_id', '=', 'd.id')
        ->select('predenuncias.denunciante_id','predenuncias.lugar_hechos_id','predenuncias.folio', 'predenuncias.descripcion',
           'predenuncias.id as id_predenuncia','lugar.fecha  as fechaDelito', 'lugar.calle','lugar.colonia','lugar.numero','m.nombre as nombreMunicipio'
           ,'d.nombre as nombreDenunciante','d.direccion', 'd.correo_electronico','d.notificacion_correo','d.notificacion_telefono')
        ->get();
        return view('PredenunciasRecibidas.index', compact('predenuncias'));
    }
}
