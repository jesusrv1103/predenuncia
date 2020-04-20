<?php

namespace App\Http\Controllers\Admin;

use App\Admin\PredenunciaEvidencia;
use App\Admin\Predenuncia;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EvidenciaPredenunciaController extends Controller
{
    public function store(Request $request)
    {
        /*
        $this->validate(request(),[
            'evidencia' => 'required|image|max:2048' //jpeg .png, bmp, gif, o svg
        ]);
        */
        $evidencia = request()->file('evidencia')->store('public');
        $evidenciaUrl= Storage::url($evidencia);
        
        PredenunciaEvidencia::create([
            'imagen' => $evidenciaUrl,
            'predenuncia_id' => $request->id
        ]);
    }

    public function destroy(PredenunciaEvidencia $evidencia)
    {
        $evidencia->delete();
        $evidenciaPath = str_replace('storage','public',$evidencia->url);
        Storage::delete($evidenciaPath);
        return back()->with('flash', 'Evidencia eliminada');
    }
}
