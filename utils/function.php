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
   * The table parameter is passed through
   * POST Method.
   */

  if (!isset($table)) {
    echo "Table not passed on POST method.";
    die();
  }

  $conn = require_once $_SERVER["DOCUMENT_ROOT"] . "/utils/connection.php"; //Create connection
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
        echo "Check under utils/function.php the 'printTable()' function";
        die();
        break;
    }
  }
}

function createObject($table, $dataArray)
{
  /*
   * $table parameter is passed through POST Method.
   * $dataArray is passed through the form.
   * */

  if (!isset($table)) {
    echo "Table not passed on POST method.";
    die();
  }

  if (!isset($dataArray)) {
    echo "Data not passed on form.";
    die();
  }

  $conn = require_once $_SERVER["DOCUMENT_ROOT"] . "/utils/connection.php"; //Create connection
  switch ($table) {
    case "producto":
      $query = "INSERT INTO $table (nombre, precio, stock, fk_categoria) VALUES (?, ?, ?, ?);";
      $dataTypes = "sdii";
      $stmt = mysqli_prepare($conn, $query);
      mysqli_stmt_bind_param(
        $stmt,
        $dataTypes,
        $nombre,
        $precio,
        $stock,
        $fk_categoria
      );
      $nombre = $dataArray["producto"]["nombre"];
      $precio = $dataArray["producto"]["precio"];
      $stock = $dataArray["producto"]["stock"];
      $fk_categoria = $dataArray["producto"]["fk_categoria"];
      break;

    case "categoria":
      $query = "INSERT INTO $table (nombre) VALUES (?);";
      $dataTypes = "s";
      $stmt = mysqli_prepare($conn, $query);
      mysqli_stmt_bind_param($stmt, $dataTypes, $nombre);
      $nombre = $dataArray["categoria"]["nombre"];
      break;

    case "historial":
      $query = "INSERT INTO $table (descripcion, fecha, fk_cuenta, fk_producto) VALUES (?, ?, ?, ?);";
      $dataTypes = "ssii";
      $stmt = mysqli_prepare($conn, $query);
      mysqli_stmt_bind_param(
        $stmt,
        $dataTypes,
        $descripcion,
        $fecha,
        $fk_cuenta,
        $fk_producto
      );
      $descripcion = $dataArray["historial"]["descripcion"];
      $fecha = $dataArray["historial"]["fecha"];
      $fk_cuenta = $dataArray["historial"]["fk_cuenta"];
      $fk_producto = $dataArray["historial"]["fk_producto"];
      break;

    case "cuenta":
      $query = "INSERT INTO $table (username, email, telefono, password) VALUES (?, ?, ?, ?);";
      $dataTypes = "ssss";
      $stmt = mysqli_prepare($conn, $query);
      mysqli_stmt_bind_param(
        $stmt,
        $dataTypes,
        $username,
        $email,
        $telefono,
        $password
      );
      $username = $dataArray["cuenta"]["username"];
      $email = $dataArray["cuenta"]["email"];
      $telefono = $dataArray["cuenta"]["telefono"];
      $password = $dataArray["cuenta"]["password"];
      break;

    default:
      echo "Switch option not recognized in the 'createObject()' function.<br>";
      echo "Check under utils/function.php the 'createObject()' function.";
      die();
      break;
  }

  mysqli_stmt_execute($stmt);
  printf("%d row inserted.\n", mysqli_stmt_affected_rows($stmt));
  mysqli_stmt_close($stmt);
}
?>
