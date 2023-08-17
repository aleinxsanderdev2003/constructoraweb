@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="assets/js/testimonial.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@800&display=swap" rel="stylesheet">


</head>
<body>
    <style>
      .video-container {
        position: relative;
        overflow: hidden;
        padding-bottom: 56.25%; /* Relación de aspecto 16:9 (para video widescreen) */
        max-width: 100%;
    }

    .video-container video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
      </style> <!--Primer background-->
<div class="video-container">
    <video src="assets/videos/SOMOS APOSENTO CONSTRCUTORA S.AC..mp4" autoplay muted loop>

    </video>
</div>


<style>
    .cardito1 {
        border-radius: 20px;
        border-color: black;
    }
    .cardito1:hover {
        background-color: rgb(0, 0, 0);
        transition: 0.8s;
    }

    .cardito1:hover .icono__estadisticas
    {
        color: white;
    }
    .cardito1:hover .letras__estadisticas {
        color: white;
    }

</style>



<style>

.background-section {
    margin-top: 30px;

    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    height: 600px; /* Ajusta la altura del div según tus necesidades */
  }
.presentacion{
    margin-top: -50px;
    background-image: linear-gradient(to right, #434343 0%, black 100%);

  }
  .presentacion2{

    background-repeat: no-repeat;
    background-size: cover;
background-image: url("assets/img/nosotros.jpg");

  }
  .container1 {
    padding-top: 50px;
  }

  .info-section {
    background-color: #ffffff;
    padding: 50px;
  }
  .info-section h2 {
    margin-bottom: 30px;
  }
  .info-section p {
    margin-bottom: 20px;
  }
  @media (min-width: 768px) {
    .image-section {
      height: 100vh;
      display: flex;
      align-items: center;
    }
    .image-section img {
      max-width: 100%;
      max-height: 80%;
      margin: 0 auto;
    }
    .info-section {
      height: 100vh;
      display: flex;
      align-items: center;
    }
  }


  .testimonial {
    background-color: #f8f9fa;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
  .testimonial .testimonial-text {
    font-size: 18px;
    margin-bottom: 20px;
  }
  .testimonial .testimonial-author {
    font-size: 16px;
    font-weight: bold;
  }



/* CAROUSEL IMAGENES  */


.carousel-item.active {
    position: relative;
    height: 700px;;
  }

  .carousel-item{

    height: 700px;;
  }


  @media (max-width: 768px) {
    .carousel-caption {
      position: relative;
      transform: none;
      top: auto;
      left: auto;
    }}

</style>


<div class="container container1">
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="card cardito1 mb-4">
                <div class="card-body text-center">
                    <i class="fas fa-home icono__estadisticas fa-3x" style="color: rgb(43, 160, 228)"></i>
                    <hr class="text-primary">
                    <h5 class="card-title letras__estadisticas mt-3">Proyectos de Vivienda Residencial</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card cardito1 mb-4">
                <div class="card-body text-center ">
                    <i class="fas fa-ruler-combined fa-3x" style="color: rgb(43, 160, 228)" ></i>
                    <hr class="text-primary">
                    <h5 class="card-title mt-3 letras__estadisticas mt-3" ><span class="text-primary">+85</span>  mil m2 construidos</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card cardito1 mb-4">
                <div class="card-body text-center ">
                    <i class="fas fa-home fa-3x" style="color: rgb(43, 160, 228)"></i>
                    <hr class="text-primary">
                    <h5 class="card-title mt-3 letras__estadisticas mt-3"><span class="text-primary">+550</span> Viviendas Entregadas</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.carousel-item.active .brochure-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

</style>

    <!--Presentacion-->
    <div class="presentacion">
    <div class="container">
        <div class="row ">
          <div class="col-lg-6 presentacion2">
            <div class="image-section">

            </div>
          </div>
          <div class="col-lg-6">
            <div class="info-section flex-column">
                <h2 class="display-1">Sobre nosotros</h2>
                <p><span><svg xmlns="http://www.w3.org/2000/svg" width="48" height="47.273"><g fill="#c6c6c6">
                    <path d="M31.742 25.788H45.56v3.636H31.742zM31.742 20.696H45.56v3.637H31.742zM31.742 30.878H45.56v3.637H31.742z"/>
                </g>
                <path d="M38.941 10.947 13.866.061a.73.73 0 0 0-.761.112L.257 11.082 1.2 12.19 13.7 1.575l24.223 10.516v22.424h1.455v-22.9a.725.725 0 0 0-.437-.668z" fill="#525c6b"/>
                <g fill="#ffbd66">
                    <path d="M11.03 10.183h5.091a.728.728 0 0 0 .7-.932L14.274.523a.727.727 0 0 0-1.4 0l-2.541 8.728a.729.729 0 0 0 .7.932zm2.546-6.858 1.576 5.4H12zM47.789 15.489l-4.334-4.364a.724.724 0 0 0-.516-.215h-8.482a.657.657 0 0 0-.234 0H.727a.727.727 0 0 0-.356 1.36l7.758 4.364a.715.715 0 0 0 .356.094H10.3v28.727a.729.729 0 0 0 .727.728h5.091a.727.727 0 0 0 .727-.728V16.728h30.427a.728.728 0 0 0 .517-1.239zm-19.545-.216h-5.217l2.609-2.607zm-.853-2.909h5.171l-2.586 2.586zm6.95.278 2.631 2.631H31.71zm1.778-.278h5.064L38.651 14.9zM8.676 15.273 3.5 12.364h7.53a.727.727 0 0 0-.727.728v2.182H8.676zm6.718 0h-3.637v-1.454h3.637zm0 17.454h-3.637v-3.636h3.637zm-3.636 1.455H15.4v3.637h-3.642zm3.636-6.546h-3.637V24h3.637zm0 17.091h-3.637v-5.454h3.637zm0-22.181h-3.637v-5.818h3.637zm.727-10.182h7.759l-2.91 2.909h-4.122v-2.182a.726.726 0 0 0-.727-.727zm24.21 2.909 2.606-2.605 2.588 2.605z"/>
                </g><path d="M14.3 8h-3.633a2.182 2.182 0 0 0-2.182 2.183v7.271a.728.728 0 0 0 .728.728h8.727a.727.727 0 0 0 .728-.728v-5.091A4.366 4.366 0 0 0 14.3 8z" fill="#7a8e9b"/><path d="M14.719 9.82h-4.064a.473.473 0 0 0-.473.473v3.568a.474.474 0 0 0 .473.474H16.5a.474.474 0 0 0 .474-.474V12.07a2.252 2.252 0 0 0-2.255-2.25z" fill="#e2e2e2"/><path d="M21.576 43.637h-16a2.909 2.909 0 0 0-2.909 2.909v.727h21.818v-.727a2.909 2.909 0 0 0-2.909-2.909z" fill="#525c6b"/></svg> </span><u>  CONSTRUCTORA APOSENTO S.A.C </u> <span><svg xmlns="http://www.w3.org/2000/svg" width="48" height="47.273"><g fill="#c6c6c6"><path d="M31.742 25.788H45.56v3.636H31.742zM31.742 20.696H45.56v3.637H31.742zM31.742 30.878H45.56v3.637H31.742z"/></g><path d="M38.941 10.947 13.866.061a.73.73 0 0 0-.761.112L.257 11.082 1.2 12.19 13.7 1.575l24.223 10.516v22.424h1.455v-22.9a.725.725 0 0 0-.437-.668z" fill="#525c6b"/><g fill="#ffbd66"><path d="M11.03 10.183h5.091a.728.728 0 0 0 .7-.932L14.274.523a.727.727 0 0 0-1.4 0l-2.541 8.728a.729.729 0 0 0 .7.932zm2.546-6.858 1.576 5.4H12zM47.789 15.489l-4.334-4.364a.724.724 0 0 0-.516-.215h-8.482a.657.657 0 0 0-.234 0H.727a.727.727 0 0 0-.356 1.36l7.758 4.364a.715.715 0 0 0 .356.094H10.3v28.727a.729.729 0 0 0 .727.728h5.091a.727.727 0 0 0 .727-.728V16.728h30.427a.728.728 0 0 0 .517-1.239zm-19.545-.216h-5.217l2.609-2.607zm-.853-2.909h5.171l-2.586 2.586zm6.95.278 2.631 2.631H31.71zm1.778-.278h5.064L38.651 14.9zM8.676 15.273 3.5 12.364h7.53a.727.727 0 0 0-.727.728v2.182H8.676zm6.718 0h-3.637v-1.454h3.637zm0 17.454h-3.637v-3.636h3.637zm-3.636 1.455H15.4v3.637h-3.642zm3.636-6.546h-3.637V24h3.637zm0 17.091h-3.637v-5.454h3.637zm0-22.181h-3.637v-5.818h3.637zm.727-10.182h7.759l-2.91 2.909h-4.122v-2.182a.726.726 0 0 0-.727-.727zm24.21 2.909 2.606-2.605 2.588 2.605z"/></g><path d="M14.3 8h-3.633a2.182 2.182 0 0 0-2.182 2.183v7.271a.728.728 0 0 0 .728.728h8.727a.727.727 0 0 0 .728-.728v-5.091A4.366 4.366 0 0 0 14.3 8z" fill="#7a8e9b"/><path d="M14.719 9.82h-4.064a.473.473 0 0 0-.473.473v3.568a.474.474 0 0 0 .473.474H16.5a.474.474 0 0 0 .474-.474V12.07a2.252 2.252 0 0 0-2.255-2.25z" fill="#e2e2e2"/><path d="M21.576 43.637h-16a2.909 2.909 0 0 0-2.909 2.909v.727h21.818v-.727a2.909 2.909 0 0 0-2.909-2.909z" fill="#525c6b"/></svg></span></p>
                <p>Somos una empresa constructora con sede en Perú. Nos especializamos en la construcción de edificios y proyectos de servicio público. Nuestro equipo está formado por profesionales altamente capacitados en arquitectura e ingeniería, brindando servicios de consultoría técnica.</p>
                <p>Nos enorgullece ofrecer soluciones integrales y de alta calidad a nuestros clientes, cumpliendo con los estándares más exigentes de la industria de la construcción. Nuestro compromiso es brindar proyectos exitosos, cumpliendo con plazos, presupuestos y superando las expectativas de nuestros clientes.</p>
                <p>Si estás buscando una empresa constructora confiable y comprometida con la excelencia, ¡contáctanos hoy mismo!</p>
      <br>
                <div class="checks-section display-6">
                    <div class="card bg-dark text-white">
                        <div class="card-body">
                          <h4 class="text-center" style="font-family: 'Belanosima', sans-serif;">
                            <i class="fas fa-handshake" style="color :rgb(43, 160, 228)"></i> Calidad de Servicio
                          </h4>
                        </div>
                      </div>

                      <div class="card bg-dark text-white">
                        <div class="card-body">
                          <h4 class="text-center" style="font-family: 'Belanosima', sans-serif;">
                            <i class="fas fa-users" style="color :rgb(43, 160, 228)"></i> Servicio profesional y especializado
                          </h4>
                        </div>
                      </div>

                      <div class="card bg-dark text-white">
                        <div class="card-body">
                          <h4 class="text-center" style="font-family: 'Belanosima', sans-serif;">
                            <i class="fas fa-shield-alt" style="color :rgb(43, 160, 228)"></i> Garantía productos y servicios
                          </h4>
                        </div>
                      </div>

                    <br>
                    <!-- Puedes agregar más características con el formato anterior -->
                </div>
            </div>
        </div>

        </div>
      </div>
    </div>
<!--Servicios-->

<div class="container">
    <h1 class="text-center display-3">Nuestros Servicios</h1><br>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="https://images.pexels.com/photos/9425347/pexels-photo-9425347.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="Imagen 1">
        <div class="card-body" style="background:rgb(43, 160, 228) ">
          <h5 class="card-title text-white text-center" style="font-family: 'Belanosima', sans-serif;" >CONSTRUCCIÓN DE EDIFICIOS<br>&nbsp;<br>&nbsp;<br><a class="btn btn-dark" href="{{route('servicios')}}">Ver más</a></h5>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1593313637552-29c2c0dacd35?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" class="card-img-top" alt="Imagen 2">
        <div class="card-body" style="background:rgb(43, 160, 228)">
          <h5 class="card-title text-white text-center" style="font-family: 'Belanosima', sans-serif;" >CONSTRUCCIÓN DE PROYECTOS DE SERVICIO PÚBLICO<br>&nbsp;<br><a class="btn btn-dark" href="{{route('servicios')}}">Ver más</a></h5>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1581092583537-20d51b4b4f1b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" class="card-img-top" alt="Imagen 3">
        <div class="card-body" style="background:rgb(43, 160, 228)">
          <h5 class="card-title text-white text-center" style="font-family: 'Belanosima', sans-serif;"  >ACTIVIDADES DE ARQUITECTURA E INGENIERÍA Y ACTIVIDADES CONEXAS DE CONSULTORÍA TÉCNICA<br><a class="btn btn-dark" href="{{route('servicios')}}">Ver más</a></h5>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="background-section d-flex flex-column align-items-center justify-content-center" style="background-image: url('https://images.unsplash.com/photo-1565008447742-97f6f38c985c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1631&q=80');">
    <h2 class="display-2 text-white text-center" style="margin-bottom: 30px;">"Construyendo sueños, creando hogares"</h2>
    <img src="assets/img/icons/logoAposento-removebg-preview (1).png" class="img-fluid" style="width: 20%" alt="">
</div>

<!--Testimonios de clientes-->
<div class="fondo__testimonials" style="background-repeat:no-repeat;background-size:cover;margin-top:40px;background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('https://images.unsplash.com/photo-1423768164017-3f27c066407f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');"><div class="container" >
    <h1 class="text-center mb-5" style="font-family: 'Belanosima', sans-serif;">Testimonios de Clientes</h1>
    <div class="row">
      <div class="col-lg-4">
        <div class="testimonial">
          <div class="testimonial-icon">
            <i class="fas fa-user display-5 text-primary"></i><span><b> - Juan Pérez</b> </span>
          </div>
          <div class="testimonial-text">
            "¡Excelente servicio! Aposento S.A.C. nos ayudó a encontrar exactamente lo que necesitábamos para nuestro proyecto de construcción. Su atención personalizada y conocimientos expertos fueron fundamentales para el éxito del proyecto."
          </div>

        </div>
      </div>
      <div class="col-lg-4">
        <div class="testimonial">
          <div class="testimonial-icon">
            <i class="fas fa-user display-5 text-primary"></i><span><b> - María Gómez</b> </span>
          </div>
          <div class="testimonial-text">
            "La atención al cliente de Aposento S.A.C. fue excepcional. Desde el primer contacto hasta la finalización del proyecto, nos brindaron un servicio de calidad y se aseguraron de que estuviéramos satisfechos en cada etapa. Recomiendo totalmente sus servicios."
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="testimonial">
          <div class="testimonial-icon">
            <i class="fas fa-user display-5 text-primary"></i></i><span><b> - Pedro Rodríguez</b> </span>
          </div>
          <div class="testimonial-text">
            "Estoy impresionado con el profesionalismo y la habilidad técnica de Aposento S.A.C. Su equipo de construcción trabajó de manera eficiente y entregó resultados de alta calidad en el tiempo prometido. Definitivamente los elegiría nuevamente para futuros proyectos."
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</body>
</html>

@endsection
