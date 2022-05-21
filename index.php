<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Css-->
    <link rel="stylesheet" href="css/style.css">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
        
    <title>Form PHP</title>
</head>

<body>
    
    <form action="correos.php" method="POST">
        <div class="form">
            <h1>Contact-Float Label</h1>
            <div class="grupo">
                <input type="text" name="nombre" id="" required><span class="barra"></span>
                <label>Nombre</label>
            </div>
            <div class="grupo">
                <input type="text" name="apellido" id="" required><span class="barra"></span>
                <label>Apellido</label>
            </div>
            <div class="grupo">
                <input type="email" name="email" id="" required><span class="barra"></span>
                <label>Email</label>
            </div>
            <div class="grupo">
                <input type="tel" name="telefono" id="" required><span class="barra"></span>
                <label>Teléfono</label>
            </div>
            <div class="grupo">
                <textarea name="mensaje" id=""  rows="3" required></textarea><span class="barra"></span>
                <label>Mensaje</label>
            </div>
            <button type="submit">Enviar</button>
        </div>
    </form>
    
    
</body>
</html>