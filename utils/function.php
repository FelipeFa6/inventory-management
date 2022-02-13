<?php
/* See LICENSE file for copyright and license details.
 *
 * Dependencies:
 * ---
 * - config.php (to access the db credentials).
 * - connection.php (to get the connection).
 *
 * Connections are made while executing the functions,
 * not before.
 *
 */

function getAllData($table)
{
  /*
   * The table parameter is supposed to be used
   * as a 'switch' and it is passed through
   * POST variables on the URL.
   *
   * USAGE examples:
   *  productos.php?table=producto
   *  categorias.php?table=categoria
   *  etc.php?table=etc
   *
   */

  if (!isset($table)) {
    echo "Item not passed on GET method.";
    die();
  }

  //I dont like this use of the config file
  $conf = require_once "utils/config.php";
  require_once "utils/connection.php";

  $conn = connect($conf); // Create connection
  if ($conn === false) {
    echo "Connection failed";
    mysqli_close($conn);
    die();
  }

  $query = "SELECT * FROM $table";
  $result = mysqli_query($conn, $query);

  printTable($result, $table);

  mysqli_close($conn);
}

function printTable($result, $table)
{
  while ($array = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    switch ($table) {
      case "producto":
        echo "<tr>";
        echo "<th scope='row'>" . $array["id"] . "</th>";
        echo "<td>" . $array["nombre"] . "</td>";
        echo "<td>" . $array["precio"] . "</td>";
        echo "<td>" . $array["stock"] . "</td>";
        echo "<td>" . $array["fk_categoria"] . "</td>";
        echo "</tr>";
        break;

      case "categoria":
        echo "<tr>";
        echo "<th scope='row'>" . $array["id"] . "</th>";
        echo "<td>" . $array["nombre"] . "</td>";
        echo "<td>";
        echo "<button type='button' class='btn btn-sm btn-danger'>Borrar </button>";
        echo "</td>";
        echo "</tr>";
        break;

      case "historial":
        echo "<tr>";
        echo "<th scope='row'>" . $array["id"] . "</th>";
        echo "<td>" . $array["descripcion"] . "</td>";
        echo "<td>" . $array["fecha"] . "</td>";
        echo "<td>" . $array["fk_cuenta"] . "</td>";
        echo "<td>" . $array["fk_producto"] . "</td>";
        echo "</tr>";
        break;

      default:
        echo "Switch option not recognized in the 'printTable()' function.<br>";
        echo "Check under utils/function.php the 'printTable() function'";
        break;
    }
  }
}
?>
