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
                <td colspan="2"> <strong>Datos del Predenunciante</strong></td>

            </tr>
            <tr>
                <td><strong>Nombre:</strong> </td>
                <td>{{$predenuncia->nombreDenunciante}}</td>
            </tr>
            <tr>
                <td><strong>Domicilio: </strong></td>
                <td>{{$predenuncia->direccion}}</td>
            </tr>
            <tr>
                <td><strong>Correo electronico:</strong> </td>
                <td>{{$predenuncia->correo_electronico}}</td>
            </tr>

            <tr>
                <td><strong>Correo electronico:</strong> </td>
                <td>{{$predenuncia->correo_electronico}}</td>
            </tr>

            <tr>
                <td><strong>Telefono: </strong></td>
                <td>{{$predenuncia->telefono}}</td>
            </tr>
            <tr>
                <td><strong>Forma de Notificación:</strong> </td>
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
                <td colspan="2"><strong>Datos de los hechos</strong></td>

            </tr>
            <tr>
                <td><strong>Fecha:</strong> </td>
                <td>{{$predenuncia->fechaDelito}}</td>
            </tr>
            <tr>
                <td><strong>Municipio:</strong> </td>
                <td>{{$predenuncia->fechaDelito}}</td>
            </tr>
            <tr>
                <td><strong>Calle:</strong> </td>
                <td>{{$predenuncia->calle}}</td>
            </tr>
            <tr>
                <td><strong>Numero: </strong></td>
                <td>{{$predenuncia->numero}}</td>
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
         
            </p>


        </div>
   </center>
        <p>También se cuenta con
                @php
                echo $otrasEvidencias;
                
                @endphp
                que no se pueden visualizar en este documento
  
</body>

</html>