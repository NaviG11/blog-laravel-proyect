<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />


        <div class="min-h-screen mt-0 bg-left justify-center" style="background-image: url('https://img.freepik.com/vector-gratis/fondo-textura-hoja-papel-arrugado-blanco_1017-31714.jpg'); background-size: cover;">
            @livewire('navigation')
            
            <div>
                
            </div>

            <!-- Masthead-->
            <header class="masthead text-white text-center" style="background-color: rgba(162, 103, 138);">
                <div class="container d-flex align-items-center flex-column">
                    <!-- Masthead Avatar Image-->
                    <img class="masthead-avatar mb-1" src="https://i.pinimg.com/originals/08/fe/42/08fe4272f6c32d4fa9d978a8a0db0606.png" alt="..." />
                    <!-- Masthead Heading-->
                    <h1 class="masthead-heading text-uppercase mb-0">Alto a la violencia</h1>
                    <!-- Icon Divider-->
                    <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <!-- Masthead Subheading-->
                    <p class="masthead-subheading font-weight-light mb-0">Contra todo tipo de violencia</p>
                </div>
            </header>
            
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <!-- Footer -->
            <div>
                <!-- Footer -->
                <footer class="text-center text-lg-start bg-white text-muted" >
                <!-- Section: Social media -->
                <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom h-15" style="background-color: rgba(102, 37, 73);">
                    <!-- Left -->
                    <div class="me-5 d-none d-lg-block">
                    <span class="text-cyan-50">Conectate con nosotros a traves de las redes sociales:</span>
                    </div>
                    <!-- Left -->

                
                <!-- Facebook -->
                <a
                    class="btn text-white btn-floating m-1"
                    style="background-color: #3b5998;"
                    href="#!"
                    role="button"
                    ><i class="fab fa-facebook-f"></i
                ></a>

                <!-- Twitter -->
                <a
                    class="btn text-white btn-floating m-1"
                    style="background-color: #55acee;"
                    href="#!"
                    role="button"
                    ><i class="fab fa-twitter"></i
                ></a>

                <!-- Google -->
                <a
                    class="btn text-white btn-floating m-1"
                    style="background-color: #dd4b39;"
                    href="#!"
                    role="button"
                    ><i class="fab fa-google"></i
                ></a>

                <!-- Instagram -->
                <a
                    class="btn text-white btn-floating m-1"
                    style="background-color: #ac2bac;"
                    href="#!"
                    role="button"
                    ><i class="fab fa-instagram"></i
                ></a>

                <!-- Linkedin -->
                <a
                    class="btn text-white btn-floating m-1"
                    style="background-color: #0082ca;"
                    href="#!"
                    role="button"
                    ><i class="fab fa-linkedin-in"></i
                    
                ></a>
                <!-- Github -->
                <a
                    class="btn text-white btn-floating m-1"
                    style="background-color: #333333;"
                    href="#!"
                    role="button"
                    ><i class="fab fa-github"></i
                ></a>
                
                <!-- Section: Social media -->
  </div>
                </section>
                <!-- Section: Social media -->

                <!-- Section: Links  -->
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3" >
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" >
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3 text-secondary"></i>Juntos contra la Violencia a la Mujer
                        </h6>
                        <p>
                            Basta ya de minutos de miedo, de humillación, de dolor, 
                            de silencio. Tenemos derecho a que todos los minutos sean de libertad, 
                            de felicidad, de amor, de vida.
                        </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Conoce Mas
                        </h6>
                        <p>
                            <a href="https://comunidad.org.bo/assets/archivos/publicacion/ddbdcaa6f6be9ac3f3024b15b81d3e93.pdf" class="text-reset">Policia Boliviana</a>
                        </p>
                        <p>
                            <a href="https://www.defensoria.gob.bo/noticias/defensoria-del-pueblo-exige-igualdad-y-justicia-frente-a-las-violencias-que-enfrentan-las-mujeres" class="text-reset">Defensoria del Pueblo</a>
                        </p>
                        <p>
                            <a href="https://www.alianzaporlasolidaridad.org/noticias/niunamenos-el-grito-feminista-que-ha-tomado-las-calles-de-bolivia" class="text-reset">Ni una Menos</a>
                        </p>
                        <p>
                            <a href="https://www.coordinadoradelamujer.org.bo/observatorio/archivos/galeria/adjunto/SLIM_139(1).pdf" class="text-reset">Slim</a>
                        </p>
                        </div>
                        
                        <!-- Grid column -->
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
                <div class="text-center p-4 text-cyan-50" style="background-color: rgba(102, 37, 73);">
                    © 2023 Copyright:
                    <a class="text-reset fw-bold" href="https://www.paho.org/es/temas/violencia-contra-mujer">ViolenciaContraMujer.com</a>
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
