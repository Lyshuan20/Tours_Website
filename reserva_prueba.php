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
    <link rel="stylesheet" href="css/info_style.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!--======== NAVBAR ========-->
    <?php include 'components/navbar.php'; ?>

    <!--======== FORMULARIO RESERVA ========-->
    <form action="db/procesar_reserva.php" method="post">
        <div class="container bg-light p-5 mb-3 mt-3">
            <!--======== INFORMACIÓN PERSONAL ========-->
            <div class="row">
                <h3>Información personal</h3>
                <div class="col">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo:</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono:</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" required>
                    </div>
                </div>
            </div>
            <!--======== INFORMACIÓN TOUR ========-->
            <div class="row">
                <h3>Información del tour</h3>
                <div class="col">
                    <div class="mb-3">
                        <label for="adultos" class="form-label">Adultos:</label>
                        <input type="number" class="form-control" id="adultos" name="adultos" min="1" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="niños" class="form-label">Niños:</label>
                        <input type="number" class="form-control" id="niños" name="niños" min="1" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="infantes" class="form-label">Infantes:</label>
                        <input type="number" class="form-control" id="infantes" name="infantes" min="1" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha:</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="tour" class="form-label">Tour:</label>
                        <input type="text" class="form-control" id="tour" name="tour" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="total" class="form-label">Total:</label>
                        <input type="number" class="form-control" id="total" name="total" required>
                    </div>
                </div>
            </div>
            <!--======== PAGO CON TARJETA ========-->
            <div class="row">
                <h3>Pago</h3>
                <div class="col">
                    <div class="mb-3">
                        <label for="pago_nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="pago_nombre" name="pago_nombre" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="pago_correo" class="form-label">Correo:</label>
                        <input type="email" class="form-control" id="pago_correo" name="pago_correo" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="pago_telefono" class="form-label">Telefono:</label>
                        <input type="tel" class="form-control" id="pago_telefono" name="pago_telefono" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Completar y pagar</button>
        </div>
    </form>

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