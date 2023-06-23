<!DOCTYPE html>
<html lang="en">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        </style>
    <head>
        <meta charset="UTF-8">
        <title>Installation</title>
        <link rel="icon" href="images/installation.jfif">
        <link rel="stylesheet" href="css/agendar.css">
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
                <form action="submeter" method="post">
                <p>
                        <label for="nombre" class="colocar_nombre">Nombre
                            <span class="obligatorio"></span>
                        </label>
                            <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Type your name">
                </p>

                <p>
                    <label for="email" class="colocar_email">Correo electrónico
                    <span class="obligatorio"></span>
                    </label>
                    <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Type your Email ">
                </p>

                <p>             
                    <label for="Numero de identificacion" class="Numero de identificacion">Número de identificación</label>
                    <input type="text" name="Numero de identificacion" id="identificacion" placeholder="Type your ID number">
                </p>

                <p>             
                    <label for="telefone" class="colocar_telefono">Telephone
                    </label>
                    <input type="tel" name="introducir_telefono" id="telefono" required="obligatorio" placeholder="Type your phone number">
                </p> 
                <p>             
                    <label for="Dirección">Address
                    </label>
                    <input type="text" name="Location" id="adress" required="obligatorio" placeholder="Type your address">
                    </p>

                <p>
                    <label for="ciudad" class="tam_1">City of residence</label>
                    </p>
                    <p>
                    <select name="ciudad" id="ciudad" class="tam_2">
                    <option value="">Select a city</option>
                    <option value="Varsovia">Warsaw</option>
                    <option value="Poznan">Poznan</option>
                    <option value="Cracovia">Krakow</option>
                    </select>
                </p>

                <p>
                    <label for="ciudad" class="tam_1">Select a day of installation</label>
                    </p>
                    <p>
                    <select name="ciudad" id="ciudad" class="tam_2">
                    <option value="">Select a day</option>
                    <option value="Varsovia">Monday</option>
                    <option value="Poznan">Tuesday</option>
                    <option value="Cracovia">Wednesday</option>
                    <option value="Varsovia">Thursday</option>
                    <option value="Poznan">Friday</option>
                    <option value="Cracovia">Saturday</option>
                    
                    </select>
                </p>
                
                <p>
                    <label for="ciudad" class="tam_1">Select a time of installation</label>
                    </p>
                    <p>
                    <select name="ciudad" id="ciudad" class="tam_3">
                    <option value="">Select a time </option>
                    <option value="Predicitive">09:00am</option>
                    <option value="Predicitive">10:00am</option>
                    <option value="Corrective">11:00am</option>
                    <option value="Corrective">12:00pm</option>
                    <option value="Corrective">2:00pm</option>
                    <option value="Corrective">3:00PM </option>
                    <option value="Corrective">4:00PM</option>
                    <option value="Predicitive">5:00Pm</option>
                    <option value="Corrective">6:00pm</option>
                    </select>
                </p>
                
                    

                <br>
                    
            </p>                    
            <button type="submit" name="enviar_formulario" id="enviar"><p>Send</p></button>
            </form>
        
        </div>
    </body>
</html>