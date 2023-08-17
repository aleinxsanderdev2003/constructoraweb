
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="assets/img/LOGO ER SOLUTIION.jpeg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/app.css">
    <title>Aposento - Constructora</title>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LcywzQnAAAAAJEC470SZKHME2YPXRA9HKfd0Wlq"></script>
</head>
<body>
    <style>

    </style>
        <!-- Contact Start -->
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <div class="container pt-5" style="">
            <div class="d-flex flex-column text-center mb-5">
                <h4 id="contac" style="color:rgb(43, 160, 228) " class="font-weight-bold">Contacto</h4>
                <h4 class="display-4 font-weight-bold">Escribenos para cualquier consulta</h4>
            </div>
            <div class="row px-3 pb-2">
                <div class="col-sm-4 text-center mb-3">
                    <i id="direc" style="color: rgb(43, 160, 228) ;" class="fa fa-2x fa-map-marker-alt mb-3"></i>
                    <h4 class="font-weight-bold">Direccion</h4>
                    <p>AV. PASEO DE LA REPUBLICA NRO. 291 DPTO. 1902 <br>CERCADO DE LIMA - LIMA</p>
                </div>
                <div class="col-sm-4 text-center mb-3">
    <a href="tel:01-3086119">
        <i id="direc" style="color: rgb(43, 160, 228); cursor: pointer;" class="fa fa-2x fas fa-phone mb-3"></i>
        <h4 class="font-weight-bold">Numero Telefonico</h4>
        <p>(01) 3086119<br></p>
    </a>
</div>

                <div class="col-sm-4 text-center mb-3">
                    <a id="wasi" style="color: rgb(43, 160, 228)  ;" href="https://wa.me/51951967468?text=Buenas,%20quisiera%20contactarme%20con%20ustedes,%20para%20realizar%20algunas%20consultas%20de%20los%20servicios%20que%20ofrecen.">
                        <svg style="width: 25%; height: 25%;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="phone" class="svg-inline--fa fa-phone fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" ><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg>
                    </a>
                    <h4 class="font-weight-bold">Whatsapp</h4>
                    <p>+51 951 967 468</p>
                </div>
                <center>
                <div class="col-sm-4 text-center mb-3">
                    <i id="maili" style="color:rgb(43, 160, 228);" class="far fa-2x fa-envelope mb-3"></i>
                    <h4 class="font-weight-bold">Email</h4>
                    <p>constructora@aposentoperu.com</p>
                </div>
                </center>
            </div>
            <script>
                function onSubmit(token) {
                  document.getElementById("formulario__contact").submit();
                }
              </script>
            <div style="background-repeat:no-repeat;background-size:cover;margin-top:40px;">
                <div class="row">
                    <div class="col-md-6 pb-5">
                        <div class="contact-form">
                            <div id="success"></div>
                            <h1 id="formulario__contact" class="text-center" style="color: rgb(43, 160, 228);">Formulario de Atención</h1>
                            <form name="sentMessage" id="contactForm" method="post" action="{{ route('contacto.store') }}">
                                @csrf
                                <div class="control-group">
                                    <input type="text" style="border-color:rgb(43, 160, 228); " class="form-control" id="name" name="name" placeholder="Nombre Completo" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" style="border-color:rgb(43, 160, 228); " class="form-control" id="email" name="email" placeholder="Correo Electrónico" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" style="border-color:rgb(43, 160, 228); " class="form-control" id="subject" name="subject" placeholder="Asunto" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" style="border-color:rgb(43, 160, 228); " rows="6" id="message" name="message" placeholder="Mensaje" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="text-center">

                                    <button class="btn btn-primary">
                                        ENVIAR
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="https://images.unsplash.com/photo-1560264418-c4445382edbc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="img-fluid"  style="border-radius:20px" alt="">
                    </div>
                </div>
<script>
    /* PLEASE DO NOT COPY AND PASTE THIS CODE. */
    (function(){var w=window,C='___grecaptcha_cfg',cfg=w[C]=w[C]||{},N='grecaptcha';var gr=w[N]=w[N]||{};gr.ready=gr.ready||function(f){(cfg['fns']=cfg['fns']||[]).push(f);};w['__recaptcha_api']='https://www.google.com/recaptcha/api2/';(cfg['render']=cfg['render']||[]).push('onload');w['__google_recaptcha_client']=true;var d=document,po=d.createElement('script');po.type='text/javascript';po.async=true;po.src='https://www.gstatic.com/recaptcha/releases/khH7Ei3klcvfRI74FvDcfuOo/recaptcha__es_419.js';po.crossOrigin='anonymous';po.integrity='sha384-rwBDhqeJTjPSkpWB9UeqNeJvph8g8iV57sPBsRAhM05cm/42GGRG8E/5cg7gKddW';var e=d.querySelector('script[nonce]'),n=e&&(e['nonce']||e.getAttribute('nonce'));if(n){po.setAttribute('nonce',n);}var s=d.getElementsByTagName('script')[0];s.parentNode.insertBefore(po, s);})();
</script>
            </div>
        </div>
        <div style="position: relative; overflow: hidden; margin-top: 30px; height: 500px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.6663475320943!2d-77.0331739!3d-12.066462399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c895325927af%3A0xb9fe88fb6bcad3a8!2sAv.%20P.%C2%BA%20de%20la%20Rep%C3%BAblica%2C%20Lima!5e0!3m2!1ses!2spe!4v1688101978516!5m2!1ses!2spe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


        <!-- Contact End -->
<style>
   .btn-mensaje {
  position: relative;
  background-color: rgb(0, 0, 0);
  border-radius: 5px;
  box-shadow: rgb(0, 0, 0) 0px 4px 0px 0px;
  padding: 15px;
  background-repeat: no-repeat;
  box-sizing: border-box;
  width: 154px;
  height: 49px;
  color: #fff;
  border: none;
  font-size: 20px;
  transition: all .3s ease-in-out;
  z-index: 1;
  overflow: hidden;
}

.btn-mensaje::before {
  content: "";
  background-color: rgb(43, 160, 228);
  box-shadow: rgb(43, 160, 228) 0px 4px 0px 0px;
  width: 0;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  transition: width 700ms ease-in-out;
  display: inline-block;
}

.btn-mensaje:hover::before {
  width: 100%;
}
</style>
</body>
</html>
@endsection
