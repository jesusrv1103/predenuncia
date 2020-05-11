<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div style="text-align: right;">
        <h3>Predenuncia con el folio: {{$predenuncia->folio}}</h3>
        <br>
        <img src="{{ public_path('assets/logos_fiscalia/original180x90.png')}}" width="200px">
    </div>

    <div>
        <h2>Predenuncia que realiza el/la C. {{$predenuncia->nombreDenunciante}}</h2>
        <table>
            <tr>
                <td colspan="2"> Datos del Predenunciante</td>

            </tr>
            <tr>
                <td>Nombre: </td>
                <td>{{$predenuncia->nombreDenunciante}}</td>
            </tr>
            <tr>
                <td>Domicilio: </td>
                <td>{{$predenuncia->direccion}}</td>
            </tr>
            <tr>
                <td>Correo electronico: </td>
                <td>{{$predenuncia->correo_electronico}}</td>
            </tr>

            <tr>
                <td>Correo electronico: </td>
                <td>{{$predenuncia->correo_electronico}}</td>
            </tr>

            <tr>
                <td>Telefono: </td>
                <td>{{$predenuncia->telefono}}</td>
            </tr>
            <tr>
                <td>Forma de Notificación: </td>
                <td>
                    @if(($predenuncia->notificacion_correo==1) && ($predenuncia->notificacion_telefono==0))
                    CORREO

                    @elseif(($predenuncia->notificacion_correo==0) && ($predenuncia->notificacion_telefono==1))
                    TELEFONO
                    @elseif(($predenuncia->notificacion_correo==1) && ($predenuncia->notificacion_telefono==1))
                    CORREO/TELEFONO
                    @endif
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td colspan="2">Datos de los hechos</td>

            </tr>
            <tr>
                <td>Fecha: </td>
                <td>{{$predenuncia->fechaDelito}}</td>
            </tr>

    </div>
</body>

</html>

$predenuncias=Predenuncia::
join('lugar_hechos as lugar','predenuncias.lugar_hechos_id','=', 'lugar.id')
->join('municipios AS m', 'lugar.municipio_id', '=','m.id')
->join('denunciantes AS d','predenuncias.denunciante_id', '=', 'd.id')
->select('predenuncias.denunciante_id','predenuncias.lugar_hechos_id', 'predenuncias.descripcion',
'predenuncias.id as id_predenuncia','lugar.fecha as fechaDelito', 'lugar.calle','lugar.colonia','lugar.numero','m.nombre
as nombreMunicipio'
,'d.nombre as nombreDenunciante','d.direccion',
'd.correo_electronico','d.notificacion_correo','d.notificacion_telefono')
->get();
return view('PredenunciasRecibidas.index', compact('predenuncias'));