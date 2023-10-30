<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Denuncia</title>
    <link rel="stylesheet" href="styleform.css">

    <script src="jspdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script src="app.js"></script>
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
        <form id="/mi-ruta" method="POST" autocomplete="off" enctype="multipart/form-data" >
        {{{ csrf_field() }}}
        <h1>DATOS DEL DENUCIANTE</h1>
            <div class="form-group">
                <div class="form-content">
                    <label for="">Nombre y Apellidos (Denuciante)</label>
                    <input type= "text" id="nombre" name="nombre" placeholder="Nombres y Apellidos (Denuciante)">
                </div>
            </div>

            <div class="form-group"> 
            <div class="form-content">
                    <label for="ci">Número de Carnet</label>
                    <input type= "text" id="ci" name="ci" placeholder="Numero de Carnet sin Extension">
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
                    <label for="direccion">Direccion General</label>
                    <input type= "text" id="direccion" name="direccion" placeholder="Direccion General">
                </div>
                <div class="form-content">
                    <label for="unipolicial">Unidad Policial</label>
                    <input type= "text" id="unipolicial" name="unipolicial" placeholder="Unidad Policial">
                </div>
                <div class="form-content">
                    <label for="cargo">Cargo que Ocupa</label>
                    <input type= "text" id="cargo" name="cargo" placeholder="Cargo">
                </div>
            </div>
            <h1>DETALLES DE LA DENUNCIA</h1>
            <div class="form-group">   
              
                <div class="form-content">
                    <label for="ciudad">Ciudad</label>
                    <input type= "text" id="ciudad" name="ciudad" placeholder="Ciudad">
                </div>
                <div class="form-content">
                <label for="departamento">Departamento</label>
                    <select name="departamento" id="departamneto">
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
            </div>

            <div class="form-group">     
                <!-- ---->
                <label for="detalle">Detalle del hecho</label>
                <textarea name="detalle" id="detalle" cols="60" rows="10" placeholder="Describa el hecho"></textarea>
                <!-- -->
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

            <div class="form-group">     
                <div class="form-content">
                    <label for="U">Ubicacion actual</label>
                    <?php
                     $datos=unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=190.117.81.91"));
                    ?>
                   
                        <?php
                            $latitud=$datos["geoplugin_latitude"];
                            $longitud=$datos["geoplugin_longitude"];
                            
                        ?>
                        
                    <label for="latitud">Latitud:</label>
                    <input type= "text" id="latitud" name="latitud" placeholder="<?php echo $latitud ?>">
                    <label for="longitud">Longitud: </label>
                    <input type= "text" id="latitud" name="latitud" placeholder="<?php echo $longitud ?>">
                   
                </div>


            <div class="form-group">  
                 <div class="form-content">
                     <input class="btn" type="submit" name="denuncia" value="Enviar Denuncia">
                </div>   
                
                <div class="form-content">
                       
                 <input class="btn" type="submit"  value="Generar PDF">
                </div> 

                 
              
            </div>
            
                  

        </form>
    </div>
</body>
</html>

