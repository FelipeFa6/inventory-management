<?php
/* See LICENSE file for copyright and license details.*/
?>

<style type="text/css" media="screen">
  .navbar {
    position: fixed;
    z-index: 2;
    width: 100%;
  }

  @media only screen and (max-width: 1024px) {
    #search-bar {
      max-width: 200px;
    }

    .right {
      margin-top: 10px;
      flex-direction: column;
    }
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="home.php">Inventario</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php"
            >Home</a
          >
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            id="navbarDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Utilidades
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li class="">
              <a class="dropdown-item" href="historial.php">Historial</a>
            </li>
            <li><a class="dropdown-item" href="producto.php">Productos</a></li>
          </ul>
        </li>
      </ul>
      <div class="d-flex right">
        <form class="d-flex align-items-centered" method="get">
          <input
            id="search-bar"
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
            name="search"
          />
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <div class="navbar-nav">
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <i class="fa-solid fa-user"></i>
              <?php echo $_SESSION['username']; ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Opciones</a></li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item text-danger" href="utils/logout.php"
                  >Cerrar sesion
                  <i class="fa-solid fa-arrow-right-from-bracket"></i
                ></a>
              </li>
            </ul>
          </li>
        </div>
      </div>
    </div>
  </div>
</nav>
