@extends('admin.layouts.main')
@section('sub-header')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Predenuncias
            </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Listado de predenuncias</a>

                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>

    </div>
</div>
@stop
@section('content')
<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet">
        <div class="kt-portlet__body kt-portlet__body--fit">
            <div class="kt-invoice-2">
                <div class="kt-invoice__head">
                    <div class="kt-invoice__container">
                        <div class="kt-invoice__brand">
                            <h1 class="kt-invoice__title">Predenuncia</h1>
                            <div href="#" class="kt-invoice__logo">
                                <img src="/assets/logos_fiscalia/original180x90.png" width="200px">
                                <span class="kt-invoice__desc">
                                    <span>Folio: {{$predenuncia->folio}}</span>

                                </span>
                            </div>
                        </div>

                        <span>
                            <h3>Datos del predenunciante</h3>
                        </span>


                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Nombre: </strong>&nbsp;&nbsp;&nbsp;
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$predenuncia->denunciante->nombre}}
                            </span>
                        </div>


                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Domicilio(Calle, numero, colonia): </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$predenuncia->denunciante->direccion}}
                            </span>
                        </div>

                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Domicilio(Municipio): </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$predenuncia->denunciante->direccion}}
                            </span>
                        </div>

                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Correo electronico: </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$predenuncia->denunciante->correo_electronico}}
                            </span>
                        </div>

                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Telefono: </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$predenuncia->denunciante->telefono}}
                            </span>
                        </div>

                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Forma de Notificación: </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
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
                            </span>
                        </div>

                        <br><br>
                        <span>
                            <h3>Datos de los hechos</h3>
                        </span>


                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Fecha: </strong>&nbsp;&nbsp;&nbsp;
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$predenuncia->lugarHechos->fecha}}
                            </span>
                        </div>


                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Domicilio(Municipio): </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$predenuncia->lugarHechos->municipio->nombre}}
                            </span>
                        </div>

                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Domicilio(Calle): </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                <td>{{$predenuncia->lugarHechos->calle}}</td>
                            </span>
                        </div>

                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Domicilio(Numero): </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                <td>{{$predenuncia->lugarHechos->numero}}</td>
                            </span>
                        </div>

                        <div class="kt-widget13__item">
                            <span class="kt-widget13__desc">
                                <strong>Domicilio(Colonia): </strong>
                            </span>
                            <span class="kt-widget13__text kt-widget13__text--bold">
                                {{$predenuncia->lugarHechos->colonia}}
                            </span>
                        </div>



                    </div>
                </div>


                <div class="kt-invoice__container">
                    <p>{{$predenuncia->descripcion}}</p>
                </div>

                <div class="kt-invoice__container">

                    <span>
                        <h3>Evidencia</h3>
                    </span>
                    @php
                    $contPDF=0;
                    $contIMG=0;
                    $contMP4=0;

                    @endphp
                    @foreach ($evidencias as $evidencia)
                    @php
                    $ext = strtolower(pathinfo(storage_path('app/'.$evidencia->imagen), PATHINFO_EXTENSION));
                    @endphp
                    @if ($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="gif")

                    @php
                    $contIMG=$contIMG+1;
                    @endphp

                    @elseif($ext=="pdf" )
                    @php
                    $contPDF=$contPDF+1;
                    @endphp

                    @elseif($ext=="mp4" )
                    @php
                    $contMP4=$contPDF+1;
                    @endphp


                    @endif

                    @endforeach

                    @php
                    $url="";
                    @endphp
                    <h5>La evidencia cuenta con
                        @php
                        echo $contIMG;
                        @endphp imagenes
                    </h5>
                    @foreach ($evidencias as $evidencia)
                    @php
                    $url = str_replace("public", "", $evidencia->imagen);
                    $ext = strtolower(pathinfo(storage_path('app/'.$evidencia->imagen), PATHINFO_EXTENSION));
                    @endphp
                    @if ($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="gif")

                    <img style="padding:  20px 20px;" src="{{ asset('storage'.$url)}}" width="200px" height="200px">

                    @endif
                    @endforeach

                    @php
                    $url="";
                    @endphp
                    <h5>La evidencia cuenta con
                        @php
                        echo $contPDF;
                        @endphp archivos pdf
                    </h5>
                    @foreach ($evidencias as $evidencia)
                    @php
                    $url = str_replace("public", "", $evidencia->imagen);
                    $ext = strtolower(pathinfo(storage_path('app/'.$evidencia->imagen), PATHINFO_EXTENSION));
                    $contador=0;
                    @endphp
                    @if ($ext=="pdf" )
                    @php
                    $contador=$contador+1;
                    @endphp


                    <a target="_blank" href="{{ asset('storage'.$url)}}" class="btn btn-light-success">
                        <i class="flaticon-doc"></i>
                        Ver archivo

                        @php
                        echo $contador;
                        @endphp
                    </a>








                    @endif
                    @endforeach


                    @php
                    $url="";
                    @endphp
                    <h5>La evidencia cuenta con
                        @php
                        echo $contMP4;
                        @endphp videos
                    </h5>
                    @foreach ($evidencias as $evidencia)
                    @php
                    $url = str_replace("public", "", $evidencia->imagen);
                    $ext = strtolower(pathinfo(storage_path('app/'.$evidencia->imagen), PATHINFO_EXTENSION));
                    $contador=0;
                    @endphp
                    @if ($ext=="mp4" )
                   


                    <video width="320" height="240"  controls>
                        <source src="{{ asset('storage'.$url)}}" type="video/mp4" controls>
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>







                    @endif
                    @endforeach

                </div>

             

            
                <div class="kt-invoice__actions">
                    <div class="kt-invoice__container">
                        <button type="button" class="btn btn-label-brand btn-bold"
                            onclick="window.print();">Descargar</button>
                        <button type="button" class="btn btn-brand btn-bold" onclick="window.print();">
                            Imprimir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- end:: Content -->
@push('styles')

<!--begin::Page Custom Styles(used by this page) -->
<link href="/assets/css/demo1/pages/invoices/invoice-2.css" rel="stylesheet" type="text/css" />



@endpush
@push('scripts')
<!--begin::Page Custom Styles(used by this page) -->
<script src="/assets/js/demo1/pages/dashboard.js" type="text/javascript"></script>

<script>
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endpush
@stop