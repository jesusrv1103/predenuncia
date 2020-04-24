<!DOCTYPE html>
<html>
<title>PREDENUNCIA</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="Starter%20Template%20for%20Bootstrap_files/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="Starter%20Template%20for%20Bootstrap_files/starter-template.css" rel="stylesheet">

<style>
    body,
    h1 {
        font-family: "Montserrat", sans-serif
    }

    img {
        margin-bottom: -7px
    }

    .w3-row-padding img {
        margin-bottom: 12px
    }
</style>

<body>

    <body>
        <div class="w3-container w3-teal" style="background-color:#999999 !important;">
            <h1>FISCALIA GENERAL DE JUSTICIA DEL ESTADO DE ZACATECAS</h1>
        </div>
<<<<<<< HEAD
        <div class="kt-header-mobile__toolbar" style="background-color:#212750 !important;">
            <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more-1"></i></button>
        </div>
    </div>

    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                <!-- begin:: Header -->
                <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on"
                    style="background-color:#212750 !important;">
                    <div class="kt-header__top">
                        <div class="kt-container ">

                            <!-- begin:: Brand -->
                            <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                                <div class="kt-header__brand-logo">
                                    <a href="demo2/index.html">
                                        <img alt="Logo" src="/assets/logos_fiscalia/gris_blanco140.png"
                                            class="kt-header__brand-logo-default" />
                                        <img alt="Logo" src="/assets/logos_fiscalia/gris_blanco140.png"
                                            class="kt-header__brand-logo-sticky" />
                                    </a>
                                </div>
                                <div class="kt-header__brand-nav">
                                    <h1 style="color:white;">
                                        FISCALIA GENERAL DE JUSTICIA DEL ESTADO DE ZACATECAS
                                    </h1>

                                </div>
                            </div>

                            <!-- end:: Brand -->

                            <!-- begin:: Header Topbar -->


                            <!-- end:: Header Topbar -->
                        </div>
                    </div>

                    <div class="kt-header__bottom" style="background-color:#9D9D9C !important;">
                        <div class="kt-container " style="background-color:#9D9D9C !important;">




                            <center>

                                <h1 style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    PREDENUNCIA</h1>
                            </center>




                            <!-- end: Header Menu -->
                        </div>
                    </div>

                </div>

                <!-- end:: Header -->
                <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch"
                    id="kt_body">
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                        <!-- begin:: Content Head -->
                        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                            <div class="kt-container ">

                                <div class="kt-subheader__toolbar">
                                    <div class="kt-subheader__wrapper">



                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end:: Content Head -->

                        <!-- begin:: Content -->

                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                            <div class="row">
                                <div class="col-md-3">

                                </div>
                                <div class="kt-portlet col-md-6">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                Realizar una predenuncia
                                            </h3>
                                        </div>
                                    </div>

                                    <!--begin::Form-->
                                    <form class="kt-form kt-form--label-right" method="POST"
                                        action="{{route('admin.predenuncias.store')}}">
                                        {{ csrf_field() }}
                                        <div class="kt-portlet__body">
                                            <div class="form-group form-group-last">
                                                <div class="alert alert-secondary" role="alert">
                                                    <div class="alert-icon"><i
                                                            class="flaticon-avatar kt-font-brand"></i></div>
                                                    <div class="alert-text">
                                                        <h2>Datos personales</h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" class="form-control" value="{{($ultimoIdPredenuncia ->id)+1}}" name="predenuncia_id"/>
                                            


                                            <div class="form-group row">
                                                <label for="example-text-input"
                                                    class="col-2 col-form-label">Nombre:</label>
                                                <div class="col-10">

                                                    <input type="text" class="form-control" name="nombre"
                                                        placeholder="JUAN PEREZ GARCIA" id="nombre_id">
                                                    <span class="form-text text-muted">Por favor ingrese su
                                                        nombre.</span>
                                                </div>
                                            </div>



                                            <div class="form-group row">
                                                <label for="example-text-input"
                                                    class="col-2 col-form-label">Dirección:</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" name="direccion"
                                                        placeholder="Villanueva Zacatecas, Barrio del Guadalupe Calle Concepcion #32B"
                                                        id="direccion_id">
                                                    <span class="form-text text-muted">
                                                        Por favor ingrese su dirección.</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-2 col-form-label">Correo
                                                    electrónico:</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" name="email"
                                                        placeholder="juan@gamil.com" id="correo_id">
                                                    <span class="form-text text-muted">Por favor
                                                        ingrese su correo correo electrónico.</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-text-input"
                                                    class="col-2 col-form-label">Telefono:</label>
                                                <div class="col-10">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span
                                                                class="input-group-text"><i
                                                                    class="la la-chain"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Numero de teléfono" id="numeroTelefono_id"
                                                            name="telefono">

                                                    </div>
                                                    <span class="form-text text-muted">Por favor ingrese
                                                        su numero de teléfono.</span>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label for="example-text-input"
                                                    class="col-2 col-form-label">Telefono:</label>
                                                <div class="col-10">
                                                    <div class="kt-checkbox-inline">
                                                        <label class="kt-checkbox">
                                                            <input type="checkbox" id="not_correo_id"> Correo
                                                            Electrónico
                                                            <span></span>
                                                        </label>
                                                        <label class="kt-checkbox">
                                                            <input type="checkbox" id="not_telefono_id"> Teléfono
                                                            <span></span>
                                                        </label>

                                                    </div>
                                                    <span class="form-text text-muted">Por favor
                                                        selecciona la forma en que deseas recibir
                                                        notificaciones</span>
                                                </div>
                                            </div>


=======
>>>>>>> 5beacfee1b669458231fe734f27e0e8cf7a38bc5

        <center>
            <img src="/assets/logos_fiscalia/original180x90.png" width="25%" height="25%" class="img-fluid" alt="Responsive image">
        </center>
        <hr>
        <hr>






        <!-- !PAGE CONTENT! -->
        <div class="w3-content" style="max-width:1500px">

            <!-- Header -->
            <div class="w3-opacity">

                <div class="w3-clear"></div>
                <header class="w3-center w3-margin-bottom">
                    <h3>
                        <h3>
                            Predenuncia en Linea de Delitos
                        </h3>

                    <p class="w3-padding-16"> <a href="{{route('admin.predenuncia.index')}}"
                                class="w3-button w3-black">PREDENUNCIA</a></p>

                </header>
            </div>


            <!-- End Page Content -->
        </div>
        <hr>
        <hr>

        <script>
            // Toggle grid padding
        function myFunction() {
          var x = document.getElementById("myGrid");
          if (x.className === "w3-row") {
            x.className = "w3-row-padding";
          } else {
            x.className = x.className.replace("w3-row-padding", "w3-row");
          }
        }
        
        // Open and close sidebar
        function w3_open() {
          document.getElementById("mySidebar").style.width = "100%";
          document.getElementById("mySidebar").style.display = "block";
        }
        
        function w3_close() {
          document.getElementById("mySidebar").style.display = "none";
        }
        </script>

        <script src="Starter%20Template%20for%20Bootstrap_files/jquery-1.js"></script>
        <script src="Starter%20Template%20for%20Bootstrap_files/bootstrap.js"></script>



    </body>

</html>