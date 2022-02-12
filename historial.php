<?php
/* See LICENSE file for copyright and license details.
* 
* ToDo:
* - Load DB content.
* - Load session arguments [id, username].
*
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" type="image/x-icon" href="public/favicon.ico" />
    <title>Inventario</title>

    <!--Font Awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />

    <!--style-->
    <link rel="stylesheet" href="public/lib/css/bootstrap-5.1.3.css" />
    <link rel="stylesheet" href="public/style.css" />

    <style type="text/css" media="screen">
      /*Custom Style*/
    </style>

    <!--Scripts-->
    <script src="public/lib/js/bootstrap.bundle.js"></script>
    <script src="public/lib/js/jquery-3.6.0.js"></script>
  </head>

  <body>
    <!-- NavBar -->
    <?php include "./includes/navbar.php"; ?>

    <!--Content-->
    <div class="content container bg-white" style="height: 100vh">
      <div class="text-center">
        <h1>Categorias</h1>
        <p>Todas las categorias.</p>
      </div>

      <div class="container border border-2 rounded h-75 overflow-auto">
        <!--Fill this with a table -->
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Fecha</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Producto</th>
              <th scope="col">Autor</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>2022-02-12</td>
              <td>Update: se vendieron X productos</td>
              <td>Limpiador</td>
              <td>Simon</td>
            </tr>
          </tbody>
        </table>
      </div>

      <form class="py-2">
        <label for="search" class="form-label">Buscar:</label>
        <input
          type="text"
          class="form-control"
          id="search"
          placeholder="Iniciar busqueda..."
        />

        <input
          class="mt-2"
          type="submit"
          name="Busqueda"
          value="Buscar"
        />
      </form>
    </div>
  </body>
</html>
