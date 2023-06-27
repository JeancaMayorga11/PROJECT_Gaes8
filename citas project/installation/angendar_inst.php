<!DOCTYPE html>
<html lang="en">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        </style>
    <head>
        <meta charset="UTF-8">
        <title>Installation</title>
        <link rel="icon" href="images/installation.jfif">
        <link rel="stylesheet" href="Citas Project/css/agendar.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    </head>


    <body>
    
        <div class="contact_form">
            <div class="formulario">
                <div class="log">
                    <img src="images/acss-removebg-preview (1).png" alt="logo" width="30%">
                </div>
            <form action="" method="post">
            <p>
            <label for="nombre" class="colocar_nombre">Nombre
                <span class="obligatorio"></span>
                </label>
                <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Nombre">
            </p>

            <p>
                <label for="email" class="colocar_email">Correo electrónico
                <span class="obligatorio"></span>
                </label>
                <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Email">
                </p>

                <p>             
                    <label for="Numero de identificacion" class="Numero de identificacion">Número de identificación</label>
                   
                    <input type="text" name="Numero de identificacion" id="identificacion" required="obligatorio" placeholder="Número ID">
                    </p>
                    
                <p> 

                <label for="telefone" class="colocar_telefono">Número de celular</label>
               
                <input type="number" name="introducir_telefono" id="telefono" required="obligatorio" placeholder="Celular">

                </p> 

                <p>
                    <label for="Dirección">Dirección de residencia
                    </label>
                    <input type="text" name="Location" id="adress" required="obligatorio" placeholder="Dirección">
                </p>


                <p>
                <label for="ciudad" class="tam_1">Ciudad de residencia</label>
                </p>
                <p>
                <select name="ciudad" id="ciudad" class="tam_2" required="obligatorio">

                <option value="">Seleccione una ciudad</option>
                <option value="Varsovia">Varsovia</option>
                <option value="Poznan">Poznan</option>
                <option value="Cracovia">Cracovia</option>
                </select>
                </p>

            

                <p>
                    <label for="ciudad" class="tam_1">Seleccione la fecha del mantenimiento</label>
                    </p>
                    <p>
                    <input type="date" name="Location" id="adress" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required="obligatorio" placeholder="Fecha">
                </p>

                
                    <p>
                        <label for="ciudad" class="tam_1">Seleccione la hora de la visita</label>
                        </p>
                        <p>
                        <select name="ciudad" id="ciudad" class="tam_3" required="obligatorio">
                    
                        <option value="">Seleccione un horario </option>
                        <option value="Corrective">9:00 a.m</option>
                        <option value="Predicitive">10:00 a.m</option>
                        <option value="Corrective">11:00 a.m</option>
                        <option value="Corrective">12:00 p.m</option>
                        <option value="Corrective">2:00 p.m</option>
                        <option value="Corrective">3:00 p.m </option>
                        <option value="Corrective">4:00 p.m</option>
                        <option value="Predicitive">5:00 p.m</option>
                        <option value="Corrective">6:00 p.m</option>
                        </select>
                    </p>

                <br>
                                   
            <a type="submit" name="enviar_formulario" id="enviar"><p>Agendar cita</p></a>
            </form>
        
        </div>
    </body>
</html>