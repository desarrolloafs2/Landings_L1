<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AFS Formación - Programa de Transformación Digital</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mainv4.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':

                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],

                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =

                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);

        })(window, document, 'script', 'dataLayer', 'GTM-N3MNDH7');</script>
    <!-- End Google Tag Manager -->
</head>

<body>

    <section class="position-relative pb-5" style="background-image: url('{{asset('images/Imagenes-L1-1.png')}}'); 
            background-size: cover; 
            background-position: center bottom; 
            background-repeat: no-repeat; 
            min-height: 100vh; 
            display: flex; 
            flex-direction: column; 
            justify-content: space-between;">

        <div class="container-fluid mb-5 d-flex flex-column flex-grow-1">

            <div class="row flex-grow-1">
                <div class="col-xl-10 offset-xl-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h1 class="text-white fw-bold"
                        style="font-size: clamp(2.2rem, 5vw, 6.2rem); line-height: 1.1; margin-bottom: clamp(1.5rem, 3vw, 3rem);">
                        Mejora tu carrera<br>
                        profesional<br>
                        sin dejar tu trabajo
                    </h1>
                    <h5 class="text-white fw-medium"
                        style="font-size: clamp(1.2rem, 2.5vw, 3rem); margin-bottom: clamp(1.5rem, 3vw, 4rem);">
                        Cursos oficiales y gratuitos<br>
                        diseñados para personas ocupadas
                    </h5>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-10 offset-xl-1 text-center text-lg-start">
                    <div class="d-flex flex-column flex-lg-row align-items-center align-items-lg-start gap-3"
                        style="margin-top: auto; margin-bottom: -1.5rem;">
                        <h6 class="text-white mb-0" style="font-size: clamp(0.8rem, 1vw, 1rem); font-weight: 400;">
                            Formación subvencionada por:
                        </h6>
                        <img class="header-logo" src="{{asset('images/MEFPD.png')}}" alt="Logo AMEFPD"
                            style="max-width: clamp(120px, 20vw, 250px); height: auto;">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container pb-3">

            <div id="cursosCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                <div class="carousel-inner">

                    <!-- Primer Slide -->
                    <div class="carousel-item active">
                        <div class="row g-4">
                            <!-- Card 1 -->
                            <div class="col-12 col-md-4">
                                <div class="card shadow-sm h-100 rounded-3 p-3">
                                    <div class="ratio ratio-16x9 rounded-3 overflow-hidden">
                                        <img src="{{asset('images/Imagenes-L1-1.png')}}" alt="Tarjeta 1"
                                            class="img-fluid w-100 h-100 object-fit-cover">
                                    </div>
                                    <div class="card-body text-start">
                                        <h5 class="card-title fw-bold mt-3">Gestión de Compras y Aprovisionamientos</h5>
                                        <hr>
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <div class="mb-2">
                                                <p><b>Horario: </b><br>Flexible</p>
                                                <p><b>Modalidad: </b><br>Online</p>
                                            </div>
                                            <div>
                                                <p><b>Inicio: </b><br>SEPTIEMBRE</p>
                                                <p><b>Duración: </b><br>40 horas</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-12 col-md-4">
                                <div class="card shadow-sm h-100 rounded-3 p-3">
                                    <div class="ratio ratio-16x9 rounded-3 overflow-hidden">
                                        <img src="{{asset('images/Imagenes-L1-1.png')}}" alt="Tarjeta 2"
                                            class="img-fluid w-100 h-100 object-fit-cover">
                                    </div>
                                    <div class="card-body text-start">
                                        <h5 class="card-title fw-bold mt-3">Ofimática</h5>
                                        <hr>
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <div class="mb-2">
                                                <p><b>Horario: </b><br>08:00 - 14:00</p>
                                                <p><b>Modalidad: </b><br>Presencial</p>
                                            </div>
                                            <div>
                                                <p><b>Inicio: </b><br>SEPTIEMBRE</p>
                                                <p><b>Duración: </b><br>125 horas</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-12 col-md-4">
                                <div class="card shadow-sm h-100 rounded-3 p-3">
                                    <div class="ratio ratio-16x9 rounded-3 overflow-hidden">
                                        <img src="{{asset('images/Imagenes-L1-1.png')}}" alt="Tarjeta 3"
                                            class="img-fluid w-100 h-100 object-fit-cover">
                                    </div>
                                    <div class="card-body text-start">
                                        <h5 class="card-title fw-bold mt-3">Operaciones Básicas de Restaurante y Bar</h5>
                                        <hr>
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <div class="mb-2">
                                                <p><b>Horario: </b><br>15:00 a 21:00</p>
                                                <p><b>Modalidad: </b><br>Presencial</p>
                                            </div>
                                            <div>
                                                <p><b>Inicio: </b><br>SEPTIEMBRE</p>
                                                <p><b>Duración: </b><br>315 horas</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Segundo Slide (Duplicado con otros cursos para dar más contenido) -->
                    <div class="carousel-item">
                        <div class="row g-4">
                            <!-- Card 4 -->
                            <div class="col-12 col-md-4">
                                <div class="card shadow-sm h-100 rounded-3 p-3">
                                    <div class="ratio ratio-16x9 rounded-3 overflow-hidden">
                                        <img src="{{asset('images/Imagenes-L1-1.png')}}" alt="Tarjeta 4"
                                            class="img-fluid w-100 h-100 object-fit-cover">
                                    </div>
                                    <div class="card-body text-start">
                                        <h5 class="card-title fw-bold mt-3">Marketing Digital</h5>
                                        <hr>
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <div class="mb-2">
                                                <p><b>Horario: </b><br>Flexible</p>
                                                <p><b>Modalidad: </b><br>Online</p>
                                            </div>
                                            <div>
                                                <p><b>Inicio: </b><br>OCTUBRE</p>
                                                <p><b>Duración: </b><br>60 horas</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 5 -->
                            <div class="col-12 col-md-4">
                                <div class="card shadow-sm h-100 rounded-3 p-3">
                                    <div class="ratio ratio-16x9 rounded-3 overflow-hidden">
                                        <img src="{{asset('images/Imagenes-L1-1.png')}}" alt="Tarjeta 5"
                                            class="img-fluid w-100 h-100 object-fit-cover">
                                    </div>
                                    <div class="card-body text-start">
                                        <h5 class="card-title fw-bold mt-3">Atención al Cliente</h5>
                                        <hr>
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <div class="mb-2">
                                                <p><b>Horario: </b><br>09:00 - 13:00</p>
                                                <p><b>Modalidad: </b><br>Presencial</p>
                                            </div>
                                            <div>
                                                <p><b>Inicio: </b><br>NOVIEMBRE</p>
                                                <p><b>Duración: </b><br>80 horas</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 6 -->
                            <div class="col-12 col-md-4">
                                <div class="card shadow-sm h-100 rounded-3 p-3">
                                    <div class="ratio ratio-16x9 rounded-3 overflow-hidden">
                                        <img src="{{asset('images/Imagenes-L1-1.png')}}" alt="Tarjeta 6"
                                            class="img-fluid w-100 h-100 object-fit-cover">
                                    </div>
                                    <div class="card-body text-start">
                                        <h5 class="card-title fw-bold mt-3">Inglés Básico</h5>
                                        <hr>
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <div class="mb-2">
                                                <p><b>Horario: </b><br>16:00 - 19:00</p>
                                                <p><b>Modalidad: </b><br>Presencial</p>
                                            </div>
                                            <div>
                                                <p><b>Inicio: </b><br>DICIEMBRE</p>
                                                <p><b>Duración: </b><br>100 horas</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Controles -->
                <button class="carousel-control-prev" type="button" data-bs-target="#cursosCarousel" data-bs-slide="prev"
                    style="position: absolute; top: 50%; transform: translateY(-50%); left: -150px; background: none; opacity: 1; width: auto; border: none; outline: none; box-shadow: none; padding: 0; margin: 0; z-index: 5; user-select: none;">
                    <img src="{{ asset('images/l-arrow.png') }}" alt="Anterior"
                        style="width: 40px; height: 40px; display: block; pointer-events: none;">
                    <span class="visually-hidden">Anterior</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#cursosCarousel" data-bs-slide="next"
                    style="position: absolute; top: 50%; transform: translateY(-50%); right: -150px; background: none; opacity: 1; width: auto; border: none; outline: none; box-shadow: none; padding: 0; margin: 0; z-index: 5; user-select: none;">
                    <img src="{{ asset('images/r-arrow.png') }}" alt="Siguiente"
                        style="width: 40px; height: 40px; display: block; pointer-events: none;">
                    <span class="visually-hidden">Siguiente</span>
                </button>





            </div>
        </div>
    </section>



    <section class="mb-5 text-center">
        <div class="container">
            <div class="col-12 mx-auto">
                <h1 class="my-5 mb-5" style="font-size: 4rem; font-weight: 900; line-height: 1.2; color: #555;">
                    <b>Gana experiencia real y <br>amplía tus oportunidades</b>
                </h1>

                <p class="mb-5" style="background: linear-gradient(to right, #fd2a0eff, #f5984cff); 
                            color: white; 
                            border-radius: 15px; 
                            padding: 1.7rem 1.5rem;
                            max-width: 75%;
                            margin: 0 auto;
                            font-size: 1.5rem; 
                            font-weight: 600;">
                    80 horas de Formación en Centros de Trabajo (FCT)
                </p>

                <p class="py-2 mb-4"
                    style="font-size: 1.4rem; line-height: 1.6; max-width: 90%; margin: 0 auto; color: #555;">
                    Este módulo práctico es obligatorio para obtener tu certificado de<br>
                    profesionalidad y se realiza al finalizar el curso
                </p>

                <p class="py-2 mb-4"
                    style="font-size: 1.4rem; line-height: 1.6; max-width: 90%; margin: 0 auto; color: #555;">
                    Es una oportunidad para aplicar tus conocimientos en un entorno profesional,<br>
                    reforzar tu perfil, ampliar tu red de contactos y abrirte puertas a nuevos retos<br>
                    laborales.
                </p>

                <p class="py-2 mb-4"
                    style="font-size: 1.6rem; font-weight: 700; max-width: 90%; margin: 0 auto; color: #555;">
                    Una herramienta clave para tu empleabilidad
                </p>
            </div>
        </div>
    </section>


    <section class="mb-5 text-center text-white d-flex align-items-start justify-content-center" style="background-image: url('{{asset('images/Imagenes-L1-2.png')}}');
            background-size: cover;
            background-position: center 80%;
            background-repeat: no-repeat;
            min-height: 95vh;
            padding-top: 8vh;
            position: relative;">

        <div class="position-absolute top-0 start-0 w-100 h-100"></div>
        <div class="container position-relative">
            <div class="mx-auto" style="max-width: 900px;">

                <h1 class="fw-bold mb-5" style="font-size: clamp(2rem, 5vw, 4rem); line-height: 1.1;">
                    Becas y ayudas para personas <br>en situación de desempleo
                </h1>

                <p class="mb-5" style="font-size: clamp(1rem, 2vw, 1.6rem);">
                    Queremos que solo te preocupes de aprender, por eso <br>
                    ponemos a tu disposición diferentes ayudas económicas
                </p>

                <div class="row g-3 mb-4">
                    <div class="col-12 col-sm-6">
                        <div class="bg-white text-dark rounded-3 p-3 h-100">
                            <p class="mb-0" style="font-size: clamp(0.9rem, 2vw, 1.3rem);">
                                Ayudas de <br><b>Transporte</b>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="bg-white text-dark rounded-3 p-3 h-100">
                            <p class="mb-0" style="font-size: clamp(0.9rem, 2vw, 1.3rem);">
                                Ayudas a la <br><b>Conciliación</b>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row g-3">
                    <div class="col-12 col-sm-6">
                        <div class="bg-white text-dark rounded-3 p-3 h-100">
                            <p class="mb-0" style="font-size: clamp(0.9rem, 2vw, 1.3rem);">
                                Becas a personas <br><b>discapacitadas</b>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="bg-white text-dark rounded-3 p-3 h-100">
                            <p class="mb-0" style="font-size: clamp(0.9rem, 2vw, 1.3rem);">
                                Becas a víctimas de <br><b>violencia de género</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container-fluid py-5">
            <div class="mx-auto"
                style="background-color: #e0ddddff; border-radius: 16px; padding: 3rem; max-width: 90%; color: #555;">

                <div class="row align-items-center justify-content-between">

                    <div class="col-12 col-md-4 text-center text-md-start d-flex flex-column justify-content-center"
                        style="max-width: 100%; margin-left: 0;">

                        <h1 class="mb-0 fw-bold" style="font-size: clamp(2rem, 5vw, 4rem);">
                            Ventajas de <br>nuestros cursos
                        </h1>

                        <p class="mt-4 text-center text-lg-start mx-auto mx-lg-0" style="background: linear-gradient(to right, #fd2a0eff, #f5984cff); 
                                color: white; 
                                border-radius: 15px; 
                                padding: clamp(1rem, 2vw, 1.7rem) clamp(3rem, 10vw, 7.5rem);
                                width: fit-content;
                                font-size: clamp(1.2rem, 3vw, 2rem);">
                            ¿Cuál elegir?
                        </p>
                    </div>

                    <div class="col-12 col-md-7 mt-4 mt-md-0">
                        <div class="row mb-4 justify-content-center g-3">
                            <div class="col-6 col-lg-5">
                                <div class="bg-white rounded-3 d-flex align-items-center justify-content-center"
                                    style="min-height: clamp(120px, 25vw, 250px); font-size: clamp(1rem, 2vw, 1.6rem); text-align: center;">
                                    <p class="mb-0">Subvencionados <br>y 100% gratuitos</p>
                                </div>
                            </div>

                            <div class="col-6 col-lg-5">
                                <div class="bg-white rounded-3 d-flex align-items-center justify-content-center"
                                    style="min-height: clamp(120px, 25vw, 250px); font-size: clamp(1rem, 2vw, 1.6rem); text-align: center;">
                                    <p class="mb-0">Formación <br>oficial</p>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center g-3">
                            <div class="col-6 col-lg-5">
                                <div class="bg-white rounded-3 d-flex align-items-center justify-content-center"
                                    style="min-height: clamp(120px, 25vw, 250px); font-size: clamp(1rem, 2vw, 1.6rem); text-align: center;">
                                    <p class="mb-0">Agencia de <br>colocación</p>
                                </div>
                            </div>

                            <div class="col-6 col-lg-5">
                                <div class="bg-white rounded-3 d-flex align-items-center justify-content-center"
                                    style="min-height: clamp(120px, 25vw, 250px); font-size: clamp(1rem, 2vw, 1.6rem); text-align: center;">
                                    <p class="mb-0">Prácticas en las <br>mejores empresas</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>


    <section id="form" class="position-relative d-flex align-items-center" style="background-image: url('{{asset('images/Imagenes-L1-3.png')}}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;">

        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-12 col-xl-10 offset-xl-1">
                    <div class="row my-5 py-5 align-items-stretch">

                        <div class="col-12 col-lg-5 mb-5 d-flex">
                            <div class="container-fluid bg-transparent-black rounded-4 p-4 d-flex align-items-center">
                                <div class="row w-100">
                                    <div class="col-12 col-lg-10 offset-lg-1">
                                        <h1 class="text-white fw-bold"
                                            style="font-size: clamp(2rem, 4vw, 4rem); line-height: 1.1;">
                                            ¿Quieres <br>estudiar y <br>no sabes qué?
                                        </h1>
                                        <h4 class="text-white mt-4 fw-medium"
                                            style="font-size: clamp(1.3rem, 2.5vw, 2.7rem);">
                                            Rellena el formulario <br>y te ayudamos
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-7 d-flex">
                            <div class="container-fluid d-flex align-items-center">
                                <div class="row w-100">
                                    <div class="col-12 col-lg-11 col-xl-10 offset-lg-0 offset-xl-1">
                                        <form method="post" action="{{url('bootcamp-en-marketing-digital')}}">
                                            {{csrf_field()}}
                                            @if(request()->has('qr'))
                                                <input type="hidden" name="qr" value="{{ request('qr') }}">
                                            @endif

                                            <div class="fields">

                                                <div class="mb-3">
                                                    <label class="text-white" for="name">Nombre:</label>
                                                    <input type="text" id="name" name="name" class="form-control"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="text-white" for="surnames">Apellidos:</label>
                                                    <input type="text" id="surnames" name="surnames"
                                                        class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="text-white" for="email">Email:</label>
                                                    <input type="email" id="email" name="email" class="form-control"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="text-white" for="phone">Teléfono:</label>
                                                    <input type="tel" id="phone" name="phone"
                                                        pattern="^\+?[0-9\s\-]{7,15}$" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="text-white mb-2" for="current-position">Estudios
                                                        primarios:</label>
                                                    <select id="current-position" name="current_position"
                                                        class="form-control" required>
                                                        <option value="" hidden>Seleccione una opción</option>
                                                        <option value="Primarios">Estudios Primarios</option>
                                                        <option value="ESO">ESO / FP I / BUP / Acceso ciclo medio /
                                                            Competencias clave 2</option>
                                                        <option value="CF">CF Grado Medio / CF Grado Superior / FP II /
                                                            Bachiller / COU / Acceso Cliclo Superior / Competencias
                                                            clave 3</option>
                                                        <option value="Univ">Acceso Univ. Mayores de 25</option>
                                                        <option value="Diplomatura">Diplomatura / Licenciatura / Grado
                                                        </option>
                                                        <option value="Titulacion">Titulación no homologada en España
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="text-white mb-2" for="contact-way">Situación
                                                        actual:</label>
                                                    <select id="contact-way" name="contact_way" class="form-control"
                                                        required>
                                                        <option value="" hidden>Seleccione una opción</option>
                                                        <option value="Whatsapp">Desempleado/a</option>
                                                        <option value="Llamada telefónica">Ocupado</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div
                                                class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mt-4 gap-3">
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="acceptConditions" required>
                                                    <label class="ms-2 text-white" for="acceptConditions">
                                                        Acepto aviso legal
                                                    </label>
                                                </div>
                                                <button type="submit" class="border-0 px-4 py-2 fw-bold" style="background: linear-gradient(to right, #fd2a0e, #f5984c);
                                                        color: white;
                                                        border-radius: 12px;
                                                        font-size: clamp(1rem, 1.5vw, 1.3rem);
                                                        padding: 1rem 3rem;
                                                        min-width: 200px;">
                                                    ENVIAR
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-black py-5">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12 offset-0">
                    <h1 class="text-white"><b>Preguntas frecuentes</b></h1>
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne">
                                    ¿Los cursos son 100% gratuitos?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Sí. Todos nuestros cursos están 100% subvencionados por el Ministerio de Educación,
                                    Formación Profesional y Deportes, por lo que no tienen ningún coste para el
                                    alumnado.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo">
                                    ¿Hay prácticas en empresas reales?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    En casi todos los cursos sí. Los certificados de profesionalidad incluyen un
                                    <b>módulo obligatorio de prácticas (FCT)</b> en empresas del sector, lo que permite
                                    poner en práctica lo aprendido y ganar experiencia real. En algunos cursos más
                                    cortos o específicos no hay prácticas, pero siempre te lo indicamos claramente en la
                                    información de cada curso.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree">
                                    ¿Necesito estudios previos?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Depende del curso. Algunos certificados requieren un nivel académico mínimo, pero
                                    muchos están abiertos sin necesidad de formación previa. En cada curso encontrarás
                                    los requisitos específicos.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour">
                                    ¿Qué tengo que hacer para inscribirme?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Solo tienes que buscar el curso que más te interese en el listado de nuestra web y
                                    entrar en su ficha. Allí encontrarás un formulario de preinscripción para rellenar
                                    con tus datos. Una vez recibamos tu solicitud, nuestro equipo se pondrá en contacto
                                    contigo para confirmar tu plaza y explicarte los siguientes pasos.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{asset('js/mainv4.js')}}"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N3MNDH7" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

</body>

</html>