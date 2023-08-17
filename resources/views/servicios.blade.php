@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/services.css">
    <title>Document</title>
</head>
<body>
    <div class="background-section2 d-flex align-items-center justify-content-center" style="margin-top: -10px">
        <h2 class="display-1 text-white text-center" style="margin-top: -30px;">
          <span id="letters" style="border-bottom: 8px solid rgb(43, 160, 228) ;"></span>
        </h2>
      </div>

      <script>
        const text = "SERVICIOS";
        const lettersElement = document.getElementById("letters");
        let index = 0;

        function showNextLetter() {
          if (index < text.length) {
            lettersElement.innerHTML += text.charAt(index);
            index++;
            setTimeout(showNextLetter, 200); // Delay between each letter appearance (in milliseconds)
          }
        }

        showNextLetter();
      </script>

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



<div class="video-container">
    <video class="video__proyecto" autoplay loop muted>
      <source src="assets/videos/CONSTRUCTION Company.mp4" type="video/mp4">
      Tu navegador no admite el elemento de video.
    </video>
  </div>


      <div class="nosotro__info" style="background: linear-gradient(rgba(9, 126, 173, 0.7),rgba(177, 177, 177, 0.9)); margin-top:40px;">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img src="https://images.unsplash.com/photo-1601074231509-dce351c05199?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80" alt="Logo de la empresa" class="img-fluid">
            </div>
            <div class="col-md-6 text-white">
              <h5 class="display-4" style="font-family: 'Belanosima', sans-serif; margin-top:20px;color:rgb(0, 0, 0)">Construcción de Edificios</h5>
              <hr class="text-white">
              <p class="lead">En nuestra empresa constructora, nos destacamos por ofrecer soluciones arquitectónicas únicas y personalizadas para edificios de diversos usos. Ya sea que necesites un edificio residencial, comercial u de oficinas, nuestro equipo de expertos se encargará de llevar a cabo todo el proceso, desde el diseño y la planificación hasta la construcción y el acabado final.

                Nos enorgullece romper con los estándares tradicionales y abrazar la innovación en cada proyecto que emprendemos. Trabajamos de la mano con arquitectos y diseñadores de renombre para crear edificios que sean verdaderas obras de arte arquitectónicas, fusionando estilos vanguardistas con funcionalidad y eficiencia.

                Además de ofrecer diseños atractivos, nos aseguramos de que cada proyecto cumpla con los más altos estándares de calidad y sostenibilidad. Utilizamos materiales de primera calidad y técnicas constructivas avanzadas para garantizar la durabilidad y la eficiencia energética de cada edificio que construimos.

                En nuestro compromiso por superar las expectativas de nuestros clientes, nos esforzamos por mantener una comunicación constante y transparente durante todo el proceso de construcción. Nos adaptamos a tus necesidades y preferencias, asegurándonos de que cada detalle sea cuidadosamente considerado y ejecutado.

                Confía en nosotros para llevar a cabo tu próximo proyecto de construcción de edificios. Estamos comprometidos con la excelencia, la creatividad y la satisfacción del cliente en cada paso del camino.</p>

              <p class="lead">Ofrecemos servicios completos de construcción de edificios para diferentes usos, incluyendo residenciales, comerciales y de oficinas. Nuestro equipo de expertos se encarga de todo el proceso, desde el diseño y la planificación hasta la construcción y el acabado final. Nos enfocamos en la calidad, la eficiencia y la satisfacción del cliente en cada proyecto que emprendemos.</p>
              <!-- Puedes agregar más contenido aquí -->
            </div>
          </div>
        </div>
      </div>

