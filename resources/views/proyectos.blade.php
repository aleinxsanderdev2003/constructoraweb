@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<style>
    .background-section3 {
        margin-top: 30px;
        background-image:linear-gradient(rgba(70, 70, 70, 0.8), rgba(0, 0, 0, 0.6)), url("https://images.unsplash.com/photo-1509463536615-1ca163bcfb3f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1439&q=80");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        height: 500px; /* Ajusta la altura del div según tus necesidades */
      }

        .project-image {
          position: relative;
          overflow: hidden;
        }

        .project-image img {
          transition: transform 0.3s ease;
        }

        .project-image .overlay {
          position: absolute;
          bottom: 0;
          left: 0;
          right: 0;
          background-color: rgba(0, 0, 0, 0.8);
          color: #fff;
          padding: 20px;
          transform: translateY(100%);
          transition: transform 0.3s ease;
        }

        .project-image:hover img {
          transform: scale(1.1);
        }

        .project-image:hover .overlay {
          transform: translateY(0);
        }

        .project-image {
    border: 2px solid rgb(3, 143, 207);
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 20px;
  }
      </style>

        <div class="background-section3 d-flex align-items-center justify-content-center" style="margin-top: -10px">
            <h2 class="display-1 text-white text-center" style="margin-top: -30px;">
                <span id="letras" style="border-bottom: 8px solid rgb(43, 160, 228) ;"></span></h2>
          </div>
<script>
  const letra = "PROYECTOS";
  const texto = document.getElementById("letras");
  let index= 0;
  function mostrartexto(){
    if(index < letra.length){
        texto.innerHTML += letra.charAt(index);
        index++;
        setTimeout(mostrartexto,200);
    }
  }
  mostrartexto();
</script>


  <div class="video-container">
    <video class="video__proyecto" autoplay loop muted>
      <source src="assets/videos/PROYECTOS.mp4" type="video/mp4">
      Tu navegador no admite el elemento de video.
    </video>
  </div>



  <div class="container" style="margin-top:10px">
    <div class="row">
      <div class="col-md-8 offset-md-2 text-center">
        <h2 class="mb-4">Descubre nuestro portafolio de proyectos</h2>
        <p class="lead">Te presentamos una muestra de nuestro amplio portafolio de obras exitosas. En Aposento Constructora S.A.C., nos enorgullece haber participado en la construcción de una variedad de proyectos destacados que han dejado una huella significativa en diferentes sectores.</p>
      </div>
    </div>
  </div>

<div class="container" style="margin-top: 20px;">
  <div class="row">
    <div class="col-md-4">
      <div class="project-image">
        <img class="img-fluid" src="assets/img/trabajos.jpeg" alt="Project 1">
        <div class="overlay">
          <h3>Proyecto 1</h3>
          <p>Descripción del proyecto 1.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="project-image">
        <img class="img-fluid" src="assets/img/trabajos2.jpeg" alt="Project 2">
        <div class="overlay">
          <h3>Proyecto 2</h3>
          <p>Descripción del proyecto 2.</p>
        </div>
      </div>

    </div>
    <div class="col-md-4">
      <div class="project-image">
        <img class="img-fluid" src="assets/img/trabajos3.jpeg" alt="Project 3">
        <div class="overlay">
          <h3>Proyecto 3</h3>
          <p>Descripción del proyecto 3.</p>
        </div>
      </div>

    </div>
    <center>
    <div class="col-md-4">
        <div class="project-image">
          <img class="img-fluid" src="assets/img/trabajos4.jpeg" alt="Project 3">
          <div class="overlay">
            <h3>Proyecto 3</h3>
            <p>Descripción del proyecto 3.</p>
          </div>
        </div>

      </div>
    </center>
  </div>
</div>
<style>
 .video-container {
      width: 100%;
      position: relative;
      padding-bottom: 56.25%;
      height: 0;
      overflow: hidden;
    }

    .video-container .video__proyecto {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
  </style>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
