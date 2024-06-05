<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EXPLORAR VALLARTA</title>
    <link rel="short icon" href="images/logo_mini.jpg" type="image/x-icon">
    <!-- Bootstrap 5 cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <!-- Icon cdn -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- archivo css -->
    <link rel="stylesheet" href="css/style.css" />    
  </head>

  <body>
    <!--======== NAVBAR ========-->
    <?php include 'components/navbar.php'; ?>

    <!--======== HEADER SECTION ========-->
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/imgHeader1.jpeg" class="d-block w-100 h-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Playa, sol y arena</h5>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus, mollitia.</p>

            <div class="slider-btn">
              <div class="btn btn-1">¡RESERVA AHORA!</div>              
            </div>
          </div>          
        </div>
        <div class="carousel-item">
          <img src="images/imgHeader2.jpg" class="d-block w-100 h-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Playa, sol y arena</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, officia.</p>

            <div class="slider-btn">
              <div class="btn btn-1">¡RESERVA AHORA!</div> 
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/imgHeader3.jpg" class="d-block w-100 h-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Playa, sol y arena</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quis?</p>

            <div class="slider-btn">
              <div class="btn btn-1">¡RESERVA AHORA!</div> 
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!--======== LISTA DE TOURS ========-->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center">
          <h6 class="section-title bg-white text-center text-primary px-3">Tours</h6>
          <h1 class="mb-5">Nuestros tours</h1>
        </div>

        <div class="row g-4 justify-content-center">
          <!--**********-->
          <div class="col-lg-4 col-md-6">
            <div class="tour-item">
              <div class="position-relative overflow-hidden">
                <img src="images/list-tour5.jpg" alt="" class="img-fluid">
                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"><i class="fa fa-dollar-sign text-white me-2"></i>1,400.00</div>
              </div>              

              <div class="p-4 pb-0">                
                <a href="info_tour.php" class="d-block h5 mb-2">Avistamiento de Ballenas</a>
                <p><i class="fa fa-location-dot text-primary me-2"></i>Puerto Vallarta</p>
                <hr>
                <div class="d-flex justify-content-center">
                  <div class="icon-container me-2">
                    <i class="fa-solid fa-burger text-primary"></i>
                    <i class="fa fa-water text-primary"></i>
                    <i class="fa fa-person-swimming text-primary"></i>
                  </div>
                  <div class="btn-container">
                    <a href="info_tour.php" class="btn btn-sm btn-primary mb-3">EXPLORAR</a>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!--**********-->
          <div class="col-lg-4 col-md-6">
            <div class="tour-item">
              <div class="position-relative overflow-hidden">
                <img src="images/list-tour6.jpg" alt="" class="img-fluid">
                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"><i class="fa fa-dollar-sign text-white me-2"></i>1,400.00</div>
              </div>              

              <div class="p-4 pb-0">                
                <a href="info_tour.php" class="d-block h5 mb-2">Avistamiento de Ballenas</a>
                <p><i class="fa fa-location-dot text-primary me-2"></i>Puerto Vallarta</p>
                <hr>
                <div class="d-flex justify-content-center">
                  <a href="info_tour.php" class="btn btn-sm btn-primary mb-3 w-100">MÁS INFORMACIÓN</a>
                </div>
              </div>

            </div>
          </div>
          <!--**********-->
          <div class="col-lg-4 col-md-6">
            <div class="tour-item">
              <div class="position-relative overflow-hidden">
                <img src="images/list-tour4.jpg" alt="" class="img-fluid">
                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"><i class="fa fa-dollar-sign text-white me-2"></i>1,400.00</div>
              </div>              

              <div class="p-4 pb-0">                
                <a href="info_tour.php" class="d-block h5 mb-2">Avistamiento de Ballenas</a>
                <p><i class="fa fa-location-dot text-primary me-2"></i>Puerto Vallarta</p>
                <hr>
                <div class="d-flex justify-content-center">
                  <div class="icon-container me-2">
                    <i class="fa-solid fa-burger text-primary"></i>
                    <i class="fa fa-water text-primary"></i>
                    <i class="fa fa-person-swimming text-primary"></i>
                  </div>
                  <div class="btn-container">
                    <a href="info_tour.php" class="btn btn-sm btn-primary mb-3">EXPLORAR</a>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!--**********-->
          <div class="col-lg-4 col-md-6">
            <div class="tour-item">
              <div class="position-relative overflow-hidden">
                <img src="images/list-tour3.jpg" alt="" class="img-fluid">
                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"><i class="fa fa-dollar-sign text-white me-2"></i>1,400.00</div>
              </div>              

              <div class="p-4 pb-0">                
                <a href="info_tour.php" class="d-block h5 mb-2">Avistamiento de Ballenas</a>
                <p><i class="fa fa-location-dot text-primary me-2"></i>Puerto Vallarta</p>
                <hr>
                <div class="d-flex justify-content-center">
                  <a href="info_tour.php" class="btn btn-sm btn-primary mb-3 w-100">MÁS INFORMACIÓN</a>
                </div>
              </div>

            </div>
          </div>
          <!--**********-->
          <div class="col-lg-4 col-md-6">
            <div class="tour-item">
              <div class="position-relative overflow-hidden">
                <img src="images/list-tour2.jpg" alt="" class="img-fluid">
                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"><i class="fa fa-dollar-sign text-white me-2"></i>1,400.00</div>
              </div>              

              <div class="p-4 pb-0">                
                <a href="info_tour.php" class="d-block h5 mb-2">Avistamiento de Ballenas</a>
                <p><i class="fa fa-location-dot text-primary me-2"></i>Puerto Vallarta</p>
                <hr>
                <div class="d-flex justify-content-center">
                  <div class="icon-container me-2">
                    <i class="fa-solid fa-burger text-primary"></i>
                    <i class="fa fa-water text-primary"></i>
                    <i class="fa fa-person-swimming text-primary"></i>
                  </div>
                  <div class="btn-container">
                    <a href="info_tour.php" class="btn btn-sm btn-primary mb-3">EXPLORAR</a>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!--**********-->
          <div class="col-lg-4 col-md-6">
            <div class="tour-item">
              <div class="position-relative overflow-hidden">
                <img src="images/list-tour5.jpg" alt="" class="img-fluid">
                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"><i class="fa fa-dollar-sign text-white me-2"></i>1,400.00</div>
              </div>              

              <div class="p-4 pb-0">                
                <a href="info_tour.php" class="d-block h5 mb-2">Avistamiento de Ballenas</a>
                <p><i class="fa fa-location-dot text-primary me-2"></i>Puerto Vallarta</p>
                <hr>
                <div class="d-flex justify-content-center">
                  <a href="info_tour.php" class="btn btn-sm btn-primary mb-3 w-100">MÁS INFORMACIÓN</a>
                </div>
              </div>

            </div>
          </div>
          
        </div>
      </div>
    </div>  

    <!--======== TESTIMONIOS ========-->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
        <div class="text-center">
          <h6 class="section-title bg-white text-center text-primary px-3">Testimonios</h6>
          <h1 class="mb-5">Lo que nuestros viajeros dicen</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
          <div class="testimonial-item bg-white text-center border p-4">
            <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="images/Testimonio.jpg"
              style="width: 80px; height: 80px;">
            <h5 class="mb-0">John Doe</h5>
            <p>New York, USA</p>
            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat
              ipsum et lorem et sit.</p>
          </div>
          <div class="testimonial-item bg-white text-center border p-4">
            <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="images/Testimonio.jpg"
              style="width: 80px; height: 80px;">
            <h5 class="mb-0">John Doe</h5>
            <p>New York, USA</p>
            <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita
              erat ipsum et lorem et sit.</p>
          </div>
          <div class="testimonial-item bg-white text-center border p-4">
            <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="images/Testimonio.jpg"
              style="width: 80px; height: 80px;">
            <h5 class="mb-0">John Doe</h5>
            <p>New York, USA</p>
            <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita
              erat ipsum et lorem et sit.</p>
          </div>
          <div class="testimonial-item bg-white text-center border p-4">
            <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="images/Testimonio.jpg"
              style="width: 80px; height: 80px;">
            <h5 class="mb-0">John Doe</h5>
            <p>New York, USA</p>
            <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita
              erat ipsum et lorem et sit.</p>
          </div>
        </div>
      </div>
  </div>

    <!--======== FOOTER ========-->
    <?php include 'components/footer.php'; ?>


    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>    
    <!-- JQUERY CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>    
    <!-- JS FILE -->
    <script src="js/main.js"></script>
  </body>
</html>
