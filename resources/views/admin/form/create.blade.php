<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Denuncia</title>
    
    
    <!--<script type="text/javascript" src="../js/cart_2.js"></script>-->
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(
                180deg,
                rgb(69, 4, 75) 0%,
                rgb(119, 27, 107) 50%,
                rgb(179, 24, 166) 100%
            );
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .form-container{
            text-align: center;
        }

        .form-container h2{
            font-size: 40px;
            color: rgb(255, 255, 255);
            margin-bottom:10px ;
        }

        .form-container h1{
            font-size: 20px;
            color: rgb(82, 230, 62);
            margin-bottom:10px ;
        }

        .form-container p{
            font-size: 18px;
            color: darkgray;
            margin-bottom: 50px;
        }

        form{
            padding: 50px;
            background: linear-gradient(
                50deg,
                rgb(131, 9, 80) 0%,
                rgb(51, 69, 145) 50%,
                rgb(143, 12, 88) 100%
            );
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0,  0, 0.2);
            width: 1000px;
            text-align: left;
            display: flex;
            flex-direction:column ;
        }

        .form-group{
            display: grid;
            grid-template-columns: repeat(2,1fr);
            grid-gap: 40px ;
            margin-bottom: 40px;
        }

        .form-content{
            display: flex;
            flex-direction: column;
        }

        label{
            color: aliceblue;
            font-size: 15px;
            margin-bottom: 15px;
        }

        input, textarea, select{
            padding: 20px 15px;
            background-color: rgb(16, 7, 26);
            border: 0;
            outline: none;
            border-radius: 25px;
            color: antiquewhite;
            font-size: 16px;
        }

        ::placeholder{
            color: darkgray;
            font-size: 16px;
        }

        textarea{
            margin-bottom: 40px;
        }

        .btn{
            padding: 17px 15px;
            width: 180px;
            align-self: center;
            text-transform: capitalize;
            color: beige;
            font-size: 16px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            background: linear-gradient(
                90deg,
                rgb(67, 239, 124) 0%,
                rgb(20, 78, 8) 100%
            );

        }

        .success{
            position: absolute;
            top: 50px;
            color: rgb(2, 227, 211);
            font-size: 18px;

        }

        .error{
            position: absolute;
            top: 50px;
            color: red;
            font-size: 18px;
        }
        #map {
            height: 400px; /* Establece una altura */
            width: 100%; /* Opcional: ancho completo */
        }

        @media(max-width:991px){
            body{
                padding: 30px;
            }
            form{
                width: 100%;
            }
            .form-group{
                grid-template-columns: repeat(1,1fr);
                grid-gap:20px;
                margin-bottom: 20px;
            }

            textarea{
                margin-bottom: 30px;

            }
            
        }

    </style>
