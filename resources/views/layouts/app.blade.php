<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Proyecto 281') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />
    <div class="min-h-screen mt-0 bg-left justify-center"
        style="background-image: url('https://img.freepik.com/vector-gratis/fondo-textura-hoja-papel-arrugado-blanco_1017-31714.jpg'); background-size: cover;">
        @livewire('navigation')

        @if (request()->is('/'))
            @livewire('carousel-component')
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <!-- Footer -->
        <div>
            <!-- Footer -->
            <footer class="text-center text-lg-start bg-white text-muted">
                <!-- Section: Social media -->
                <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom h-15"
                    style="background: #4568DC;  /* fallback for old browsers */
                    background: -webkit-linear-gradient(to right, #B06AB3, #4568DC);  /* Chrome 10-25, Safari 5.1-6 */
                    background: linear-gradient(to right, #B06AB3, #4568DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                    ">
                    <!-- Left -->
                    <div class="me-5 d-none d-lg-block">
                        <span class="text-cyan-50">Conectate con nosotros a través de nuestras redes sociales:</span>
                    </div>
                    <!-- Left -->


                    <!-- Facebook -->
                    <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#!"
                        role="button"><i class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="#!"
                        role="button"><i class="fab fa-twitter"></i></a>

                    <!-- Google -->
                    <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#!"
                        role="button"><i class="fab fa-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="#!"
                        role="button"><i class="fab fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!"
                        role="button"><i class="fab fa-linkedin-in"></i></a>
                    <!-- Github -->
                    <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="#!"
                        role="button"><i class="fab fa-github"></i></a>

                    <!-- Section: Social media -->
        </div>
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3 text-secondary"></i>Juntos contra la Violencia a la Mujer
                        </h6>
                        <p>
                            Tenemos derecho a que todos los minutos de libertad,
                            de felicidad, de amor, de vida y más.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Conoce Más
                        </h6>
                        <p>
                            <a href="https://comunidad.org.bo/assets/archivos/publicacion/ddbdcaa6f6be9ac3f3024b15b81d3e93.pdf"
                                class="text-reset">Policia Boliviana</a>
                        </p>
                        <p>
                            <a href="https://www.defensoria.gob.bo/noticias/defensoria-del-pueblo-exige-igualdad-y-justicia-frente-a-las-violencias-que-enfrentan-las-mujeres"
                                class="text-reset">Defensoria del Pueblo</a>
                        </p>
                        <p>
                            <a href="https://www.alianzaporlasolidaridad.org/noticias/niunamenos-el-grito-feminista-que-ha-tomado-las-calles-de-bolivia"
                                class="text-reset">Ni una Menos</a>
                        </p>
                        <p>
                            <a href="https://www.coordinadoradelamujer.org.bo/observatorio/archivos/galeria/adjunto/SLIM_139(1).pdf"
                                class="text-reset">Slim</a>
                        </p>
                    </div>

                    <!-- Grid column -->
                    {{-- LLAMAR A CENTROS DE APOYO--}}
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-3">Contacta</h6>
                        <p><i class="fas fa-phone me-3 text-secondary"></i>Fiscalia-Boliviana 80101233</p>
                        <p><i class="fas fa-print me-3 text-secondary"></i>FLCV-La Paz 61000523 y 67008570</p>
                        <p><i class="fas fa-print me-3 text-secondary"></i>FLCV-El Alto 72042202</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4 text-cyan-50"
            style="background: #4568DC;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #B06AB3, #4568DC);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #B06AB3, #4568DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        ">
            © 2023 Copyright:
            <a class="text-reset fw-bold"
                href="https://www.paho.org/es/temas/violencia-contra-mujer">ViolenciaContraMujer.com</a>
        </div>
        <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>

    </div>




    @stack('modals')

    @livewireScripts
</body>

</html>
