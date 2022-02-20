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

// Read Data
function getAllData($table)
{
  /*
   * The table parameter is passed through
   * POST Method.
   */

  if (!isset($table)) {
    echo "ERROR:Table not passed on POST method.<br>";
    echo "Check utils/function.php";
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

  require_once $_SERVER["DOCUMENT_ROOT"] . "/utils/print.php"; //Create connection
  printTable($result, $table);
  mysqli_close($conn);
}

// Create Data
function createObject($table, $dataArray)
{
  $conn = require_once $_SERVER["DOCUMENT_ROOT"] . "/utils/connection.php"; //Create connection
  switch ($table) {
    case "producto":
      $query = "INSERT INTO $table (nombre, precio, stock, categoria) VALUES (?, ?, ?, ?);";
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
      $categoria = $dataArray["producto"]["categoria"];
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
  mysqli_stmt_close($stmt);
}

function deleteObject($table, $idObject)
{
  $query = "DELETE FROM $table WHERE id = $idObject";
  $conn = require_once $_SERVER["DOCUMENT_ROOT"] . "/utils/connection.php"; //Create connection

  try {
    mysqli_query($conn, $query);
    mysqli_close($conn);
  } catch (Exception $E) {
    echo "Failed to execute delete query<br>";
    echo "utils/function.php deleteObject()<br>";
    echo "ERROR::";
    echo $E->getMessage();
    die();
  }
}

?>
