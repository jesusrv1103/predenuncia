  <!-- begin:: Content -->
  <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-grid  kt-wizard-v1 kt-wizard-v1--white" id="kt_wizard_v1"
                    data-ktwizard-state="step-first">
                    <div class="kt-grid__item">

                        <!--begin: Form Wizard Nav -->
                        <div class="kt-wizard-v1__nav">
                            <div class="kt-wizard-v1__nav-items">
                                <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step"
                                    data-ktwizard-state="current">
                                    <div class="kt-wizard-v1__nav-body">
                                        <div class="kt-wizard-v1__nav-icon">
                                            <i class="flaticon-avatar"></i>
                                        </div>
                                        <div class="kt-wizard-v1__nav-label">
                                            1) Datos personales
                                        </div>
                                    </div>
                                </a>
                                <a class="kt-wizard-v1__nav-item" href="#"
                                    data-ktwizard-type="step">
                                    <div class="kt-wizard-v1__nav-body">
                                        <div class="kt-wizard-v1__nav-icon">
                                            <i class="flaticon-placeholder-1"></i>
                                        </div>
                                        <div class="kt-wizard-v1__nav-label">
                                            2) Lugar de los hechos
                                        </div>
                                    </div>
                                </a>
                                <a class="kt-wizard-v1__nav-item" href="#"
                                    data-ktwizard-type="step">
                                    <div class="kt-wizard-v1__nav-body">
                                        <div class="kt-wizard-v1__nav-icon">
                                            <i class="flaticon-folder-1"></i>
                                        </div>
                                        <div class="kt-wizard-v1__nav-label">
                                            3) Evidencia
                                        </div>
                                    </div>
                                </a>
                                <a class="kt-wizard-v1__nav-item" href="#"
                                    data-ktwizard-type="step">
                                    <div class="kt-wizard-v1__nav-body">
                                        <div class="kt-wizard-v1__nav-icon">
                                            <i class="flaticon-list-2"></i>
                                        </div>
                                        <div class="kt-wizard-v1__nav-label">
                                            4) Descripción de los hechos *
                                        </div>
                                    </div>
                                </a>
                                <a class="kt-wizard-v1__nav-item" href="#"
                                    onclick="revisar_enviar();" data-ktwizard-type="step">
                                    <div class="kt-wizard-v1__nav-body">
                                        <div class="kt-wizard-v1__nav-icon">
                                            <i class="flaticon-globe"></i>
                                        </div>
                                        <div class="kt-wizard-v1__nav-label">
                                            5) Revisar y enviar

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--end: Form Wizard Nav -->
                    </div>
                    <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v1__wrapper">

                        <!--begin: Form Wizard Form-->
                    <!-- class="kt-form" id="kt_form"-->
                        <form  method="POST" action="{{route('admin.predenuncias.store')}}">
                        {{ csrf_field() }}
                            <!--begin: Form Wizard Step 1-->
                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content"
                                data-ktwizard-state="current">
                                <div class="kt-heading kt-heading--md">Datos personales
                                </div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v1__form">
                                        <div class="form-group">
                                            <label>Nombre *</label>
                                            <input type="text" class="form-control" name="nombre"
                                                placeholder="JUAN PEREZ GARCIA" id="nombre_id">
                                            <span class="form-text text-muted">Por favor ingrese su
                                                nombre.</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Dirección</label>
                                            <input type="text" class="form-control" name="direccion"
                                                placeholder="Villanueva Zacatecas, Barrio del Guadalupe Calle Concepcion #32B"
                                                id="direccion_id">
                                            <span class="form-text text-muted">
                                                Por favor ingrese su dirección.</span>
                                        </div>


                                        <div class="form-group">
                                            <label>Correo electrónico</label>


                                            <input type="text" class="form-control" name="email"
                                                placeholder="juan@gamil.com" id="correo_id">
                                            <span class="form-text text-muted">Por favor
                                                ingrese su correo correo electrónico.</span>

                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text"><i
                                                            class="la la-chain"></i></span>
                                                </div>
                                                <input type="text" class="form-control"
                                                    placeholder="Numero de teléfono"
                                                    id="numeroTelefono_id" name="telefono">

                                            </div>
                                            <span class="form-text text-muted">Por favor ingrese
                                                su numero de teléfono.</span>
                                        </div>


                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Forma de notificación *</label>
                                                    <div class="kt-checkbox-inline">
                                                        <label class="kt-checkbox">
                                                            <input type="checkbox"
                                                                id="not_correo_id"> Correo
                                                            Electrónico
                                                            <span></span>
                                                        </label>
                                                        <label class="kt-checkbox">
                                                            <input type="checkbox"
                                                                id="not_telefono_id"> Teléfono
                                                            <span></span>
                                                        </label>

                                                    </div>
                                                    <span class="form-text text-muted">Por favor
                                                        selecciona la forma en que deseas recibir
                                                        notificaciones</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 1-->

                            <!--begin: Form Wizard Step 2-->
                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                <div class="kt-heading kt-heading--md">Lugar de los hechos*</div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v1__form">
                                        <div class="form-group">
                                            <label>Calle</label>
                                            <input type="text" class="form-control" name="calle"
                                                placeholder="Abasolo" value="Abasolo" id="calle_id">
                                            <span class="form-text text-muted">Por favor ingresa el
                                                nombre de la calle.</span>
                                        </div>




                                        <div class="form-group">
                                            <label>Numero</label>
                                            <input class="form-control" type="number" value="42"
                                                id="numero_id" name="numero">
                                            <span class="form-text text-muted" id>Por favor ingresa
                                                el
                                                numero.</span>
                                        </div>

                                        <div class="form-group">
                                            <label>Municipio</label>
                                            <select class="form-control kt-select2"
                                                id="kt_select2_1" name="param" style="width: 100%" name="municipio_id">
                                                @foreach ($municipios ?? '' as $municipio)
                                                <option value="{{$municipio->id}}">
                                                    {{$municipio->nombre}}</option>
                                                @endforeach

                                            </select>
                                            <span class="form-text text-muted">Por favor selecciona
                                                el
                                                municipio.</span>
                                        </div>




                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 2-->

                            <!--begin: Form Wizard Step 3-->
                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                <div class="kt-heading kt-heading--md">Evidencia</div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v1__form">
                                        <div class="form-group">
                                            <label>Agregar evidencia(imagenes, pdf, audios,etc).</label>
                                            <div class="kt-dropzone dropzone m-dropzone--primary"
                                                action="inc/api/dropzone/upload.php"
                                                id="m-dropzone-two">
                                                <div class="kt-dropzone__msg dz-message needsclick">
                                                    <h3 class="kt-dropzone__msg-title">Suelte los
                                                        archivos aquí o haga clic para cargar.</h3>

                                                </div>
                                            </div>
                                            </select>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 3-->

                            <!--begin: Form Wizard Step 4-->
                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                <div class="kt-heading kt-heading--md">Descripción de los hechos
                                </div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v1__form">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <textarea class="form-control" rows="10" id="descripcion_id" name="descripcion"></textarea>
                                            <span class="form-text text-muted">Por favor ingresa una
                                                descripción clara y concisa.</span>
                                        </div>



                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 4-->

                            <!--begin: Form Wizard Step 5-->
                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                <div class="kt-heading kt-heading--md">Revisar y enviar</div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v1__review">
                                        <div class="kt-wizard-v1__review-item">
                                            <div class="kt-wizard-v1__review-title">
                                                Datos Personales
                                            </div>
                                            <div class="kt-wizard-v1__review-content"
                                                id="datosPersonales">

                                            </div>
                                        </div>
                                        <div class="kt-wizard-v1__review-item">
                                            <div class="kt-wizard-v1__review-title">
                                                Lugar de los hechos
                                            </div>
                                            <div class="kt-wizard-v1__review-content"
                                                id="lugarHechos_id">

                                            </div>
                                        </div>
                                        <div class="kt-wizard-v1__review-item">
                                            <div class="kt-wizard-v1__review-title">
                                                Descripcion de los echos
                                            </div>
                                            <div class="kt-wizard-v1__review-content" id="div_descripcion_id">
                                               
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 5-->

                            <!--begin: Form Actions -->
                            <div class="kt-form__actions">
                                <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                    data-ktwizard-type="action-prev">
                                    PASO ANTERIOR
                                </div>
                                <div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                    data-ktwizard-type="action-submit">
                                  
                                 

                                   ENVIAR
                                </div>
                                <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                    data-ktwizard-type="action-next" onclick="revisar_enviar();">
                                    PROXIMO PASO
                                </div>
                            </div>
                            <button type="submit">enviar</button>
                            <!--end: Form Actions -->
                       

                        <!--end: Form Wizard Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Content -->