<?php
/* See LICENSE file for copyright and license details.
 *
 * file: index.php
 *
 */

session_start();

if (!(isset($_SESSION["id"]) && isset($_SESSION["username"]))) {
  include_once "utils/logout.php";
}
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
        link.href = "lib/bootstrap-5.1.3.css";

        document.head.appendChild(link);
      }
    </script>
    <link href="public/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- NavBar -->
    <?php include "navbar.php"; ?>

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
              <a href="producto.php" class="text-dark">
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
                    <p class="h3">Productos</p>
                    <p class="text-muted"></p>
                  </div>
                  <div class="display-2">
                    <i class="fa-solid fa-cart-flatbed"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!--End of Row1-->

          <!--Row 2-->
          <div class="row align-items-center d-flex justify-content-evenly">
            <!--Column1-->
            <div class="col m-3">
              <a href="historial.php" class="text-dark">
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
                    <p class="h3">Historial</p>
                    <p class="text-muted"></p>
                  </div>
                  <div class="display-2">
                    <i class="fa-solid fa-box-archive"></i>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!--End of Row2-->
        </div>
      </div>
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
