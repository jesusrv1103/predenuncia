<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PREDENUNCIA</title>
</head>

<body>
      
    <h1>PREDENUNCIA RECIBIDA</h1>
    <table>
        <tr>
            <th colspan="2">Datos del predenunciante</th>
        </tr>
        <tr>
            <td> Nombre: </td>
            <td> {{$mensaje['nombre']}}</td>
        </tr>
        <tr>
            <td>Domicilio(Calle, numero, colonia): </td>
            <td>{{$mensaje['direccion']}}</td>
        </tr>
        <tr>
            <td>Domicilio(Municipio): </td>
            <td>{{$mensaje['nombre_municipio']}}</td>
        </tr>
        <tr>
            <td>Correo electronico: </td>
            <td>{{$mensaje['email']}}</td>
        </tr>

     
        <tr>
            <td>Telefono: </td>
            <td>{{$mensaje['telefono']}}</td>
        </tr>

        <tr>

            
            <td> Forma de Notificación: </td>
                
            <td>
           
           
                @if(($mensaje['notificacion_correo']=="on") && ($mensaje['notificacion_telefono']==null))
                   CORREO
              
                @elseif(($mensaje['notificacion_correo']==null) && ($mensaje['notificacion_telefono']=="on"))
                  TELEFONO
               @elseif(($mensaje['notificacion_correo']=="on") && ($mensaje['notificacion_telefono']=="on"))
                  CORREO/TELEFONO
               @endif

              
            </td>
        </tr>
    </table>
    <table>

        <tr>
            <th colspan="2">Datos de los hechos</th>
        </tr>
        <tr>
            <td>Fecha: </td>
            <td>{{$mensaje['fecha_hechos']}}</td>
        </tr>
        <tr>
                <td>Municipio: </td>
                <td>{{$mensaje['nombre_municipio_denunciante']}}</td>
            </tr>

        <tr>
            <td>Calle: </td>
            <td>{{$mensaje['calle']}}</td>
        </tr>
        <tr>
            <td>Numero: </td>
            <td>{{$mensaje['numero']}}</td>
        </tr>
        <tr>
            <td>Colonia: </td>
            <td>{{$mensaje['colonia']}}</td>
        </tr>

    </table>

    <table>
        <tr><th>Narracion de los hechos</th></tr>
        <tr><td>{{$mensaje['descripcion']}}</td></tr>
    </table>


  
</body>

</html>