<style>
</style>

      <div class="nosotro__info" style="background: linear-gradient(rgba(9, 126, 173, 0.7),rgba(177, 177, 177, 0.9)); margin-top:40px;">
        <div class="container">
          <div class="row">

            <div class="col-md-6 text-white">
              <h5 class="display-4" style="font-family: 'Belanosima', sans-serif; margin-top:20px;color:rgb(0, 0, 0)">Construcción de Proyectos de Servicio Público</h5>
              <hr class="text-white">
              <p class="lead">Nos especializamos en la construcción de proyectos de servicio público, como hospitales, clínicas, colegios y otras instalaciones necesarias para el bienestar y desarrollo de la comunidad. Nuestro equipo altamente capacitado y experimentado garantiza la entrega exitosa de proyectos complejos, cumpliendo con los estándares de calidad
                y las regulaciones pertinentes. Trabajamos en estrecha colaboración con nuestros clientes para asegurarnos de que sus necesidades y objetivos se cumplan de manera efectiva.</p>
                <p class="lead">En nuestra empresa constructora, nos enorgullece especializarnos en la construcción de proyectos de servicio público que impactan directamente en la calidad de vida de las personas. Nuestro compromiso es llevar a cabo la construcción de hospitales, clínicas, colegios y otras instalaciones fundamentales para el bienestar y desarrollo de la comunidad.

                    Contamos con un equipo altamente capacitado y experimentado en la ejecución de proyectos complejos. Desde el diseño inicial hasta la finalización de la construcción, nos aseguramos de cumplir con los más altos estándares de calidad y las regulaciones pertinentes. Cada detalle es cuidadosamente considerado para garantizar resultados sobresalientes.

                    Creemos en la importancia de la colaboración estrecha con nuestros clientes. Trabajamos en equipo, escuchando sus necesidades y objetivos, para asegurarnos de que cada proyecto se realice de manera efectiva y cumpla con todas las expectativas.
            </p>

                <!-- Puedes agregar más contenido aquí -->
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1493552620435-f3682a889c1f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Logo de la empresa" class="img-fluid">
              </div>
          </div>
        </div>
      </div>

      <div class="nosotro__info" style="background: linear-gradient(rgba(9, 126, 173, 0.7),rgba(177, 177, 177, 0.9)); margin-top:40px;">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img src="https://images.pexels.com/photos/5584052/pexels-photo-5584052.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Logo de la empresa" class="img-fluid">
            </div>
            <div class="col-md-6 text-white">
              <h5 class="display-4" style="font-family: 'Belanosima', sans-serif; margin-top:20px;color:rgb(0, 0, 0)">Actividades de Arquitectura e Ingeniería y Actividades Conexas de Consultoría Técnica</h5>
              <hr class="text-white">
              <p class="lead">En nuestra empresa, nos especializamos en ofrecer un servicio completo de actividades de arquitectura e ingeniería, acompañadas de actividades conexas de consultoría técnica. Nuestro enfoque se basa en la integración de la creatividad arquitectónica y el rigor técnico de la ingeniería para brindar soluciones innovadoras y funcionales.

                 Desde la conceptualización inicial hasta la entrega final del proyecto, trabajamos en estrecha colaboración contigo para comprender tus necesidades y objetivos. Nuestro enfoque personalizado nos permite desarrollar soluciones óptimas.

                Además de nuestra experiencia en arquitectura e ingeniería, ofrecemos servicios de consultoría técnica complementarios. Esto incluye análisis de viabilidad, estudios de impacto ambiental, gestión de permisos y licencias, entre otros. Nuestro objetivo es brindarte un enfoque integral que abarque todas las etapas del proyecto, asegurando la eficiencia y la calidad en cada aspecto.
</p>
            </div>
          </div>
        </div>
      </div>



<style>
.background-section2 {
    margin-top: 30px;
    background-image:linear-gradient(rgba(70, 70, 70, 0.8), rgba(0, 0, 0, 0.6)), url("https://images.pexels.com/photos/3769135/pexels-photo-3769135.jpeg?auto=compress&cs=tinysrgb&w=1600");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    height: 500px; /* Ajusta la altura del div según tus necesidades */
  }

</style>

<style>

  body {
    background-color: #ffffff;
    background-image: radial-gradient(circle, #ffffff 10%, #ffffff 10%);
    background-size: 550px 550px;
  }

</style>



</body>
</html>

@endsection
