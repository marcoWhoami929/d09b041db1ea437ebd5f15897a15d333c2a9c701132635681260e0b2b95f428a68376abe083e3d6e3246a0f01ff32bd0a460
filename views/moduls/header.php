<header>
    <div class="header-area ">
        <div class="header-top_area d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-md-5 ">
                        <div class="header_left">
                            <p>Horario de atención: (08:30 - 18:00)</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-md-7">


                        <div class="header_right d-flex justify-content-end">
                            <a href="https://api.whatsapp.com/send?phone=522215839171&text=Buen%20dia%20me%20gustaria%20mas%20obtener%20informacion%20" class="boxed-btn4" target="_blank"><i style="color: white;" class="fa fa-whatsapp fa-1x"></i> 221-583-91-71</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_GET["ruta"])) {
            if ($_GET["ruta"] === "inicio") {
                $estilo = "style='background:rgba(255,255,255,1)'";
            } else {
                $estilo = "style='background:rgba(255,255,255,1)'";
            }
        } else {
            $estilo = "style='background:rgba(255,255,255,1)'";
        }

        ?>
        <div class="address_bar d-none d-lg-block" <?php echo $estilo ?>>
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo">
                            <a href="inicio">
                                <img src="views/img/logo-principal2.png" alt="" width="100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="address_menu d-flex justify-content-end">
                            <div class="single_address  d-flex">
                                <div class="icon">
                                    <img src="views/img/icon/header-address.png" alt="">
                                </div>
                                <div class="address_info">
                                    <h3><strong>Ubicanos en</strong></h3>
                                    <p id="header-text">Quetzalcoatl #44 Lomas de San Miguel, Cp. 72573 Puebla, pue</p>
                                </div>
                            </div>
                            <div class="single_address d-flex">
                                <div class="icon">
                                    <img src="views/img/icon/headset.png" alt="">
                                </div>
                                <div class="address_info">
                                    <h3><strong>Llámanos</strong></h3>
                                    <a href="tel:+522225701856" class="estilosEnlaces " id="header-text">01 (222) 570-18-56</a>
                                    <br>
                                    <a href="tel:+522225703637" class="estilosEnlaces " id="header-text">01 (222) 570-36-37</a>
                                    <br>
                                    <a href="tel:+522222163719" class="estilosEnlaces " id="header-text">01 (222)
                                        216-37-19</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area wow fadeInDown" data-wow-duration="1s">
            <div class="container">
                <div class="white_bg_bar">
                    <div class="row align-items-center">
                        <div class="col-12 d-lg-none">
                            <div class="logo ">
                                <a href="#">
                                    <img src="views/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="inicio">Inicio</a></li>
                                        <li><a href="nosotros">Quienes Somos</a></li>

                                        <li><a href="productos">productos <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="bandasTransportadoras">Bandas Transportadoras</a></li>
                                                <li><a href="bandasUsoPesado">Bandas Transportadoras de Uso Pesado</a></li>
                                                <li><a href="teleras">Teleras o tendidos</a></li>
                                                <li><a href="bandasTransmision">Bandas de Transmisión</a></li>
                                                <li><a href="bandasDentadas">Bandas Dentadas</a></li>
                                                <li><a href="bandasModulares">Bandas Modulares</a></li>
                                                <li><a href="bandasTermoSoldables">Bandas Termosoldables</a></li>
                                                <li><a href="filtros">Filtros y mallas de Teflón</a></li>
                                                <li><a href="aditamentos">Aditamentos</a></li>
                                                <li><a href="grapas">Grapas</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="servicios">Servicios <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="reparacion">Reparación</a></li>
                                                <li><a href="armadoymontaje">Armado y Montaje</a></li>
                                                <li><a href="vulcanizado">Vulcanizado</a></li>
                                                <li><a href="recubrimientos">Recubrimiento de rodillos y poleas</a></li>
                                                <li><a href="uniones">Uniones Mecánicas</a></li>
                                                <li><a href="colocacionAditamentos">Colocación de Aditamentos</a></li>
                                                <li><a href="mantenimiento">Mantenimiento a Estructuras Metálicas</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="contacto">Contáctanos</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                            <div class="Appointment d-flex justify-content-end">
                                <div class="search_icon">
                                    <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                        <i class="ti-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>