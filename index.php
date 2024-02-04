<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Rifas viajeras</title>


  <!-- Favicons -->
  <link href="assets/img/avion.png" rel="icon" />
  <link href="assets/img/avion.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <script src="../rifasviajeras/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../rifasviajeras/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../rifasviajeras/assets/vendor/glightbox/js/glightbox.js"></script>
  <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
  <script src="../rifasviajeras/assets/js/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="./assets/css/style.css" rel="stylesheet" />
</head>

<body>

  <main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="about">
      <div class="container" class="img-fluid" alt="">
        <div class="section-title">
          <h3>Tour Cancún para 2 personas todo incluido + 2M</h3>
          <p>
            "La suerte es loca y algun dia te toca."
          </p>
        </div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mi-modal">
          Agregar
        </button>
        <div class="modal fade" id="mi-modal" data-bs-backdrop="static">
          <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">

              <div class="modal-header">
                <h5 class="modal-title"> este es el titulo xd</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Odit nemo repudiandae ullam pariatur ratione aut architecto.
                  Earum excepturi id quidem dolorem quas, veniam omnis necessitatibus neque sequi distinctio,
                  iste temporibus.</p>
              </div>
              <div class="modal-footer">
                <button class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-success">Guardar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/img2.jpg" class="img-fluid" alt="" />
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex justify-content-center align-items-center">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center">

                  <button type="button" class="btn btn-success btn mb-3" data-bs-toggle="modal" data-bs-target="#Comprar">Comprar</button>

                  <!-- Modal -->
                  <div class="modal fade" id="Comprar" tabindex="-1" role="dialog" aria-labelledby="BtnComprar" aria-hidden="true" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="infoModalLabel">Comprar Boleta</h5>
                          <button class="btn-close" class="close" data-bs-dismiss="modal" arial-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <!-- Contenido del modal -->
                          <h5>Precio $4.000</h5>
                          <div class="w-100 d-flex justify-content-center">
                            <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          </div>
                          <div class="w-100 d-flex justify-content-center">
                          <div class="row">
                          <div class="col-lg-12 text-center">
                            <button type="button" class="btn btn-primary btn mb-3">2</button>
                            <button type="button" class="btn btn-secondary btn mb-3">5</button>
                            <button type="button" class="btn btn-success btn mb-3">10</button>
                            <button type="button" class="btn btn-danger btn mb-3">20</button>
                          </div>
                          </div>
                          </div>
                          Entradas Seleccionadas:
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success">Aceptar</button>
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <button type="button" class="btn btn-secondary btn mb-3" data-bs-toggle="modal" data-bs-target="#infoModal">Información</button>

                  <!-- Modal -->
                  <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="infoModalLabel">Información de la compra</h5>
                          <button class="btn-close" class="close" data-bs-dismiss="modal" arial-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <!-- Contenido del modal -->
                          <h5>Juega con la loteria..</h5>
                          <div class="w-100 d-flex justify-content-center">
                            <img src="assets/img/loteria-medellin.png" alt="infoModal" class="img-fluid">
                          </div>
                          <h5>Termina el día: 01/feb/2024</h5>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success">Aceptar</button>
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>
                  </div>


                  <button type="button" class="btn btn-warning btn mb-3" data-bs-toggle="modal" data-bs-target="#consultar">Consultar</button>

                  <div class="modal fade" id="consultar" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="infoModalLabel">Consulta tus números</h5>
                          <button class="btn-close" class="close" data-bs-dismiss="modal" arial-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <!-- Contenido del modal -->
                          <h5>Correo electrónico</h5>
                          <div class="w-100 d-flex justify-content-center">
                            <input type="email" class="form-control" placeholder="" aria-describedby="basic-addon1" required="true">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success">Buscar</button>
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Contacto</h2>
          <p>
            Magnam dolores commodi suscipit. Necessitatibus eius consequatur
            ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
            quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
            Quia fugiat sit in iste officiis commodi quidem hic quas.
          </p>
        </div>
      </div>
      <!-- Template Main JS File -->
      <script src="../rifasviajeras/assets/js/main.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>