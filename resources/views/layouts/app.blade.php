<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--ESTILOS EN CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Aposento S.A.C - Constructora</title>
     <!--GOOGLE-->
      <script src="https://www.google.com/recaptcha/api.js"></script>



        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Belanosima:wght@600&display=swap" rel="stylesheet">
    <!--BOOTRAPP-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<style>
.navbar-custom {
    background-color: #f8f9fa;
    border: none;
}

.navbar-custom .navbar-toggler {
    border-color: #1c92d2;
}

.navbar-custom .navbar-toggler-icon {
    background-color: transparent;
}

.navbar-custom .nav-link {
    font-size: 22px;
    color: #000000;
}

.navbar-custom .nav-link:hover {
    color: white;
    background: #007bff;
    border-radius: 20px;
    transition: 0.8s;
}

.navbar-custom .btn-outline-primary {
    color: #007bff;
    border-color: #007bff;
}

.navbar-custom .btn-outline-primary:hover {
    color: #ffffff;
    background-color: #007bff;
    border-color: #007bff;
}

.navbar{
    background: -webkit-linear-gradient(to right, #f2fcfe, #1c92d2);  /* Chrome 10-25, Safari 5.1-6 */
    background-size: cover;
    background-repeat: no-repeat;
    background-image:linear-gradient(rgba(255, 255, 255, 0.8), rgba(53, 156, 220,0.4)), url("https://images.unsplash.com/photo-1572003818138-19cf96ee15e7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80");
}
.navbar-logo {
  max-width: 120px;
  max-height: 120px;
}
 /* Estilos para el ícono de WhatsApp */
 .whatsapp-btn{
        margin-left:25px;
        top: 80%;
        position: fixed;
        width: 70px;
        height: 70px;
        bottom: 40px;
        right: 2px;
        background-color: #25d366;
        color: #fff;
        border: 3px solid white;
        padding: 0px;
        border-radius: 100px;
        text-decoration: none;
        font-size: 24px;
        font-weight: bold;
        box-shadow: 2px 2px 3px #999;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 100;
    }
    .joinchat__tooltip{
        position: absolute;
        display: flex;
        flex-direction: row;
        align-items: center;
        top: 7px;
        right: 60px;
        width: auto;
        height: 35px;
        padding: 5px 10px 5px 5px;
        border: none;
        border-radius: 50px;
        background: #fff;
        white-space: nowrap;
        opacity: 0;
        transition: opacity 0.3s ease-out 0.4s;
        filter: drop-shadow(0 1px 4px rgb(0,0,0,0.4));
    }
    .joinchat__tooltip::before{
        content: "";
        display: block;
        position: absolute;
        top: 10px;
        right:-6px;
        border: 8px solid transparent;
        border-width: 6px 0 6px 8px;
        border-left-color:#fff;
    }
    .bi-person-circle::before{
        margin-right: 5px ;
        color: #999;
    }
    /* formulario rapido */
    .joinchat__tooltip .text{
        color: #525252;
        font-size: 16px;
    }
    .whatsapp-btn:hover{
        transition: all 9.5s ease-in-out;
        animation: bounce 1.6s infinite;
    }
    @keyframes bounce{
        0%,20%,50%,80%,100%{
            transform: translate(0);
        }
        40%{
            transform: translate(-5px);
        }
        60%{
            transform: translate(-5px);
        }

    }

    @media(hover: hover){

        .whatsapp-btn:hover .joinchat__tooltip{
        opacity: 1;
        animation: none;
        transition: opacity 0.2s
        }
        }


    </style>

<div class="navbar-top text-center py-2" style="background: rgb(0, 0, 0)">
    <p class="m-0 text-white">Contáctanos: +51 951 967 468 | Email: constructora@aposentoperu.com</p>
</div>
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="{{route('inicio')}}">
            <img src="assets/img/icons/logoAposento-removebg-preview (1).png" width="150px" alt="Logo" class="navbar-logo">
        </a>
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav ml-auto" style="margin-top: 10px; font-family: Arial, sans-serif; font-size: 16px;margin-inline-start:90px">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('inicio')}}" style="margin-right: 10px;">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('nosotros')}}" style="margin-right: 10px;">Sobre nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('servicios')}}" style="margin-right: 10px;">Servicios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('proyectos')}}">Proyectos</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav" style="margin-inline-start:90px">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="{{route('contact')}}">
                <button class="butone">
                    <div class="svg-wrapper-1">
                      <div class="svg-wrapper">
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
                        </svg>
                      </div>
                    </div>
                    <span class="spane">Contacto</span>
                  </button>
                </a>
    </li>
    </ul>
    </div>
</div>
</nav>

<style>
.butone{
  font-family: inherit;
  font-size: 20px;
  background: royalblue;
  color: white;
  padding: 0.7em 1em;
  padding-left: 0.9em;
  display: flex;
  align-items: center;
  border: none;
  border-radius: 16px;
  overflow: hidden;
  transition: all 0.2s;
}

