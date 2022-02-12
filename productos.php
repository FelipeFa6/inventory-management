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
        <h1>Productos</h1>
        <p>Menu de productos ingresados.</p>
      </div>

      <div class="border border-2 rounded h-75 overflow-auto">
        <!--Fill this with a table -->
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Producto</th>
              <th scope="col">CLP</th>
              <th scope="col">Stock</th>
              <th scope="col">Categoria</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>WD-40</td>
              <td>$ 2.000</td>
              <td>3</td>
              <td>Lubricante</td>
            </tr>
          </tbody>
        </table>
      </div>

      <form class="py-2">
        <label for="search" class="form-label">Buscar:</label>
        <input
          class="form-control"
          list="searchList"
          id="search"
          placeholder="Iniciar busqueda..."
        />
        <datalist id="searchList">
          <!--Fill this with the database -->
          <!--<option value="San Francisco"></option>-->
        </datalist>

        <input
          class="mt-2"
          type="submit"
          name="Busqueda"
          value="Buscar producto"
        />
      </form>
    </div>


    <!--Add Products-->
    <div class="container my-5 py-5 border" id="agregar">
      <div class="text-center">
        <h1>Agregar producto.</h1>
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

        <label for="basic-url" class="form-label">Precio en CLP</label>
        <div class="input-group mb-3">
          <span class="input-group-text">$</span>
          <input
            type="number"
            class="form-control"
            aria-label="Precio (en CLP)"
          />
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text">N°</span>
          <input
            type="number"
            class="form-control"
            aria-label="Precio (en CLP)"
          />
          <span class="input-group-text">Categoria</span>
          <input
            class="form-control"
            list="categoryList"
            id="search"
            placeholder="Categorias"
          />
          <datalist id="categoryList">
            <!--Fill this with the database -->
          </datalist>
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
