<section class="parallax4" style="background-image: url(views/img/pagina/servicios/mantenimiento/6-1.png);">

</section>
<div class="about_area" style="margin-top:-150px">
    <div class="container">
        <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    <div id="map" style="height: 480px; position: relative; overflow: hidden;"> </div>
                    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCY00jo0XblPbH08gyisyqz8N_QhL1yTfw"></script>
                    <script type="text/javascript">
                        var mapa;

                        function initialize() {

                            var ubicacion = new google.maps.LatLng(18.99673363472192, -98.1721201789904);

                            var opcionesDeMapa = {
                                zoom: 16,
                                center: ubicacion,
                                mapTypeId: google.maps.MapTypeId.ROADMAP //SATELITE, HYBRID, ROADMAP, TERRAIN
                            };
                            // instancia un nuevo objeto Map
                            mapa = new google.maps.Map(document.getElementById("map"), opcionesDeMapa);
                            // instancia un nuevo marcador ( la bandera )
                            var bandera = "views/img/logo-mapa.png";
                            var marcador = new google.maps.Marker({
                                position: ubicacion,
                                map: mapa,
                                title: "Barcelona",
                                icon: bandera
                            });
                        } // acaba la función initialize
                        // inicializa el mapa cuando la ventana se haya cargado:
                        google.maps.event.addDomListener(window, "load", initialize);
                    </script>


                </div>


                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Escríbenos</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensaje'" placeholder="Mensaje"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Asunto'" placeholder="Asunto">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm  boxed-btn3">Enviar</button>
                            </div>

                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Quetzalcoatl #44 Lomas de San Miguel</h3>
                                <p>Cp. 72573 Puebla, pue</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3> <a href="tel:+522225701856" class="estilosEnlaces header-text">01 (222) 570-18-56</a></h3>
                                <h3><a href="tel:+522225703637" class="estilosEnlaces header-text">01 (222) 570-36-37</a></h3>
                                <h3><a href="tel:+522222163719" class="estilosEnlaces header-text">01 (222)
                                        216-37-19</a></h3>
                                <p>Horario de atención: <br>(08:30 - 18:00)</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="fa fa-whatsapp"></i></span>
                            <div class="media-body">
                                <h3> <a href="tel:+522225701856" class="estilosEnlaces header-text">221-583-91-71</a></h3>

                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3><a href="mailto:ventas@bandasjuga.com">ventas@bandasjuga.com</a></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>