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
    <title>Categorias</title>

    <!--Font Awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />

    <!--style-->
    <link rel="stylesheet" href="public/lib/css/bootstrap-5.1.3.css" />
    <link rel="stylesheet" href="public/style.css" />

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
              <th scope="col">Categoria</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Limpiador</td>
              <td>
                <button type="button" class="btn btn-sm btn-danger">
                  Borrar
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Ruedas</td>
              <td>
                <button type="button" class="btn btn-sm btn-danger">
                  Borrar
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Pintura</td>
              <td>
                <button type="button" class="btn btn-sm btn-danger">
                  Borrar
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Otro</td>
              <td>
                <button type="button" class="btn btn-sm btn-danger">
                  Borrar
                </button>
              </td>
            </tr>
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
    <div class="container my-5 py-5 border">
      <div class="text-center">
        <h1>Agregar categoria.</h1>
      </div>

      <form class="py-2">
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
          name="agregar"
          value="Listo"
        />
      </form>
    </div>


  </body>
</html>
