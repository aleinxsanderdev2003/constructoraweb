
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Envío</title>
    <!-- Incluir los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4" style="background: linear-gradient(rgb(250, 250, 250),rgb(192, 188, 188)); padding: 20px;">
        <h4 style="color: rgb(0, 0, 0); margin-bottom: 20px;">MENSAJE DESDE EL SITIO WEB - APOSENTO CONSTRUCTORA S.A.C:</h4>
        <img src="assets/img/icons/logoAposento-removebg-preview (1).png" width="500px;" alt="">
        <h2 style="margin-top: 20px;"><strong>Nombre:</strong> {{$contacto['name']}}</h2>
        <h2><strong>Correo:</strong> {{$contacto['email']}}</h2>
        <h2><strong>Asunto:</strong> {{$contacto['subject']}}</h2>
        <h2><strong>Mensaje:</strong> {{$contacto['message']}}</h2>
        <span style="display: block; margin-top: 20px;">Fecha y hora de envío: {{ date('Y-m-d H:i:s') }}</span>
        <span style="display: block; margin-top: 10px;">Todos los derechos reservados - APOSENTO CONSTRUCTORA S.A.C</span>
    </div>

    <!-- Incluir los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