.butone .spane {
  display: block;
  margin-left: 0.3em;
  transition: all 0.3s ease-in-out;
}

.butone svg {
  display: block;
  transform-origin: center center;
  transition: transform 0.3s ease-in-out;
}

.butone:hover .svg-wrapper {
  animation: fly-1 0.6s ease-in-out infinite alternate;
}

.butone:hover svg {
  transform: translateX(1.2em) rotate(45deg) scale(1.1);
}

.butone:hover .spane {
  transform: translateX(5em);
}

.butone:active {
  transform: scale(0.95);
}

@keyframes fly-1 {
  from {
    transform: translateY(0.1em);
  }

  to {
    transform: translateY(-0.1em);
  }
}


</style>








    <style>
        @media (max-width: 991.98px) {
  .order-lg-last {
    display: none !important;
  }
}
    </style>
@yield('content')


 <!-- Footer Start -->
 <div class="container-fluid footer mt-5 py-5 wow fadeIn center " data-wow-delay="0.1s" style="background-image: linear-gradient( 106.9deg,  rgb(43, 160, 228,0.7) 60.9%, rgba(3,22,27,0.3) 122.3% ),url('https://plus.unsplash.com/premium_photo-1673795752628-98adce87c584?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80');">
    <div class="container py-5 ">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-black mb-4">Nuestra oficina</h4>
                <p class="mb-2 text-white"><i class="fa fa-map-marker-alt me-3"></i>AV. PASEO DE LA REPUBLICA NRO. 291 DPTO. 1902 <br>CERCADO DE LIMA - LIMA</p>
                <p class="mb-2 text-white"><i class="fa fa-phone-alt me-3"></i>+51 951 967 468</p>
                <p class="mb-2 text-white"><i class="fa fa-envelope me-3"></i>constructora@aposentoperu.com</p>
                <div class="d-flex pt-3">
                    <a class="btn btn-square  btn-light rounded-circle me-2" href="https://www.tiktok.com/@constructoraaposentosac"><i
                        class="fab fa-tiktok"></i></a>

                    <a class="btn btn-square  btn-light rounded-circle me-2"
                        href="https://www.facebook.com/profile.php?id=100094029815912"><i class="fab fa-facebook-f"></i></a>

                    <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.instagram.com/constructoraaposento/"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-black mb-4">Links</h4>
                <a class="btn btn-link text-white" href="/nosotros">Sobre nosotros</a>
                <a class="btn btn-link text-white" href="/contacto">Contacto</a>
                <a class="btn btn-link text-white" href="/servicios">Servicios</a>
                <a class="btn btn-link text-white" href="/programa">Proyectos</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-black mb-4">Horario de atencion</h4>
                <p class="mb-1">Lunes - Viernes</p>
                <h6 class="text-light">09:00 am - 09:00 pm</h6>
                <p class="mb-1">Sabado</p>
                <h6 class="text-light">09:00 am - 9:00 pm</h6>
                <p class="mb-1">Domingo</p>
                <h6 class="text-light">Cerrado</h6>
            </div>

            <div class="col-lg-3 col-md-6">
                <img class="mb-1 logo__footer" src="assets/img/icons/logoAposento-removebg-preview (1).png" width="260px" height="260px" alt="">
            </div>


        </div>
    </div>
</div>
<!-- Footer End -->
<style>
    @media(max-width){
        727px{
            margin-right: 0px;
        }
    }
</style>
<!-- Copyright Start -->
<div class="container-fluid copyright py-4 bg-light text-white bg-dark ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
               <div class="text-center"><span class="fw-medium text-whitetext-center" href="#">&copy; Aposento Constructora S.A.C</span> - <b>Todos los derechos reservados.</b>
               </div>
                </div>
        </div>
    </div>
</div>

<!-- Copyright End -->
<style>
    #back-to-top {
      position: fixed;
      bottom: 20px;
      left: 20px;
      display: none;
    }
wh

</style>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg" role="button">
    <i class="fas fa-arrow-up"></i>
  </a>
 
<a href="https://wa.me/51951967468?text=Buenas,%20quisiera%20contactarme%20con%20ustedes,%20para%20realizar%20algunas%20consultas%20de%20los%20servicios%20que%20ofrecen." target="_blank" class="whatsapp-btn"><i class="fab fa-whatsapp"></i>
    <div class="joinchat__tooltip"><i class="bi bi-person-circle"></i>
    <div class="text">¿Podemos ayudarte?</div></div>
    </a>
<!-- JS de Bootstrap (requiere jQuery) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }
  });

  $('#back-to-top').click(function() {
    $('body,html').animate({
      scrollTop: 0
    }, 800);
    return false;
  });
</script>
</body>
</html>
