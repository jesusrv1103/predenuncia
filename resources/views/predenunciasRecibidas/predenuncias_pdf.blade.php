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
        <h2>Predenuncia que realiza el/la C. {{$predenuncia->denunciante->nombre}}</h2>
        <table>
            <tr>
                <td colspan="2"> Datos del Predenunciante</td>

            </tr>
            <tr>
                <td>Nombre: </td>
                <td>{{$predenuncia->denunciante->nombre}}</td>
            </tr>
            <tr>
                <td>Domicilio: </td>
                <td>{{$predenuncia->denunciante->direccion}}</td>
            </tr>
            <tr>
                <td>Correo electronico: </td>
                <td>{{$predenuncia->denunciante->correo_electronico}}</td>
            </tr>



            <tr>
                <td>Telefono: </td>
                <td>{{$predenuncia->denunciante->telefono}}</td>
            </tr>
            <tr>
                <td>Forma de Notificación: </td>
                <td>
                    @if(($predenuncia->denunciante->notificacion_correo==1) &&
                    ($predenuncia->denunciante->notificacion_telefono==0))
                    CORREO

                    @elseif(($predenuncia->denunciante->notificacion_correo==0) &&
                    ($predenuncia->denunciante->notificacion_telefono==1))
                    TELEFONO
                    @elseif(($predenuncia->denunciante->notificacion_correo==1) &&
                    ($predenuncia->denunciante->notificacion_telefono==1))
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
                <td>{{$predenuncia->lugarHechos->fechaDelito}}</td>
            </tr>
            <tr>
                <td>Municipio: </td>
                <td>{{$predenuncia->lugarHechos->municipio->nombre}}</td>
            </tr>

            <tr>
                <td><strong>Municipio:</strong> </td>
                <td>{{$predenuncia->lugarHechos->municipio->nombre}}</td>
            </tr>
            <tr>
                <td><strong>Calle:</strong> </td>
                <td>{{$predenuncia->lugarHechos->calle}}</td>
            </tr>
            <tr>
                <td><strong>Numero: </strong></td>
                <td>{{$predenuncia->lugarHechos->numero}}</td>
            </tr>
        </table>
        <p>{{$predenuncia->descripcion}}</p>
        <br>
        
    </div>

    <center>
        <div>

            @php
            $otrasEvidencias=0;
            @endphp
            @foreach ($evidencias as $evidencia)
           
           @php
            $ext = strtolower(pathinfo(storage_path('app/'.$evidencia->imagen), PATHINFO_EXTENSION));
            @endphp
            @if ($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="gif")
            <img style="padding: 20px 20px;" src="{{ storage_path('app/'.$evidencia->imagen)}}" width="200px"
                height="200px">
        
    
            @else

            @php
            $otrasEvidencias=$otrasEvidencias+1;
          
            @endphp

            @endif
            @endforeach
         


        </div>
   </center>
        <p>También se cuenta con
                @php
                echo $otrasEvidencias;
                
                @endphp
                que no se pueden visualizar en este documento
</body>

</html>