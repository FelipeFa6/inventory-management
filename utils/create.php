<?php
/* See LICENSE file for copyright and license details.
 *
 * This scripts is suposed to be used to create all objects.
 * This is achived by calling the functions.php file.
 *
 * The data sent from a form is arranged to an array called
 * $dataArray. This variable is later used in a general purpose
 * function like 'createObject()';
 *
 * example:
 * createObject($table, $dataArray)'
 *
 * */

if (!isset($_POST["submit"])) {
  echo "Submit not set.";
  die();
}

if (!isset($_POST["table"])) {
  echo "Table variable is not set.";
  die();
}

$table = $_POST["table"];

// Data arrangemente
switch ($table) {
  case "producto":
    $dataArray = [
      "nombre" => $_POST["nombre"],
      "precio" => $_POST["precio"],
      "stock" => $_POST["stock"],
      "categoria" => $_POST["categoria"],
    ];
    break;

  case "cuenta":
    $dataArray = [
      "username" => $_POST["username"],
      "email" => $_POST["email"],
      "telefono" => $_POST["telefono"],
      "password" => $_POST["password"], //Needs encryption
    ];
    break;

  default:
    echo "Table variable not recognized in: <br>";
    echo "utils/create.php";
    break;
}

require_once $_SERVER["DOCUMENT_ROOT"] . "/utils/function.php";
createObject($table, $dataArray);

header("Location: /$table.php?descripcion=Item+created");
?>
