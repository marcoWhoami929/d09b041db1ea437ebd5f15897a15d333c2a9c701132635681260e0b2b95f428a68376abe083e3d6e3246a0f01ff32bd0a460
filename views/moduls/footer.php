<section class="parallax" style="background-image: url(views/img/pagina/footer/principal.png);">
    <div class="contact_us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <div class="contact_text">
                        <h3 class="wow bounceInLeft" data-wow-duration="1s">Necesitas ayuda?</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="contact_btn wow bounceInRight" data-wow-duration="1s">
                        <a class="boxed-btn3" href="contacto">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<a href="https://api.whatsapp.com/send?phone=522215839171&text=Buen%20dia%20me%20gustaria%20mas%20obtener%20informacion%20" class="float animated infinite shake slower" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<footer class="footer">

    <div class="footer_top">
        <div class="container">
            <div class="row">


                <div class="col-xl-3 col-md-3 col-lg-3">
                    <div class="">

                        <img src="views/img/logo-principal.png" alt="logo" style="width:100%">
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="footer_widget">

                        <p><i class="fa fa-home fa-2x"></i> Quetzalcoatl #44 Lomas de San Miguel,
                            Cp. 72573 Puebla, pue<br>
                            <a href="tel:+522225701856" class="estilosEnlaces header-text"><i class="fa fa-phone fa-2x"></i> 01 (222) 570-18-56</a>
                            <br>
                            <a href="tel:+522225703637" class="estilosEnlaces header-text"><i class="fa fa-phone fa-2x"></i> 01 (222) 570-36-37</a>
                            <br>
                            <a href="tel:+522222163719" class="estilosEnlaces header-text"><i class="fa fa-phone fa-2x"></i> 01 (222) 216-37-19</a>
                            <br>
                            <a href="https://api.whatsapp.com/send?phone=522215839171&text=Buen%20dia%20me%20gustaria%20mas%20obtener%20informacion%20" target="_blank" class="estilosEnlaces header-text"><i class="fa fa-whatsapp fa-2x"></i> 221-583-91-71</a>
                            <br>
                            <a href="mailto:ventas@bandasjuga.com"><i class="fa fa-envelope fa-1x"></i> ventas@bandasjuga.com</a>
                        </p>

                    </div>
                </div>

                <div class="col-xl-3 col-md-3 col-lg-3">
                    <div class="footer_logo">
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/bandasjuga/">
                                        <i class="ti-facebook fa-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://api.whatsapp.com/send?phone=522215839171&text=Buen%20dia%20me%20gustaria%20mas%20obtener%20informacion%20" target="_blank">
                                        <i class="fa fa-whatsapp fa-2x"></i>
                                    </a>

                                </li>
                                <li>
                                    <a href="https://www.instagram.com/bandasjuga/">
                                        <i class="fa fa-instagram fa-2x"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> Todos los derechos Reservados <a href="http://bandasjuga.com" target="_blank">Bandas Juga</a> | <a href="https://neuralcreative.com.mx/" class="agency" target="_blank">BY NEURAL CREATIVE</a>

                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="serch_form">
                <input type="text" placeholder="Buscar" id="search">
                <button type="button">Buscar</button>
            </div>
            <div id="buscadorData">

            </div>
        </div>
    </div>
</div>
<!-- Messenger plugin de chat Code -->
<div id="fb-root"></div>

<!-- Your plugin de chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "751285661898669");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v11.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-calendar-o"></span>'
        }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-calendar-o"></span>'
        }

    });
</script>