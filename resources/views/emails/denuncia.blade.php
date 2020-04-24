<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" >
    <title>Document</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<body>


<table>
<tr>
<th colspan="2">DATOS DEL DENUNCIANTE</th>
</tr>
    <tr>
        <td>NOMBRE: </td>
        <td>{{$mensaje['nombre']}}</td>
    </tr>
    <tr>
        <td>DOMICILIO: </td>
        <td>{{$mensaje['direccion']}}</td>
    </tr>
    <tr>
        <td>TELEFONO: </td>
        <td>{{$mensaje['telefono']}}</td>
    </tr>
    <tr>
        <td>FORMA DE NOTIFICACION: </td>
        <td>{{$mensaje['nombre']}}</td>
    </tr>
</table>

<br>


<table>
<tr >
<th colspan="2">DATOS DE LOS HECHOS</th>
</tr>
    <tr>
        <td>FECHA: </td>
        <td>{{$mensaje['fecha']}}</td>
    </tr>
    <tr>
        <td>CALLE: </td>
        <td>{{$mensaje['calle']}}</td>
    </tr>
    <tr>
        <td>NUMERO: </td>
        <td>{{$mensaje['numero']}}</td>
    </tr>
    <tr>
        <td>COLONIA: </td>
        <td>{{$mensaje['colonia']}}</td>
    </tr>
    <tr>
        <td>MUNICIPIO: </td>
        <td>{{$mensaje['municipio']}}</td>
    </tr>

</table>
<br>
<table>
    <tr>
        <th>NARRACION DE LOS HECHOS</th>
    </tr>

    <tr>
   <td> {{$mensaje['descripcion']}}</td>
    </tr>
</table>



          
</body>
</html>