</head>
<body>
    <div class="form-container" >
        
        <br>
        <h2>DENUNCIA</h2>
        <p>
        EL PRESENTE FORMULARIO RECIBE DENUNCIAS DE 
        MALOS TRATOS Y TODO TIPO DE  <BR>
        VIOLENCIA CONTRA MUEJERES,HOMBRES, NIÑAS/NIÑOS, ADULTOS MAYORES Y JOVENES.
        </p>
        <div class="row">
            <div class="col-md-6">
                
                <form id="/mi-ruta" method="POST" autocomplete="off" enctype="multipart/form-data" >
                    {{{ csrf_field() }}}
                    <h1>DATOS DEL DENUCIANTE</h1>
                    <div class="form-group">
                        <div class="form-content">
                            <label for="nombre">Nombre y Apellidos (Denuciante)</label>
                            <input type= "text" id="nombre" name="nombre" placeholder="Nombres y Apellidos (Denuciante)">
                        </div>
                        <div class="form-content">
                            <label for="sexo_denunciante">Sexo</label>
                                <select name="sexo_denunciante" id="sexo_denunciante">
                                    <option disabled selected>Elige una opción</option>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                </select>
                        </div>
                        <div class="form-content">
                            <label for="ci">Número de Carnet</label>
                            <input type= "text" id="ci" name="ci" placeholder="Numero de Carnet sin Extension">
                        </div> 
                        <div class="form-content">
                            <label for="extension">Extension</label>
                                <select name="extension" id="extension">
                                    <option disabled selected>Elige una opción</option>
                                    <option value="LP">LP</option>
                                    <option value="CH">CH</option>
                                    <option value="OR">OR</option>
                                    <option value="PT">PT</option>
                                    <option value="PD">PD</option>
                                    <option value="BN">BN</option>
                                    <option value="SZ">SZ</option>
                                    <option value="TJ">TJ</option>
                                    <option value="CQ">CQ</option>
                                    <option value="Sin Extension">Sin Extension</option>
                                </select>
                        </div>
                        <div class="form-content">
                            <label for="edad">Edad</label>
                            <input type= "text" id="edad" name="edad" placeholder="Edad Denunciante">
                        </div> 
                        <div class="form-content">
                            <label for="direccion">Direccion</label>
                            <input type= "text" id="direccion" name="direccion" placeholder="Direccion (Denuciante)">
                        </div>
                        <div class="form-content">
                            <label for="email">Correo Electronico</label>
                            <input type= "email" id="email" name="email" placeholder="Correo">
                        </div>
                        <div class="form-content">
                            <label for="telefono">Núm. de Telefono o Celular </label>
                            <input type= "tel" id="telefono" name="telefono" placeholder="Número de Telefono o Celular">
                        </div>

                    </div>
                    <!------------------------------------------>
                    <h1>DATOS DE LA PERSONA DENUNCIADA</h1>
                    <div class="form-group">
                        <div class="form-content">
                            <label for="denunciado">Nombres y Apellidos</label>
                            <input type= "text" id="denunciado" name="denunciado" placeholder="Nombres y Apellidos">
                        </div>
                        <div class="form-content">
                            <label for="direccion_denunciado">Direccion General</label>
                            <input type= "text" id="direccion_denunciado" name="direccion_denunciado" placeholder="Direccion General">
                        </div>
                        <div class="form-content">
                            <label for="cargo_ocupa">Cargo Ocupa</label>
                            <input type= "text" id="cargo_ocupa" name="cargo_ocupa" placeholder="Unidad Policial">
                        </div>
                        <div class="form-content">
                            <label for="ci_denunciado">Número de Carnet</label>
                            <input type= "text" id="ci_denunciado" name="ci_denunciado" placeholder="Numero de Carnet sin Extension">
                        </div> 
                        <div class="form-content">
                            <label for="edad_denunciado">Edad</label>
                            <input type= "text" id="edad" name="edad_denunciado" placeholder="Edad Denunciante">
                        </div> 
                        <div class="form-content">
                            <label for="telefono_denunciado">Núm. de Telefono o Celular</label>
                            <input type= "tel" id="telefono_denunciado" name="telefono_denunciado" placeholder="Número de Telefono o Celular">
                        </div>
                        <div class="form-content">
                            <label for="parentezco">Parentezco</label>
                            <input type= "text" id="parentezco" name="parentezco" placeholder="Unidad Policial">
                        </div>
                    </div>
                    <h1>TESTIGOS DEL DENUNCIANTE</h1>
                    <div class="form-group">
                        <div class="form-content">
                            <label for="testigo">Nombres y Apellidos </label>
                            <input type= "text" id="testigo" name="testigo" placeholder="Nombres y Apellidos">
                        </div>
                        <div class="form-content">
                            <label for="parentezco_testigo">Parentezco</label>
                            <input type= "text" id="parentezco_testigo" name="parentezco_testigo" placeholder="Direccion General">
                        </div>
                    </div>
                    <h1>DETALLES DE LA DENUNCIA</h1>
                    <div class="form-group">   
                        <div class="form-content">
                            <label for="fecha_denuncia">Fecha de Denuncia</label>
                            <input type= "date" id="fecha_denuncia" name="fecha_denuncia" >
                        </div>
                        <div class="form-content">
                            <label for="lugar">Lugar del Hecho</label>
                            <input type= "text" id="lugar" name="lugar" placeholder="Lugar del Hecho">
                        </div>
                        <div class="form-content">
                            <label for="departamento">Departamento</label>
                                <select name="departamento" id="departamento">
                                    <option disabled selected>Elige una opción</option>
                                    <option value="La Paz">La Paz</option>
                                    <option value="Cochabamba">Cochabamba</option>
                                    <option value="Oruro">Oruro</option>
                                    <option value="Potosi">Potosi</option>
                                    <option value="Pando">Pando</option>
                                    <option value="Beni">Beni</option>
                                    <option value="Santa Cruz">Santa Cruz</option>
                                    <option value="Tarija">Tarija</option>
                                    <option value="Chuquisaca">Chuquisaca</option>
                                </select>
                        </div>
                        <div class="form-content">
                            <label for="tipo_violencia">Tipo de Violencia</label>
                                <select name="tipo_violencia" id="tipo_violencia">
                                    <option disabled selected>Elige una opción</option>
                                    <option value="Fisica">Fisica</option>
                                    <option value="Psicologica">Psicologica</option>
                                    <option value="Sexual">Sexual</option>
                                    <option value="Laboral">Laboral</option>
                                    <option value="Otro">Otro</option>
                                </select>
                        </div>
                    </div>

                    <div class="form-group">     
                        
                        <label for="detalle">Detalle del hecho</label>
                        <textarea name="detalle" id="detalle" cols="60" rows="10" placeholder="Describa el hecho"></textarea>
                        
                    </div>

                    <div class="form-group">     
                        <div class="form-content">
                            <label for="fecha">Fecha del hecho</label>
                            <input type= "date" id="fecha" name="fecha" >
                        </div>
                        
                        <div class="form-content">
                            <label for="archivo">Adjuntar archivo(Evidencia)</label>
                            <input type= "file" id="archivo" name="archivo" >
                            
                        </div>
                    </div>
                    <div id="map" style="height: 400px;"></div> <!-- Contenedor del mapa -->
                    
                    <div class="form-group">     
                        <div class="form-content">
                            <input type="submit" name="guardar" value="Enviar Denuncia">
                        </div> 
                    </div>

                    <form id="" method="POST" action="/guardar-ubicacion">
                        <!-- Otros campos del formulario -->
                        <input type="hidden" id="latitud" name="latitud" />
                        <input type="hidden" id="longitud" name="longitud" />
                    </form>
                    
                    
                    <script>
                        function initMap() {
                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: { lat:-16.290154, lng:-63.588653}, // Nueva York como ejemplo
                                zoom: 5
                            });

                            var marker = new google.maps.Marker({
                                position: { lat:-16.290154, lng:-63.588653},
                                map: map,
                                draggable: true
                            });

                            marker.addListener('dragend', function(event) {
                                document.getElementById('latitud').value = event.latLng.lat();
                                document.getElementById('longitud').value = event.latLng.lng();
                            });
                        }
                        function enviarDenuncia(event) {
                            event.preventDefault(); // Evitar el envío del formulario por defecto

                            // Obtener los valores de latitud y longitud del mapa
                            var latitud = document.getElementById('latitud').value; // Suponiendo que estos valores ya fueron actualizados por el mapa
                            var longitud = document.getElementById('longitud').value; // Suponiendo que estos valores ya fueron actualizados por el mapa

                            // Actualizar los campos ocultos
                            document.getElementById('latitud').value = latitud;
                            document.getElementById('longitud').value = longitud;

                            // Enviar el formulario
                            document.getElementById('miFormulario').submit();
                        }
                    </script>       
                                <!-- Reemplaza "TU_CLAVE_DE_API" con tu clave de API de Google Maps -->
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoHaKhaWJyfqDuHKVrTHErkpf-yBn-Scs&callback=initMap" async defer></script>
 
                    
                </form>
            </div>
            <div class="col-md-6">
                <form id="pdfForm" method="POST" action="/ruta/generar-pdf" style="display: none;">
                    {{ csrf_field() }}
                    <input type="hidden" name="nombre" value="">
                    <div class="form-content">
                        <input type="submit" name="pdf" value="Generar PDF">
                    </div>
                </form>
            </div> 
           


        </div>
    </div>
</body>
</html>

