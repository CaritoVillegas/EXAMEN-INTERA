<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style_index.css">
    <title>Mascotas</title>
</head>
<body>
    <section>
            <form action="controllers/mascotasController.php" method="POST" id="form-mascota" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="POST">
                <label>NOMBRE:</label>
                <input type="text" name="nombre"/>
                <br>
                <label for="edad">EDAD:</label>
                <input type="text" name="edad"></input>
                <br>
                <label for="descripcion">RAZA:</label>
                <input type="text" name="raza"></input>
                <br>
                <label for="img_url">FOTO:</label>
                <input  type="file" name="photo">
                <br>
                <input type="submit" value="Agregar">
            </form>

    </section>

    <section>
        <button class="mostrar" id="hideTable_btn"> MOSTRAR </button>
        <br>
        <div class="hide" id="hideTable">
            <table class="mascota" id="mascotas">
                <tr>
                    <th>Nombre</th>
                    <th>Raza</th>
                    <th>Edad</th>
                    <th>Foto</th>
                    <th>Acción</th>
                </tr>

            </table>
        </div>
    </section>
    <script src="assets/js/appindex.js"></script>
</body>
</html>