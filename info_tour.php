<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXPLORAR VALLARTA</title>
    <link rel="short icon" href="images/logo_mini.jpg" type="image/x-icon">
    <!-- Bootstrap 5 cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <!-- Icon cdn -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- archivo css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/info_style.css" />
</head>

<body>
    <!--======== NAVBAR ========-->
    <?php include 'components/navbar.php'; ?>

    <!--======== DESCRIPCION TOUR ========-->
    <div class="container mt-5">
        <div class="row">
            <!--Primera columna-->
            <div class="col-md-8 mb-4">
                <div class="text-center">
                    <h1 class="text-center text-primary">Avistamiento</h1>
                    <h5 class="section-title bg-white px-3 mb-3">DE BALLENAS</h5>
                </div>
                <div class="bg-primary p-4 mb-3">
                    <p class="text-white">No hay nada como el espectáculo de estos gigantes del mar, ya que atraviesa la superficie del agua y luego cae a una enorme salpicadura momentos después. Desde principios de diciembre hasta finales de marzo, la Bahía de Banderas es el hogar de estos majestuosos cetáceos mientras se alimentan, crían y juegan en las aguas de la Bahía. El equipo de conductores certificados de ballenas y delfines compartirá la dieta y los hábitos de los animales marinos, mientras responden a sus preguntas y hablan sobre la vida marina en la Bahía.</p>
                </div>
                <div class="row image-grid">
                    <div class="col-6 col-md-4 mb-4"><img src="images/list-tour5.jpg" alt="Imagen 1"></div>
                    <div class="col-6 col-md-4 mb-4"><img src="images/list-tour5.jpg" alt="Imagen 1"></div>
                    <div class="col-6 col-md-4 mb-4"><img src="images/list-tour5.jpg" alt="Imagen 1"></div>
                    <div class="col-6 col-md-4 mb-4"><img src="images/list-tour5.jpg" alt="Imagen 1"></div>
                    <div class="col-6 col-md-4 mb-4"><img src="images/list-tour5.jpg" alt="Imagen 1"></div>
                    <div class="col-6 col-md-4 mb-4"><img src="images/list-tour5.jpg" alt="Imagen 1"></div>
                </div>
            </div>
            <!--Segunda columna-->
            <div class="col-md-4 mb-4">
                <div class="bg-light mb-4" style="padding: 40px;">
                    <h3 class="semi-bold">Tarifa Adulto:</h3>
                    <h1>$1,400.00 MXN</h1>
                    <p class="text-secondary semi-bold" style="font-size: 14px;">IMPUESTOS INCLUIDOS</p>
                    <button class="btn btn-primary w-100">RESERVAR AHORA</button>
                </div>
                <p class="text-center semi-bold">LOS HUESPEDES MENORES DE 12 AÑOS DEBERAN ESTAR ACOMPAÑADOS POR EL PADRE O TUTOR TODO EL TIEMPO.</p>
                <div class="row icon-grid">
                    <div class="col-6 text-center">
                        <i class="fa-solid fa-clock"></i>
                        <p class="text-secondary mb-0">DURACIÓN</p>
                        <p>4 Horas</p>
                    </div>
                    <div class="col-6 text-center">
                        <i class="fa-solid fa-children"></i>
                        <p class="text-secondary mb-0">EDAD</p>
                        <p>3 +</p>
                    </div>
                    <div class="col-6 text-center">
                        <i class="fa-solid fa-ship"></i>
                        <p class="text-secondary mb-0">CAPACIDAD</p>
                        <p>40</p>
                    </div>
                    <div class="col-6 text-center">
                        <i class="fa-solid fa-calendar-check"></i>
                        <p class="text-secondary mb-0">DISPONIBILIDAD</p>
                        <p>Dic-Marz</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--======== BANNER NOTAS ========-->
    <div class="bg-cover p-5" style="background-image: url(images/ballena-banner.jpg);">
        <div class="container text-white text-center">
            <div class="row list-notas">
                <div class="col-12 section-intro text-center">
                    <h3 class="text-white">Notas importantes</h1>
                </div>
                <hr>
                <div class="col-md-6 text-start">
                    <ul>
                        <li>Los invitados deben tener en cuenta su estado físico y su historial médico.</li>
                        <li>Los huéspedes con afecciones cardíacas, asma, diabetes, epilepsia, otras afecciones cardíacas o respiratorias o cualquier otra afección médica deben tener especial cuidado al seleccionar un recorrido.</li>
                        <li>Los clientes que se preocupan deben consultar con su médico antes de participar en cualquier actividad que pueda ser agotadora para ellos.</li>
                    </ul>
                </div>
                <div class="col-md-6 text-start">
                    <ul>
                        <li>Los huéspedes propensos al mareo deben tomar precauciones.</li>
                        <li>Los huéspedes que necesiten asistencia especial deben estar acompañados por un acompañante capaz.</li>
                        <li>Los invitados deben firmar un formulario de exención para participar.</li>
                        <li>Participación limitada, pero se requiere un mínimo para que el tour funcione.</li>
                        <li>La secuencia del tour puede variar.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--======== QUE INCLUYE Y QUE NO ========-->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h2 class="mb-1 semi-bold">¡NO TE QUEDES CON LAS GANAS!</h2>
                <h4 class="mb-5 text-secondary">y vamos a ver a las ballenas jorobadas</h4>
                <h1 class="text-center px-3 title-info-tour">NO INCLUYE</h1>
                <!--**No incluye**-->
                <div class="d-flex justify-content-center align-items-center mt-4 icon-incluye">
                    <div class=" text-center icon-item">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                        <p>Tarifa $30 MXN</p>
                    </div>
                    <div class=" text-center icon-item">
                        <i class="fa-solid fa-coins"></i>
                        <p>Propinas</p>
                    </div>
                </div>
                <!--**Horarios tour**-->
                <div class="row mt-5 horario-icons mb-5">
                    <!--1-->
                    <div class="col-md-4 mb-3">
                        <div class="p-4 bg-secondary text-center text-white">
                            <i class='bx bx-time-five act-icon' ></i>
                            <h5 class="text-white">Check In</h5>
                            <hr>
                            <h1 class="mt-3 text-white">8:15 AM</h1>
                            <h1 class="text-white">12:15 PM</h1>
                        </div>
                    </div>
                    <!--1-->
                    <div class="col-md-4 mb-3">
                        <div class="p-4 bg-light text-center">
                            <i class='bx bx-right-arrow-alt' ></i>
                            <h5>Check In</h5>
                            <hr class="text-secondary">
                            <h1 class="mt-3">8:15 AM</h1>
                            <h1>12:15 PM</h1>
                        </div>
                    </div>
                    <!--1-->
                    <div class="col-md-4 mb-3">
                        <div class="p-4 bg-light text-center">
                            <i class='bx bx-left-arrow-alt'></i>
                            <h5>Check In</h5>
                            <hr class="text-secondary">
                            <h1 class="mt-3">8:15 AM</h1>
                            <h1>12:15 PM</h1>
                        </div>
                    </div>
                </div>
                <!--**Si incluye**-->
                <h1 class="text-center px-3 title-info-tour">INCLUYE</h1>
                <div class="d-flex justify-content-center align-items-center mt-4 icon-incluye">
                    <div class=" text-center icon-item">
                        <i class="fa-solid fa-fish-fins text-primary"></i>
                        <p>Biólogo Marino</p>
                    </div>
                    <div class=" text-center icon-item">
                        <i class="fa-solid fa-bowl-rice text-primary"></i>
                        <p>Snacks</p>
                    </div>
                    <div class=" text-center icon-item">
                        <i class="fa-solid fa-martini-glass-citrus text-primary"></i>
                        <p>Barra</p>
                    </div>
                </div>
            </div>
    
    
        </div>
    </div>

    <!--======== FOOTER ========-->
    <?php include 'components/footer.php'; ?>

    </body>

</html>