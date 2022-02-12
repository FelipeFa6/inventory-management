<?php
/* See LICENSE file for copyright and license details.
 * 
 * ToDo:
 * - Verify data (If possible, use php on the same file).
 * - Make use of functions.php file to login.
 * - Start session and redirect to index. 
 *
 */
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <title>Inventario</title>

    <!--style-->
    <link rel="stylesheet" href="public/lib/css/bootstrap-5.1.3.css" />
    <link rel="stylesheet" href="public/style.css" />

    <style type="text/css" media="screen">
      /*Responsivo*/
      body {
        background-color: #181818;
      }

      #login-container {
        max-width: 500px;
      }

      .glass {
        /* From https://css.glass */
        background: rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        box-shadow: 0 5px 30px rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
      }

      @media only screen and (max-width: 1024px) {
        #login-container {
          width: 100%;
        }
      }
    </style>

    <!--Scripts-->
    <script src="public/lib/js/bootstrap.bundle.js"></script>
    <script src="public/lib/js/jquery-3.6.0.js"></script>
  </head>

  <body style="background-image: url(public/imgs/bg.jpg);">
    <div class="container" style="height: 100vh">
      <div class="row h-100 justify-content-center align-items-center">
        <div id="login-container" class="glass p-5 rounded-1">
          <h1 class="text-center">Login</h1>
          <form method="get">
            <div class="mb-3">
              <label for="InputEmail" class="form-label">Email address</label>
              <input
                type="email"
                class="form-control rounded-pill border-secondary"
                id="inputEmail"
                aria-describedby="emailHelp"
              />
              <div id="emailHelp" class="form-text">
                We'll never share your email with anyone else.
              </div>
            </div>
            <div class="mb-3">
              <label for="inputPassword" class="form-label">Password</label>
              <input
                type="password"
                class="form-control rounded-pill border-secondary"
                id="inputPassword"
              />
            </div>
            <div class="d-grid gap-3">
              <button type="submit" class="btn btn-dark rounded">Submit</button>
              <a href="index.php" class="g-2">Volver</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
