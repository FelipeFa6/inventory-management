<?php
/* See LICENSE file for copyright and license details.
 *
 * This file is originally intended to be called only
 * on the functions.php file.
 *
 * This is done to only import 1 file (functions.php).
 *
 * Dependencies:
 * ---
 * Because this PHP code uses MySQL connections,
 * it is dependant on the following PHP extensions:
 *  extension=pdo_mysql
 *  extension=mysqli
 *
 */

$conf = include_once $_SERVER["DOCUMENT_ROOT"] . "/utils/config.php";

$db_host = $conf["db"]["host"];
$db_username = $conf["db"]["username"];
$db_password = $conf["db"]["password"];
$db_name = $conf["db"]["name"];

try {
  $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
  //echo "Connection Successful!"; //Used for debugging

  return $conn;
} catch (Exception $E) {
  echo "Failed to connect! <br>";
  echo $E->getMessage();
  return false;
}
