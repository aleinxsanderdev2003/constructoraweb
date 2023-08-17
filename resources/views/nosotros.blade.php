@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/nosotros.css">
    <title>Document</title>
</head>
<body>
<style>


</style>
  <!-- TITULO DE SOBRE NOSOTROS -->
  <div class="background-section1 d-flex align-items-center justify-content-center" style="margin-top: -10px">
    <h2 class="display-2 text-white text-center" style="margin-top: -30px;">
        <span id="texton" class="text-center" style="border-bottom: 8px solid rgb(43, 160, 228)"></span></h2>
  </div>

  <script>
    const texto = "NOSOTROS";
    const letra = document.getElementById("texton");
    let index = 0;

    function mostrarTexto(){
    if(index < texto.length){
 letra.innerHTML += texto.charAt(index);
 index++;
 setTimeout(mostrarTexto,200);

    }}
    mostrarTexto();
  </script>
<style>

.background-section1 {

    background-image:linear-gradient(rgba(70, 70, 70, 0.8), rgba(0, 0, 0, 0.6)), url("https://images.unsplash.com/photo-1636790920612-ed453c635e6c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    height: 500px; /* Ajusta la altura del div según tus necesidades */
  }

</style>
  <!-- INFO DE NOSOTROS -->
  <div class="nosotro__info" style="margin-top:20px;;background-image: linear-gradient(rgb(0,0,0,0.2),rgb(0,0,0,0.9)) ,url('https://www.splitshire.com/wp-content/uploads/2021/04/SplitShire-21-9605-Texture.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="assets/img/icons/logoAposento-removebg-preview (1).png" alt="Logo de la empresa" class="img-fluid">
        </div>
        <div class="col-md-6 text-white">
          <h5 class="display-4" style="font-family: 'Belanosima', sans-serif; margin-top:20px;">Año de fundación:<h5 style="font-family: 'Belanosima', sans-serif;" class="display-3 text-primary">2021</h5></h5>
          <hr class="text-white">
          <p class="lead">Aposento S.A.C. es una empresa dedicada a la construcción en diversos sectores, desde el comercial hasta el industrial y los servicios públicos. Nos enorgullece ofrecer soluciones de alta calidad y eficiencia para satisfacer las necesidades de nuestros clientes.</p>
          <p class="lead">Nuestro equipo de profesionales altamente capacitados y experimentados trabaja en estrecha colaboración con cada cliente para garantizar que cada proyecto se realice con los más altos estándares de excelencia y precisión. Nos esforzamos por superar las expectativas en cada etapa del proceso de construcción, desde el diseño hasta la entrega final.</p>
          <!-- Puedes agregar más contenido aquí -->
        </div>
      </div>
    </div>
  </div>

<style>
    .video-container {
      border: 2px solid #0c60b4;
      border-radius: 10px;
      background-color: #0f355c;
      padding: 10px;
    }

    .video-container video {
      width: 100%;
    }
</style>

   <!-- VIDEO DE LA EMPRESA -->
   <div class="container d-flex justify-content-center align-items-center vh-80" style="margin-top: 20px;">
    <div class="video-container">
      <video controls>
        <source src="assets/videos/Construction.mp4" type="video/mp4">
        Tu navegador no admite el elemento de video.
      </video>
    </div>
  </div>
  
  <!-- MISION Y VISION -->
<div class="container" style="margin-top: 20px;">
    <div class="row">
      <div class="col-md-6">
        <div class="card" style="background: #000046;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #04637e, #000046);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right,  #000046,#045268); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        ">
          <div class="card-body">
            <i class="fas fa-eye fa-3x mb-3 text-white"></i> <!-- Icono de Font Awesome para la visión -->
            <h5 class="card-title text-white" style="font-family: 'Belanosima', sans-serif;">Visión</h5>
            <p class="card-text text-white lead">Nuestra constructora tiene como visión ser líder en el sector de la construcción, reconocida por la excelencia y calidad en cada proyecto que desarrollamos. Nos esforzamos por ser referentes en innovación, sostenibilidad y satisfacción del cliente, superando sus expectativas en cada una de nuestras obras.
                 Buscamos dejar un legado duradero a través de la construcción de espacios funcionales, seguros y estéticamente atractivos que mejoren la calidad de vida de las personas.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card" style="background: #000046;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #04637e, #000046);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #045268, #000046); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        ">
          <div class="card-body">
            <i class="fas fa-hand-rock fa-3x text-white mb-3"></i> <!-- Icono de Font Awesome para la misión -->
            <h5 class="card-title text-white" style="font-family: 'Belanosima', sans-serif;">Misión</h5>
            <p class="card-text text-white lead">En nuestra constructora, nuestra misión es ofrecer servicios de construcción de alta calidad, cumpliendo con los más altos
                estándares de profesionalismo y eficiencia. Nos comprometemos a brindar soluciones integrales y personalizadas a nuestros clientes, adaptándonos a sus necesidades y presupuestos. Nuestro enfoque se basa en la atención al detalle y la ejecución precisa de cada proyecto. Trabajamos en estrecha
                colaboración con nuestros clientes y socios para garantizar la entrega exitosa de cada obra.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- valores -->
  <div id="values-carousel" class="carousel slide" data-bs-ride="carousel" style="margin-top: 30px;">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title" style="font-family: 'Belanosima', sans-serif;">Responsabilidad</h5>
                  <p class="card-text lead">Nos comprometemos a asumir la responsabilidad en cada etapa de nuestros proyectos, garantizando la calidad y seguridad en todas nuestras acciones. Cumplimos con los plazos establecidos y gestionamos de manera eficiente los recursos para lograr resultados exitosos.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title" style="font-family: 'Belanosima', sans-serif;">Respeto</h5>
                  <p class="card-text lead">Valoramos y respetamos a nuestros clientes, colaboradores y comunidades en las que operamos. Fomentamos un ambiente de trabajo inclusivo, donde se promueve la diversidad de ideas y se escucha activamente a cada persona.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title" style="font-family: 'Belanosima', sans-serif;">Disciplina</h5>
                  <p class="card-text lead">Aplicamos una metodología disciplinada en nuestra gestión, siguiendo procesos rigurosos y garantizando la eficiencia en todas nuestras actividades. Trabajamos con enfoque y determinación para superar los desafíos y alcanzar nuestros objetivos.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Belanosima', sans-serif;">Perseverancia</h5>
                    <p class="card-text lead">Nos mantenemos firmes en la búsqueda de la excelencia y la superación continua. Afrontamos los obstáculos con determinación, aprendiendo de las experiencias y adaptándonos a los cambios para lograr el éxito en cada proyecto.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Belanosima', sans-serif;">Honestidad</h5>
                    <p class="card-text lead">Actuamos con transparencia, ética y honestidad en todas nuestras interacciones. Nos comprometemos a mantener una comunicación clara y sincera con nuestros clientes, colaboradores y todas las partes interesadas.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Belanosima', sans-serif;">Empatía</h5>
                    <p class="card-text lead">Nos preocupamos por comprender y satisfacer las necesidades de nuestros clientes. Valoramos la empatía como un pilar fundamental para establecer relaciones sólidas, brindando soluciones personalizadas y generando un impacto positivo en las personas y comunidades a las que servimos.</p>
                  </div>
                </div>
              </div>
            <!-- Agrega aquí las cards para los siguientes valores -->
          </div>
        </div>
      </div>
      <!-- Agrega más carousel-item si es necesario para mostrar todos los valores -->
    </div>
    <a class="carousel-control-prev text-dark" type="button" data-bs-target="#values-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-black " aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </a>
    <a class="carousel-control-next" type="button" data-bs-target="#values-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-black " aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </a>
  </div>
<style>

</style>



  <div class="container" style="margin-top:20px;">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="card bg-dark text-white">
          <div class="card-body">
            <h5 class="card-title" style="font-family: 'Belanosima', sans-serif;">Nuestro compromiso</h5>
            <p class="card-text lead" >En nuestra constructora, nos comprometemos a brindar un servicio de excelencia, promoviendo la sostenibilidad y priorizando la seguridad en cada proyecto que emprendemos. Cultivamos relaciones duraderas basadas en la confianza y el respeto, y contribuimos al desarrollo social de las comunidades donde operamos. Fomentamos la innovación en diseño y procesos constructivos, con el objetivo de ser líderes en el sector y dejar un legado duradero a través de nuestras obras.5</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="background-section2 d-flex align-items-center justify-content-center" style="margin-top: 20px">
    <div class="brochure-button">
      <a href="assets/documents/Brouchure_Informativo_Aposento.pdf" class="btn btn-dark btn-brochure" download>
        <i class="fas fa-file-alt text-primary display-6"></i>
        <span class="display-6">Brochure informativo</span><br>
        <span>Descárgalo ahora <i class="fas fa-arrow-right text-primary"></i></span>
      </a>
    </div>
  </div>




</body>
</html>
<strong>

</strong>
@endsection
