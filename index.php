<?php
/* See LICENSE file for copyright and license details.
 * 
 * ToDo:
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
      /*NavigationBar*/
      .navbar {
        position: fixed;
        z-index: 2;
        width: 100%;
      }


      /* Cards */
      .item {
        min-width: 200px;
        box-shadow: 5px 5px 30px 7px rgba(0, 0, 0, 0.25),
          -5px -5px 30px 7px rgba(0, 0, 0, 0.22);
        cursor: pointer;
        transition: 0.2s;
      }

      .item:hover {
        transform: scale(0.9, 0.9);
        box-shadow: 5px 5px 30px 15px rgba(0, 0, 0, 0.25),
          -5px -5px 30px 15px rgba(0, 0, 0, 0.22);
      }

      .item-ico {
        font-size: 3em;
      }
    </style>

    <!--Scripts-->
    <script src="public/lib/js/bootstrap.bundle.js"></script>
    <script src="public/lib/js/jquery-3.6.0.js"></script>
  </head>
  <body>
    <!-- NavBar -->
    <?php include "./includes/navbar.php"; ?>

    <!--Content-->
    <div class="content bg-white" style="height: 100vh">
      <div class="text-center">
        <h1>Menu</h1>
        <p>Seleccione alguna opcion</p>
      </div>

      <div class="d-flex align-items-center justify-content-center">
        <div class="container">
          <!--Row 1-->
          <div class="row align-items-center d-flex justify-content-evenly">
            <!--Column1-->
            <div class="col m-3">
              <div
                class="
                  item
                  rounded
                  p-4
                  border
                  bg-light
                  d-flex
                  align-items-center
                  justify-content-between
                "
              >
                <div class="ms-4">
                  <p class="h1">Historial</p>
                  <p class="text-muted">100</p>
                </div>
                <div class="display-2">
                  <i class="fa-solid fa-folder" style="color: #eed202"></i>
                </div>
              </div>
            </div>

            <!--Column2-->
            <div class="col m-3">
              <div
                class="
                  item
                  rounded
                  p-4
                  border
                  bg-light
                  d-flex
                  align-items-center
                  justify-content-between
                "
              >
                <div class="ms-4">
                  <p class="h1 text-center">Categorias</p>
                  <p class="text-muted">5</p>
                </div>
                <div class="display-2">
                  <i class="fa-solid fa-file"></i>
                </div>
              </div>
            </div>
          </div>
          <!--End of Row1-->

          <!--Row 2-->
          <div class="row align-items-center d-flex justify-content-evenly">
            <!--Column1-->

            <div class="col m-3">
              <div
                class="
                  item
                  rounded
                  p-4
                  border
                  bg-light
                  d-flex
                  align-items-center
                  justify-content-between
                "
              >
                <div class="ms-4">
                  <p class="h1">Productos</p>
                  <p class="text-muted">2000</p>
                </div>
                <div class="display-2">
                  <i class="fa-solid fa-cart-flatbed"></i>
                </div>
              </div>
            </div>
          </div>
          <!--End of Row2-->
        </div>
      </div>
    </div>
  </body>
</html>
