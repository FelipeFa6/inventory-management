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

    <!-- Bootstrap CSS CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- Bootstrap CSS local fallback -->
    <script>
      var test = document.createElement("div");
      test.className = "hidden d-none";

      document.head.appendChild(test);
      var cssLoaded = window.getComputedStyle(test).display === "none";
      document.head.removeChild(test);

      if (!cssLoaded) {
        var link = document.createElement("link");
        link.type = "text/css";
        link.rel = "stylesheet";
        link.href = "lib/bootstrap-5.1.3.css";

        document.head.appendChild(link);
      }
    </script>
    <!-- Custom Style -->
    <link rel="stylesheet" href="public/style.css" />
  </head>

  <body>
    <!-- NavBar -->
    <?php include "navbar.php"; ?>

    <!--Content-->
    <div class="content container bg-white" style="height: 100vh">
      <div class="text-center">
        <h1>Historial</h1>
        <p>Todos los cambios realizados.</p>
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

    <!-- Scripts -->
    <!-- jQuery CDN -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>

    <!-- Bootstrap JS Bundle CDN -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
