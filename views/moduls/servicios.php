<section class="parallax2" style="background-image: url(views/img/pagina/servicios/mantenimiento/6-1.png);">

</section>
<div class="about_area  add_padding_footer">
  <div class="container">
    <div class="row">

      <div class="col-md-6 col-lg-4 add_padding_services">
        <div class="single_service">
          <div class="thumb">
            <img src="views/img/pagina/servicios/reparacion/1.png" alt="" width="100%">
          </div>
          <div class="service_info">
            <a href="imagenes?clasificacion=reparacion">
              <h3>Reparación</h3>
            </a>

            <a class="d-flex align-items-center boxed-btn3" href="imagenes?clasificacion=reparacion">Ver mas imágenes<i class="ti-angle-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 add_padding_services">
        <div class="single_service">
          <div class="thumb">
            <img src="views/img/pagina/servicios/montaje/1-2.png" alt="" width="100%">
          </div>
          <div class="service_info">
            <a href="imagenes?clasificacion=montaje">
              <h3>Armado y Montaje</h3>
            </a>
            <p></p>
            <a class="d-flex align-items-center boxed-btn3" href="imagenes?clasificacion=montaje">Ver mas imágenes<i class="ti-angle-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 add_padding_services">
        <div class="single_service">
          <div class="thumb">
            <img src="views/img/pagina/servicios/vulcanizado/1.png" alt="" width="100%">
          </div>
          <div class="service_info">
            <a href="imagenes?clasificacion=vulcanizado">
              <h3>Vulcanizado</h3>
            </a>
            <p></p>

            <a class="d-flex align-items-center boxed-btn3" href="imagenes?clasificacion=vulcanizado">Ver mas imágenes<i class="ti-angle-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 add_padding_services">
        <div class="single_service">
          <div class="thumb">
            <img src="views/img/pagina/servicios/recubrimiento/1.png" alt="" width="100%">
          </div>
          <div class="service_info">
            <a href="imagenes?clasificacion=recubrimiento">
              <h3>Recubrimiento de rodillos y poleas </h3>
            </a>
            <p></p>
            <a class="d-flex align-items-center boxed-btn3" href="imagenes?clasificacion=recubrimiento">Ver mas imágenes<i class="ti-angle-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 add_padding_services">
        <div class="single_service">
          <div class="thumb">
            <img src="views/img/pagina/servicios/uniones/principal.png" alt="" width="100%">
          </div>
          <div class="service_info">
            <a href="imagenes?clasificacion=uniones">
              <h3>Uniones Mecánicas</h3>
              <br>
            </a>
            <p></p>
            <a class="d-flex align-items-center boxed-btn3" href="imagenes?clasificacion=uniones">Ver mas imágenes<i class="ti-angle-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 add_padding_services">
        <div class="single_service">
          <div class="thumb">
            <img src="views/img/pagina/servicios/aditamentos/1.png" alt="" width="100%">
          </div>
          <div class="service_info">
            <a href="imagenes?clasificacion=aditamentos">
              <h3>Colocación de aditamentos especiales </h3>
            </a>
            <p></p>
            <a class="d-flex align-items-center boxed-btn3" href="imagenes?clasificacion=aditamentos">Ver mas imágenes<i class="ti-angle-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 add_padding_services">
        <div class="single_service">
          <div class="thumb">
            <img src="views/img/pagina/servicios/mantenimiento/1.png" alt="" width="100%">
          </div>
          <div class="imagenes?clasificacion=mantenimiento">
            <a href="mantenimiento">
              <h3>Mantenimiento A Estructuras Metálicas </h3>
            </a>
            <p></p>
            <a class="d-flex align-items-center boxed-btn3" href="imagenes?clasificacion=mantenimiento">Ver mas imágenes<i class="ti-angle-right"></i>
            </a>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

<script type="text/javascript">
  //selecting all required elements
  const filterItem = document.querySelector(".items");
  const filterImg = document.querySelectorAll(".gallery .image");

  window.onload = () => { //after window loaded
    filterItem.onclick = (selectedItem) => { //if user click on filterItem div
      if (selectedItem.target.classList.contains("item")) { //if user selected item has .item class
        filterItem.querySelector(".active").classList.remove("active"); //remove the active class which is in first item
        selectedItem.target.classList.add("active"); //add that active class on user selected item
        let filterName = selectedItem.target.getAttribute("data-name"); //getting data-name value of user selected item and store in a filtername variable
        filterImg.forEach((image) => {
          let filterImges = image.getAttribute("data-name"); //getting image data-name value
          //if user selected item data-name value is equal to images data-name value
          //or user selected item data-name value is equal to "all"
          if ((filterImges == filterName) || (filterName == "all")) {
            image.classList.remove("hide"); //first remove the hide class from the image
            image.classList.add("show"); //add show class in image
          } else {
            image.classList.add("hide"); //add hide class in image
            image.classList.remove("show"); //remove show class from the image
          }
        });
      }
    }
    for (let i = 0; i < filterImg.length; i++) {
      filterImg[i].setAttribute("onclick", "preview(this)"); //adding onclick attribute in all available images
    }
  }

  //fullscreen image preview function
  //selecting all required elements
  const previewBox = document.querySelector(".preview-box"),
    categoryName = previewBox.querySelector(".title p"),
    previewImg = previewBox.querySelector("img"),
    closeIcon = previewBox.querySelector(".icon"),
    shadow = document.querySelector(".shadow");

  function preview(element) {
    //once user click on any image then remove the scroll bar of the body, so user cant scroll up or down
    document.querySelector("body").style.overflow = "hidden";
    let selectedPrevImg = element.querySelector("img").src; //getting user clicked image source link and stored in a variable
    let selectedImgCategory = element.getAttribute("data-name"); //getting user clicked image data-name value
    previewImg.src = selectedPrevImg; //passing the user clicked image source in preview image source
    categoryName.textContent = selectedImgCategory; //passing user clicked data-name value in category name
    previewBox.classList.add("show"); //show the preview image box
    shadow.classList.add("show"); //show the light grey background
    closeIcon.onclick = () => { //if user click on close icon of preview box
      previewBox.classList.remove("show"); //hide the preview box
      shadow.classList.remove("show"); //hide the light grey background
      document.querySelector("body").style.overflow = "auto"; //show the scroll bar on body
    }
  }
</script>