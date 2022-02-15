<?php
/* See LICENSE file for copyright and license details.*/

$_POST["table"] = "categoria";
include "utils/function.php";
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

    <!-- Bootstrap CSS 5.1.3 CDN -->
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
        link.href = "./lib/bootstrap-5.1.3.css";

        document.head.appendChild(link);
      }
    </script>
    <link href="public/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- NavBar -->
    <?php include "navbar.php"; ?>

    <!--Content-->
    <div class="content container bg-white" style="height: 100vh">
      <div class="text-center">
        <h1>Categorias</h1>
        <p>Todas las categorias.</p>
      </div>

      <div class="container border border-2 rounded h-75 overflow-auto">
      <?php
        if (isset($_GET["msg"])) {
          echo "<span class='text-muted'>".$_GET['msg']."</span>";
        }
        ?>

        <!--Fill this with a table -->
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Categoria</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <?php getAllData($_POST["table"]); ?>
          </tbody>
        </table>
      </div>

      <form class="py-2">
        <label for="search" class="form-label">Buscar:</label>
        <input
          class="form-control"
          list="datalistOptions"
          id="search"
          placeholder="Iniciar busqueda..."
        />
        <datalist id="datalistOptions">
          <!--Fill this with the database -->
          <!--<option value="San Francisco"></option>-->
        </datalist>

        <input
          class="mt-2"
          type="submit"
          name="Busqueda"
          value="Buscar categoria"
        />
      </form>
    </div>

    <!--Add Categoria-->
    <div class="container my-5 py-5 border" id="agregar">
      <div class="text-center">
        <h1>Agregar categoria.</h1>
      </div>

      <form class="py-2" method="POST" action="utils/create.php">
        <input type="hidden" name="table" id="table" value="categoria" />
        <div class="input-group mb-3">
          <input
            type="text"
            class="form-control"
            name="nombre"
            id="input-nombre"
            placeholder="Nombre"
          />
        </div>

        <input
          class="mt-2 btn btn-outline-success"
          type="submit"
          name="submit"
          value="submit"
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
