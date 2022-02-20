<?php
/* See LICENSE file for copyright and license details.*/

session_start();

// Destroy session if exists
if (isset($_SESSION["id"]) && isset($_SESSION["username"])) {
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
        link.href = "lib/css/bootstrap-5.1.3.css";

        document.head.appendChild(link);
      }
    </script>
    <!-- Custom Style -->
    <link rel="stylesheet" href="public/style.css" />

    <!-- jQuery CDN -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    <!-- jQuery local fallback -->
    <script>
      window.jQuery ||
        document.write('<script src="lib/js/jquery-3.6.0.js"><\/script>');
    </script>

    <!-- Bootstrap JS Bundle CDN -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap JS Bundle local fallback -->
    <script>
      if (typeof $.fn.modal === "undefined") {
        document.write('<script src="lib/js/bootstrap.bundle.js"><\/script>');
      }
    </script>
  </head>

  <body style="background-image: url(public/imgs/bg.jpg);">
    <div class="container" style="height: 100vh">
      <div class="row h-100 justify-content-center align-items-center">
        <div id="login-container" class="glass p-5 rounded-1">
          <h1 class="text-center">Login</h1>
          <form class="py-2" method="POST" action="utils/login.php">
            <span class="text-danger">
              <?php if (isset($_GET["login"])) {
                echo "Usuario o contraseña incorrectos.";
              } ?>
            </span>
            <div class="mb-3">
              <label for="InputEmail" class="form-label">Username</label>
              <input
                type="text"
                class="form-control rounded-pill border-secondary"
                id="username"
                name="username"
              />
            </div>
            <div class="mb-3">
              <label for="inputPassword" class="form-label">Password</label>
              <input
                type="password"
                class="form-control rounded-pill border-secondary"
                id="password"
                name="password"
              />
            </div>
            <div class="d-grid gap-3">
              <button type="submit" id="submit" name="submit" class="btn btn-dark rounded">Submit</button>
              <a href="index.php" class="g-2">Volver</a>
            </div>
          </form>
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
    <!-- jQuery local fallback -->
    <script>
      window.jQuery ||
        document.write('<script src="lib/jquery-3.6.0.js"><\/script>');
    </script>

    <!-- Bootstrap JS Bundle CDN -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap JS Bundle local fallback -->
    <script>
      if (typeof $.fn.modal === "undefined") {
        document.write('<script src="lib/js/bootstrap.bundle.js"><\/script>');
      }
    </script>
  </body>
</html>
