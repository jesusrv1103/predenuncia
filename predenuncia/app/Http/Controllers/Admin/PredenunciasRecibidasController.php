<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Predenuncia;
use PDF;

use App\Admin\PredenunciaEvidencia;
class PredenunciasrecibidasController extends Controller
{
    public function index(){

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

    public function pdfPredenuncias($id){
      


        $predenuncia=Predenuncia::
        join('lugar_hechos as lugar','predenuncias.lugar_hechos_id','=', 'lugar.id')
        ->join('municipios AS m', 'lugar.municipio_id', '=','m.id')
        ->join('denunciantes AS d','predenuncias.denunciante_id', '=', 'd.id')
        ->select('predenuncias.denunciante_id','predenuncias.lugar_hechos_id','predenuncias.folio', 'predenuncias.descripcion',
           'predenuncias.id as id_predenuncia','lugar.fecha  as fechaDelito', 'lugar.calle','lugar.colonia','lugar.numero','m.nombre as nombreMunicipio'
           ,'d.nombre as nombreDenunciante','d.telefono','d.direccion', 'd.correo_electronico','d.notificacion_correo','d.notificacion_telefono')
        ->where('predenuncias.id','=',$id)
        ->first();
        $evidencias=PredenunciaEvidencia::select('predenuncia_id',
        'imagen')
        ->where('predenuncia_id','=',$id)
        ->get();
    
        $pdf= PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
        ->loadView('PredenunciasRecibidas.predenuncias_pdf', ['predenuncia' => $predenuncia, 'evidencias'=>$evidencias] )
        ->setPaper('legal', 'portrait');
       
        return $pdf->download('PREDENUNCIA'.$predenuncia->folio); 

     
        return view('PredenunciasRecibidas.predenuncias_pdf', compact('predenuncia','evidencias'));
    }

  

}
