<?php
/* See LICENSE file for copyright and license details.
 *
 * This scripts is suposed to be used to DELETE all objects.
 * This is achived by calling the functions.php file.
 *
 *
 * The sent data is only the ID of the desired object to be
 * deleted.
 *
 * example:
 * deleteObject($table, $idObject)'
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
$idObject = $_POST["id"];

require_once $_SERVER["DOCUMENT_ROOT"] . "/utils/function.php";
deleteObject($table, $idObject);

header("Location: /$table.php?msg=$table+with+ID+$idObject+deleted");
?>
